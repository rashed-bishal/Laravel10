<?php

namespace App\Services;


class CustomService
{
    public function messageMethod()
    {
        return strtoupper('using custom facade, we have reached this mini notification');
    }
}