<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>オープン千住</title>
</head>
<body>

<header><h1>オープン千住</h1></header>
<?php
foreach ($stores as $store) {
    foreach ($store->schedule()->find_many() as $sc) {
        var_dump($sc->id);
    }
}
?>

</body>
</html>
