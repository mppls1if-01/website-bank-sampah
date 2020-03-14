@extends('frontend.templates.default')

@section('content')
    <div class="row">
        <div class="col s6">
            <img class="responsive-img" style="padding-top: 20%" width="100%" height="auto" src="image/aww.jpg" alt="">
        </div>
        <div class="col s1 ">
        </div>
        <div class ="col s5">
        <h3>Register</h3>
        <form action="signup" class="col s12" method="post">
            @csrf

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                    <input type="text" class="@error('name') invalid @enderror" name="name" value="{{ old('name') }}">
                        <label for="">Name</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" class="validate @error('email') invalid @enderror" name="email" value="{{ old('name') }}">
                        <label for="">Email</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="number" class="validate @error('email') invalid @enderror" name="number" value="{{ old('name') }}">
                        <label for="">No.hp</label>
                </div>

                <div class="input-field col s12">
                    
                    <i class="material-icons prefix">worker</i>
                    <select type="dropdown" class="dropdown-content form-control validate @error('email') invalid @enderror" name="pekerjaan" value="{{ old('option') }}">                  
                   <option value="" disabled selected>Pekerjaan</option>
                    <option><label for="" value="Mahasiswa">Mahasiswa</label></option>
                    <option><label for="" Mahasiswa="Dosen">Dosen</label></option>
                    </select>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" class="@error('password') invalid @enderror" name="password" value="">
                        <label for="">Password</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" class="@error('password_confirmation') invalid @enderror" name="password_confirmation" value="">
                        <label for="">Password Confirmation</label>
                </div>
                <div class="col s8">
                </div> 
                <div class="input field col s4" >
                    <input type="submit" value="Register" class="vawes-effect waves-light btn blue accent-1">
                </div> 

            </div>

        </form>
    </div>
@endsection