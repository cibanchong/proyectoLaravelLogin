

<html>
	<body>
		<h1>Hello,</h1>

		@foreach ($proyectos as $proyecto)
			<li>{{$proyecto->nombre}}</li>
			<a href="{{route('proyecto.edit', $proyecto->id) }}">Editar</a>

				<a href="{{ route('proyecto.edit', ['proyecto'=> $proyecto]) }}">
				Editar</a>
		@endforeach

	<body>
<html>		