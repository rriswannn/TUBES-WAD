<!-- File: resources/views/services/index.blade.php -->

@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <div class="container">
        <h2>Layanan Kami</h2>
       
        <!-- layanan kami -->
    </div>
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
@endsection
