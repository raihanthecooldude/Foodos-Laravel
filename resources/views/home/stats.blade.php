<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Statistics</title>
		{!! Charts::styles() !!}
		
	</head>
	<body>
		<h1>Statistics</h1>
		
		<div class="app">
			
			<center>
				
				{!! $chart->html() !!}
			
			</center>
		
		</div>
		
		<br/>
		<br/>
		
		<div class="app">
			
			<center>
				
				{!! $chart1->html() !!}
			
			</center>
		
		</div>
		
		<!-- End Of Main Application -->
		
		{!! Charts::scripts() !!}
		
		{!! $chart->script() !!}
		
		{!! $chart1->script() !!}
	
	</body>
</html>