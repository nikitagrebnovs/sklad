<head>
    <meta charset="utf-8">
    <title>est</title>
    <meta name="description" content="">
    <meta name="title" content="">
    <meta name="author" content="OctoberCMS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="OctoberCMS">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<header>
    <style>
        .card {
            padding: 0px 0px;
        }
    </style>
    @include('includes.header')
</header>
<body>
@yield('content')
<section class="d-flex">
    <!-- Header -->
    <section id="layout-header" style="position: fixed; display: block">
    </section>

    <!-- Content -->
    <section id="layout-content" class="container">

    </section>
</section>




<script src="{{ 'assets/vendor/bootstrap.js' }}"></script>
<script src="{{ 'assets/javascript/app.js' }}"></script>


</body>
