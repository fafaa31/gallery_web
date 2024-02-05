<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function welcome()
    {
        $data = [
            'gallery' => Gallery::all(),
        ];
        return view('welcome', $data);
    }
}
