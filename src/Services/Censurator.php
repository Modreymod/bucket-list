<?php

namespace App\Services;

class Censurator
{
const WORDS_FORBIDDEN = ['prout', 'debile', 'canard', 'extincteur'];
    public function purify(string $text)
    {
//cherche les mots interdit dans le sujet que tu lui passes

        return str_ireplace(self::WORDS_FORBIDDEN, '***', $text);

    }

}