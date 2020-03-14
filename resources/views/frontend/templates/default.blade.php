<!DOCTYPE html>
<html lang="en">
     @include('frontend.templates.partials.head')
<body>
    @include('frontend.templates.partials.nav')
   
       
        <div class="container">
            @yield('content')
</div>



    <!-- Compiled and minified JavaScript -->
    @include('frontend.templates.partials.script')
    @include('frontend.templates.partials.toast')


              
</body>
</html>