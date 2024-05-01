<?php
namespace GXL\CustomerQuestions\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Data\Form\FormKey\Validator as FormKeyValidator;
use GXL\CustomerQuestions\Model\QuestionsFactory;
use Magento\Framework\Session\SessionManagerInterface;

class Add extends Action
{
    protected $formKeyValidator;
    protected $questionFactory;
    protected $_sessionManager;

    public function __construct(
        Context $context,
        FormKeyValidator $formKeyValidator,
        QuestionsFactory $questionFactory,
        SessionManagerInterface $sessionManager
    ) {
        $this->formKeyValidator = $formKeyValidator;
        $this->questionFactory = $questionFactory;
        $this->_sessionManager = $sessionManager;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->_sessionManager->setPreviousUrl($this->_redirect->getRefererUrl());
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setUrl($this->_sessionManager->getPreviousUrl());
        // Validate form key
        if (!$this->formKeyValidator->validate($this->getRequest())) {
            $this->messageManager->addSuccessMessage(__('Invalid Form Key. Please refresh the page.'));
            return $resultRedirect;
        }
        try {
            // Insert form data in customer questions table
            $postData = $this->getRequest()->getPostValue();
            if (!empty($postData)) {
                $postData = [
                    "name" => $postData['name'],
                    "email" => $postData['email'],
                    "questions" => $postData['questions']
                ];
                $customModel = $this->questionFactory->create();
                $customModel->setData($postData);
                $customModel->save();
                $this->messageManager->addSuccessMessage(__('You submitted your question.'));
            } else{
                $this->messageManager->addErrorMessage(__('We can\'t post your question right now.'));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('We can\'t post your question right now.'));
        }

        return $resultRedirect;
    }
}
