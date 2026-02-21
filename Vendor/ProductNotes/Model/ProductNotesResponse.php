<?php

namespace Vendor\ProductNotes\Model;

use Magento\Framework\DataObject;
use Vendor\ProductNotes\Api\Data\ProductNotesResponseInterface;

class ProductNotesResponse extends DataObject implements ProductNotesResponseInterface
{
    public function getProductId()
    {
        return $this->getData('product_id');
    }

    public function setProductId($productId)
    {
        return $this->setData('product_id', $productId);
    }

    public function getNotes()
    {
        return $this->getData('notes');
    }

    public function setNotes(array $notes)
    {
        return $this->setData('notes', $notes);
    }
}
