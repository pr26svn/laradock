<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//задача 1
$array = [
    ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
    ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
    ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
    ['id' => 1, 'date' => "22.01.2020", 'name' => "test1"],
    ['id' => 2, 'date' => "11.11.2020", 'name' => "test4"],
    ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];
$keys = array_unique(array_column($array, 'id'));
$resArray = [];
$repArray = [];
$fnArray = function (array $element) use (&$resArray, &$repArray): array {
    if (!isset($resArray[$element["id"]])) {
        $resArray[$element["id"]] = $element;
    } else {
        $repArray[] = $element;
    }
    return $element;
};
$array = array_map($fnArray, $array);

echo "<pre>";
var_dump($resArray);
echo "</pre>";
//задача 2
$fnSort=function ($a, $b)
{
    if ($a["name"] == $b["name"]) {
        return 0;
    }
    return ($a["name"] < $b["name"]) ? -1 : 1;
};



usort($array, $fnSort);
echo "<pre>";
var_dump($array);
echo "</pre>";

?>
</body>
</html>