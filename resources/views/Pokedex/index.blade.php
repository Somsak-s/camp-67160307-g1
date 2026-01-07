<a href="/pokedex/create">+ Add Pokemon</a>

<table border="1">
<tr>
    <th>Name</th><th>Type</th><th>HP</th><th>Action</th>
</tr>
@foreach($pokedexs as $p)
<tr>
    <td>{{ $p->name }}</td>
    <td>{{ $p->type }}</td>
    <td>{{ $p->hp }}</td>
    <td>
        <a href="/pokedex/{{ $p->id }}/edit">Edit</a>
        <form action="/pokedex/{{ $p->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
