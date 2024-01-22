@extends('patterns/header-index')
@section('main-content')
<div class="container-1">
              <p class="h3" face="Arial"><u><strong>Задание 6-7</strong></u></p>
            </div>
            <div class="content">
                <p class="h4"><u>Что должен знать и уметь ученик:</u></p>
                <p class="h5 text-justify" face="Arial">Задание 6. Проводить орфографический анализ слова, различать части речи, осуществлять морфемный и словообразовательный анализ, знать правописания имён существительных, имен прилагательных, местоимений, имен числительных, глаголов, наречий, правила написания слов с орфограммами.<br><br>Задание 7. Адекватно понимать соджержание прочитанного текста и проводить его логико-смысловой анализ.</p>
            </div>
            <hr>
            <div class="container-3">
              <a href="https://docs.google.com/document/d/1MJH4tz4N8PkKsWqCn-qXHqnro0g-ctVgROvEsOlgwqM/edit?usp=sharing" class="h3 aa --bs-dark-bg-subtle" face="Arial" id="teoriya"><u>Теория</u></a>
            </div>
            <div class="container-4">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <strong>Орфограммы в приставках</strong>
                    </button>
                  </h2>
      
                  <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="row">
                        @foreach($rules1 as $rule1)
                        <div class="col-sm-4 d-flex justify-content-center">
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">{{$rule1->title}}</h5>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-10">
                                <a href="/rule/{{$rule1->id}}" class="a">Подробнее</a>
                              </button>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <strong>Орфограммы в корене</strong>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="row">
                        @foreach($rules2 as $rule2)
                        <div class="col-sm-4 d-flex justify-content-center">
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">{{$rule2->title}}</h5>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-10">
                                <a href="/rule/{{$rule2->id}}" class="a">Подробнее</a>
                              </button>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <strong>Орфограммы в суффиксе</strong>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="row">
                        @foreach($rules3 as $rule3)
                        <div class="col-sm-4 d-flex justify-content-center">
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">{{$rule3->title}}</h5>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-10">
                                <a href="/rule/{{$rule3->id}}" class="a">Подробнее</a>
                              </button>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <strong>Орфограммы в окончание</strong>
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row">
                        @foreach($rules4 as $rule4)
                        <div class="col-sm-4 d-flex justify-content-center">
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">{{$rule4->title}}</h5>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-10">
                                <a href="/rule/{{$rule4->id}}" class="a">Подробнее</a>
                              </button>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr size="10">
            <div class="container-3">
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="h3 --bs-dark-bg-subtle aa" face="Arial" id="practic"><u>Практика</u></a>
            </div>
            <div class="container-4">
            <div class="accordion" id="accordionExample-1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <strong>6 Задание</strong>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample-1">
                  <div class="accordion-body">
                    <a href="https://rus-oge.sdamgia.ru/test?id=12049480&nt=True&pub=False">15 Упражений</a><br><br>
                    <a href="https://rus-oge.sdamgia.ru/test?id=12058628&nt=True&pub=False">30 Упражений</a>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <strong>7 Задание</strong>
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample-1">
                  <div class="accordion-body">
                    <a href="https://rus-oge.sdamgia.ru/test?id=12049481&nt=True&pub=False">15 Упражений</a><br><br>
                    <a href="https://rus-oge.sdamgia.ru/test?id=12058632&nt=True&pub=False">30 Упражений</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
@endsection