<?php

namespace Vendor\ProductNotes\Model;

use Magento\Framework\DataObject;
use Vendor\ProductNotes\Api\Data\NoteInterface;

class Note extends DataObject implements NoteInterface
{
    public function getTitle()
    {
        return $this->getData('title');
    }

    public function setTitle($title)
    {
        return $this->setData('title', $title);
    }

    public function getDetails()
    {
        return $this->getData('details');
    }

    public function setDetails($details)
    {
        return $this->setData('details', $details);
    }
}
