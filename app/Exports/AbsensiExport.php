<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Auth;
use App\Models\Presensi;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AbsensiExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection(): Collection 
    {
    
        $user = Auth::user();
          return Presensi::all();
        
    }
     public function headings( ): array
    {


        return [
            'Name',
            'Tanggal Masuk',
            'Tanggal Pulang',
            'Jam Masuk',
            'Jam Pulang',
            'Shift',
            'Keterlambatan',
        ];
    }

    
      public function map($presensi): array
    {
       
         return [
        $presensi->user->name,   // ambil dari relasi user
        $presensi->tanggal_masuk,
        $presensi->tanggal_pulang,
        $presensi->jam_masuk,
        $presensi->jam_pulang,
        $presensi->shift,
        $presensi->keterlambatan,
    ];
    }


}
