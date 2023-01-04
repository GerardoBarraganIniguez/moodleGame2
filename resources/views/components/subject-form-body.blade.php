@csrf

<form>
  <div class="form-group">
    <label for="name">Nombre de la materia</label>
    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="..." value="{{ old('name', $subject->name) }}">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form> 
