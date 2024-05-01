<?php
namespace GXL\CustomerQuestions\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Questions extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('gxl_customer_questions', 'id');
    }
}