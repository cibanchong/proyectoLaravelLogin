<form action ="{{ route('proyecto.update',$post->id)}}" method="post">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label for="title">Nombre</label>
		<input type="text" class="form-control" id="nombre" name="nombre"
			value="{{$proyecto->nombre }}" required>
	</div>
	<div class="form-group">
		<label for="body"> Description</label>
		<textarea class="form-control" id="Description" name="Descripcion" rows="3" required>{{$producto->descripcion}}</textarea>
	</div>
	<button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>