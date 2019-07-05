<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/styles.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" />
</head>

<body>
  
  @section('header')
    <header>
      Header Content
    </header>
  @show

  @section('side_navigation')
    <div class="side-nav">
      Side Navigation
    </div>
  @show
  <div class="content">
    @yield('content')
  </div>
  @section('footer')
  <footer class="page-footer main-wrap ">
   Footer Content  
  </footer>
  @show
  @section('page_script')
  @show
</body>
<!-- <script src="{{ asset('js/admin/scripts.js') }}"></script> -->

</html>