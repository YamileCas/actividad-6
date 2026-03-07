<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Superhero</title>
</head>
<body>
    <h1>Edit Superhero</h1>
    <p>Update operation example.</p>

    <form>
        <label>Name:</label>
        <input type="text" value="{{ $superhero->name }}">

        <br><br>

        <label>Real Name:</label>
        <input type="text" value="{{ $superhero->real_name }}">

        <br><br>

        <label>Gender:</label>
        <input type="text" value="{{ $superhero->gender }}">

        <br><br>

        <label>Universe:</label>
        <select>
            @foreach($universes as $u)
                <option {{ $superhero->universe_id == $u->id ? 'selected' : '' }}>
                    {{ $u->universe }}
                </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('superheroes.index') }}">Back to Superheroes</a>
</body>
</html>