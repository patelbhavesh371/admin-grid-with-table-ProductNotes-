<?php

namespace Vendor\ProductNotes\Api\Data;

interface ProductNotesResponseInterface
{
    /**
     * Get Product ID
     *
     * @return int
     */
    public function getProductId();

    /**
     * Set Product ID
     *
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId);

    /**
     * Get all notes
     *
     * @return \Vendor\ProductNotes\Api\Data\NoteInterface[]
     */
    public function getNotes();

    /**
     * Set notes
     *
     * @param \Vendor\ProductNotes\Api\Data\NoteInterface[] $notes
     * @return $this
     */
    public function setNotes(array $notes);
}
