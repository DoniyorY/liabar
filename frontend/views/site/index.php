<?php

/** @var yii\web\View $this */
$baseUrl = Yii::$app->request->baseUrl;
$this->title = 'LiaBar';
?>
<section class="index_1">
    <div class="section_inner">
        <div class="container h-100">
            <div class="section_content h-100 justify-content-center d-flex align-content-center flex-column text-center">
                <div class="index_logo">
                    <img src="<?= "$baseUrl/images/clublogo.png" ?>" alt="">
                </div>
                <div class="index_title mt-4">
                    <h1 class="white"><span class="yellow">Li Bai</span> Night Club: <br> Where Night Comes Alive</h1>
                </div>
                <div class="index_desc d-flex justify-content-center mt-4">
                    <p class="white">
                        Welcome to Li Bai Night Club, where the night comes alive! Immerse yourself in an atmosphere of
                        unparalleled parties, great music, and continuous fun.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index_2">
    <div class="section_inner">
        <div class="img_block owl-carousel" id="index2">
            <div class="item">
                <img src="<?="$baseUrl/images/index21.png"?>" alt="">
            </div>
            <div class="item">
                <img src="<?="$baseUrl/images/index22.png"?>" alt="">
            </div>
            <div class="item">
                <img src="<?="$baseUrl/images/index23.png"?>" alt="">
            </div>
            <div class="item">
                <img src="<?="$baseUrl/images/index24.png"?>" alt="">
            </div>
        </div>
        <div class="container h-100 index_2_content">
            <div class="section_content h-100 justify-content-center d-flex align-content-center flex-column text-center">
                <div class="index_logo">
                    <img src="<?= "$baseUrl/images/luxury_logo.png" ?>" alt="">
                </div>
                <div class="index_title mt-4">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3 border-right">
                            <h1>Luxurious Interior</h1>
                        </div>
                        <div class="col-md-6 index_2_desc">
                            <p> A Blend of Modern Design and Eastern Elegance</p>
                        </div>
                    </div>
                </div>
                <div class="index_desc d-flex justify-content-center mt-3">
                    <p class="white w-75">
                        Our club boasts a luxurious interior that combines modern design with traditional Eastern
                        elements. The space is filled with soft lighting, creating an atmosphere of comfort and
                        exclusivity.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="border-bottom"></div>
</section>
<section class="index_3">
    <div class="section_inner_bottom">
        <div class="container h-100">
            <div class="section_content h-100 justify-content-center d-flex align-content-center flex-column text-center">
                <div class="index_logo">
                    <img src="<?= "$baseUrl/images/terrace_logo.png" ?>" alt="">
                </div>
                <div class="index_title mt-4 d-flex justify-content-center terrace_title">
                    <h1 class="white w-75">Terrace with a View: A Nighttime Escape Above the City</h1>
                </div>
                <div class="index_desc d-flex justify-content-center mt-3">
                    <p class="white w-75">
                        Our club offers a stunning terrace on the 20th floor with breathtaking views of the rowing canal
                        and the city at night.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="index_4">
    <div class="section_inner_bottom">
        <div class="container h-100">
            <div class="section_content h-100 justify-content-center d-flex align-content-center flex-column text-center">
                <div class="index_title mt-4">
                    <h1 class="white"><span class="yellow">Unforgettable Events:</span><br> Experience the Magic of Li
                        Bai</h1>
                </div>
                <div class="index_desc d-flex justify-content-center mt-3">
                    <p class="white">
                        Our club hosts unforgettable events that create a magical atmosphere. We organize exclusive
                        parties, themed nights, and performances by renowned DJs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>