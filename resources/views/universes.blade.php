<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Universes</title>
</head>
<body>
    <h1>Universes</h1>
    <p>Read operation for universes.</p>

    @foreach($universes as $u)
        <h2>{{ $u->universe }}</h2>
        <p>{{ $u->company }} - {{ $u->age }}</p>

        <ul>
            @foreach($u->superheroes as $hero)
                <li>{{ $hero->name }}</li>
            @endforeach
        </ul>
    @endforeach

    <ul>
        <li><a href="{{ route('universes.create') }}">Go to Create Universe</a></li>
        <li><a href="{{ route('universes.edit') }}">Go to Edit Universe</a></li>
        <li><a href="{{ route('superheroes.index') }}">Go to Superheroes</a></li>
    </ul>
</body>
</html>