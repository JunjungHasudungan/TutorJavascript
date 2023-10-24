<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RemoveDupliate</title>
    <link rel="stylesheet" type="text/css" href="removeDuplicate.css">
</head>
<body>

    <div>
        <h2 id="judul-soal">Soal Remove Duplicate</h2>
    </div>
    <!-- <div id="form">
        <label for="judul" id="judul">angka</label>
        <input type="text" id="inputNumber" oninput="validateInput()">
        <p id="alertInput"></p>
    </div>
    <div id="container-button">
        <button id="btnCheck" onclick="removeDuplicate()">
            check
        </button>
    </div>
    <script src="removeDuplicate.js"></script> -->

    <script>
        const arr = [1, 2, 3, 4];

        const solve = (arr) => {
//  return arr.filter((val,i) => arr.lastIndexOf(val) == i);
// var a=[];
//   var ar=arr.reverse();
//   for (var i=0; i<ar.length; ++i)
//     if (a.indexOf(ar[i])==-1)
//       a.push(ar[i]);
//   return a.reverse();
            console.log("array: ", arr)
        }

        solve(arr);
    </script>
</body>
</html>