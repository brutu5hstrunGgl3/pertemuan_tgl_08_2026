@extends('layouts.app')

@section('title', 'Invoice')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">User List</div>
                </div>
            </div>

            <div class="section-body">
                <div class="invoice">
                    
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="section-title">List User</div>
                                <p class="section-lead"></p>
                                <div class="table-responsive">
                                    <table class="table-striped table-hover table-md table">
                                        <tr>
                                            <th data-width="40">No</th>
                                            <th>Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Password</th>
                                            <th class="text-right">Aksi</th>
                                        </tr>
                                        
                                    </table>
                                </div>
                               
                   
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
