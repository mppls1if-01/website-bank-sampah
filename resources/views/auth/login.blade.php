@extends('frontend.templates.default')

@section('content')
    <div class="row">
        <div class="col s6">
            <img class="responsive-img" style="padding-top: 20%" width="400px" height="300px" src="image/aww.jpg" alt="">
        </div>
        <div class="col s1">
        </div>
        <div class ="col s5">
        <h3>Login</h3>
        <form action="login" class="col s12" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" class="validate @error('email') invalid @enderror" name="email" value="{{ old('name') }}" placeholder="Email">
                        <!--<label for="email">Email</label>-->
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" class="@error('password') invalid @enderror" name="password" value="" placeholder="Password">
                        <!--<label for="password">Password</label>-->
                </div>

               

                <div class="col s8">
                </div> 
                <div class="input field col s4" >
                    <input type="submit" value=" Login " class="vawes-effect waves-light btn blue accent-1">
                </div> 

            </div>
        </div>
        </form>
        </div>
    </div>
@endsection