@extends('layouts.app')

@section('title', 'Absen Pulang')

@section('main')

<div class="main-content">

    <section class="section">

        <div class="section-header">
            <h1>Absen Pulang</h1>
        </div>

        <div class="section-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row justify-content-center">

                <div class="col-md-6">

                    <div class="card">

                        <div class="card-header bg-white text-dark">
                            <h4 class="mb-0">
                                <i class="fas fa-sign-out-alt"></i>
                                Absensi Pulang
                            </h4>
                        </div>

                        <div class="card-body text-center">

                            <h4>{{ auth()->user()->name }}</h4>

                            <hr>

                            <div class="row">

                                <div class="col-6 text-left">

                                    <strong>Tanggal</strong>

                                    <p>{{ now()->translatedFormat('d F Y') }}</p>

                                </div>

                                <div class="col-6 text-left">

                                    <strong>Shift</strong>

                                    <p></p>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-6 text-left">

                                    <strong>Jam Masuk</strong>

                                    <p class="text-success">

                                        

                                    </p>

                                </div>

                                <div class="col-6 text-left">

                                    <strong>Keterlambatan</strong>

                                    <p>

                                       

                                        menit

                                    </p>

                                </div>

                            </div>

                            <hr>

                            <h1 id="clock"
                                style="font-size:55px;
                                font-weight:bold;
                                color:#dc3545;">

                                00:00:00

                            </h1>

                            <p>Jam Server</p>

                            <form action="{{ route('absen_pulang.store') }}" method="POST">

                                @csrf

                                <button class="btn btn-primary text-white btn-block">

                                    <i class="fas fa-sign-out-alt"></i>

                                    Absen Pulang

                                </button>

                            </form>

                            <a href="{{ route('absensi.index') }}"
                               class="btn btn-secondary btn-block mt-2">

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

    document.getElementById('clock').innerHTML =
        now.toLocaleTimeString('id-ID');

}

updateClock();

setInterval(updateClock,1000);

</script>

@endpush