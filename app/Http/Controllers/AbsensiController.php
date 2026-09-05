<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatangRequest;
use App\Models\Presensi;
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

        $waktu = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data['tanggal_masuk']);

        Presensi::create([
            'user_id' => auth()->id(),
            'tanggal_masuk' => $waktu->format('Y-m-d'),
            'jam_masuk' => $waktu->format('H:i:s'),
            'shift' => $data['shift'],
            'keterlambatan' => 0,
        ]);

        return redirect()->route('absensi.index')->with('success', 'Absensi datang berhasil disimpan.');
    }

    public function show(Presensi $presensi)
    {
        return view('pages.absensi.show', compact('presensi'));
    }

    public function edit(Presensi $presensi)
    {
        $users = User::all();
        return view('pages.absensi.edit', compact('presensi', 'users'));
    }

    public function update(Request $request, Presensi $presensi)
    {
        $validated = $request->validate([
            'waktu_datang' => 'nullable|date',
            'waktu_pulang' => 'nullable|date',
            'shift' => 'nullable|in:pagi,siang',
            'keterangan' => 'nullableF|string|max:500',
        ]);

        $presensi->update($validated);

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil diperbarui.');
    }

    public function destroy(Presensi $presensi)
    {
        $presensi->delete();

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus.');
    }
}
