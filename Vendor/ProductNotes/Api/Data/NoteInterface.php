<?php

namespace Vendor\ProductNotes\Api\Data;

interface NoteInterface
{
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails();

    /**
     * Set details
     *
     * @param string $details
     * @return $this
     */
    public function setDetails($details);
}
