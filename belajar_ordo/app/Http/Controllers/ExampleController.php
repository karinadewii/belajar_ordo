<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // Method untuk menampilkan "Hello World" di route /hello
    public function hello()
    {
        return "Hello World";
    }

    // Method untuk menangani perkalian di route /perkalian/{angka}
    public function perkalian($angka)
    {
        return $angka * 2;
    }
}
