<!DOCTYPE html>
<html>

<head>
    <title>Messaggio dal Selfwork006</title>
</head>

<body>
    <h1>Hai ricevuto un nuovo messaggio</h1>
    <p>Ecco i dettagli del messaggio:</p>
    <ul>
        <li><strong>Nome:</strong> {{ $request['nome'] }}</li>
        <li><strong>Email:</strong> {{ $request['email'] }}</li>
        <li><strong>Telefono:</strong> {{ $request['telefono'] }}</li>
        <li><strong>Messaggio:</strong> {{ $request['messaggio'] }}</li>
    </ul>
</body>

</html>
