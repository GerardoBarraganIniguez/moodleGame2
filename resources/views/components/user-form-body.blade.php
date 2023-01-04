@csrf
<form>
  <div class="form-group">
    <label for="name">Nombre completo</label>
    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="..." value="{{ old('name', $user->name) }}">
  </div>
  <div class="form-group">
    <label for="email">Correo electrónico</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" value="{{ old('email', $user->email) }}">
  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="..." value="{{ old('password', $user->password) }}">
  </div>
  <div class="form-group">
    <label class="form-check-label" for="role">Tipo de perfil</label>
    <br>
    <select name="role">
      @foreach ($roles as $role)
          <option value="{{ $role->id }}" @if($role->id == $user->role_id) selected @endif>{{ $role->name }}</option>
      @endforeach
    </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form> 