<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = [
            [
                'name' => 'Ahmad Rizki',
                'position' => 'Project Manager',
                'description' => 'Bertanggung jawab dalam koordinasi dan manajemen project'
            ],
            [
                'name' => 'Siti Nurhaliza',
                'position' => 'Designer',
                'description' => 'Merancang tampilan dan user experience website'
            ],
            [
                'name' => 'Budi Santoso',
                'position' => 'Developer',
                'description' => 'Mengembangkan dan membangun sistem website'
            ],
            [
                'name' => 'Dewi Lestari',
                'position' => 'Content Writer',
                'description' => 'Menyusun konten dan informasi destinasi wisata'
            ]
        ];

        return view('pages.about', compact('teamMembers'));
    }
}