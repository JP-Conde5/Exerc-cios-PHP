<?php
    header("Content-type: text/html; charset-utf-8");
    $nota1 = 6;
    $nota2 = 8;
    $nota3 = 10;
    $nota4 = 3;
    $media = ($nota1+$nota2+$nota3+$nota4)/4;
    if($media >= 7)
        echo "Você foi aprovado. Sua nota final é de $media";
    else
        echo "Você foi reprovado. Sua nota final é de $media";
