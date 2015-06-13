<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="{{ asset('/css/editor/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/editor/froala_editor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/editor/froala_style.min.css') }}" rel="stylesheet">
    <!--    multiples Select css-->
    <link href="{{ asset('/select/docsupport/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/select/docsupport/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('/select/chosen.css') }}" rel="stylesheet">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	@yield('style')
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/admin/posts') }}">post</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/lv-login') }}">Login</a></li>
						<li><a href="{{ url('/lv-register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/lv-logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	@yield('post')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('/js/editor/froala_editor.min.js') }}"></script>
  <!--[if lt IE 9]>
    <script src="js/editor/froala_editor_ie8.min.js"></script>
  <![endif]-->

  <script type="text/javascript" src="{{ asset('/js/editor/plugins/tables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/lists.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/colors.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/font_family.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/font_size.min.js') }}"></script>  
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/block_styles.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/media_manager.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/video.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/char_counter.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/editor/plugins/fullscreen.min.js') }}"></script>
  <script>
      $(function(){
        $('#contenido').editable({inlineMode: false});
      });
  </script>
  <script type="text/javascript" src="{{ asset('/select/chosen.jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/select/docsupport/prism.js') }}"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  @yield('script')
</body>
</html>
