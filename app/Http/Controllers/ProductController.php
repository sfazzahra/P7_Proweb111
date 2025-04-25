<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Meja'],
            ['id' => 2, 'produk' => 'Kursi'],
            ['id' => 3, 'produk' => 'Bunga'],
        ];

        return view('list_product', ['data' => $data]);
    }
}