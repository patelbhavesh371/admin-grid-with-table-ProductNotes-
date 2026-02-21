<?php

namespace Vendor\ProductNotes\Model;

use Vendor\ProductNotes\Api\ProductNotesInterface;
use Vendor\ProductNotes\Api\Data\NoteInterfaceFactory;
use Vendor\ProductNotes\Api\Data\ProductNotesResponseInterfaceFactory;
use Vendor\ProductNotes\Model\ResourceModel\ProductNotes\CollectionFactory as NotesCollectionFactory;
use Psr\Log\LoggerInterface;

class ProductNotesService implements ProductNotesInterface
{
    private $notesCollectionFactory;
    private $noteFactory;
    private $responseFactory;
    private $logger;

    public function __construct(
        NotesCollectionFactory $notesCollectionFactory,
        NoteInterfaceFactory $noteFactory,
        ProductNotesResponseInterfaceFactory $responseFactory,
        LoggerInterface $logger
    ) {
        $this->notesCollectionFactory = $notesCollectionFactory;
        $this->noteFactory = $noteFactory;
        $this->responseFactory = $responseFactory;
        $this->logger = $logger;
    }

    /**
     * Get all notes for a given product
     *
     * @param int $productId
     * @return \Vendor\ProductNotes\Api\Data\ProductNotesResponseInterface
     */
    public function getNotes(int $productId)
    {
        // Create response object
        $response = $this->responseFactory->create();
        $response->setProductId($productId);

        // Fetch collection filtered by product_id
        $collection = $this->notesCollectionFactory->create()
            ->addFieldToFilter('product_id', $productId);

        $notes = [];

        foreach ($collection as $item) {
            /** @var \Vendor\ProductNotes\Api\Data\NoteInterface $note */
            $note = $this->noteFactory->create();

            // Map DB columns to NoteInterface fields
            // Replace 'title' and 'details' with your actual DB column names if different
            $noteTitle = $item->getData('note_title'); 
            $noteDetails = $item->getData('note_details'); 


            $note->setTitle($noteTitle ?? '');
            $note->setDetails($noteDetails ?? '');

            // Optional: log for debugging
            $this->logger->info('Product Note:', [
                'product_id' => $productId,
                'title' => $noteTitle,
                'details' => $noteDetails
            ]);

            $notes[] = $note;
        }

        $response->setNotes($notes);

        return $response;
    }
}
