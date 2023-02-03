<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body class="container py-5 bg-dark text-white">
    <header>
        <h1>Passwort Generator</h1>
        <h4>Generiere ein sicheres Passwort um deine Accounts noch sicherer zu machen</h4>
    </header>
    <main class="py-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <form id="password-settings" method="post">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="radio" role="switch" name="possibility" id="lettersAndNumbers" value="lettersAndNumbers" checked>
                        <label class="form-check-label" for="lettersAndNumbers">
                            Buchstaben & Zahlen
                        </label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="radio" role="switch" name="possibility" id="random" value="random">
                        <label class="form-check-label" for="random">
                            Zufällig
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="range" class="form-range" min="5" max="30" step="1" value="10" name="length" id="length">
                        <label for="length" class="form-label">Länge (<span id="choosenLength">10</span>)</label>
                    </div>
                    <button class="btn btn-primary form-control mt-3" id="generatePassword">Passwort generieren</button>
                </form>
                <div id="response">

                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 d-flex mt-3 mt-sm-0" id="passwordContainer">
                <p id="password" class="text-left text-sm-center text-black"></p>
            </div>
        </div>
    </main>
    <footer class="d-flex flex-row justify-content-between">
        <div>
            <p>&copy; Stefan Bernhard 2023</p>
        </div>
        <div>
            <ul class="list-group list-group-horizontal list-inline">
                <li class="me-3"><a href="#">Impressum</a></li>
                <li><a href="#">Datenschutz</a></li>
            </ul>
        </div>
        
    </footer>
</body>
</html>