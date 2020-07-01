@extends('layout/main')
@section('title', 'Registrasi')

@section('content')

<div>
    <?php 
        if(isset($_POST['create'])){
            $firstname      = $_POST['firstname'];
            $lastname       = $_POST['lastname'];
            $email          = $_POST['email'];
            $password       = $_POST['password'];

            echo $firstname . " " . $lastname . " " . $email . " " . $password;
        }
    ?>
</div>

<div class="logo-big">
<center>
    <a href="/" class="navbar-brand"><img src="{{ asset('/img/logo-big.png') }}"  alt="registration" class="img-fluid"></a>
</center>
</div>


<!-- Container -->
<div class="container">

    <!-- Registration Page -->

        <div class="row registration">
            <div class="col-lg-4">
                <h4>INFORMASI</h4>  
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum et felis lobortis consequat. Maecenas consequat ex sit amet sapien pretium consectetur. Sed porta enim dictum ligula lobortis, ac facilisis quam imperdiet.</p>      
                <p>In leo magna, semper nec ullamcorper bibendum, scelerisque et eros. Maecenas vitae sagittis ante. Etiam rhoncus fermentum mauris. Praesent a dui pulvinar, pellentesque nisi quis, rutrum mauris. Vestibulum faucibus odio ac dui viverra fermentum in eget magna. </p>
                <center>
                    <a href="/login" class="btn btn-primary tombol_konfirmasi">Sudah Punya Akun? </a>
                </center>
            </div>
            
            <div class="col-lg-6">
                <h4>DAFTAR SEKARANG</h4> 
                <div class="signup_form">
                    <div>
                        <input class="firstname" type="text" placeholder="Nama Depan" required>
                        <input class="lastname" type="text" placeholder="Nama Belakang" required>
                        <input class="email" type="email" placeholder="Email" required>
                        <input class="password" type="password" placeholder="Password" required>
                        <input class="password2" type="password" placeholder="Konfirmasi Password" required>
                    </div>
                </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Saya menyetujui <a href="#"> Syarat & Ketentuan</a>
                            </label>
                    </div>
                

                <button class="btn btn-primary tombol_daftar_oren" name="create" type="submit">Daftar</button>
            </div>
        </div>

    <!-- end Registration Page -->

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