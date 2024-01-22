@extends('patterns/header-rules')
@section('main-content')
    <div class="container p-4 ">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="text-center">
            <h1 class="">{{ $rule->title }}</h1>
            <hr>
          </div>
            <div>
                {!! $rule->content !!}
            </div>
            <div>
                {!! $rule->image !!}
            </div>
        </div>
      </div>
    </div>

  </body>
</html>
@endsection