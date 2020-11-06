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
<h1>Solicitação de comprovante de participação em gestão</h1>

<p style="margin: 0;"><strong>Recebido de:</strong></p>
<p>{{ $email }}</p>
<hr>
<p style="margin: 0;"><strong>Cargo ocupado:</strong></p>
<p>{{ $role }}</p>
<hr>
<p style="margin: 0;"><strong>Ano da Gestão:</strong></p>
<p>{{ $year }}</p>
<hr>
<p style="margin: 0;"><strong>Codigo de matricula:</strong></p>
<p>{{ $code }}</p>
<hr>
<p style="margin: 0;"><strong>Nome Completo:</strong></p>
<p>{{ $peopleName }}</p>
</body>
</html>
