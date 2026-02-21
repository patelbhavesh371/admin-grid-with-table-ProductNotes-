<?php
namespace Vendor\ProductNotes\Model;

use Magento\Framework\Model\AbstractModel;

class ProductNotes extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Vendor\ProductNotes\Model\ResourceModel\ProductNotes::class);
    }
}
