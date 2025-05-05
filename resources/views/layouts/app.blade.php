<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(do_action('get_header'))
  @php(wp_head())

  @vite([
  'resources/css/app.css',
  'resources/css/bootstrap.min.css',
  'resources/css/owl.carousel.min.css',
  'resources/css/slicknav.css',
  'resources/css/flaticon.css',
  'resources/css/gijgo.css',
  'resources/css/animate.min.css',
  'resources/css/animated-headline.css',
  'resources/css/magnific-popup.css',
  'resources/css/fontawesome-all.min.css',
  'resources/css/themify-icons.css',
  'resources/css/slick.css',
  'resources/css/nice-select.css',
  'resources/css/style.css',
  'resources/js/app.js',
  'resources/js/vendor/modernizr-3.5.0.min.js',
  'resources/js/vendor/jquery-1.12.4.min.js',
  'resources/js/popper.min.js',
  'resources/js/bootstrap.min.js',
  'resources/js/jquery.slicknav.min.js',
  'resources/js/owl.carousel.min.js',
  'resources/js/slick.min.js',
  'resources/js/wow.min.js',
  'resources/js/animated.headline.js',
  'resources/js/jquery.magnific-popup.js',
  'resources/js/gijgo.min.js',
  'resources/js/jquery.nice-select.min.js',
  'resources/js/jquery.sticky.js',
  'resources/js/jquery.counterup.min.js',
  'resources/js/waypoints.min.js',
  'resources/js/jquery.countdown.min.js',
  'resources/js/hover-direction-snake.min.js',
  'resources/js/contact.js',
  'resources/js/jquery.form.js',
  'resources/js/jquery.validate.min.js',
  'resources/js/mail-script.js',
  'resources/js/jquery.ajaxchimp.min.js',
  'resources/js/plugins.js',
  'resources/js/main.js',
  ])
</head>

<body @php(body_class('black-bg'))>
  @php(wp_body_open())

  <div id="app">
    <a class="sr-only focus:not-sr-only" href="#main">
      {{ __('Skip to content', 'sage') }}
    </a>

    @include('sections.header')

    <main id="main" class="main">
      @yield('content')
    </main>

    @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
    @endif

    @include('sections.footer')
  </div>

  @php(do_action('get_footer'))
  @php(wp_footer())
</body>

</html>