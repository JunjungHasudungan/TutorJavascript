<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Array</title>
    <link rel="stylesheet" href="styleArray.css">
</head>
<body>
    <div>
        <h1>Tutor Array</h1>
        jumlah array<p id="jumlah_array"></p>
    </div>
    <div class="container">
        <p id="isi_array"></p>
        
    </div>

    <div class="form_input">
        <input type="text" id="input_nilai" placeholder="isi dengan nama buah">
        <p id="alertInput"></p>
        <button id="btn_push" onclick="btnPush()"> Btn push</button>
        <button id="btn_pop" onclick="btnPop()"> Btn Pop</button>
        <button id="btn_slice" onclick="btnSlice()"> Btn Slice</button>
    </div>
    <script src="tutorArray.js"></script>
</body>
</html>