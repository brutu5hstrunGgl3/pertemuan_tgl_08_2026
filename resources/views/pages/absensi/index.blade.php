@extends('layouts.app')

@section('title', 'List Absensi')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Absensi</h1>
    
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List Absensi</div>
                </div>
            </div>
 @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>
                @endif
                @hasanyrole('admmin | staaff')
                 <a href="{{ route('absensi.export') }}" class="btn btn-success">
                                <i class="fas fa-download"></i> Export excel
                            </a>
                @endhasanyrole
            <div class="section-body">
                <div class="invoice">
                    <div class="row mb-4">
                        <div class="col-md-6">
                           
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('absensi.index') }}" method="GET" class="form-inline justify-content-end">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari absensi..." value="{{ request('search') }}">
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
                            <div class="section-title">List Absensi</div>
                            <p class="section-lead"></p>
                            <div class="table-responsive">
                                <table class="table-striped table-hover table-md table">
                                    <thead>
                                        <tr>
                                            <th data-width="40">No</th>
                                            <th>Nama</th>
                                            <th class="text-center">Jam datang</th>
                                            <th class="text-center">Jam pulang</th>
                                            <th class="text-center">Shift</th>
                                            <th class="text-center">Keterlambatan</th>
                                           @hasanyrole('admin|staff') <th class="text-right">Aksi </th>@endhasanyrole
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($presensis as $index => $presensi)
                                            <tr>
                                                <td>{{ ($presensis->currentPage() - 1) * $presensis->perPage() + $index + 1 }}</td>
                                                <td>{{ $presensi->user->name ?? '-' }}</td>
                                            <td class="text-center">
                                                @if($presensi->tanggal_masuk && $presensi->jam_masuk)
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $presensi->tanggal_masuk . ' ' . $presensi->jam_masuk)->format('d/m/Y H:i') }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if($presensi->tanggal_pulang && $presensi->jam_pulang)
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $presensi->tanggal_pulang . ' ' . $presensi->jam_pulang)->format('d/m/Y H:i') }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="text-center">{{ ucfirst($presensi->shift) ?? '-' }}</td>
                                            <td class="text-center">{{ $presensi->keterlambatan ?? '-' }}Menit </td>
                                            @hasanyrole( 'admin|staff')
                                                <td class="text-right">
                                                    <a href="{{ route('absensi.edit', $presensi->id) }}" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('absensi.destroy', $presensi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data absensi ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                            @endhasanyrole
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data absensi.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    {{ $presensis->links() }}
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
    <!-- Page Specific JS File -->
@endpush
