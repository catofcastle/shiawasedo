<?php
declare(strict_types=1);

namespace validators;

use models\PostLabel;

class PostLabelValidator
{
    /**
     * @var array
     */
    private $validationErrors = [];

    public function getValidationErrors(): array
    {
        return $this->validationErrors;
    }

    public function validate(PostLabel $postLabel): bool
    {
        $this->validatePhoneNumber($postLabel->getPhoneNumber());
        $this->validateCountryCode($postLabel->getCountryCode());

        return !empty($this->validationErrors);
    }

    /**
     * An example of a possible phone number validation
     */
    private function validatePhoneNumber(string $phoneNumber): void
    {
        $result = preg_match_all('/\d+/', $phoneNumber, $m) && \strlen($phoneNumber) >= 10;
        if (false === $result) {
            $this->validationErrors[] = "Phone: $phoneNumber is not valid";
        }
    }

    private function validateCountryCode(string $countryCode): void
    {
        $result = true; // There must be some code confirming that the country code complies with the standard.
        if (false === $result) {
            $this->validationErrors[] = "Country code: $countryCode is not valid";
        }
    }
}
