<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <h1>Hi this is user page from controller</h1>
    <h2>Hallo {{$name}}</h2>
    <h2>Data User</h2>
    <p>Nama : {{$user['name']}}</p>
    <p>Email : {{$user['email']}}</p>
    <p>Alamat : {{$user['alamat']}}</p>
    <p>Kode Pos : {{$user['kode pos']}}</p>

</body>

</html>