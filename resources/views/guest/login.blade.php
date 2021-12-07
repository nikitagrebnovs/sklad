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
<div class="container col-12" style="margin-top: 30vh">
    <div class="d-flex justify-content-center">
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1 class="align-middle">Almost in {{ \Spatie\Emoji\Emoji::rocket() }}</h1>
            <form action="{{ route('login.login') }}" method="POST">
                @method('POST')
                @csrf
                <div class="col-3 d-block text-muted">
                    <h6 class="mt-3">Email</h6>
                    <input type="text" id="email" name="email" class="">
                </div>
                <div class="col-3 d-block text-muted">
                    <h6 class="mt-3" class="mt-3">Password</h6>
                    <input type="password" name="password" >
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-secondary btn-block">Log in</button>
                </div>
            </form>
            <a href="{{ route('register') }}">Request account</a>
        </div>
    </div>
</div>
