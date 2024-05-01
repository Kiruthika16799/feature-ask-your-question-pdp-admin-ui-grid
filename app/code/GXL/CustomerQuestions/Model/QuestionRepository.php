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
        $response = $this->jsonFactory->create();
        $responseData = [
            'message' => 'Invalid email address.',
            'status' => true,
        ];
        $response->setData($responseData);
        return $response;



         // Validate input
        if (empty($name) || empty($email) || empty($question)) {
            return $this->getErrorResponse('Name, email, and question are required.');
        }

        // Validate email address
        if (!$this->emailValidator->isValid($email)) {
            $responseData = [
                'message' => 'Invalid email address.',
                'status' => true,
            ];
            return $responseData;
        }

        try {
            // save customer question table
            $questionModel = $this->questionFactory->create();
            $questionModel->setName($name);
            $questionModel->setEmail($email);
            $questionModel->setQuestion($question);
            $questionModel->save();

            return $this->getSuccessResponse('Question saved successfully.');
        } catch (\Exception $e) {
            return $this->getErrorResponse('An error occurred while saving the question.');
        }
    }

    private function getErrorResponse($message)
    {
        $data = [];
        $data['message'] = $message;
        $data['status'] = true;
        return $data;
    }

    private function getSuccessResponse($message)
    {
        $data = [];
        $data['message'] = $message;
        $data['status'] = false;
        return $data;
    }
}
