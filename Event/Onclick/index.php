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

</body>

<script>
    const inputText = document.getElementById("inputText");
    const alertInput = document.getElementById("alertInput");
    const inputKosong = "Inputan tidak boleh kosong"
    const maksimalInput = "Maksimal inputan 20 karakter"
    const minumalInput = "Minumum inputan 8 karakter"
        inputText.value = "";

        // validasi inputan
        const validateInput = () => {
            if (inputText.value.trim() === "") {
                alertInput.innerHTML = inputKosong;
            }else if(inputText.value.length > 20) {
                alertInput.innerHTML = maksimalInput
            } else if(inputText.value.length < 8) {
                alertInput.innerHTML = minumalInput
            }else {
                alertInput.innerHTML = ""; // Menghilangkan pesan kesalahan jika input valid
            }
        }

        function getInput() {
            const inputValue = inputText.value;
            
            if(inputValue == "" || inputText.value.length == 0){
                alertInput.innerHTML = inputKosong
            }

        }

</script>
</html>