@extends('layout.main')
@section('content')
    <div class="container" style="height: 100vh">
        <div class="row">
            <div class="col-6 mt-5 card shadow mx-auto p-3">
                <h3 class="text-center">Your personal data</h3>
                <div class="form-control">
                    <div class="">
                        <label for="inp-email" class="form-control-label">Email</label>
                        <input type="email" id="inp-email" class="input-group" value="{{ $user->email }}">
                    </div>
                    <div class="">
                        <label for="inp-login" class="form-control-label">Login</label>
                        <input type="email" id="inp-login" class="input-group" value="{{ $user->login }}">
                    </div>
                    <div class="text-center">
                        <a href="{{ route('home.show') }}" class="btn btn-success mt-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
