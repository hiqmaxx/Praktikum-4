<!DOCTYPE html>
<html>
<head>
    <title>Halaman Salam</title>
</head>
<body>
    <h1>Selamat datang, {{ $name }}!</h1>
    <form method="POST" action="/submit-name">
        @csrf
        <input type="text" name="name" placeholder="Isi nama">
        <button type="submit">Submit</button>
    </form>
</body>
</html>