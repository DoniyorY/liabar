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
                    <a class="nav-link item active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                       type="button" role="tab" aria-controls="nav-home" aria-selected="true">COLD APPETIZERS</a>
                    <a class="nav-link item" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                       type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ANTIPASTI</a>
                    <a class="nav-link item" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                       type="button" role="tab" aria-controls="nav-contact" aria-selected="false">SALADS</a>
                </div>
            </nav>
        </div>
        <div class="container menu_container">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                     tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu_item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-8"><h4 class="white">Sicilian octopus</h4></div>
                                            <div class="col-4">350 000 UZS</div>
                                            <hr style="height: 5px;">
                                            <div class="col-12">Octopus, citronette, parsley, pink tomato concasse,
                                                capers (200 g)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu_item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-8"><h4 class="white">Sicilian octopus</h4></div>
                                            <div class="col-4">350 000 UZS</div>
                                            <hr style="height: 5px;">
                                            <div class="col-12">Octopus, citronette, parsley, pink tomato concasse,
                                                capers (200 g)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu_item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-8"><h4 class="white">Sicilian octopus</h4></div>
                                            <div class="col-4">350 000 UZS</div>
                                            <hr style="height: 5px;">
                                            <div class="col-12">Octopus, citronette, parsley, pink tomato concasse,
                                                capers (200 g)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu_item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-8"><h4 class="white">Sicilian octopus</h4></div>
                                            <div class="col-4">350 000 UZS</div>
                                            <hr style="height: 5px;">
                                            <div class="col-12">Octopus, citronette, parsley, pink tomato concasse,
                                                capers (200 g)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                     tabindex="0">...
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                     tabindex="0">...
                </div>
            </div>
        </div>
    </section>
    <section class="menu_photo">
        <div class="section_inner_top py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?= "$baseUrl/images/menu_photo1.png" ?>" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?= "$baseUrl/images/menu_photo2.png" ?>" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?= "$baseUrl/images/menu_photo3.png" ?>" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?= "$baseUrl/images/menu_photo4.png" ?>" alt="">
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
                    <?php foreach ($ctg as $item): ?>
                        <a class="nav-link item active" id="nav-<?= $item->id ?>-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-<?= $item->id ?>"
                           type="button" role="tab" aria-controls="nav-<?= $item->id ?>"
                           aria-selected="true"><?= $item->{"name_en"} ?></a>
                    <?php endforeach; ?>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <?php foreach ($ctg as $item):
                    $menu = Menu::findAll(['category_id' => $item->id]) ?>
                    <div class="tab-pane fade show active" id="nav-<?= $item->id ?>" role="tabpanel"
                         aria-labelledby="nav-<?= $item->id ?>-tab"
                         tabindex="0">
                        <div class="row">
                            <?php foreach ($menu as $m): ?>
                                <div class="col-md-12 menu_bar_item">
                                    <div class="row menu_bar_container">
                                        <div class="col-md-4">
                                            <h4 class="white"><?= $m->{"title_en"} ?></h4>
                                        </div>
                                        <div class="col-md-4 text-center"><?= $m->{"country_en"} ?></div>
                                        <div class="col-md-4 text-center"><?= Yii::$app->formatter->asDecimal($m->price, 0) ?>
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
    <!--<div class="prefooter">
        <img src="<?php /*= "$baseUrl/images/menu_prefooter.png" */?>" alt="" style="width: 100%; ">
    </div>-->
</div>
