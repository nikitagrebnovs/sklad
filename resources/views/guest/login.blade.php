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
<div class="container" style="margin-top: 30vh">
    <div class="d-flex justify-content-center">
        <div>
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
                <div class="d-flex align">
                    <h1 class="align-middle">Almost in</h1><div class="floating-img h1">{{ \Spatie\Emoji\Emoji::rocket() }}</div>
                </div>



                <form action="{{ route('login.login') }}" method="POST">
                @method('POST')
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" id="inp-email" name="email" class="form-control @error('email')is-invalid @endif" placeholder="#">
                    <label for="inp-email" class="text-muted @error('email')text-danger @endif ">Email</label>

                </div>
                <div class="form-floating">
                    <input class="form-control @error('password')is-invalid @endif " type="password" name="password" id="inp-password" placeholder="#">
                    <label for="inp-password" class=" text-muted @error('password')text-danger @endif ">Password</label>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-outline-secondary btn-block">Log in</button>
                </div>
            </form>
            <a href="{{ route('register') }}">Request account</a>
        </div>
    </div>
</div>
