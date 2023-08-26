<?php

namespace Source\Models\Faq;

use Source\Core\Model;

/**
 *
 */
class Question extends Model
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct("faq_questions", ["id"], ["channel_id", "question", "response"]);
    }

    /**
     * @return bool
     */
    public function save(): bool
    {

    }
}