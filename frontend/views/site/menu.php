<?php

use common\models\Menu;

$this->title = 'Menu';
$lang = Yii::$app->language;
$baseUrl = Yii::$app->request->baseUrl;
?>

<div class="main_menu">
    <div class="breadcrumbs">
        <div class="section_inner">
            <div class="breadcrumbs_title">
                <h1>Li Bai <span class="white">Menu</span></h1>
            </div>
        </div>
    </div>
    <section class="menu_list">
        <div class="container">
            <nav>
                <div class="nav nav-pills text-center owl-carousel owl-menu menu_nav" id="nav-tab" role="tablist">
                    <?php foreach ($ctg_menu as $k => $item): ?>
                        <a class="nav-link item <?= $k == 0 ? 'active' : '' ?>" id="nav-<?= $item->id ?>-tab"
                           data-bs-toggle="tab" data-bs-target="#nav-<?= $item->id ?>"
                           type="button" role="tab" aria-controls="nav-<?= $item->id ?>"
                           aria-selected="<?= $k == 0 ? 'true' : 'false' ?>"><?= $item->{"name_en"} ?></a>
                    <?php endforeach; ?>
                </div>
            </nav>
        </div>
        <div class="container menu_container">
            <div class="tab-content" id="nav-tabContent">
                <?php foreach ($ctg_menu as $i => $item): $menu = Menu::findAll(['category_id' => $item->id]) ?>
                    <div class="tab-pane fade <?= $i == 0 ? 'show active' : '' ?>" id="nav-<?= $item->id ?>"
                         role="tabpanel" aria-labelledby="nav-<?= $item->id ?>-tab"
                         tabindex="0">
                        <div class="row">
                            <?php foreach ($menu as $m):?>
                            <div class="col-md-6">
                                <div class="menu_item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-8 col-7"><h4 class="white"><?=$m->{"title_en"}?></h4></div>
                                                <div class="col-md-4 col-5"><?=Yii::$app->formatter->asDecimal($m->price,0)?> UZS</div>
                                                <hr style="height: 5px;">
                                                <div class="col-12"><?=$m->{"short_en"}?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="menu_photo">
        <div class="section_inner_top pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 m-0 p-0 mt-3 mt-mb-0">
                        <img style="width: 100%;" src="<?= "$baseUrl/images/menu_photo1.png" ?>" alt="">
                    </div>
                    <div class="col-md-3 m-0 p-0 mt-3 mt-mb-0">
                        <img style="width: 100%;" src="<?= "$baseUrl/images/menu_photo2.png" ?>" alt="">
                    </div>
                    <div class="col-md-3 m-0 p-0 mt-3 mt-mb-0">
                        <img style="width: 100%;" src="<?= "$baseUrl/images/menu_photo3.png" ?>" alt="">
                    </div>
                    <div class="col-md-3 m-0 p-0 mt-3 mt-mb-0">
                        <img style="width: 100%;" src="<?= "$baseUrl/images/menu_photo4.png" ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bar_title">
        <div class="breadcrumbs">
            <div class="section_inner">
                <div class="breadcrumbs_title">
                    <h1>Li Bai <span class="white">Bar</span></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="mt-5">
                <div class="nav nav-pills text-center owl-carousel owl-bar menu_nav" id="nav-tab" role="tablist">
                    <?php foreach ($ctg as $key => $item): ?>
                        <a class="nav-link item <?= $key == 0 ? 'active' : '' ?>" id="nav-<?= $item->id ?>-tab"
                           data-bs-toggle="tab"
                           data-bs-target="#nav-<?= $item->id ?>"
                           type="button" role="tab" aria-controls="nav-<?= $item->id ?>"
                           aria-selected="<?= $key == 0 ? 'true' : '' ?>"><?= $item->{"name_en"} ?></a>
                    <?php endforeach; ?>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <?php foreach ($ctg as $key => $item):
                    $menu = Menu::findAll(['category_id' => $item->id]) ?>
                    <div class="tab-pane fade <?= ($key == 0) ? 'show active' : '' ?>" id="nav-<?= $item->id ?>"
                         role="tabpanel"
                         aria-labelledby="nav-<?= $item->id ?>-tab"
                         tabindex="0">
                        <div class="row">
                            <?php foreach ($menu as $m): ?>
                                <div class="col-md-12 menu_bar_item">
                                    <div class="row menu_bar_container">
                                        <div class="col-md-4 col-6">
                                            <h4 class="white"><?= $m->{"title_en"} ?></h4>
                                        </div>
                                        <div class="col-md-4 col-6 text-center"><?= $m->{"country_en"} ?></div>
                                        <div class="col-md-4 col-12 text-end"><?= Yii::$app->formatter->asDecimal($m->price, 0) ?>
                                            UZS
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="prefooter">
        <img src="<?= "$baseUrl/images/menu_prefooter.png" ?>" alt="" style="width: 100%; ">
    </div>
</div>
