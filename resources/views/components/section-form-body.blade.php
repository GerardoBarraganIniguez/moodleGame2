@csrf
<form>
  <div class="form-group">
    <label for="name">Código de la sección</label>
    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="..." value="{{ $section->name }}">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form> 
