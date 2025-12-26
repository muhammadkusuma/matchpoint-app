<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        // Data Dummy untuk simulasi tampilan (Nanti diganti dengan Field::all())
        $fields = [
            (object) [
                'id' => 1,
                'name' => 'Futsal A (Vinyl)',
                'category' => 'Futsal',
                'price' => 120000,
                'status' => 'available',
                'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=2093&auto=format&fit=crop'
            ],
            (object) [
                'id' => 2,
                'name' => 'Futsal B (Rumput Sintetis)',
                'category' => 'Futsal',
                'price' => 100000,
                'status' => 'maintenance',
                'image' => 'https://images.unsplash.com/photo-1529900748604-07564a03e7a6?q=80&w=2070&auto=format&fit=crop'
            ],
            (object) [
                'id' => 3,
                'name' => 'Court 1 (Badminton)',
                'category' => 'Badminton',
                'price' => 40000,
                'status' => 'available',
                'image' => 'https://images.unsplash.com/photo-1626224583764-84786c71971e?q=80&w=2070&auto=format&fit=crop'
            ],
        ];

        return view('fields.index', compact('fields'));
    }
}