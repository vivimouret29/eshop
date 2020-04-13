<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @yield('headscript')

  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/vendor/zurb/foundation.min.css">
  <link rel="stylesheet" href="/css/myapp.css">

</head>

<body>

  <div>
    <a class="button" href="{{ route('home') }}">
      home
    </a>
  </div>

  <section class="showcase">
    @yield('showcase')
  </section>



  <section class="domain-search">
    @yield('subshowcase')
  </section>

  <section class="section-a">
    @yield('section-a')
  </section>




  @yield('subpage')


  <script src="/js/vendor/ten-1-seven/what-input.js"></script>
  <script src="/js/vendor/zurb/foundation.js"></script>
  <script src="/js/myapp.js"></script>
  @yield('footerscript')
</body>

</html>