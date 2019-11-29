<?php
$data = [
    ["id" => 1, "name" => 'Tom'],
    ["id" => 2, "name" => 'Fred'],
];
foreach ($data as ["name" => $id, "id" => $name]) {
    echo "id: $id, name: $name\n";
}
echo PHP_EOL;
list('name' => $second, 'high' => $fourth) = ['name'=>'张三', 'age'=>2, 'high'=>'不好', 4];
echo "$second, $fourth\n";
