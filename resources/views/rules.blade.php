@extends('patterns/header-login')
@section('main-content')
<div class="container p-4 ">
    <a href="/create" class="btn btn-md btn-primary">Добавить новый</a>
    <hr>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($rules as $rule)
             <tr>
                <th scope="row">{{ $rule->id }}</th>
                <td>{{ $rule->title }}</td>
                <td>
                    <a href="show/{{ $rule->id }}" class="btn btn-success">Показать</a>
                    <a href="edit/{{ $rule->id }}" class="btn btn-info">Редактировать</a>
                    <a href="delete/{{ $rule->id }}" class="btn btn-danger">Удалить</a>              
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
@endsection