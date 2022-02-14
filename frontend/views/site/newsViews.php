<?php include_once('../views/layouts/home_layout/header.php');?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-10 col-md-push-1">
                <div class="blog-title pb-1">
                    <h3>Blog Randon</h3>
                    <hr>
                </div>
                <div class="blog-content">
                    <div class="topic-title text-center">
                        <h3><?=$news['title_ru']; ?></h3>
                    </div>
                    <br>
                    <div class="topic-content">
                        <div class="topic-text-image text-center float-left">
                            <figure class="img-fluid ">
                                <img  class="rounded" src="/assets/files/news/<?=$news['image']; ?>" alt="black hole" />
                            </figure>
                        </div>
                        <p class="topic-text">
                            <?=$news['text_ru']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto");
        main {
            padding-top: 10px;
        }

        hr {
            border-bottom: 1px solid red;
        }

        .pb-1 {
            padding-bottom: 1rem !important;
        }

        .post-date {
            font-style: italic;
        }
        .post-date a {
            font-weight: bold;
            font-style: normal;
        }

        .topic-content .topic-text-image {
            margin: 15px;
        }
        .topic-content .topic-text-image small {
            font-style: italic;
        }
        .topic-content .topic-text {
            text-align: justify;
        }

        figure {
            position: relative;
        }

        img {
            display: block;
            max-width: 100%;
            max-height: 100%;
        }

        figcaption {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            transition: top 0.3s, font-size 0.3s;
        }

    </style>
<?php include_once ('../views/layouts/home_layout/footer.php');?>