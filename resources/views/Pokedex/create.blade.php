@extends('template.default')

@section('content')
<h2>Add Pokemon</h2>

<form action="/pokedex" method="POST">
@csrf

<table class="table">
    <tr>
        <td>Name</td>
        <td>
            <input type="text" name="name" class="form-control"
                   placeholder="Enter pokemon name">
        </td>
    </tr>

    <tr>
        <td>Type</td>
        <td>
            <input type="text" name="type" class="form-control"
                   placeholder="Enter pokemon type (Fire, Water, etc.)">
        </td>
    </tr>

    <tr>
        <td>Species</td>
        <td>
            <input type="text" name="species" class="form-control"
                   placeholder="Enter species">
        </td>
    </tr>

    <tr>
        <td>Height</td>
        <td>
            <input type="number" name="height" class="form-control"
                   placeholder="Enter height">
        </td>
    </tr>

    <tr>
        <td>Weight</td>
        <td>
            <input type="number" name="weight" class="form-control"
                   placeholder="Enter weight">
        </td>
    </tr>

    <tr>
        <td>HP</td>
        <td>
            <input type="number" name="hp" class="form-control"
                   placeholder="Enter HP">
        </td>
    </tr>

    <tr>
        <td>Attack</td>
        <td>
            <input type="number" name="attack" class="form-control"
                   placeholder="Enter attack">
        </td>
    </tr>

    <tr>
        <td>Defense</td>
        <td>
            <input type="number" name="defense" class="form-control"
                   placeholder="Enter defense">
        </td>
    </tr>

    <tr>
        <td>Image URL</td>
        <td>
            <input type="text" name="image_url" class="form-control"
                   placeholder="Enter image URL">
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <button type="submit" class="btn btn-success">Save</button>
            <a href="/pokedex" class="btn btn-secondary">Back</a>
        </td>
    </tr>
</table>
</form>
@endsection
