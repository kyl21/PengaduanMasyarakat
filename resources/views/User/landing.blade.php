@extends('layouts.user')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css')}}">
@endsection

@section('title', 'Pengaduan Masyarakat')

@section('content')

<section>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand mx-5 text-white" href="#">Pengaduan Masyarakat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">

            <span class="navbar-text ml-auto">
                <a class="btn text-white" href="{{ route('pekat.formRegister') }}">register</a>
                <a class="btn text-white" href="{{ route('pekat.login') }}">login</a>
            </span>
          </div>
        </div>
      </nav> --}}
      <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0 ml-auto">
                    <li class="nav-item"><a class="btn text-dark" href="{{ route('pekat.formRegister') }}">register</a></li>
                    <li class="nav-item"> <a class="btn text-dark" href="{{ route('pekat.login') }}">login</a></li>
                </ul>

            </div>
        </div>
    </nav>
<br>
<br>
<br>
    <header class="masthead ">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-start ">
                        <h1 class="display-2 lh-1 mb-3">Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
                        <p class="lead fw-normal text-muted mb-5">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>

                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">

                            <circle cx="50" cy="50" r="50"></circle></svg>

                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </header>
      <br>
      <br>
      <br>
      <br>
      <br>
  <body class="bg-white">
    <div class="row justify-content-center mb-5 bg-danger">

        <div class="col-lg-6 col-10 col my-5">
            <div class="card shadow">
                <h5 class="card-header">Tulis Laporan Anda Disini</h5>
                <div class="card-body">
                    <form action="{{ route('pekat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea name="isi_laporan" placeholder="Masukkan Isi Laporan" class="form-control"
                                rows="4">{{ old('isi_laporan') }}</textarea>
                        </div>
                        <div class="form-group my-3">
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-custom mt-2 bg-danger ">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-5 lh-1 mb-4">Apa sih Layanan Pengaduan Masyarakat?</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">Pengaduan masyarakat adalah penyampaian keluhan oleh masyarakat kepada pemerintah atas pelayanan yang tidak sesuai dengan standar pelayanan, atau pengabaian kewajiban dan/atau pelanggaran larangan.
                        Penanganan pengaduan masyarakat adalah proses kegiatan yang meliputi penerimaan, pencatatan, penelaahan, tindak lanjut penyaluran tindaklanjut, pengarsipan, pemantauan dan pelaporan.
                    </p>
                </div>
                <div class="col-sm-8 col-md-6">
                    {{-- <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                {{-- <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a> --}}
            </div>
        </div>
    </section>



  </body>

</section>
