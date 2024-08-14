<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Looping</title>
</head>
<body>
<h1>Berlatih Looping</h1>

<?php
echo "<h3>Soal No 1 Looping I Love PHP</h3>";
// Soal No 1
// Looping I Love PHP
$i = 0 ;
$j = 0 ;
echo "Looping ke-1 : <br>" ;
while($i <= 20){
    if($j == 20){
        if($i == 20){
            echo "Looping ke-2 : <br>";
        }
        echo "$i"." - "." I Love PHP<br>" ;
        $i = $i - 2 ;
        if($i < 2){
            break ;
        }
        
    }else{
        $i = $i + 2 ;
        echo "$i"." - "." I Love PHP<br>" ;
        $j = $j + 2;
    }
}


echo "<h3>Soal No 2 Looping Array Modulo</h3>";
// Soal No 2
$rest = [];
$numbers = [18, 45, 29, 61, 47, 34];
echo "Array numbers: <br>";
print_r($numbers);
echo "<br>Array sisa baginya adalah: <br>";
foreach ($numbers as $number) {
    $rest[] = $number % 5;
}
print_r($rest);
echo "<br>";

echo "<h3>Soal No 3 Looping Associative Array</h3>";
// Soal No 3
$items = [
    ['id' => '001', 'name' => 'Keyboard Logitek','price' => 60000,'description' => 'Keyboard yang mantap untuk kantoran','source'=> 'logitek.jpeg'],
    ['id' => '002','name' => 'Keyboard MSI','price' =>  300000,'description' => 'Keyboard gaming MSI mekanik','source' => 'msi.jpeg'],
    ['id' => '003','name' => 'Mouse Genius','price' => 50000,'description' => 'Mouse Genius biar lebih pinter','source' => 'genius.jpeg'],
    ['id' => '004','name' => 'Mouse Jerry','price' => 30000,'description' => 'Mouse yang disukai kucing','source'  =>'jerry.jpeg']
];

foreach ($items as $item) {
    echo "ID : ".$item['id']."<br>";
    echo "Name : ".$item['name']."<br>";
    echo "Price : ".$item['price']."<br>";
    echo "Description : ".$item['description']."<br>";
    echo "Img : ".$item['source']."<br>";
    echo "=================================================<br>";
}

echo "<h3>Soal No 4 Asterix</h3>";
// Soal No 4
for ($i=1; $i <= 5; $i++) { 
    for ($j=1; $j <= $i ; $j++) { 
        echo "*" ;
    }
    echo "<br>" ;
}
?>
</body>
</html>
