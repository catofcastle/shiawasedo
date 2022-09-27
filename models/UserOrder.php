<?php

namespace models;

use interfaces\PostLabelInterface;

class UserOrder implements PostLabelInterface
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
    public $phone;

    /**
     * @var string ISO 3166-1 alpha-2
     */
    public $country;

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
    public $apartment;

    /**
     * @var array
     */
    public $orderItems;

    public function getPostLabelModel(): PostLabel
    {
        return new PostLabel(
            $this->contactName,
            $this->phone,
            $this->country,
            $this->state,
            $this->city,
            $this->street . ' , ' . $this->house ?? $this->apartment
        );
    }
}
