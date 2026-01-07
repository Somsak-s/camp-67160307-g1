<table class="table">
<form action="/pokedex/{{ $pokedex->id }}" method="POST">
@csrf
@method('PUT')

<tr>
    <td>Name</td>
    <td>
        <input type="text" name="name" class="form-control"
               value="{{ $pokedex->name }}">
    </td>
</tr>

<tr>
    <td>Type</td>
    <td>
        <input type="text" name="type" class="form-control"
               value="{{ $pokedex->type }}">
    </td>
</tr>

<tr>
    <td>Species</td>
    <td>
        <input type="text" name="species" class="form-control"
               value="{{ $pokedex->species }}">
    </td>
</tr>

<tr>
    <td>Height</td>
    <td>
        <input type="number" name="height" class="form-control"
               value="{{ $pokedex->height }}">
    </td>
</tr>

<tr>
    <td>Weight</td>
    <td>
        <input type="number" name="weight" class="form-control"
               value="{{ $pokedex->weight }}">
    </td>
</tr>

<tr>
    <td>HP</td>
    <td>
        <input type="number" name="hp" class="form-control"
               value="{{ $pokedex->hp }}">
    </td>
</tr>

<tr>
    <td>Attack</td>
    <td>
        <input type="number" name="attack" class="form-control"
               value="{{ $pokedex->attack }}">
    </td>
</tr>

<tr>
    <td>Defense</td>
    <td>
        <input type="number" name="defense" class="form-control"
               value="{{ $pokedex->defense }}">
    </td>
</tr>

<tr>
    <td>Image URL</td>
    <td>
        <input type="text" name="image_url" class="form-control"
               value="{{ $pokedex->image_url }}">
    </td>
</tr>

<tr>
    <td colspan="2">
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/pokedex" class="btn btn-secondary">Back</a>
    </td>
</tr>

</form>
</table>
