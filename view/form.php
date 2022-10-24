<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/forms.css">
</head>

<body>
    <header>
        <h1 class="title">Formulário de contato</h1>
        <p>Entre em contato com a gente no formulário abaixo</p>
    </header>

    <div class="links">
        <nav>
            <a href="#">Home</a>
            <a href="../index.php" target="_blank" rel="previous">Site Oficial</a>
            <a href="#mensagem">Denuncia</a>
        </nav>
    </div>
    
    <main>
        <section class="content">
            <div class="contato">
                <form class="form" method="post" action="./respostas.php">
                    <input class="field" name="name" placeholder="nome">
                    <input class="field" name="assunto" placeholder="assunto">
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="field" placeholder="digite sua mensagem"></textarea>
                    <input type="submit" class="butao" value="enviar">
                </form>
            </div>
        </section>
</main>

    <footer>
        <p>Site criado por <a href="https://github.com/GuilhermeCOS" target="_blank">Guilherme Camilo</a></p>
    </footer>

</body>

</html>