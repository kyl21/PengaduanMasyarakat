@extends('layouts.user')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css')}}">
@endsection

@section('title', 'Pengaduan Masyarakat')

@section('content')

<section>
    <!DOCTYPE html>
<html lang="en">


<body class="bg-danger">

    <div class="container TernakKu-card">

        <!-- Outer Row -->
        <div class="row justify-content-center my-5 mx-5">

            <div class="col-lg-6     col-md-9 my-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 my-5">
                        <div class="row">
                            <div class="col-lg-12   ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control form-control-user"
                                                placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control form-control-user"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Passwod</label>
                                            <input type="password" name="password" class="form-control form-control-user"
                                                placeholder="Password">
                                        </div>
                                        <br>
                                        <button href="{{route('pekat.index')}}" class="btn bg-danger text-white btn-user btn-block">
                                            Masuk
                                        </button>


                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



</body>

</html>

</section>
