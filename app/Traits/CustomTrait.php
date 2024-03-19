<?php
namespace App\Traits;

trait CustomTrait
{
    public function modText($string)
    {
        return strtoupper($string);
    }
}