<?php

namespace App\Http\Controllers;


use App\Models\Car;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::all();
        $cars = Car::all();
        return view('main.home', compact('categories', 'cars'));
    }
}
