<?php
namespace GXL\CustomerQuestions\Api;

interface QuestionRepositoryInterface
{
    /**
     * Post a new question
     * @param string $name
     * @param string $email
     * @param string $question
     * @return void
     */
    public function postQuestion($name, $email, $question);
}