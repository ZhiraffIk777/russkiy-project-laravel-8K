@extends('patterns/header-login')
@section('main-content')
<h1 class="text-center my-4">Добавление правила</h1>
  <div class="content col-md-7 mx-auto">
    <form onsubmit="sendForm(this); return false;" action="/addrules" method="post">
    @csrf
        <div class="row">
            <div class="mb-3 input-group">
              <input name="title" type="text" class="form-control" placeholder="Название правила">
            </div>
            <p><select name="rule">
                <option selected value="s1">Приставка</option>
                <option value="s2">Корень</option>
                <option value="s3">Суффикс</option>
                <option value="s4">Окночание</option>
            </select>
        </div>
        <div class="mb-3 input-group">
          <textarea name="content" type="text" class="form-control" placeholder="Правило" id="sample"></textarea>
        </div>
        <div class="mb-3">
          <input type="submit" class="form-control btn-1" value="Добавить">
        </div>
    </form>
  </div>
</div> 
<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ru.js"></script>
<script>
    const editor = SUNEDITOR.create((document.getElementById('sample') || 'sample'),{
        lang: SUNEDITOR_LANG['ru'],
        buttonList: [
            ['undo', 'redo'],
            ['font', 'fontSize', 'formatBlock'],
            ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'paragraphStyle', 'blockquote'],
            ['align', 'horizontalRule', 'list', 'lineHeight', 'table', 'link', 'image'],
        ],
        height: "250px",
        width: "100%"
    }); 

    function sendForm(form){
        const formData = new FormData(form);
        formData.append('content', editor.getContents());
        fetch("/addrules", {
            method: "POST",
            body: formData
        }).then(response=>response.json())
          .then(result=>{
            console.log();
          })
    }
</script>
@endsection

