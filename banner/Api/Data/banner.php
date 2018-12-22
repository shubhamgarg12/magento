<?php


namespace banner\Api\Data;

/**
 * @api
 */
interface Banner
{
    /**
     * @return int|null
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

   
    /**
     * Get category description
     *
     * @return string
     */
    public function getDescription();

    /**
     * Set category description
     *
     * @param string $description
     * @return $this
     */
    public function setName($description);

    /**
     * Get category image
     *
     * @return string
     */
    public function getImage();

    /**
     * Set category image
     *
     * @param string $image
     * @return $this
     */
    public function setImage($image);

   
}
