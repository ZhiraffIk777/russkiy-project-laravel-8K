<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ОГЭ по Русскому</title>
        <link rel="stylesheet" href="{{ url('/css/index.css') }}">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1fea131cc0.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous" defer></script>
    <body>
        <nav class="navbar navbar-expand-md">
          <div class="container-fluid">
              <a class="navbar-brand" href="/#">
                <a href='/#' target='_blank'><img src="{{ url('/img/icon.png') }}" width="30" height="24" alt='icon'/></a>
              </a>
              <a class="navbar-brand text-white" href="/#">ОГЭ по Русскому</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Пункты
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/#">Теория</a></li>
                        <li><a class="dropdown-item" href="/#">Практика</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="https://rus-oge.sdamgia.ru/">Онлайн Тесты</a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown mx-2">
                  <a class="nav-link dropdown-toggle text-white" href="/#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Учетная запись
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/rules">Добавить правила</a></li>
                    <li><a class="dropdown-item" href="/logout">Выйти</a></li>
                  </ul>
                @else
                <li class="nav-item dropdown mx-4">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Учетная запись
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/register">Регистрация</a></li>
                    <li><a class="dropdown-item" href="/login">Вход</a></li>
                  </ul>
                </li>
                @endauth
                <!-- </li>
                <iframe src="https://yoomoney.ru/quickpay/fundraise/button?billNumber=gn3ZIwQpf9M.231109&" width="330" height="50" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
              </ul> -->
            </div>
          </div>
        </nav>
        @yield('main-content')
        <footer class="container-fluid text-center py-5 bg-dark text-white sticky-bottom mt-5">
        <p class="h6">*Для просмотра изображений на телефоне, рекомендуем использовать горизонтальный режим просмотра*</p>
	    <p>Пятых Егор, Пятых Петр<br>Кл. Руководитель: О.А. Боброва<br>&copy; Школа №1590, 8К 2023</p>
	</footer>
    </body>
</html>