<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <script src="/js/login.js"></script>
    <link rel="stylesheet" href="/css/login.css">    
    <title>Login</title>
</head>
<body>
    <div class="login">
        <form id="login">
            <label for="email">E-mail:</label><br>
            <input id="email" type="email" name="email" require><br>
            <label for="password">Senha:</label><br>
            <input id="password" type="password" name="password" require><br>
            <button type="submit">Entrar</button>
    </div>
</form>
</body>
</html>