<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Listener</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
    <div class="container">
        <label for="nama" id="label"> Nama</label>
        <input type="text" id="inputText" oninput="validateInput()">
        <span id="alertInput"></span>
    </div>

    <div class="btn-click">
    <button id="btn" onclick="getInput()">
        Simpan
    </button>
    </div>
    <script src="main.js"></script>
</body>


</html>