<!DOCTYPE html >
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/admiro/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Jan 2025 18:08:59 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."/>
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app"/>
    <meta name="author" content="pixelstrap"/>
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{url('Backend/images/favicon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{url('Backend/images/favicon.png')}}" type="image/x-icon"/>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/"/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
    <!-- Flag icon css -->
    <link rel="stylesheet" href="{{url('Backend/css/vendors/flag-icon.css')}}"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{url('Backend/css/iconly-icon.css')}}"/>
    <link rel="stylesheet" href="{{url('Backend/css/bulk-style.css')}}"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{url('Backend/css/themify.css')}}"/>
    <!--fontawesome-->
    <link rel="stylesheet" href="{{url('Backend/css/fontawesome-min.css')}}"/>
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="{{url('Backend/css/vendors/weather-icons/weather-icons.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('Backend/css/vendors/scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('Backend/css/vendors/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('Backend/css/vendors/slick-theme.css')}}"/>
    <!-- App css -->
    <link rel="stylesheet" href="{{url('Backend/css/style.css')}}"/>
    <link id="color" rel="stylesheet" href="{{url('Backend/css/color-1.css')}}" media="screen"/>
  </head>

  @if(!session()->has('Adminid'))
    <script>
        window.location.href = "{{ route('admin.login') }}";
    </script>
@endif