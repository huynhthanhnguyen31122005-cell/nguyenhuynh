<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
  <table>
    <tr>
      <?php
        for($i = 1; $i <= 10; $i++){
           echo "<th>Chuong $i</th>";
        }
      ?>
    </tr>
    <?php
    $i = 0;
    while ($i < 10) {
        $i++;
        echo "<tr>";
        $j = 0;
        while ($j < 10) {
            $j++;
            echo "<td>" . "$j x $i = " . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
?>
  </table>
</div>
    <?php
    // Bài tập 1
        $so = rand(1, 100);
        echo "Các số chẵn từ 1 đến $so là: \n";
        for($i = 1; $i < $so; $i++){
            if($i%2==0) echo "$i ";
        }
    // Bài tập 2
        $i = 0;
        while($i < 10){
            $i++;
            $j = 0;
            echo "<br>Chuong $i<br>";
            while($j < 10){
                $j++;
                echo "$i x $j = ", $i * $j, "<br>";
            }
        }
    // 
    ?>
    
    <?php
    // Bai tap3
    $sonn = rand(-100, 100);
    if($sonn > 0){
        echo "$sonn la so duong<br>";
        echo "Cac uoc cua $sonn la: ";
        for($i = 1; $i <= $sonn; $i++){
            if($sonn % $i == 0){
                echo "$i ";
            }
        }
    }
    else{
        echo "$sonn la so khong duong";
    }
    // Hàm kiểm tra số nguyên tố
    function nguyenTo($a){
        if($a < 2){
            return false;
        }
        if($a == 2 || $a == 3){
            return true;
        }
        for($i = 2; $i <= sqrt($a); $i++){
            if($a % $i == 0){
                return false;
            }
        }
        return true;
    }


    if(nguyenTo($sonn)){
        echo "<br>".$sonn." la so nguyen to";
    }else{
        echo "<br>".$sonn." khong phai la so nguyen to";
    }
    // Tổng các số nguyên tố
    $tong = 0;
    echo "<br> Cac so nguyen to nho hon $sonn: ";
    for($i = 2; $i < $sonn; $i++){
        if(nguyenTo($i)){
            echo "$i ";
            $tong += $i;
        }
    }
    echo "<br>Tong cac so nguyen to la: ".$tong." ";

    function SCP($a) {
        $sqrtA = (int) round(sqrt($a));
        if($a > 0 && $sqrtA * $sqrtA == $a){
            return true;
        }
        return false;
    }

    if(SCP($sonn)){
        echo "<br>$sonn là số chính phương.";
    } else {
        echo "<br>$sonn không phải là số chính phương.";
    }
    ?>
</body>
</html>