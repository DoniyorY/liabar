<?php
$this->title = 'Events';
$baseUrl = Yii::$app->request->baseUrl;
$lang = Yii::$app->language;

use yii\helpers\Url;

?>
<section class="breadcrumbs">
    <div class="section_inner">
        <div class="breadcrumbs_title">
            <h1><span class="white">Unmatched Events at</span> Li Bai</h1>
        </div>
    </div>
</section>
<section class="events-image"></section>

<section class="image-left">
    <div class="container-fluid h-100">
        <div class="section_inner">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="left_content">
                        <h3>Exclusive Parties</h3>
                        <p>
                            Our exclusive parties are unforgettable events that immerse you in an atmosphere of luxury and
                            fun. With top DJs, unique themes, and carefully curated music, we create the perfect setting for
                            dancing and socializing. Join us to experience the best of nightlife at <span class="yellow">Li Bai.</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 right_content">
                    <img src="<?= "$baseUrl/images/index_1.png" ?>" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>
