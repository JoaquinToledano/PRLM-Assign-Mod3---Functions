<?php
include "header.php";


$vat = 0.12;

$items = [
    "Wireless Mouse" => ["price" => 349.75, "qty" => 8],
    "Mech Keyboard" => ["price" => 2199, "qty" => 15],
    "USB-C Fast Charger" => ["price" => 545.50, "qty" => 4],
    "BT Speaker Mini" => ["price" => 1290, "qty" => 22],
    "Laptop Riser" => ["price" => 810.25, "qty" => 12],
    "HD Webcam" => ["price" => 940, "qty" => 6],
    "Gaming Headphones" => ["price" => 1830, "qty" => 9],
];

function needsReorder($qty){
    if($qty < 10){
        return "Yes";
    }
    return "No";
}

function computeTotal($p, $q){
    return $p * $q;
}

function vatAmount($p, $q, $vat){
    return ($p * $q) * $vat;
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Stocks</title>
    <style>
        body{
            margin:0;
            padding:20px;
            background:#f4f4f4 url("images/minimal-brand-bg.png") center no-repeat;
            font-family:Arial;
            background-size:cover;
        }
        table{
            width:90%;
            margin:20px auto;
            background:#fff;
            border-collapse:collapse;
        }
        th,td{
            padding:10px;
            border:1px solid #ccc;
            text-align:center;
        }
        th{
            background:#222;
            color:#fff;
        }
        h1{
            text-align:center;
            color:#444;
        }
    </style>
</head>
<body>
<h1>Store Inventory Overview</h1>

<table>
    <tr>
        <th>Item</th>
        <th>Qty</th>
        <th>Reorder</th>
        <th>Total Value</th>
        <th>VAT</th>
    </tr>

```
<?php foreach($items as $name => $d): ?>
    <tr>
        <td><?= $name ?></td>
        <td><?= $d["qty"] ?></td>
        <td><?= needsReorder($d["qty"]) ?></td>
        <td><?= number_format(computeTotal($d["price"], $d["qty"]), 2) ?></td>
        <td><?= number_format(vatAmount($d["price"], $d["qty"], $vat), 2) ?></td>
    </tr>
<?php endforeach; ?>
```

</table>

</body>
</html>
