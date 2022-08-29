<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    public function about() {
        return view('pages.about');
    }

    public function services() {
        $produits = Product::orderBy('product_name', 'desc')->get();
        return view('pages.services')->with('produits', $produits);
    }

    public function show($id) {
        $produit = Product::find($id);
            return view('pages.show')->with('produit', $produit);
    }
}

