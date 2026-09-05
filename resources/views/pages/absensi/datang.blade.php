@extends('layouts.app')

@section('title', 'Absen Datang')

@section('main')

<div class="main-content">

<section class="section">

<div class="section-header">
    <h1>Absen Datang</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('absensi.index') }}">List Absensi</a></div>
        <div class="breadcrumb-item">Absen Datang</div>
    </div>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>
@endif

<div class="section-body">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card">

<div class="card-header">
    <h4>Absensi Datang</h4>
</div>

<div class="card-body text-center">
    <h5>{{ auth()->user()->name }}</h5>
    <hr>

    <h1 id="clock" style="font-size:80px; font-weight:bold; color:#007bff;">
        00:00:00
    </h1>
    <p>Jam Sekarang</p>
    <hr>

    <form action="{{ route('absensi.store') }}" method="POST" class="text-left">
        @csrf
        <input type="hidden" name="tanggal_masuk" id="tanggal__masuk" value="{{ now() }}">

        <div class="form-group">
            <label>Pilih Shift</label>
            <div>
                <input type="radio" name="shift" value="pagi" required>
                <span>Shift Pagi</span>
            </div>
            <div>
                <input type="radio" name="shift" value="siang">
                <span>Shift Siang</span>
            </div>
        </div>

        <!-- <div class="form-group">
            <label for="keterangan">Keterangan (Opsional)</label>
            <textarea name="keterangan" id="keterangan" class="form-control" rows="3" placeholder="Masukkan keterangan jika ada..."></textarea>
        </div> -->

        <button type="submit" class="btn btn-success btn-block">
            Absen Datang
        </button>
    </form>

    <a href="{{ route('absensi.index') }}" class="btn btn-secondary btn-block mt-3">
        Kembali
    </a>
</div>

</div>

</div>

</div>

</div>

</section>

</div>

@endsection

@push('scripts')
<script>
function updateClock(){
    const now = new Date();
    document.getElementById('clock').innerHTML = now.toLocaleTimeString('id-ID');
    document.getElementById('waktu_datang').value = now.toISOString().slice(0, 19).replace('T', ' ');
}
setInterval(updateClock, 1000);
updateClock();
</script>
@endpush
