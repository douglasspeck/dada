<!DOCTYPE php>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Gerador de Poema Dadá</title>
</head>
<body>
    <header>
        <h1>Gerador de Poema Dadaísta</h1>
        <blockquote aria-label="Trecho do Manifesto Dadaísta" cite="http://oficinadeletras.net/100-anos-do-1t-manifesto-dada-1918-t1-de-tristan-tzara/">
            <i>"Eu escrevo um manifesto e não quero nada, 
            eu digo portanto certas coisas e sou por 
            princípio contra os manifestos, 
            como sou também contra os princípios."</i>
        </blockquote>
    </header>
    <section class="content" id="first">
        <form id="textInput" action="index.php" method="post" onsubmit="dada(inputText)">
            <label for="textInput"><h2>Seu texto aqui:</h2></label><br>
            <textarea
                id="inputText" name="inputText" rows="2" cols="80"
                placeholder="Duvida da luz dos astros, de que o sol tenha calor. Duvida até da verdade, mas confia em meu amor."
                required        
            ></textarea><br>
            <button type="submit" id="submit">Gerar</button>
        </form>
    </section>
    <section class="content" id="second">
        <h2>Suas palavras:</h2>
        <div id="words">
            <?php 
                $inputText = $_POST['inputText'];
                $words = split(' ', $inputText);
                for ($i = 0; $i < count($words); $i++) {
                    str_replace(',', '', $words[$i]);
                    str_replace('.', '', $words[$i]);
                    str_replace(';', '', $words[$i]);
                    str_replace('!', '', $words[$i]);
                    str_replace('?', '', $words[$i]);
                    str_replace('"', '', $words[$i]);
                    echo
                        '<div class="cell" ondrop="drop(event)">
                        <span class="word" draggable="true" ondragstart="drag(event)">', $words[$i], '</span>
                        </div>'
                    ;
                }
            ?>
        </div>
    </section>
    <footer>Site desenvolvido por <a href="twitter.com/tiodopaave">Douglas Speck</a></footer>

    <script type="text/javascript" src="script.js"></script>

</body>
</html>