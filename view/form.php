<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        :root {
            --cor0: #c5ebd6;
            --cor1: #83e1ad;
            --cor2: #3ddc84;
            --cor3: #2fa866;
            --cor4: #1a5c37;
            --cor5: #063d1e;
        }

        @font-face {
            font-family: 'Android';
            src: url(idroid.otf) format('opentype');
            font-size: 2em;
            font-weight: bolder;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #c5ebd6;

        }

        header {
            padding: 30px;
            background-image: linear-gradient(to bottom, var(--cor3), var(--cor4), var(--cor5));
            margin-bottom: 10px;
        }

        .content {
            display: flex;
            justify-content: center;
        }

        .contato {
            width: 100%;
            max-width: 500px;
        }

        .form {
            display: flex;
            flex-direction: column;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }

        .field {
            padding: 10px;
            margin-bottom: 7px;

        }

        textarea {
            height: 150px;
        }

        .butao {
            padding: 8px;
        }

        .title {
            font-family: 'Android';
            text-align: center;
        }
    </style>

</head>

<body>
    <header>
        <h2 class="title">Formulário de contato</h2>
    </header>

    <section class="content">
        <div class="contato">
            <form class="form" method="post" action="#">
                <input class="field" name="name" placeholder="nome">
                <input class="field" name="assunto" placeholder="assunto">
                <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="field" placeholder="digite sua mensagem"></textarea>
                <input type="submit" class="butao" value="enviar">
            </form>
        </div>
    </section>

</body>

</html>