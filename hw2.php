<?php
    $mtk = 80;
    $bahasaIndonesia = 90;
    $bahasaInggris = 89;
    $ipa = 69;

    $rataRata = ($mtk+$bahasaIndonesia+$bahasaInggris+$ipa)/4;

    if ($rataRata>=90 && $rataRata<=100) $grade="A";
    else if ($rataRata>=80 && $rataRata<90) $grade="B";
    else if ($rataRata>=70 && $rataRata<80) $grade="C";
    else if ($rataRata>=60 && $rataRata<70) $grade="D";
    else if ($rataRata>=0 && $rataRata<60) $grade="E";
    else $grade="Grade is not qualified";

    echo "Rata-Rata = " .$rataRata;
    echo "<br />";
    echo "Grade = " .$grade;
?>