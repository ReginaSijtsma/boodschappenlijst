<?php


class Grocery {
    public $name;
    public $number;
    public $price;
    public $sub_total;
}


$groceries = $app["database"]->selectAll("groceries","Grocery"); 




$total=0;
foreach ($groceries as $grocerie_type => $value) {
    $sub_total = $value->price * $value->number;
    $value->sub_total=$sub_total;
    $total += $sub_total;
}

//dd($groceries);
require "views/index.view.php";