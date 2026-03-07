<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Superhero</title>
</head>
<body>
    <h1>Create Superhero</h1>
    <p>Create operation example.</p>

    <form>
        <label>Name:</label>
        <input type="text" placeholder="Enter superhero name">

        <br><br>

        <label>Real Name:</label>
        <input type="text" placeholder="Enter real name">

        <br><br>

        <label>Gender:</label>
        <input type="text" placeholder="Enter gender">

        <br><br>

        <label>Universe:</label>
        <select>
            @foreach($universes as $u)
                <option>{{ $u->universe }}</option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Create</button>
    </form>

    <br>
    <a href="{{ route('superheroes.index') }}">Back to Superheroes</a>
</body>
</html>