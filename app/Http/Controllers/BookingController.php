<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function myBookings()
    {
        // Data Dummy (Nanti diganti: Booking::where('user_id', auth()->id())->get())
        $bookings = [
            (object) [
                'id' => 'BOOK-8812',
                'field_name' => 'Futsal A (Vinyl)',
                'category' => 'Futsal',
                'date' => '2023-10-28', // Akan main
                'time' => '19:00 - 20:00',
                'price' => 120000,
                'status' => 'pending', // Belum bayar
                'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?q=80&w=2093&auto=format&fit=crop'
            ],
            (object) [
                'id' => 'BOOK-8810',
                'field_name' => 'Court 1 (Badminton)',
                'category' => 'Badminton',
                'date' => '2023-10-25', // Sudah selesai
                'time' => '10:00 - 11:00',
                'price' => 40000,
                'status' => 'completed',
                'image' => 'https://images.unsplash.com/photo-1626224583764-84786c71971e?q=80&w=2070&auto=format&fit=crop'
            ],
            (object) [
                'id' => 'BOOK-8805',
                'field_name' => 'Futsal B (Rumput)',
                'category' => 'Futsal',
                'date' => '2023-10-20',
                'time' => '16:00 - 18:00',
                'price' => 200000,
                'status' => 'cancelled',
                'image' => 'https://images.unsplash.com/photo-1529900748604-07564a03e7a6?q=80&w=2070&auto=format&fit=crop'
            ],
        ];

        return view('bookings.my_bookings', compact('bookings'));
    }
}