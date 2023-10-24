<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Negative</title>

    <link rel="stylesheet"type="text/css" href="returnNegative.css">
</head>
<body>
    <div id="container-soal">
        <h3 id="title">Soal mengembalikan nilai negative</h3>
    </div>
    <div class="container">
        <label for="">Input Angka</label>
        <input type="text" id="inputNumber" oninput="validateInput()" placeholder="masukkan angka">
        <p id="alertinput"></p>
        <button id="btnCheck" onclick="btnCheck()">Check</button>
    </div>
    <div>
        <label>Output</label>
        <span id="outputNumber"></span>
    </div>

    <!-- <p id="inputNumber" oninput="makeNegative()"></p> -->

    <script src="returnNegative.js"></script>
</body>
</html>