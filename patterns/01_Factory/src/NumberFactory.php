<?php
namespace DesignPatterns\Factory;

class NumberFactory
{
    /**
     * @param int $intValue
     * @return Number
     */
    public function getNumberObjectForIntValue($intValue)
    {
        return $intValue % 2 === 0 ? new EvenNumber($intValue) : new OddNumber($intValue);
    }
}
