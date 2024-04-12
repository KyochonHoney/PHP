<?php
    echo "동해물과 백두산이";
    
    $i = 1;
    
    $a = loopPart();
    $c = 10;
    $b = multi($c);

    echo number_format($b); //1000단위로 컴마
    echo $a;
    function loopPart(){
        return "<div>무궁화 삼천리 화려강산 대한사람 대한으로</div>";
    }

    function multi($s){
        $y = $s * 100;
        return $y;
    }
?>
