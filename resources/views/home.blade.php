@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    

                    <!-- <p>Hi <strong>{{ auth()->user()->name }}</strong>, Anda Login Sebagai </p>
                    @can('isKasi')
                        <span class="btn btn-success">Kasi Aptel dan Persandian</span>
                    @elsecan('isKabid')
                    <span class="btn btn-success">Kabid Informatika dan Statistik</span>
                    @elsecan('isKepala')
                    <span class="btn btn-success">Kepala Dinas</span> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
