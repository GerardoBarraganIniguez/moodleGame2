@csrf

<form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">MATERIA</th>
            <th scope="col">SECCIÓN</th>
            <th scope="col">MAESTRO</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <select name="subject">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}" @if($classroom->subject_id == $subject->id) selected @endif>{{ $subject->name }}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <select name="section">
                    @foreach ($sections as $section)
                        <option value="{{ $section->id }}" @if($classroom->section_id == $section->id) selected @endif>{{ $section->name }}</option>        
                    @endforeach
                </select>
            </td>
            <td>
                <select name="teacher">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}" @if($classroom->teacher_id == $teacher->id) selected @endif>{{ $teacher->name }}</option>        
                    @endforeach
                </select>
            </td>
        </tr>
        </tbody>
    </table>
    <br>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form> 

