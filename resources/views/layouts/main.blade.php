<!DOCTYPE html>
<html>
<head>
	<title>Ajax Search App Using Laravel</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
   <div class="container">
   	  
   	  	   @yield('content')

   </div>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/ajax_callback_function.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/ajax_main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>

</body>
</html>