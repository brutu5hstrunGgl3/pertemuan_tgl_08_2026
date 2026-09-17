<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection(): Collection
    {
        return User::all();
    }

     public function headings( ): array
    {
        return [
            'Name',
            'Email',
            'Jenis Kelamin',
            'No. Telepon',
            'Alamat',
            'Jabatan',
        ];
    }

      public function map($user): array
    {
        return [
            $user->name,
            $user->email,
            $user->jenis_kelamin,
            $user->no_telp,
            $user->alamat,
            $user->jabatan,
        ];
    }
}
