<?php
namespace GXL\CustomerQuestions\Api;

interface CustomerQuestionRepositoryInterface
{
    /**
     * Get list of customer questions
     * @return array
     */
    public function getList();
}
