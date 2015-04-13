<?php
/* @var $stores Store[] */

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>オープン千住</title>
    <link rel="stylesheet" type="text/css" href="/bower_components/normalize.css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/js/script.js"></script>
</head>
<body>

<header><h1>オープン千住</h1></header>
<div id="wrapper">
    <h2>店一覧</h2>

    <div id="store-list" class="row">
        <?php foreach ($stores as $store) { ?>
            <section class="store">
                <h3><?= $store->name ?></h3>
                <a class="js-accordion-trigger">
                    <?php foreach ($store->schedules() as $sc) { ?>
                        <span>
                            <span class="day"><?= $sc->dayc() ?></span>
                        </span>
                    <?php } ?>
                </a>
                <div class="active_days submenu">
                    <?php foreach ($store->schedules() as $sc) { ?>
                        <p>
                            <span class="day"><?= $sc->dayc() ?></span>
                            <span class="start"><?= $sc->start_time_str() ?></span>~<span class="end"><?= $sc->end_time_str() ?></span>
                        </p>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>
    </div>
</div>
</body>
</html>
