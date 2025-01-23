@extends('layouts.app')
@section('content')
<div class="">
    <div class="card"> 
        <div class="card-header">
            Log In
        </div>
        <div class="card-body">
            <form action="{{route('loginstore')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for=""> Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> Password </label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary"> Login </button><br>
                <a href="{{ route('register')}}" class="nav-link"> Belum punya Akun ? daftar sini. </a>
            </form>
        </div>
    </div>
</div>
@endsection