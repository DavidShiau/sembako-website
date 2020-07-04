@extends('layout/main')
@section('title', 'Login')

@section('content')


<div class="logo-big">
<center>
    <a href="/" class="navbar-brand"><img src="{{ asset('/img/logo-big.png') }}"  alt="registration" class="img-fluid"></a>
</center>
</div>


<!-- Container -->
<div class="container">

    <!-- Login Page -->
    <div class="row login">
        <div class="form-box login">
            <h4>MASUK</h4>

            <form class="input-group">
                <div class="input-form">
                    <input type="email" class="input-field" placeholder="Email" required>
                </div>
                <div class="input-form">
                    <input type="password" class="input-field" placeholder="Kata Sandi" required>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ingat Saya
                        </label>
                </div>
                
                <label class="lupa-sandi"><a href="/forgot">Lupa Kata Sandi?</a></label>
                <label class="form-check-akun">Belum punya akun? <a href="/daftar">Daftar</a></label>
                <button class="btn btn-primary tombol_masuk_oren" name="masuk" type="submit">Masuk</button>
            </form>

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