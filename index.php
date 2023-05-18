<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .labels
        {
            margin-top:35px;
            color:black;
            font-size:large; 
            font-weight:800;
        }
        #paragraph
        {
            width: 350px;
        }
    </style>
    <title>PHP BadWords</title>
</head>
<body>
    <header style="text-align:center;">
        <h1>Benvenuto nel mio primo programma in PHP</h1>
    </header>
    <main>
        <form action="" style="padding-left:30px;">
            <div class="labels">
                <label for="paragraph">Paragrafo:</label> 
            </div>
            <input id="paragraph" type="text" minlength="20" placeholder="Digita la tua frase (lunghezza minima: 20 caratteri)">
            <div class="labels">
                <label for="bad_word">Parola da censurare:</label> 
            </div>
            <input id="bad_word" type="text" minlength="3" placeholder="Digita la parola da censurare(lunghezza minima: 3 caratteri)">
            <div style="margin-top:50px;">
                <button type="submit">Conferma</button>
            </div>
        </form>
    </main>
</body>
</html>