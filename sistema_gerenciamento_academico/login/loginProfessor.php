<!DOCTYPE html>
<html>
<head>
    <title>Pagina Web - Login Professor</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="home">
    
    <h2>Login Professor</h2>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuarios = [
            "adm" => "73",
            "nylton" => "123",
            "lucia" => "345",
            "roger" => "678"
        ];

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        if (isset($usuarios[$nome]) && $usuarios[$nome] === $senha) {
            // Redireciona automaticamente para servicos
            header("Location: ../servicos_professor/pagina_servicos_professor.php");
            exit(); // Interrompe o script após o redirecionamento
        } else {
            echo "<p style='color:red;'>Nome ou senha incorretos. Tente novamente.</p>";
        }
    }
    ?>

    <!-- Formulário de Login -->
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br><br>

        <button type="submit">Login</button>
    </form>

    <hr>
    <a href="../index.php">Home Page</a>
</body>
<footer>
    <p>Desenvolvido por Juliana e Sander</p>
</footer>

</html>
