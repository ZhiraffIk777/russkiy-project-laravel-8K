@extends('patterns/header-login')
@section('main-content')
@csrf
<h1 class="text-center my-4">Востановление пароля</h1>
<div class="col-md-5 mx-auto">
    <form action="{{ route('password.email') }}" method="post">
        <div class="mb-3 input-group">
          <span class="input-group-text"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>
          <input name="email" type="text" class="form-control" placeholder="E-Mail">
        </div>
    </form>
    <div class="mb-3">
        <input type="submit" class="form-control btn-1" value="Востановить">
      </div>
@endsection