<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function show($id)
    {
        // Data Dummy (Simulasi data booking yang belum dibayar)
        // Nanti diganti dengan: Booking::findOrFail($id);
        $booking = (object) [
            'id' => $id,
            'field_name' => 'Futsal A (Vinyl)',
            'category' => 'Futsal',
            'booking_date' => Carbon::parse('2023-10-28'),
            'time' => '19:00 - 20:00',
            'total_price' => 120000,
            'status' => 'pending', // unpaid
            'deadline' => Carbon::now()->addHours(1), // Batas waktu bayar 1 jam lagi
        ];

        return view('payments.show', compact('booking'));
    }

    public function upload(Request $request, $id)
    {
        // Logika upload bukti transfer akan masuk disini nanti
        return redirect()->back()->with('success', 'Bukti transfer berhasil diupload! Menunggu verifikasi admin.');
    }
}