<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function FoodBerverage()
    {
        return view('products.FoodBerverage');
    }
    public function BeautyHealth()
    {
        return view('products.BeautyHealth');
    }

    public function HomeCare()
    {
        return view('products.HomeCare');
    }

    public function BabyKid(){
        return view('products.BabyKid');
    }
}
