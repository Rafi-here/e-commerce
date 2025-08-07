@extends('layouts.frontend')
@section('title', 'Contact Us')

@section('content')
<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url('{{ asset('frontend/assets/img/bg/breadcrumb.jpg') }}')">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="{{ url('/') }}">home</a></li>
                <li>contact us</li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-area ptb-100">
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h3 class="mb-4">Kirim Kami Pesan</h3>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="contoh : admin" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="contoh : admin@example.com" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="subject" class="form-control" placeholder="contoh : produk" required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="message" rows="5" class="form-control" placeholder="contoh : kirim pesan disini . . ." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary rounded rounded-pill">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Contact Information</h3>
                <ul class="list-unstyled">
                    <li><strong>Address:</strong> Jl. Contoh No. 123, Bandung</li>
                    <li><strong>Email:</strong> lofii@example.com</li>
                    <li><strong>Phone:</strong> 0821-2345-6789</li>
                    <li><strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890">Klik untuk chat</a></li>
                </ul>
                <div class="mt-4">
                    <iframe src="https://maps.google.com/maps?q=bandung&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
