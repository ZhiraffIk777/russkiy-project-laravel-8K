@extends('patterns/header-login')
@section('main-content')
<h1 class="text-center my-4">Авторизация</h1>
  <div class="content col-md-5 mx-auto">
    <form action="/login" method="post">
    @csrf
        <div class="row">
            <div class="mb-3 input-group">
              <span class="input-group-text"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>
              <input name="email" type="text" class="form-control" placeholder="E-Mail">
            </div>
        </div>
        <div class="mb-3 input-group">
          <span class="input-group-text"><i class="fa-solid fa-unlock"></i></span>
          <input name="password" type="password" class="form-control" placeholder="Пароль">
        </div>
        <div class="container-2">
          <a class="a-1" href="/register"><p class="h6">Еще нет аккаунта?</p></a>
          <a class="a-1" href="/forgot-password"><p class="h6">Забыли пароль?</p></a>
        </div>
        <div class="mb-3">
          <input type="submit" class="form-control btn-1" value="Авторизоваться">
        </div>
    </form>
  </div>
</div> 
@endsection