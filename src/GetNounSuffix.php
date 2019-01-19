<?php

namespace Prodigeris\LithuanianNameAddresser;

/**
 * Class GetNounSuffix
 *
 * @package Prodigeris\LithuanianNameAddresser
 */
class GetNounSuffix
{
    const MALE_SUFFIX = 's';

    public static function find($noun)
    {
        $lastLetter = substr($noun, -1, 1);
        if ($lastLetter === self::MALE_SUFFIX) {
            // return last two letters
            return substr($noun, -2, 2);
        }

        return $lastLetter;
    }
}
