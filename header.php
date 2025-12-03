<?php
// simple reusable header
if(!isset($pageTitle)){
    $pageTitle = "Store Monitor";
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>

```
<link rel="stylesheet" href="styles/main.css">

<style>
    .topbar{
        background:#222;
        color:#fff;
        padding:12px 20px;
        display:flex;
        align-items:center;
        justify-content:space-between;
    }
    .topbar a{
        color:#eee;
        text-decoration:none;
        margin-right:15px;
    }
    .topbar a:hover{
        color:#fff;
    }
</style>
```

</head>

<body>
<div class="topbar">
    <div class="logo">Tech Shop</div>
    <div>
        <a href="index.php">Home</a>
        <a href="stocks.php">Stocks</a>
        <a href="about.php">About</a>
    </div>
</div>
