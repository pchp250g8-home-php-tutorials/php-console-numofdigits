<?php
    system("cls");
    echo("Enter an integer number\r\n");
    $strLine = chop(fgets(STDIN));
    $iNum = intval($strLine);
    $iVal = abs($iNum);
    $nDigits = 0;
    while ($iVal > 0) 
    {
        $iVal = intdiv($iVal,10);
        $nDigits++;
    }
    printf("The number %d has %d digits\r\n",$iNum,$nDigits);
    fgetc(STDIN);
?>