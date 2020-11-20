<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email de contato</title>
</head>
<body>
<h1>Email de contato recebido no site</h1>

<p style="margin: 0;"><strong>Assunto:</strong></p>
<p>{{ $subject }}</p>
<hr>
@if($email)
    <p style="margin: 0;"><strong>Recebido de:</strong></p>
    <p>{{ $email }}</p>
    <hr>
@endif
<p style="margin: 0;"><strong>Mensagem:</strong></p>
<p>{{ $content }}</p>
</body>
</html>
