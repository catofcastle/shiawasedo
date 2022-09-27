<?php

namespace interfaces;

use models\PostLabel;

interface PostLabelInterface
{
    public function getPostLabelModel(): PostLabel;
}
