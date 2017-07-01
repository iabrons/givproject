<?php
$row = 1;
$numToGet;
if (($handle = fopen("namcount.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
         numToGet = $data[0];

    }
    fclose($handle);
}
newNumToGet = numToGet++;
$list = array (
    array(newNumToGet)
);

$fp = fopen('namecount.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>