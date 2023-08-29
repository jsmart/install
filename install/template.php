<?php defined('JSmart_CMS') or exit('Access denied'); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JSmart CMS</title>
    <link href="<?=$assets?>/assets/css/normalize.css?<?=$time?>" rel="stylesheet">
    <link href="<?=$assets?>/assets/css/main.css?<?=$time?>" rel="stylesheet">
    <script src="<?=$assets?>/assets/js/jquery.js?<?=$time?>"></script>
    <script src="<?=$assets?>/assets/js/main.js?<?=$time?>"></script>
    <script type="text/javascript">
        var base_url = '<?=BASE_URL?>';
    </script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="install-box">
    <div class="nav">
        <div class="logo">
            <a href="//jsmart.ru" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="144.5" height="39.7" viewBox="0 0 144.5 39.7">
                    <path d="M114.3 18.4c2 0 3.6 1.6 3.6 3.6s-1.6 3.6-3.6 3.6-3.6-1.6-3.6-3.6c.1-2 1.7-3.6 3.6-3.6m-33.9-2c0-4.3-3.6-6.2-7-6.2-4 0-7.4 2.5-7.2 6.6.3 4.3 3.9 5 7 5.3.7.1 2.8.1 2.8 1.5 0 1.1-1.2 1.5-2.7 1.5-1 0-2.6-.3-2.6-2.2h-4.6c0 4.8 4.2 6.7 7.2 6.7 3.6 0 7.4-2.3 7.4-6.2 0-.4-.1-.9-.1-1.3-.8-3.4-4.2-4.1-6.8-4.4-.6-.1-2.8-.1-2.8-1.5 0-1 1-1.6 2.4-1.6s2.4.7 2.4 1.9h4.6zm2.5-1.7v14.5h4.5V21c0-1.6 1.4-2.4 2.4-2.4s1.8.7 1.8 2.4v8.2h4.3V21c0-1.6 1.6-2.3 2.6-2.3s1.8.7 1.8 2.4v8.2h4.3v-8.2c.1-4.6-2.1-6.4-4.9-6.5-1.7-.1-3.8.5-4.8 1.9-.7-1.1-1.7-1.9-3.4-1.9-1.6 0-3.3.4-4.3 1.7v-1.4h-4.3zm45.4 6.5c0-2 1.6-2.8 3.1-2.8.5 0 1 .1 1.4.2l.1-4c-.6-.1-1.1-.2-1.6-.2-1.2 0-2.2.4-3.2 1.3l-.2-1h-3.8v14.5h4.2v-8zm16.2 8.1l-.1-3.5c-.4.1-.8.1-1.2.1-1 0-2-.4-2-1.7v-5.7l3-.4v-3.3h-3v-3.1l-4.2.4v2.8h-1.9v3.6h1.9v5.7c0 3.8 2 5.3 5.2 5.3.7 0 1.5-.1 2.3-.2zm-80.6-19h-8.2v3.8l3.6.4V21c0 2.9-1.5 4-6.4 4v4.3c8 0 11-2.3 11-8.3V10.3zm50.4 4.2c-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5c1.3 0 2.5-.3 3.6-.9v.7h3.9V22c0-4.2-3.3-7.5-7.5-7.5zM23.4 24.6l-1.1 1.9c-1.2 2-3.1 3.4-5.2 4-2.1.6-4.5.3-6.5-.9s-3.4-3.1-4-5.2c-.6-2.1-.3-4.5.9-6.5L8.6 16l3.8 2.2-1.1 1.9c-.6 1-.7 2.1-.4 3.2.3 1 .9 1.9 1.8 2.5.1 0 .1.1.2.1 1 .5 2.1.6 3.1.3s2-.9 2.5-1.9l4.5-7.8c.6-1 2-1.4 3-.8 1 .6 1.4 2 .8 3l-3.4 5.9zm-2-9.2l-4.5 7.8c-.6 1-2 1.4-3 .8-1-.6-1.4-2-.8-3l3.4-5.9 1.1-1.9c1.2-2 3.1-3.4 5.2-4 2.1-.6 4.4-.3 6.5.8 2 1.2 3.4 3.1 4 5.2.6 2.1.3 4.5-.9 6.5l-1.1 1.9-3.8-2.2 1.1-1.9c.6-1 .7-2.1.4-3.2-.3-1-.9-1.9-1.8-2.5-.1 0-.1-.1-.2-.1-1-.5-2.1-.6-3.1-.3-1 .4-1.9 1-2.5 2zm.7 24.3c10-1.1 17.9-9.5 17.9-19.9C40 9.8 32.6 1.5 22.9 0L16 11.9c-.1.1-.1.2-.2.3l-2.5 4.3-3.8-2.2L17.9 0C7.8 1 0 9.5 0 19.9c0 10 7.4 18.3 17.1 19.8L24 27.8c0-.1.1-.2.1-.2l2.5-4.3 3.8 2.2-8.3 14.2z"/>
                </svg>
            </a>
        </div>
        <ul class="nav-menu">
            <?php foreach ($actions as $key => $value): ?>
            <li <?=($key == $action ? 'class="active"' : '')?>><a><?=$value?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <form class="main" method="POST">
        <h1 class="heading"><?=$title?></h1>
        <div class="content">
            <?=$message?>
            <?=$content?>
        </div>
        <div class="btn-group">
            <input type="hidden" name="next" value="1">
            <button onclick="<?=$onclick?>" data-value="<?=$button?>" class="btn btn-green"><?=$button?></button>
        </div>
    </form>
    <div class="copy">&copy; <?php echo date('Y'); ?> JSmart CMS. All Rights Reserved.</div>
</div>
</body>
</html>