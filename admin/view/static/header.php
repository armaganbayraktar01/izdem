<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta charset="UTF-8">
    <title>İZDEM - Admin</title>

    <!--styles-->
    <link rel="stylesheet" href="<?=admin_public_url('/styles/main.css')?>">

    <!--scripts-->
    <script src="<?= admin_public_url('scripts/jquery-1.12.2.min.js')?>"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script> -->
    <script src="<?= admin_public_url('scripts/admin.js')?>"></script>

</head>
<body>

<!--navbar-->
<div class="navbar">
    <ul dropdown>
        <li>
            <a href="#">
                <span class="fa fa-home"></span>
                <span class="title">
                    ANOTHER WORDPRESS SITE
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-comment"></span>
                1
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-plus"></span>
                <span class="title">New</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        New Post
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Page
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Category
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!--sidebar-->
<div class="sidebar">

    <ul>
        <?php foreach ($menus_sidebar as $menu_url => $menu_content): ?>

            <li class="<?=route(1) == $menu_url ? 'active' : null ?>">
            <a href="<?=admin_url($menu_url)?>">
                <span class="fa fa-<?= $menu_content['icon']?>"></span>
                <span class="title">
                    <?= $menu_content['title'] ?>
                </span>
            </a>
            <?php if(isset($menu_content['submenu'])): ?>
            <ul class="sub-menu">
            <?php foreach ($menu_content['submenu'] as $submenu_url => $submenu_title): ?>
                <li class="active">
                    <a href="<?=admin_url($submenu_url)?>">
                        <?=$submenu_title; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif;?>          
        </li>

        <?php endforeach; ?>

        <li class="line">
            <span></span>
        </li>
    </ul>

    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Collapse menu
        </span>
    </a>

</div>

<!--content-->
<div class="content">