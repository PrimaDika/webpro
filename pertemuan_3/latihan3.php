<?php

    $mhs = array(
        array('NAMA'=>'Luffy', 'ID'=>'1723', 'KOTA'=>'East Blue'),
        array('NAMA'=>'Naruto', 'ID'=>'1346', 'KOTA'=>'Konoha'),
        array('NAMA'=>'Isagi', 'ID'=>'2176', 'KOTA'=>'Tokyo'),
        array('NAMA'=>'Mail', 'ID'=>'4532', 'KOTA'=>'Durian Runtuh'),
    );


    header('Content-Type: application/json');
    echo json_encode($mhs);