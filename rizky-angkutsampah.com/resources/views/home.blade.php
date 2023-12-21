<!-- File: resources/views/home.blade.php -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h2 class="text-center">Selamat datang di Angkutsampah.com!</h2>
        <br>
        <br>
        <br>
        @auth
        <p>Selamat datang, <b>{{ auth()->user()->name }}!</b></p>
        <br> 
        
        <div class="jumbotron-fluid">
        <h1 class="display-">Sistem Layanan Pengangkutan Sampah</h1>
        <p class="lead">Angkutsampah.com merupakan sebuah platform yang bergerak di bidang pengumpulan limbah daur ulang 
            di daerah Telkom University, seperti plastik, kertas, kardus, dsb..</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Daftar Sekarang</a>
        
        </div>


  </div>
</div>
        <br>
        <br>
        <br>
        <br>


        <style>
            .image-container {
                margin: 10px;
                overflow: hidden;
                border-radius: 15px;
                text-align: center;
                background-color: #f2f2f2;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek shadow tipis */
                min-height: 300px; /* Sesuaikan dengan nilai yang sesuai */
            }

            .image-container img {
                width: 300px;
                height: 200px;
                object-fit: cover;
                background-color: #fff;
            }

            .image-container p {
                padding: 10px;
            }
        </style>
        <!-- Penjelasan singkat angkutsampah.com-->
        

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <h2 class="text-center">Kenapa harus Angkutsampah.com?</h2>
       

        <div style="text-align: center; display: flex; justify-content: center;">
            <div class="image-container">
                <img src="{{ asset('image/easy.jpg') }}" alt="Image 1">
                <p>"Easy to Use"</p>
                <p>Website yang kami sediakan untuk anda <br>
                tentunya mudah digunakan!</p>
            </div>

            <div class="image-container">
                <img src="{{ asset('image/time.jpg') }}" alt="Image 2">
                <p>"Fast"</p>
                <p>Waktu pengangkutan dijamin cepat<br>
                sampainya!</p>
            </div>

            <div class="image-container">
                <img src="{{ asset('image/money.jpg') }}" alt="Image 3">
                <p>"Making Money"</p>
                <p>Tukarkan sampah menjadi uang!</p>
            </div>
        </div>
    @else
        <p>Trash Making Cash.</p>
    @endauth
@endsection
