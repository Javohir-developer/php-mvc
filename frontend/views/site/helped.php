<?php include_once('../views/layouts/home_layout/header.php');?>
    <section class="probootstrap-section">
        <div class="container">
            <div class="text-center helped_header1">
                <h1>Кому Помогли</h1>
            </div>

            <div class="row">
            <?php foreach ($applications  as $application): ?>
                <?php switch ($application->price) {
                    case $application->price < 10000000:
                        $num = 1;
                        break;
                    case $application->price > 100000000:
                        $num = 3;
                        break;
                    default: $num = 2;}?>
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" data-animate-effect="fadeIn">
                    <div class="probootstrap-image-text-block probootstrap-cause">
                        <figure>
                            <a href="/view?id=<?=$application->id; ?>"><img src="/assets/files/work-images/<?= json_decode($application->images, true)[1];?>" style="width: 360px!important;height: 230px!important;" class="img-responsive"></a>
                        </figure>
                        <div class="probootstrap-cause-inner">
                            <h2><a href="#"><?=$application->title;?></a></h2>

                            <div class="row mb30">
                                <div class="col-md-6 col-sm-6 col-xs-6 probootstrap-raised"> <span class="money money1">Полученная сумма</span></div>
                                <div class="col-md-6 col-sm-6 col-xs-6 probootstrap-goal"> <span class="money money2" ><?=substr($application->price, 0, $num);?> <sup>мил.</sup></span></div>
                            </div>
                            <div class="progress">
                                <div class="progress1-bar1 progress-bar-s2" data-percent="0"></div>
                            </div>
                            <p>    <!-- snake border -->
                                <a href="/view?id=<?=$application->id; ?>"><button class="btn btn1_4">дело завершено</button></a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    </section>
<?php include_once ('../views/layouts/home_layout/footer.php');?>