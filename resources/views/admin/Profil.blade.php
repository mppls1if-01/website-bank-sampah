<!DOCTYPE html>
    <html lang="en">
    <style>
    
    </style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <link rel="stylesheet" type="text/css" href="{{asset ('materialize/css/materialize.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset ('materialize/css/materialize.min.css') }}">  
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <title>Bank Sampah</title>

    </head>

    <body>
    <header class="main-header">
    <div class="navbar-fixed">
    <nav class="white">
        <div class="nav-wrapper ">
        <ul class="left hide-on-med-and-down">
        <a href="{{url('/admin')}}" data-target="slide-out" class="sidenav-trigger show-on-large button-collapse btn waves-effect waves-light green lighten-3" ><i class="material-icons">menu</i></a>
        </ul>
        </div>
    </nav>
    </div>

    </div>
    </header>
    <div class="container">
    <div class="row">
        <h4>Profil Saya</h4>
            <p>Kelola informasi profil Anda untuk mengontrol,melindungi dan mengamankan akun</p>
            <hr>
            <div class="col s7">
            <?php 
                $Admin->getUser();
                $data = $Admin->lihatProfil(); 
            ?>
                <form action="{{route('adminprofil')}}" class="col s12" method="post">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" name="nama" class="validate" value="<?php echo $data[0]; ?>">
                            <label for="icon_prefix"></label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input type="email" class="validate @error('email') invalid @enderror" name="email" value="<?php echo $data[1]; ?>">
                                    <label for=""></label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">phone</i>
                                <input type="number" class="validate @error('email') invalid @enderror" name="number" value="<?php echo $data[2]; ?>">
                                    <label for=""></label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" class="@error('password') invalid @enderror" name="password" value="<?php echo $data[3]; ?>">
                                    <label for=""></label>
                            </div>

                            </div> 
                            <div class="input field col s5" >
                                <input type="submit" value=" Submit" class="vawes-effect waves-light btn blue accent-1">
                            </div>  
                        </div>
                </form>
            <div class="col s1 ">
            </div>
            <div class ="col s4">
            <form action="GET">
                <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
                </div>
            </form>
        </div>
            </div></div>
            <script type="text/javascript" src="js/materialize.min.js"></script>
    <footer class="">
    <div class="footer-copyright text-center py-3"><center>© 2020 Copyright:</center>
    </div>
    </footer>

    </div>
    </body>
    </html>