<?php
declare(strict_types=1);

namespace processors;

use interfaces\PostLabelInterface;
use validators\PostLabelValidator;
use exceptions\ValidationException;

class PostLabelProcessor
{
    /**
     * @throws ValidationException
     */
    public function getLabelData(PostLabelInterface $labelObject): array
    {
        $postLabel = $labelObject->getPostLabelModel();

        $validator = new PostLabelValidator();
        if (false === $validator->validate($postLabel)) {
            throw new ValidationException(implode('; ', $validator->getValidationErrors()));
        }

        return $postLabel->getDataAsArray();
    }
}
