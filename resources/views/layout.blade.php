<html>
    <head>
        <script src="{{ asset('js/app.js') }}" defer></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-2 col-lg-2" style="background:#FF6600;padding:10px">  </div>
			<div class="col-sm-12 col-md-8 col-lg-8" style="background:#FF6600;padding:10px"> <span class="ml-5"><x-flash-message /> </span></div>
			<div class="col-sm-12 col-md-2 col-lg-2" style="background:#FF6600;padding:10px">  </div>
			
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-3" style="background:#E8E8E8">
			<span class="p-5"> Welcome </span>
			</div>  
			
			<div class="col-sm-12 col-md-9 col-lg-9" style="background:#E8E8E8;">
				<div>
				
				
				@yield('xxx');
			
			</div>
			
					
		</div>
</div>
</body>
</html>