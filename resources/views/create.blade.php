@extends('patterns/header-rules')
@section('main-content')
    <div class="container p-4 ">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="text-center">
            <h1 class="">Добавление</h1>
           </div> 
          <form action="/post" method="post">
              @csrf
              <label for="">Название:</label>
              <input type="text" class="form-control" name="title"><br>
              <p><select name="rule_rule">
                <option selected value="s1">Приставка</option>
                <option value="s2">Корень</option>
                <option value="s3">Суффикс</option>
                <option value="s4">Окночание</option>
              </select><br><br>
              <label for="">Описание:</label>
              <textarea name="content" id="summernote" cols="30" rows="10"></textarea>
              <label for="">Фотографии:</label>
              <textarea name="image" id="summernot" cols="30" rows="10"></textarea>
              <button type="submit" class="btn btn-lg btn-primary">Добавить</button>
            </form>
          </div>
      </div>
    </div>


    <script>
        $('#summernote').summernote({
            placeholder: 'content...',
            tabsize:2,
            height:300
            
        });
        $('#summernot').summernote({
            placeholder: 'content...',
            tabsize:2,
            height:300
            
        });
    </script>
@endsection