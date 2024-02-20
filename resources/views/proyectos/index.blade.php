<html>

<body>
    <h1>Hello,</h1>

    @foreach ($proyectos as $proyecto)
        <li>{{ $proyecto->email }}</li>
        <a href="{{ route('editar.edit', $proyecto->id) }}">Editar</a>
        <a href="{{ route('show.destroy', $proyecto->id) }}">Eliminar</a>
    @endforeach
    /<a href="{{ route('crea.create') }}">Crear</a>

    <body>
        <html>
