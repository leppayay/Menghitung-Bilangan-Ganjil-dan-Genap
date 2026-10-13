<html>
<head>
    <title>Menghitung Bilangan</title>
</head>
<body>
    <h2>Menghitung Bilangan(no/ganjil/genap)</h2>

    <form action="" method="get">
        <label for="bilangan">Bilangan:</label>
        <input type="number" id="bilangan" name="bilangan" required>
        <input type="submit" value="submit">
</form>

    <?php
    if (isset($_GET['bilangan'])) {
        $bilangan = $_GET['bilangan'];
    }

    if ($bilangan == 0) { 
        echo "$bilangan adalah bilangan Nol";
    }elseif ($bilangan % 2 == 0) {
        echo "$bilangan adalah bilangan Genap";
    }else{
        echo "$bilangan adalah bilangan Ganjil";
    }  