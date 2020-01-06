<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Contato</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-primary">
	<div class="container-fluid">
		<div class="bg-white rounded" style="margin-top: 6em;">
			<div class="row">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL92qWUYcMssTXLPLwBPnzRPU1YxyZIxZfSrE2UwXkIJTYp3Sjog&s" class="col-sm-4" height="300" width="300" style="margin-left: 4em;margin-top: 5em">
				<div class="col-sm-6">
					<form class="ml-5 text-center" action="{{url('/enviar')}}" method="post">
						{{csrf_field()}}
						<h3 class="mt-4 mb-3 text-center"><font face="verdana" style="font-weight: bold">Contato</font></h3>
						<div class="form-group">
					    	<input name="nome" type="text" class="form-control" placeholder="Nome" required>
					  	</div>
					  	<div class="form-group">
					    	<input name="email" type="email" class="form-control" placeholder="Email" required>
					  	</div>
					  	<div class="form-group">
					    	<input name="titulo" type="text" class="form-control" placeholder="Título" required>
					  	</div>
					  	<div class="form-group">
					    	<textarea name="mensagem" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
					  	</div>
					  	<button type="submit" class="btn btn-primary btn-block">Enviar</button>
					</form>
				</div>
			</div>
			<br>
		</div>
	</div>
</body>
</html>
