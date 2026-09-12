@extends('layouts.app')

@section('title', 'User List')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('users.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">User List</div>
                </div>
            </div>

            <div class="section-body">
                <div class="invoice">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <a href="{{ route('users.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah User
                            </a>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('users.index') }}" method="GET" class="form-inline justify-content-end">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari user..." value="{{ $search ?? '' }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search"></i> Cari
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="section-title">List User</div>
                            <p class="section-lead"></p>
                            <div class="table-responsive">
                                <table class="table-striped table-hover table-md table">
                                    <thead>
                                        <tr>
                                            <th data-width="40">No</th>
                                            <th>Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">No. Telepon</th>
                                            <th>Alamat</th>
                                            <th class="text-center">Jabatan</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $index => $user)
                                            <tr>
                                                <td>{{ ($users->currentPage() - 1) * $users->perPage() + $index + 1 }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td class="text-center">{{ $user->email }}</td>
                                                <td class="text-center">
                                                    @if($user->jenis_kelamin == 'L')
                                                        Laki-laki
                                                    @elseif($user->jenis_kelamin == 'P')
                                                        Perempuan
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $user->no_telp ?? '-' }}</td>
                                                <td>{{ $user->alamat ?? '-' }}</td>
                                                <td class="text-center">{{ $user->jabatan ?? '-' }}</td>
                                                <td class="text-center">
                                                    @if($user->foto)
                                                        <img src="{{ Storage::url($user->foto) }}" alt="Foto" class="img-thumbnail" style="max-width: 100px;">
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">Tidak ada data user.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
