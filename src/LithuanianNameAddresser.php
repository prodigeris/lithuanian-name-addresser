<?php

namespace Prodigeris\LithuanianNameAddresser;

/**
 * Class LithuanianNameAddresser
 *
 * @package Prodigeris\LithuanianNameAddresser
 */
class LithuanianNameAddresser
{
    const SUFFIX_MAPPER = [
        self::SPECIAL_ORD => 'e',
        'a' => 'a',
        'as' => 'ai',
        'us' => 'au',
        'ys' => 'y',
        'is' => 'i',
    ];

    const SPECIAL_ORD = 151;

    private $name;

    private $result;

    public function __construct(string $name)
    {
        $this->name = $name;

        $this->convert();
    }

    private function suffixToAddress($suffix)
    {
        if(ord($suffix) == self::SPECIAL_ORD) {
            $suffix = self::SPECIAL_ORD;
        }

        return self::SUFFIX_MAPPER[$suffix];
    }

    private function convert()
    {
        $suffix = GetNounSuffix::find($this->name);
        $newSuffix = $this->suffixToAddress($suffix);

        $this->result = $this->replaceSuffix($suffix, $newSuffix);
    }

    private function replaceSuffix($suffix, $newSuffix)
    {
        return mb_substr($this->name, 0, mb_strlen($this->name) - mb_strlen($suffix)) . $newSuffix;
    }

    public function getResult()
    {
        return $this->result;
    }
}
