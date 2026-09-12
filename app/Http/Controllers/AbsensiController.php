<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatangRequest;
use App\Models\Presensi;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $presensis = Presensi::with('user')->paginate(10);
        return view('pages.absensi.index', compact('presensis'));
    }

    public function create()
    {
        return view('pages.absensi.datang');
    }

    public function store(DatangRequest $request)
    {
        
            

        $data = $request->validated();
        $user = Auth::user();

        $waktu = Carbon::now('Asia/Jakarta');
        
        $tanggalMasuk = $waktu->format('Y-m-d');
        $jamMasuk = $waktu->format('H:i:s');

        $cek = Presensi::where('user_id', $user->id)
            ->whereDate('tanggal_masuk', $tanggalMasuk)
            ->first();

        if ($cek) {
            return redirect()->route('absensi.index')->with('error', 'Anda sudah melakukan absensi datang pada hari ini.');
        }
        $shift = strtolower($data['shift']);

        if ($shift == 'pagi'){
           $jamShift = Carbon::createFromFormat(
            'Y-m-d H:i:s',
            $tanggalMasuk.' 08:00:00',
             'Asia/Jakarta'); 

        }elseif ($shift == 'siang'){

            $jamShift = Carbon::createFromFormat(
                'Y-m-d H:i:s',
                $tanggalMasuk.' 13:30:00',
                 'Asia/Jakarta');
        }else {
            return back()->with('error', 'Shift tidak valid.');
        }
        $terlambat  = 0;
        if ($waktu->greaterThan($jamShift)) {
            $terlambat = $waktu->diffInMinutes($jamShift);
            $keterangan = 'Terlambat '.$terlambat.' menit';
        }

        Presensi::create([
            'user_id' => auth()->id(),
            'tanggal_masuk' => $tanggalMasuk,
            'jam_masuk' => $jamMasuk,
            'shift' => $shift,
            'keterlambatan' => $terlambat,
        ]);

        return redirect()->route('absensi.index')->with('success', 'Absensi datang berhasil disimpan.');
    }

    public function show(Presensi $presensi)
    {
        return view('pages.absensi.show', compact('presensi'));
    }


    public function destroy(Presensi $presensi)
    {
        $presensi->delete();

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus.');
    }
}
