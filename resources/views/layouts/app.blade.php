<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    
    <style>

        .note-editable.card-block {
            height: 200px !important;
        }
        
        .bootstrap-switch .bootstrap-switch-handle-off, .bootstrap-switch .bootstrap-switch-handle-on, .bootstrap-switch .bootstrap-switch-label {
            box-sizing: border-box;
            cursor: pointer;
            display: table-cell;
            font-size: 1rem;
            font-weight: 500;
            line-height: 0.2rem !important;
            padding: 0.25rem 0.5rem;
            vertical-align: middle;
        }
        

        .bootstrap-switch-container {
            height: 30px !important;
        }
        
        .bootstrap-switch-container span{
            padding: 7px !important;
        }


    </style>
    
    <!-- Include jQuery -->
    

<!-- Footer All Link -->
    @include('layouts.admin_layout.all_header_links')
<!-- End Footer Link -->
  

</head>
<body style="background-image:url({{asset('upload_files/admin-background/admin_Background.jpg')}}); background-size:cover; background-repeat:no-repeat;">

@yield('content')


@yield('scripts')

<!-- Footer All Link -->
    @include('layouts.admin_layout.all_footers_links')
<!-- End Footer Link -->

</body>
</html>
