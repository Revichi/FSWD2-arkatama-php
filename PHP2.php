<?php
function DL($tinggi_segitiga=5,$symbol="*"){
    echo"<h2><b>Triangle D. Right </b></h2>";
    for($i = 1; $i <= $tinggi_segitiga; $i++) {
        for($j = 1; $j <= $tinggi_segitiga-$i; $j++) {
        echo "$symbol";
    }
        echo "<br>";
    }

}
function UL($tinggi_segitiga=5,$symbol="*"){
    echo"<h2><b>Triangle U. Left </b></h2>";
    for($i = 1; $i <= $tinggi_segitiga; $i++) {
        for($j = 1; $j <= $i; $j++) {
        echo " $symbol";
        }
        echo "<br>";
    }
}
function UR($tinggi_segitiga=5,$symbol="*"){
    echo"<h2><b>Triangle U. Right </b></h2>";
    for($i = $tinggi_segitiga; $i >0; $i--) {
    for($j = 1; $j <= $i; $j++) {
        echo "&nbsp &nbsp";
    }
    for($k=$tinggi_segitiga;$k>=$i;$k--){
        echo" $symbol";
    }
    echo "<br>";
    }
}
function DR($tinggi_segitiga=5,$symbol="*"){
    echo"<h2><b>Triangle D. Right </b></h2>";
    for($i = 1; $i <= $tinggi_segitiga; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo " &nbsp";
    }
    for($k=$tinggi_segitiga;$k>=$i;$k--){
        echo"$symbol";
    }
    echo "<br>";
    }
}



function pattern($pilih){
    if ($pilih == "UL6S"){
        UL(6,"s");
    } else if ($pilih == "DL"){
        DL();
    } else if ($pilih == "UR"){
       UR();
    } else if ($pilih == "DR"){
        DR();
    } else if ($pilih == "UL"){
        DL();
    } else if ($pilih == "DL10@"){
        DL(10,"@");
    }else{
        echo"Tidak Ada Dalam Pilihan";
    }
}
echo pattern("DL10@");


?>