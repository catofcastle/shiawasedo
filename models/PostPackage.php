<?php

namespace models;

use interfaces\PostLabelInterface;

class PostPackage implements PostLabelInterface
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string ISO 3166-1 alpha-2
     */
    public $countryName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $address;

    /**
     * @var array
     */
    public $packageItems;

    public function getPostLabelModel(): PostLabel
    {
        return new PostLabel(
            $this->contactName,
            $this->phoneNumber,
            $this->countryName,
            $this->state,
            $this->city,
            $this->address
        );
    }
}
