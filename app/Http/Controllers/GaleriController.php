<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galleries = [
            [
                'title' => 'Pantai Melawai Balikpapan',
                'image' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600',
                'category' => 'Pantai'
            ],
            [
                'title' => 'Gunung Beratus Samarinda',
                'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600',
                'category' => 'Gunung'
            ],
            [
                'title' => 'Air Terjun Melawan Tenggarong',
                'image' => 'https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?w=600',
                'category' => 'Air Terjun'
            ],
            [
                'title' => 'Taman Budaya Kutai Kartanegara',
                'image' => 'https://images.unsplash.com/photo-1490750967868-88aa4486c946?w=600',
                'category' => 'Budaya'
            ],
            [
                'title' => 'Danau Semayang Muara Jawa',
                'image' => 'https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=600',
                'category' => 'Danau'
            ],
            [
                'title' => 'Hutan Konservasi Bukit Soeharto',
                'image' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=600',
                'category' => 'Hutan'
            ],
            [
                'title' => 'Sunset Pantai Melawai',
                'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600',
                'category' => 'Pantai'
            ],
            [
                'title' => 'Puncak Gunung Beratus',
                'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=600',
                'category' => 'Gunung'
            ],
            [
                'title' => 'Kolam Air Terjun Melawan',
                'image' => 'https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=600',
                'category' => 'Air Terjun'
            ],
            [
                'title' => 'Arsitektur Budaya Kalimantan',
                'image' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=600',
                'category' => 'Budaya'
            ],
            [
                'title' => 'Refleksi Danau Semayang',
                'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600',
                'category' => 'Danau'
            ],
            [
                'title' => 'Trekking Hutan Tropis Kalimantan',
                'image' => 'https://images.unsplash.com/photo-1511497584788-876760111969?w=600',
                'category' => 'Hutan'
            ]
        ];

        return view('pages.galeri', compact('galleries'));
    }
}
