<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('fontawesome/css/all.css') }}>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('email/email.js') }}"></script>
   
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="{{ asset('js/tinymce/jquery.tinymce.min.js') }}"></script>
    
</head>
<body>
    @include('components.navbar')
    <div class="container-fluid ">
        
        <div class="row flex-nowrap vh-100  wh-100"  style="position:static" >
            
            @include('components.sidebar')
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('body.container')
            </main>
        </div>
    </div>
    @include('components.modal')
</body>
</html>