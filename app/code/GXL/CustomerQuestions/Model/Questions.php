<?php
namespace GXL\CustomerQuestions\Model;

use Magento\Framework\Model\AbstractModel;

class Questions extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('GXL\CustomerQuestions\Model\ResourceModel\Questions');
    }
}