@extends('layouts.navbar_landingpage')
@section('title', 'Landing Page')

@section('content')
    <style>
        .btn-smea {
            background-color: #00AEFF;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .btn-smea:hover {
            background-color: #4bb5fa;
            color: white;
        }

        .btn-outline-info-smea {
            background-color: transparent;
            color: white;
            border: 1.5px solid white;
            border-radius: 10px;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .btn-outline-info-smea:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
    </style>


    <div class="container-fluid p-0">

        {{-- Hero Section --}}
        <section class="position-relative" style="height: 450px;">
            <div
                style="
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        z-index: 1;">
            </div>
            <div
                style="
        position: absolute;
        inset: 0;
        background: url('image/exampl.jpg') center/cover no-repeat;
        z-index: 0;">
            </div>
            <div class="container h-100 d-flex flex-column justify-content-center align-items-start position-relative"
                style="z-index: 2;">
                <h1 class="display-4 fw-bold text-white">Sekolah Menengah</h1>
                <h1 class="display-4 fw-bold text-white">Kejuruan Negeri 1</h1>
                <h1 class="display-4 fw-bold text-white">Ciamis</h1>
                <h2 class="h3 text-white">Guru Rahayu, Siswa Waluya</h2>
                <div class="d-flex gap-2 mt-3">
                    <a href="#" class="btn btn-smea px-4 py-1">Eksplor SMEA</a>
                    <a href="#" class="btn btn-outline-info-smea px-4 py-1">Info Selengkapnya</a>
                </div>

            </div>
        </section>


        {{-- Profil Sekolah --}}
        <section class="py-5 bg-white text-center">
            <div class="container">
                <h2 class="mb-4">Kepala Sekolah</h2>
                <img src="#" alt="Foto Kepala Sekolah" class="rounded-circle mb-3" width="150" height="150">
                <h4 class="mb-2">Drs. Nama Kepala Sekolah</h4>
                <p class="lead">Menjadi SMK Unggul, Berkarakter, dan Inovatif</p>
                <a href="#" class="btn btn-primary">Lihat Profil</a>
            </div>
        </section>

        {{-- Video Profil Sekolah --}}
        <section class="py-5 bg-light text-center">
            <div class="container">
                <h2 class="mb-4">Video Profil Sekolah</h2>
                <div class="ratio ratio-16x9 w-100" style="max-width: 800px; margin: auto;">
                    <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="Video Profil" allowfullscreen
                        class="w-100 h-100 border-0"></iframe>
                </div>

            </div>
        </section>

        {{-- Galeri Ekstrakurikuler --}}
        <section class="py-5 bg-white">
            <div class="container">
                <h2 class="text-center mb-4">Ekstrakurikuler</h2>
                <div class="row row-cols-2 row-cols-md-4 g-3">
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="col">
                            <div class="card h-100">
                                <img src="#" alt="Ekskul {{ $i }}" class="card-img-top"
                                    style="height: 120px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <p class="card-text">Nama Ekskul {{ $i }}</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        {{-- Fitur Menu Ikon --}}
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Fitur Unggulan</h2>
                <div class="row justify-content-center">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-4 col-md-2 text-center">
                            <img src="#" alt="Fitur {{ $i }}" class="mb-2" width="60"
                                height="60">
                            <p>Fitur {{ $i }}</p>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        {{-- Partner / Logo Sponsor --}}
        <section class="py-4 bg-white">
            <div class="container text-center">
                <h2 class="mb-4">Kerja Sama Industri</h2>
                <div class="row justify-content-center g-3">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-4 col-md-2">
                            <img src="#" alt="Logo Partner {{ $i }}" class="img-fluid">
                        </div>
                    @endfor
                </div>
            </div>
        </section>

    </div>

@endsection
