@csrf
<input name="name" type="text" placeholder="Nombre" value="{{ old('name', $user->name) }}">
<input name="email" type="email" placeholder="ejemplo@correo.com" value="{{ old('email', $user->email) }}">
<input name="password" type="password" placeholder="Contraseña" value="{{ old('password', $user->password) }}">
<select name="role">
    @foreach ($roles as $role)
        <option value="{{ $role->id }}" @if($role->id == $user->role_id) selected @endif>{{ $role->name }}</option>
    @endforeach
</select>
 