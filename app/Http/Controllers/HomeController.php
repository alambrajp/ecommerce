<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application landing page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Sample featured products data
        $featuredProducts = [
            [
                'id' => 1,
                'name' => 'Premium Headphones',
                'price' => 199.99,
                'image' => 'https://via.placeholder.com/300x200/007bff/ffffff?text=Headphones',
                'description' => 'High-quality wireless headphones with noise cancellation'
            ],
            [
                'id' => 2,
                'name' => 'Smart Watch',
                'price' => 299.99,
                'image' => 'https://via.placeholder.com/300x200/28a745/ffffff?text=Smart+Watch',
                'description' => 'Advanced fitness tracking and smartphone connectivity'
            ],
            [
                'id' => 3,
                'name' => 'Wireless Speaker',
                'price' => 89.99,
                'image' => 'https://via.placeholder.com/300x200/dc3545/ffffff?text=Speaker',
                'description' => 'Portable Bluetooth speaker with premium sound quality'
            ],
            [
                'id' => 4,
                'name' => 'Gaming Keyboard',
                'price' => 149.99,
                'image' => 'https://via.placeholder.com/300x200/6f42c1/ffffff?text=Keyboard',
                'description' => 'Mechanical gaming keyboard with RGB lighting'
            ]
        ];

        return view('landing', compact('featuredProducts'));
    }
}