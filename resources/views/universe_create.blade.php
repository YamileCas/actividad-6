<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Universe</title>
</head>
<body>
    <h1>Create Universe</h1>
    <p>Create operation example.</p>

    <form>
        <label>Universe:</label>
        <input type="text" placeholder="Enter universe code">

        <br><br>

        <label>Company:</label>
        <input type="text" placeholder="Enter company">

        <br><br>

        <label>Age:</label>
        <input type="text" placeholder="Enter age type">

        <br><br>

        <button type="submit">Create</button>
    </form>

    <br>
    <a href="{{ route('universes.index') }}">Back to Universes</a>
</body>
</html>