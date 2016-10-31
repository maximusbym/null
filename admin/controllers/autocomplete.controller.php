<?php

if ($action == 'autocomplete'){
    $res= [];
    $term = $_GET['term'];
    $city = findGeoName($pdo,$term);
    foreach ($city as $value){
        $res[] = ['value'=>$value['geonameid'], 'label'=>$value['name']];
    }
//    var_dump($city);

    echo json_encode($res);
//    echo json_encode([['value'=>1,'label'=>'Kiev'],['value'=>2,'label'=>'Kiev2']]);
}
