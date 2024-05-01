<?php
namespace GXL\CustomerQuestions\Model\ResourceModel\Questions;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use GXL\CustomerQuestions\Model\Questions as Model;
use GXL\CustomerQuestions\Model\ResourceModel\Questions as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}