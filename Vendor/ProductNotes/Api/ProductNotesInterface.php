<?php

namespace Vendor\ProductNotes\Api;

interface ProductNotesInterface
{
    /**
     * @param int $productId
     * @return \Vendor\ProductNotes\Api\Data\ProductNotesResponseInterface
     */
    public function getNotes(int $productId);
}
