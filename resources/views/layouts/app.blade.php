
<!doctype html>
<html lang="ru">
  <head>

    @if(config('app.env') != 'local')
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(65202709, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/65202709" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    @endif

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{{ asset('favicon.png') }}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/zoomove/1.2.1/zoomove.min.css">
    <!-- fancybox -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />
    <title>@yield('title')</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        body {
            padding-top: 5rem;
        }
        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top text-light">
    <a class="navbar-brand" href="{{ url('/') }}">
 <img src="{{ asset('favicon.png') }}" alt="" style="width: 2rem;"> &nbsp; GrandCore</a></p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item @if(Request::is('/about')) active @endif">
         <a class="nav-link" href="{{ url('/about') }}">О Фонде</a>
       </li>
       <li class="nav-item @if(Request::is('mvp')) active @endif">
         <a class="nav-link" href="{{ url('/mvp') }}">MVP Платформы</a>
       </li>
       <li class="nav-item @if(Request::is('edem')) active @endif">
         <a class="nav-link" href="{{ url('/edem') }}">EDem фреймворк</a>
       </li>

     </ul>
    </div>
    </nav>

    <main role="main" class="container">
  @yield('content')




  </main>


  <!-- Footer -->
  <footer class="page-footer font-small teal pt-4 bg-dark text-light">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Подпишитесь</h5>

            <p>GitHub репозиторий - <a href="https://github.com/grandcore">@grandcore</a></p>

            <p>Telegram канал - <a href="https://t.me/grandcore">@grandcore</a> </p>

            <p>YouTube канал - <a href="https://www.youtube.com/channel/UCCcI0eNBhfd0qHIzZLDvKVA">@UCCcI0eNBhfd0qHIzZLDvKVA</a> </p>





        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Напишите</h5>



            <p>Telegram - <a href="https://t.me/i0zgMRV49fX">@i0zgMRV49fX</a></p>

            <p>Email - <a href="mailto:ru@grandcore.org">ru@grandcore.org</a></p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">2019-2020 MIT</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body">
 <p>

<ul>
  <li>Все новости проекта в Telegram канале - <a href="https://t.me/grandcore" target="_blank">@grandcore</a></li>
  <li>Код на <a href="https://github.com/grandcore/grandcore-platform" target="_blank">GitHub</a></li>
  <li>Дизай в <a href="https://www.figma.com/file/NlikNEJQHliYlxI3MHhiSW/Share?node-id=0%3A1" target="_blank">Figma</a></li>
  <li>Реалити-шоу на <a href="https://www.youtube.com/channel/UCCcI0eNBhfd0qHIzZLDvKVA" target="_blank">YouTube</a> </li>
  <li>Telegram основателя (пишите, если хотите в команду)  - <a href="https://t.me/i0zgMRV49fX" target="_blank">@i0zgMRV49fX</a></li>
</ul>

<p>Ищем сооснователей в проект!</p>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Окей</button>
        </div>
      </div>

    </div>
</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>

    <!-- slider -->
    <script>
        jQuery(document).ready(($) => {
            $('a.screenshot').fancybox();
        });
    </script>

    @if(false)
        <script>
        $(window).on('load',function(){
          $('#myModal').modal('show');
        });
        </script>
    @endif


    @if(config('app.env') == 'local')
        <script src="http://localhost:35729/livereload.js"></script>
    @endif
  </body>


</html>
