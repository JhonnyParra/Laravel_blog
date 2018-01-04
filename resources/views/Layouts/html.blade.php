<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="css/app.css" rel="stylesheet" type="text/css"/>
  <script src="js/app.js" type="text/javascript"></script>
  <title>@yield('page_title')</title>
</head>
<body>

  @component('Assets.header')
  @endcomponent

  @section('content')
  @show

  @component('Assets.footer')
  @endcomponent
    
</body>
</html>