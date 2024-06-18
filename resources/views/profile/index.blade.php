@extends('layouts.master')

@section('content')

<section class="px-2">
    <div class="row d-flex justify-content-center mt-5 px-3">
        <div class="border p-4 rounded" style="width: max-content">
            <h1 class="h3 mb-3 fw-normal text-center fw-bold">Profile User/Admin {{ $user->name }}</h1>

            <div class="d-flex justify-content-between">
                <div class="w-50">
                    <p class="fw-bold">Nama Lengkap</p>
                    <p class="fw-bold">Email</p>
                    <p class="fw-bold">Nomor Handphone</p>
                    {{-- <p class="fw-bold">Gender</p> --}}
                    {{-- <p class="fw-bold">Umur</p> --}}
                    {{-- <p class="fw-bold">Tanggal Lahir</p> --}}
                    {{-- <p class="fw-bold">Alamat</p> --}}
                </div>
                <div class="w-50">
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->no_hp }}</p>
                    {{-- <p>{{ $user->gender }}</p> --}}
                    {{-- <p>{{ $user->age }}</p> --}}
                    {{-- <p>{{ $user->birth }}</p> --}}
                    {{-- <p>{{ $user->address }}</p> --}}
                </div>
            </div>

            <div class="mt-3 text-center">
                <a href="{{ route('get_dashboard') }}" class="btn btn-lg btn-danger" style="font-size: 15px;">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>
</section>

@endsection
