const arr = document.getElementById("isi_array"); // inisialisasi var arr
const input_arr = document.getElementById('input_nilai');
const jumlah_arr = document.getElementById("jumlah_array");
const alertInput = document.getElementById("alertInput");
const input = document.querySelector("input");
const isi_array = []; // sebagai penamppung nilai array
const inputan_kosong = "Tidak data inputan";

arr.innerHTML = "[" + isi_array.join(', ') + "]"; // menampilkan nilai array ke html
input_arr.value = ""; // memberikan nilai default string kosong
alertInput.value = ""; // memberikan nilai default string kosong
jumlah_arr.value = 0; // memberikan nilai default tipe number
jumlah_arr.innerHTML = isi_array.length; // menampilkan nilai / jumlah array ke html

const btnPush = () => { // mengisi nilai inputan kedalam arr melalui menekan tombol btn push
    if (input_arr.value == "") {
        alertInput.innerHTML = inputan_kosong;
        jumlah_arr.innerHTML = isi_array.length;  
        setTimeout(()=> {
            alertInput.innerHTML = ""
        }, 2000);
    }else {
        isi_array.push(input_arr.value);
        arr.innerHTML = "[" + isi_array.join(', ') + "]";
        input_arr.value = "";
        jumlah_arr.innerHTML = isi_array.length;        
    }
}

const btnPop = () => {
    if(isi_array.length == 0) {
        alertInput.innerHTML = "Tidak dapat menghapus karna item array tidak ada.."
        setTimeout(()=>{
            alertInput.innerHTML = ""
        }, 2000);
    }else {
        isi_array.pop(input_arr.value);
        arr.innerHTML = "[" + isi_array.join(', ') + "]";
        input_arr.value = "";
        jumlah_arr.innerHTML = isi_array.length;   
    }
}

// mengisi nilai dengan menekan tombol enter
input.addEventListener("keydown", (event) => {
    if(event.key == "Enter"){
        if(input_arr.value == "") {
            alertInput.innerHTML = inputan_kosong;
            jumlah_arr.innerHTML = isi_array.length;
            setTimeout(()=> {
                alertInput.innerHTML = "";
            }, 2000)
        }else{
            isi_array.push(input_arr.value);
            arr.innerHTML = "[" + isi_array.join(', ') + "]";
            input_arr.value = "";
            jumlah_arr.innerHTML = isi_array.length;
        }
    }
});

const btnSlice = () => {
    alert('tombol slice')
}

