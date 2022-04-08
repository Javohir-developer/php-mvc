<?php include_once('../views/layouts/home_layout/header.php');?>

    <section class="blog" data-scroll-index="4">
        <div class="container">
            <!-- header of section -->
            <div class="blog-head text-center">
                <!--                <h2>Новости</h2>-->
                <h6>Новости</h6>
            </div>

            <!-- blog items -->
            <div class="row">
                <?php foreach ($news as $new):?>
                    <div class="col-md-6 col-lg-4">
                        <div class="item">
                            <div class="img">
                                <a href="/newsViews?id=<?=$new->id; ?>"><img src="/assets/files/news/<?=$new->image; ?>" alt=""></a>
                            </div>
                            <div class="info">
                                <div class="date">
                                    <span><?= date('d', strtotime($new->date)); ?> <br> <?= date('M', strtotime($new->date)); ?></span>
                                </div>
                                <a href="/newsViews?id=<?=$new->id; ?>"><h5><?=$new->title_ru; ?></h5></a>
                                <p><?= substr($new->text_ru, 0, 200).'...'; ?></p>
                                <a href="#" class="user"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                    <a href="/newsViews?id=<?=$new->id; ?>" class="more">
                                        <svg style="margin-top: 8px;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                        </svg>
                                    </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php include_once ('../views/layouts/home_layout/footer.php');?>