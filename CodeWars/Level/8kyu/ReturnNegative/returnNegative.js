
const inputNum = document.getElementById("inputNumber");
const outputNumb = document.getElementById("outputNumber");
const btnCheckNum = document.getElementById("btnCheck");
const alertInput = document.getElementById("alertinput");
inputNum.value = "";

const validateInput = () => {
   if(isNaN(inputNum.value)) {
    alertInput.innerText = "Inputan harus angka";

    setTimeout(()=> {
        alertInput.innerText = ""
    }, 2000);
   } 
}

const btnCheck = () => {
    if(inputNum.value == ""){
       alertInput.innerHTML = "input tidak boleh kosong"
       setTimeout(()=> {
        alertInput.innerHTML = ""

        
       }, 2000)
    } else if( inputNum.value > 0) {
        outputNumb.innerText = - inputNum.value
    }else {
        outputNumb.innerText =  inputNum.value
    }
}