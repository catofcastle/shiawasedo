<?php

namespace models;

use interfaces\PostLabelInterface;

class UserAddress implements PostLabelInterface
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string ISO 3166-1 alpha-2
     */
    public $countryCode;

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
    public $street;

    /**
     * @var string
     */
    public $house;

    /**
     * @var string
     */
    public $apartmentNumber;

    public function getPostLabelModel(): PostLabel
    {
        return new PostLabel(
            $this->name,
            $this->phoneNumber,
            $this->countryCode,
            $this->state,
            $this->city,
            $this->street . ' , ' . $this->house
        );
    }
}
