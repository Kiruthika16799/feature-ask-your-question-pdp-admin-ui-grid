<?php
namespace GXL\CustomerQuestions\Model;

use GXL\CustomerQuestions\Api\QuestionRepositoryInterface;
use GXL\CustomerQuestions\Model\QuestionsFactory;
use Magento\Framework\Validator\EmailAddress;
use Magento\Framework\Controller\Result\JsonFactory;

class QuestionRepository implements QuestionRepositoryInterface
{

    protected $questionFactory;

    protected $emailValidator;

    protected $jsonFactory;

    public function __construct(
        QuestionsFactory $questionFactory,
        EmailAddress $emailValidator,
        JsonFactory $jsonFactory
    ) {
        $this->questionFactory = $questionFactory;
        $this->emailValidator = $emailValidator;
        $this->jsonFactory = $jsonFactory;
    }

    public function postQuestion($name, $email, $question)
    {
        try {
            // save customer question table
            $questionModel = $this->questionFactory->create();
            $questionModel->setName($name);
            $questionModel->setEmail($email);
            $questionModel->setQuestion($question);
            $questionModel->save();

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
