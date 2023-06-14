<?php
    $dta["NIM"] = "2233445566";
    $dta["NAMA"] = "I NENGAH LASTRA WIRA PRIMADIKA";
    $dta["JKEL"] = "P";
    $dta["PRODI"] = "Teknik Informatika";
    $dta["SEME"] = "2";
    $dta["JURU"] = "TIMDI";
    $dta["AGAMA"] = "Kristen";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);