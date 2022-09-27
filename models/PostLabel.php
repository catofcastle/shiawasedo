<?php
declare(strict_types=1);

namespace models;

class PostLabel
{
    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address;

    public function __construct(
        string $contactName,
        string $phoneNumber,
        string $countryCode,
        string $state,
        string $city,
        string $address
    )
    {
        $this->contactName = $contactName;
        $this->phoneNumber = $phoneNumber;
        $this->countryCode = $countryCode;
        $this->state = $state;
        $this->city = $city;
        $this->address = $address;
    }

    public function getContactName(): string
    {
        return $this->contactName;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getDataAsArray(): array
    {
        $vars = get_class_vars(__CLASS__);

        $properties = [];
        foreach ($vars as $name => $value) {
            $properties[$name] = $this->$name;
        }

        return $properties;
    }
}
