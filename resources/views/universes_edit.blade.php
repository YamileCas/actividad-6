<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Universe</title>
</head>
<body>
    <h1>Edit Universe</h1>
    <p>Update operation example.</p>

    <form>
        <label>Universe:</label>
        <input type="text" value="{{ $universe->universe }}">

        <br><br>

        <label>Company:</label>
        <input type="text" value="{{ $universe->company }}">

        <br><br>

        <label>Age:</label>
        <input type="text" value="{{ $universe->age }}">

        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('universes.index') }}">Back to Universes</a>
</body>
</html>