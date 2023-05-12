<html>
<body>
    <!-- dari lat3 -->
    <?php
    $i = 0;
    $n = 3; //menentukan variable yang akan ditambahkan
    $hasil = 0;
    echo "Dari Lat3.php <br>";
    while($i<=$n) {
        $hasil += $i;
    if($i !=$n) {
        echo "$i + ";
    } 
    elseif($i = $n) {
        echo "$i = ";
    }
    $i++;
    }
    echo "$hasil";
    ?>
    <br><br>

    <!-- dari lat4 -->
    <?php
        echo "Dari Lat4.php <br>";
        for($i=1; $i<=5; $i++){
            echo "Nomor " . $i . "<br>";
        }
        echo "<br>";
        $i=1;
        do{
            echo "Nomor " . $i . "<br>";
            $i++;
        }
        while($i<=5)
    ?>
</body>
</html>