<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div><form action="" method="GET" style="text-align: center; justify-content: center;">
        <h1>Login</h1>
        <label for="email">Digite seu email:</label>
        <input type="text" id="email" placeholder="Digite seu email aqui" value="{{ old('email') }}" required><br>

        <label for="password">Digite sua senha:</label>
        <input type="password" id="password" placeholder="Digite sua senha aqui" value="{{ old('password') }}" required><br>

        <button type="submmit">Enviar</button>

        </form>

        <?php
 
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $email = $_GET["email"]; 
            $password = $_GET["password"];

            if($email == "meu@email.com" && $password == "A123@"){
                return redirect()->route('colaborador.create', $colaborador);

            }

            else{
                return redirect('/')->with('erro', 'Email ou senha estão errados');
            }
            
        }
        ?>
        <a href="{{ route('colaborador.create') }}">Cadastrar novo Colaborador</a>
    </div>    
</body>
</html>