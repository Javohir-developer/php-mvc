<?php include_once('../views/layouts/home_layout/header.php');?>
    <link rel="stylesheet" href="/assets/css/custom_1.css">
    <section style="margin-top: 7%;margin-bottom: 4%;">
        <h5>Опишите ваше дело как можно более подробно, чтобы получить необходимую помощь</h5>
        <div class="content">
            <p>Каждый случай имеет шанс получить средства, необходимые для дорогостоящего лечения или другого социального проекта. Будьте уверены, что пожертвование приходит прямо к вам, и вы получите необходимую моральную поддержку от нашей команды.</p>
            <a href="<?php echo !empty($_COOKIE['email']) ? '/create-work/create-work' : '/user/registration'?>">Создать ваше дело</a>
        </div>
        <div class="img">
            <img src="assets/files/img/event-img.jpeg"/>
        </div>
    </section>
<?php include_once ('../views/layouts/home_layout/footer.php');?>