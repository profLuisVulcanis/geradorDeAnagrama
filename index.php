<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luis Augusto Vulcanis">
    <meta name="description" content="Sistema de geração de anagramas, baseado em PHP">
    <title>Gerador de Anagramas a partir de uma Palavra</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/logo.svg">
</head>
<body>

    <header>
        <h1>Gerar Anagramas</h1>
    </header>

    <main>
        <?php include './php/msg.php'; ?>
        <h2>Digite uma palavra de até 8 caracteres</h2>
        <form action="./" method="post">
            <div class="formBox">
                <label for="word">Palavra Escolhida:</label>
                <input type="text" name="word" id="word" maxlength="8" placeholder="Digite a palavra" required autofocus>
            </div>
            <div class="formBox">
                <input type="submit" value="Verificar Anagramas" class="submit">
            </div>
            <input type="hidden" name="key" id="key" value="anagrama">
        </form>
    </main>

    <footer>
        <address>
            Exercício elaborado por <a href="mailto:luisvulcanis@gmail.com">Luis Vulcanis</a> para o <a href="https://youtube.com/@professorluis/videos" target="_blank" rel="noopener noreferrer">Canal do Prof. Luis Vulcanis</a> &copy; 2023.
        </address>
    </footer>
    
</body>
</html>
