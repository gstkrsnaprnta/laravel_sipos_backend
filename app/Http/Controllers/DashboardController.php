<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduk = Product::count();
        $totalMinuman = Product::where('category', 'Drink')->count();
        $totalMakanan = Product::where('category', 'Food')->count();
        $totalSnack = Product::where('category', 'Snack')->count();

        return view('pages.dashboard.dashboard', compact('totalProduk', 'totalMinuman', 'totalMakanan', 'totalSnack'));
    }
}
