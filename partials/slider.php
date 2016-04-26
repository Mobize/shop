<?php
$slider_pictures = glob('img/slider/*');
//debug($slider_pictures);
?>
                <div id="slider" class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">

                                <?php
                                foreach($slider_pictures as $key => $slider_picture) {

                                    $li_class = '';
                                    if ($key === 0) {
                                        $li_class = 'active';
                                    }
                                ?>
                                <li data-target="#carousel-example-generic" data-slide-to="<?= $key ?>" class="<?= $li_class ?>"></li>
                                <?php } ?>

                            </ol>
                            <div class="carousel-inner">

                                <?php
                                foreach($slider_pictures as $key => $slider_picture) {

                                    $item_class = '';
                                    if ($key === 0) {
                                        $item_class = ' active';
                                    }
                                ?>
                                <div class="item<?= $item_class ?>">
                                    <img class="slide-image" src="<?= $slider_picture ?>" alt="">
                                </div>
                                <?php } ?>

                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div><!-- #slider -->