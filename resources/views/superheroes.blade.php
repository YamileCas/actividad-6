<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superheroes</title>
</head>
<body>
    <h1>Superheroes</h1>
    <p>Read operation for superheroes.</p>

    @foreach($superheroes as $hero)
        <p>
            {{ $hero->name }} — {{ $hero->universe->universe }}
        </p>
    @endforeach

    <ul>
        <li><a href="{{ route('superheroes.create') }}">Go to Create Superhero</a></li>
        <li><a href="{{ route('superheroes.edit') }}">Go to Edit Superhero</a></li>
        <li><a href="{{ route('universes.index') }}">Go to Universes</a></li>
    </ul>
</body>
</html>