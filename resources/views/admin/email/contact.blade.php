<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
</head>
<body>
<div>
    <p>Nome: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Tel: {{ $data['tel'] }}</p>
    <p>Mensagem: {{ $data['message'] }}</p>
</div>
</body>
</html>