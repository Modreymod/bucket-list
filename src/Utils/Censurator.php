<?php

namespace App\Utils;

class Censurator
{

    public function purify($censure): string
    {
//cherche les mots interdit dans le sujet que tu lui passes
        $wordsForbiddens = ['prout', 'debile', 'canard', 'extincteur'];
        return str_ireplace($wordsForbiddens, '***', $censure);

    }

}