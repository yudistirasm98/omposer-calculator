<?php

namespace programer\belajar;

class Calculator
{
    private array $val;
    public function __construct(...$val)
    {
        $this->val = $val;
    }


    public function input(): string

    {
        return implode("+", $this->val);
    }

    public function sum(): int
    {
        $result = 0;
        foreach ($this->val as $item) {
            $result += $item;
        }
        return $result;
    }
}
