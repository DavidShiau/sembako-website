@extends('layout/main')
@section('title', 'Lupa Kata Sandi')

@section('container')


<div class="logo-big">
<center>
    <a href="/" class="navbar-brand"><img src="{{ asset('/img/logo-big.png') }}"  alt="registration" class="img-fluid"></a>
</center>
</div>


<!-- Container -->
<div class="container">

    <!-- Login Page -->
    <div class="row forgot">
        <div class="form-box gorgot">
            <h4>Atur Ulang Kata Sandi</h4>

            <form class="input-group">
                <div class="input-form">
                    <input type="email" class="input-field" placeholder="Email" required>
                </div>
                <button class="btn btn-primary tombol_kirim_oren" name="kirim" type="submit">Kirim</button>
            </form>
            <label class="label-back">Kembali ke halaman <a href="/login">Login</a></label>           

        </div>
    </div>

    <!-- end Login Page -->

</div>    
<!-- end Container -->

<div class="background-outlined">
    <img src="{{ asset('/img/background-outlined.png') }}"  alt="background-outlined">
</div>

<div class="container">
    <footer>
        &copy; Copyright 2020 by Sembako | <a href="#"> Perlu Bantuan? </a>
    </footer>
</div>

@endsection 