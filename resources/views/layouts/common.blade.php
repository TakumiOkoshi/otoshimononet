<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('title')</title>

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
      
    </head>
<body>
    @include('parts.header')
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</body>
</html>