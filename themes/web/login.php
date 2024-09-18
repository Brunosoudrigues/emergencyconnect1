

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmergencyConnect - Landing Page</title>

    <!-- Font Awesome e estilos externos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= url('assets/css/web/styles.css'); ?>">

    <!-- Scripts externos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<?php
    $this->start("specific-script");
?>
    <link rel="stylesheet" href="<?= url('assets/css/web/styles.css'); ?>">
    <script type="module" src="<?= url('assets/js/web/login.js'); ?>" async></script>
<?php
    $this->end();
?>

<!-- CSS embutido -->
<style>
    /* Estilo geral */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    /* Cabeçalho (nav) */
    header {
        width: 100%;
        background-color: #ff9999; /* Alterado para vermelho claro */
        padding: 10px 20px;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #nav_logo {
        font-size: 24px;
        font-weight: bold;
    }

    #nav_list {
        display: flex;
        list-style: none;
    }

    #nav_list a {
        color: white;
        text-decoration: none;
        padding: 0 15px;
        transition: color 0.3s;
    }

    #nav_list a:hover {
        color: #ffdd57;
    }

    #mobile_btn {
        background: none;
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
    }

    /* Formulários */
    form {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        margin: 20px 0;
    }

    form label {
        display: block;
        margin-bottom: 10px;
    }

    form label span {
        font-size: 14px;
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    form input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    form button {
        background-color: #ff9999; /* Alterado para vermelho claro */
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #ff6666; /* Alterado para um vermelho mais escuro no hover */
    }

    /* Contêiner de mensagens toast */
    #toast-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
    }

    .toast-message {
        background-color: #333;
        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 14px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        opacity: 0.9;
    }

    .toast-success {
        background-color: #28a745;
    }

    .toast-error {
        background-color: #dc3545;
    }

    input[value] {
        color: #495057;
    }
</style>

</head>
<body>

<header>
    <nav id="navbar">
        <i id="nav_logo">EmergencyConnect</i>
        <ul id="nav_list">
            <li><a href="<?= url(); ?>">Home</a></li>
            <li><a href="<?= url('sobre'); ?>">Sobre</a></li>
            <li><a href="<?= url('contato'); ?>">Contato</a></li>
            <li><a href="<?= url('localizacao'); ?>">Localização</a></li>
            <li><a href="<?= url('faqs'); ?>">FAQs</a></li>
            <li><a href="<?= url('login'); ?>">Entrar</a></li>
        </ul>
        <button id="mobile_btn">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>
</header>

<!-- Contêiner para as mensagens toast -->
<div id="toast-container"></div>

<!-- Formulário de Cadastro de Usuário -->
<form id="formRegister">
    <label>
        <span>Nome:</span>
        <input type="text" name="name" value="Fábio Santos">
    </label>
    <label>
        <span>Email:</span>
        <input type="email" name="email" value="fabiosantos@ifsul.edu.br">
    </label>
    <label>
        <span>Senha:</span>
        <input type="password" name="password" value="1234567">
    </label>
    <button>Cadastrar</button>
</form>

<!-- Formulário de login -->
<form id="formLogin">
    <label>
        <span>Email:</span>
        <input type="email" name="email" value="fabiosantos@ifsul.edu.br">
    </label>
    <label>
        <span>Senha:</span>
        <input type="password" name="password" value="12345678">
    </label>
    <button>Entrar</button>
</form>

</body>
</html>
