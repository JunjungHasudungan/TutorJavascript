<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array Slice dan Splice Javascript</title>
</head>
<body>
    <script>
        modalNumb= [1, 2];
        const numbs = [1, 2, 3, 4, 5];
        numbs.splice(
            2, // dimulai dari indeks kekeberapa 
            1, //berapa banyak element yang akan dihapus
            3, 4 // element yang akan ditambahkan
            );

        console.log(numbs);
    </script>
</body>
</html>