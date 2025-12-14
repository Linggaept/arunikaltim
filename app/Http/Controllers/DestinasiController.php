<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    private function getDestinations()
    {
        return [
            [
                'id' => 1,
                'title' => 'Pantai Melawai Balikpapan',
                'description' => 'Pantai terindah di Balikpapan dengan pasir putih dan pemandangan laut menakjubkan',
                'full_description' => 'Pantai Melawai adalah destinasi wisata pantai paling terkenal di Balikpapan dengan pemandangan matahari terbenam yang spektakuler. Pantai ini menawarkan pasir putih yang lembut, air laut yang jernih, dan berbagai fasilitas seperti area bermain anak, warung seafood, dan spot foto menarik. Cocok untuk liburan keluarga atau quality time bersama pasangan.',
                'image' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800',
                'category' => 'Pantai',
                'price' => 'Rp 15.000',
                'open_hours' => '06.00 - 18.00 WIB',
                'location' => 'Jl. Pantai Melawai, Balikpapan, Kalimantan Timur',
                'facilities' => ['Parkir Luas', 'Toilet', 'Mushola', 'Warung Makan', 'Gazebo'],
                'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d116.8046!3d-1.2704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df0f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sBalikpapan!5e0!3m2!1sen!2sid!4v1234567890'
            ],
            [
                'id' => 2,
                'title' => 'Gunung Beratus Samarinda',
                'description' => 'Petualangan mendaki dengan pemandangan hutan tropis Kalimantan yang spektakuler',
                'full_description' => 'Gunung Beratus adalah destinasi pendakian favorit di Samarinda dengan pemandangan yang luar biasa. Jalur pendakian yang tertata rapi, udara sejuk pegunungan, dan view sunrise dari puncak yang memukau membuat tempat ini menjadi favorit para pendaki. Tersedia beberapa jalur pendakian dari yang mudah hingga menantang dengan waktu tempuh 3-5 jam.',
                'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800',
                'category' => 'Gunung',
                'price' => 'Rp 25.000',
                'open_hours' => '24 Jam (Pendakian dianjurkan pagi hari)',
                'location' => 'Gunung Beratus, Samarinda, Kalimantan Timur',
                'facilities' => ['Pos Pendakian', 'Camping Ground', 'Toilet', 'Warung', 'Pemandu Lokal'],
                'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d117.1480!3d-0.5047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df0f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sSamarinda!5e0!3m2!1sen!2sid!4v1234567890'
            ],
            [
                'id' => 3,
                'title' => 'Air Terjun Melawan Tenggarong',
                'description' => 'Air terjun alam dengan kolam bening dan suasana hutan rimba Kalimantan',
                'full_description' => 'Air Terjun Melawan adalah hidden gem di Tenggarong dengan keindahan alam yang masih asri. Air terjun setinggi 40 meter ini memiliki kolam alami yang jernih dan aman untuk berenang. Pepohonan rindang di sekitar area menciptakan suasana yang sejuk dan menenangkan. Dinamakan Melawan karena lokasinya di tepi sungai Melawan yang mengalir deras.',
                'image' => 'https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?w=800',
                'category' => 'Air Terjun',
                'price' => 'Rp 10.000',
                'open_hours' => '07.00 - 17.00 WIB',
                'location' => 'Jl. Air Terjun, Tenggarong, Kalimantan Timur',
                'facilities' => ['Parkir', 'Toilet', 'Gazebo', 'Area Berenang', 'Kantin Lokal'],
                'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d116.6383!3d-0.4665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df0f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sTenggarong!5e0!3m2!1sen!2sid!4v1234567890'
            ],
            [
                'id' => 4,
                'title' => 'Taman Budaya Kutai Kartanegara',
                'description' => 'Museum dan taman budaya dengan koleksi peninggalan bersejarah Kesultanan Kutai',
                'full_description' => 'Taman Budaya Kutai Kartanegara adalah destinasi wisata budaya di Tenggarong yang mempromosikan warisan budaya kesultanan. Dengan luas area yang luas, taman ini menampilkan berbagai peninggalan bersejarah, kerajinan tradisional, dan pertunjukan budaya lokal. Museum di dalamnya menyimpan koleksi benda-benda berharga dari sejarah Kesultanan Kutai Kartanegara.',
                'image' => 'https://images.unsplash.com/photo-1490750967868-88aa4486c946?w=800',
                'category' => 'Budaya',
                'price' => 'Rp 20.000',
                'open_hours' => '08.00 - 17.00 WIB',
                'location' => 'Jl. Diponegoro, Tenggarong, Kalimantan Timur',
                'facilities' => ['Parkir', 'Toilet', 'Cafe', 'Toko Souvenir', 'Area Foto'],
                'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d116.6383!3d-0.4665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df0f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sTenggarong!5e0!3m2!1sen!2sid!4v1234567890'
            ],
            [
                'id' => 5,
                'title' => 'Danau Semayang Muara Jawa',
                'description' => 'Danau terbesar di Kalimantan Timur dengan biodiversity tinggi dan satwa liar',
                'full_description' => 'Danau Semayang adalah danau terbesar di Kalimantan Timur yang menawarkan pengalaman wisata alam yang luar biasa. Pengunjung dapat menikmati pemandangan danau sambil mengamati satwa liar seperti bekantan dan berbagai spesies burung. Kegiatan memancing, boating, dan camping tersedia dengan pemandu profesional lokal.',
                'image' => 'https://images.unsplash.com/photo-1501594907352-04cda38ebc29?w=800',
                'category' => 'Danau',
                'price' => 'Rp 25.000',
                'open_hours' => '06.00 - 18.00 WIB',
                'location' => 'Muara Jawa, Kabupaten Kutai Kartanegara, Kalimantan Timur',
                'facilities' => ['Parkir', 'Toilet', 'Penyewaan Perahu Motor', 'Area Memancing', 'Restoran'],
                'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d117.4930!3d-0.7530!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df0f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMuara%20Jawa!5e0!3m2!1sen!2sid!4v1234567890'
            ],
            [
                'id' => 6,
                'title' => 'Hutan Konservasi Bukit Soeharto Bontang',
                'description' => 'Hutan konservasi dengan trekking melihat orangutan dan biodiversity Kalimantan',
                'full_description' => 'Hutan Konservasi Bukit Soeharto adalah area konservasi yang menawarkan pengalaman trekking di tengah hutan tropis yang masih asri. Pengunjung dapat melihat berbagai jenis flora dan fauna endemik Kalimantan seperti orangutan, bekantan, dan burung-burung langka. Tersedia pemandu profesional bersertifikat untuk menemani perjalanan Anda dengan aman.',
                'image' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800',
                'category' => 'Hutan',
                'price' => 'Rp 50.000',
                'open_hours' => '07.00 - 16.00 WIB',
                'location' => 'Bukit Soeharto, Bontang, Kalimantan Timur',
                'facilities' => ['Parkir', 'Toilet', 'Pemandu Bersertifikat', 'Area Istirahat', 'Pusat Informasi'],
                'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d117.5051!3d0.1260!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df0f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sBontang!5e0!3m2!1sen!2sid!4v1234567890'
            ]
        ];
    }

    public function index()
    {
        $destinations = $this->getDestinations();
        return view('pages.destinasi', compact('destinations'));
    }

    public function show($id)
    {
        $destinations = $this->getDestinations();
        $destination = collect($destinations)->firstWhere('id', (int)$id);

        if (!$destination) {
            abort(404);
        }

        return view('pages.detail', compact('destination'));
    }
}
