<!DOCTYPE html>
<html>
<head>
    <title>Pagina Web - Login Aluno</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="home">

    <h2>Login Aluno</h2>

    <?php
    // Verificar se houve tentativa de login
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $alunos = [
            "ana" => "111",
            "bruno" => "222",
            "carla" => "333",
            "daniel" => "444"
        ];

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        if (isset($alunos[$nome]) && $alunos[$nome] === $senha) {
            // Redireciona automaticamente para a página "dashboard"
            header("Location: ../dashboard_alunos_estatico.php");
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

        <label for="disciplina">Disciplina:</label>
        <input type="text" name="disciplina" id="disciplina" required>
        <br><br>

        <label for="turma">Turma:</label>
        <input type="text" name="turma" id="turma" required>
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
