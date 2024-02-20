<form action ="{{route('update.update',$proyecto->id)}}" method="POST">
    @csrf
    @method("PUT")
	<div class="form-group">
		<label for="title">Nombre</label>
		<input type="text" class="form-control" id="nombre" name="email"
			value="{{$proyecto->email }}" required>
	</div>
	<div class="form-group">
		<label for="body"> Description</label>
		<textarea class="form-control" id="Description" name="contra" rows="3" required>{{$proyecto->contra}}</textarea>
	</div>
	<button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>
