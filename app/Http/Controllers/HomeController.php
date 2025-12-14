<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredDestinations = [
            [
                'id' => 1,
                'title' => 'Pantai Melawai Balikpapan',
                'description' => 'Pantai terindah di Balikpapan dengan pasir putih dan pemandangan laut yang menakjubkan',
                'image' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800',
                'category' => 'Pantai'
            ],
            [
                'id' => 2,
                'title' => 'Gunung Beratus Samarinda',
                'description' => 'Petualangan mendaki gunung dengan pemandangan hutan tropis Kalimantan yang spektakuler',
                'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800',
                'category' => 'Gunung'
            ],
            [
                'id' => 3,
                'title' => 'Air Terjun Melawan Tenggarong',
                'description' => 'Air terjun alam dengan kolam bening dan suasana hutan rimba Kalimantan yang menenangkan',
                'image' => 'https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?w=800',
                'category' => 'Air Terjun'
            ]
        ];

        return view('pages.home', compact('featuredDestinations'));
    }
}
