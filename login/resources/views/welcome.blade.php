<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        /* Reset CSS básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
 
        /* Estilos globais */
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
 
        .login-container {
            text-align: center;
        }
 
        .login-form {
            background-color: #000;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
 
        .login-form h2 {
            color: #ff6ec7;
            margin-bottom: 20px;
        }
 
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
        }
 
        .login-form input::placeholder {
            color: #888;
        }
 
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #ff6ec7;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
 
        .login-form button:hover {
            background-color: #ff4da6;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form class="login-form">
            <h2>Login</h2>
            <input type="text" placeholder="Usuário">
            <input type="password" placeholder="Senha">
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>