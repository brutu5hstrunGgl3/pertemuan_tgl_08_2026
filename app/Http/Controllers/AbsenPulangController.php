<?php

namespace App\Http\Controllers;
use App\Models\Presensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenPulangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presensis = Presensi::with('user')->paginate(10);
        return view('pages.absensi.index', compact('presensis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          
          $user = Auth::user();

          $absensi = Presensi::where('user_id', $user->id)
              ->whereDate('created_at', today())
              ->first();

            //   if (!$absensi) {
            //     return back()->with('error', 'Anda belum melakukan absensi datang hari ini.');
            //   }
            //   if (!$absensi->jam_pulang) {
            //       return back()->with('error', 'Anda sudah melakukan absensi pulang hari ini.');
            //   }

              return view('pages.absensi.pulang', compact('absensi'));
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request  $request)
    {
        $user = Auth::user();

        $absensi = Presensi::where('user_id', $user->id)
            ->whereDate('created_at', today())
            ->first();

        if (!$absensi) {
            return back()->with('error', 'Anda belum melakukan absensi datang hari ini.');
        }

        if ($absensi->jam_pulang) {
            return back()->with('error', 'Anda sudah melakukan absensi pulang hari ini.');
        }
        $absensi->update([
            'tanggal_pulang' => now()->format('Y-m-d'),
            'jam_pulang' => now()->format('H:i:s'),
            
        ]);
       

        return redirect()->route('absensi.index')->with('success', 'Absensi pulang berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
