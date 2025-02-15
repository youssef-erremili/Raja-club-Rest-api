<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiKeyGenerator;

class DocController extends Controller
{
    use ApiKeyGenerator;


    public function index()
    {
        $apikey = $this->GeneratorApiKey(40);
        return view('docs.docs', compact('apikey'));
    }
}
