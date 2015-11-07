<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<link href="{{url('/material/css/roboto.min.css')}}" rel="stylesheet">
    <link href="{{url('/material/css/material.min.css')}}" rel="stylesheet">
    <link href="{{url('/material/css/ripples.min.css')}}" rel="stylesheet">



	<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
</head>
<body>
		
		@yield('nav')
	
	<div class="container well">
		@yield('content')
	</div>		

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<script src="{{url('/material/js/ripples.min.js')}}"></script>
    <script src="{{url('/material/js/material.min.js')}}"	></script>

	<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

	 <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>
</body>
</html>
