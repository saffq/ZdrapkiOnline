<?php

namespace App\Http\Controllers;

use App\Models\Tokens;
use Illuminate\Http\Request;

class TokensController extends Controller
{
    public function showTokens()
    {
        dd(Tokens::all());
    }

    public function addTokes()
    {

    }

    public function removeTokens()
    {

    }
}
