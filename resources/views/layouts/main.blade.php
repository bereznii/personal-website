<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="My name is Dmytro Bereznii and I am a computer systems and network course student, who is interested in designing scalable, distributed web-applications, work with processes automatization and web-development overall.">
  <meta name="author" content="Dmytro Bereznii">

  <link rel="icon" href="{{ asset('img/circle-cropped.ico') }}" type="image/icon type">

  <title>Bereznii</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!--@yield('page')-->
  <div id="app">
    <navigation></navigation>
  </div>

  <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
