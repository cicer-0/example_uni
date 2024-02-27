<!-- resources/views/universities/index.blade.php -->

<h1>Listado de Universidades</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Año de Fundación</th>
            <th>Eslogan</th>
            <th>Website</th>
            <th>Email de Contacto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($universities as $university)
        <tr>
            <td>{{ $university->id }}</td>
            <td>{{ $university->name }}</td>
            <td>{{ $university->location }}</td>
            <td>{{ $university->founding_year }}</td>
            <td>{{ $university->motto }}</td>
            <td>{{ $university->website }}</td>
            <td>{{ $university->contact_email }}</td>
            <td>
                <a href="{{ route('universities.show', $university->id) }}">Ver</a>
                <a href="{{ route('universities.edit', $university->id) }}">Editar</a>
                <form action="{{ route('universities.destroy', $university->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $universities->links() }}
