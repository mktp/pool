<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5 4 new player Chile 2015</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>

				{!! Form::open(array('route' => 'save_pool', 'class' => 'form')) !!}

					<input type='hidden' id='many' name='many' value="<?php echo $many; ?>"/>
					
					<?php foreach($games as $game) { ?>
					
						<br/><input type='hidden' id='game<?php echo $game->id; ?>' name='game<?php echo $game->id; ?>' value='<?php echo $game->id; ?>'/>
						{!! Form::label($game->t1) !!}
						{!! Form::text('game' . $game->id . '_' . 'score1', null, 
							array('required', 
								  'class'=>'form-control', 
								  'placeholder'=>$game->s1)) !!}
						{!! Form::label($game->t2) !!}
						{!! Form::text('game' . $game->id . '_' . 'score2', null, 
							array('required', 
								  'class'=>'form-control', 
								  'placeholder'=>$game->s2)) !!}

					<?php } ?>

					<br/>{!! Form::text('client', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el nombre del jugador')) !!}

					<div class="form-group">
						{!! Form::submit('Crear juego', 
						  array('class'=>'btn btn-primary')) !!}
					</div>
				{!! Form::close() !!}

		</div>
	</body>
</html>
