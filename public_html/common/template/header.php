<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <meta name="description" content="Кино - это портал о кино" />
    <meta name="keywords" content="фильмы, фильмы онлайн, hd" />

    <? foreach ($styles as $url) { ?>
        <link rel="stylesheet" href="<?= $url ?>">
    <? } ?>

</head>
<body>

<div class="main">

    <div class="header">
        <div class="logo">
            <div class="logo_text">
                <h1><a href="/">Кино</a></h1>
                <h2>Кино - наша страсть!</h2>
            </div>
        </div>

        <div class="menubar">

            <ul class="menu">
                <? foreach ($menu as $item) { ?>
                <li <? if((strripos($_SERVER['REQUEST_URI'], $item['link']) !== false && strripos($_SERVER['REQUEST_URI'], $item['link']) !== 0) || ($_SERVER['REQUEST_URI'] === '/' && $item['link'] === '/')) { ?> class="selected" <? } ?> >
                    <a href="<?= mb_strtolower($item['link']) ?>"><?= $item['name'] ?></a>
                </li>
                <? } ?>
            </ul>

        </div>

    </div>