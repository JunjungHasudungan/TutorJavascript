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