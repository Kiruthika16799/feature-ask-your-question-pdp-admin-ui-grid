<?php
namespace GXL\CustomerQuestions\Model;

use GXL\CustomerQuestions\Api\CustomerQuestionRepositoryInterface;
use GXL\CustomerQuestions\Model\ResourceModel\Questions\CollectionFactory;

class CustomerQuestionRepository implements CustomerQuestionRepositoryInterface
{
    protected $collectionFactory;

    public function __construct(
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @inheritDoc
     */
    public function getList()
    {
        $collection = $this->collectionFactory->create();
        $collection->addFieldToSelect('*');
        return $collection->getData();
    }
}
