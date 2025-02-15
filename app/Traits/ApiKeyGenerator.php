<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ApiKeyGenerator
{
    public function GeneratorApiKey($int)
    {
        $apiKey = Str::random($int);
        return $apiKey;
    }
}
