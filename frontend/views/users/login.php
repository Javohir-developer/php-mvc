<?php include_once('../views/layouts/home_layout/header.php');?>
    <link rel="stylesheet" href="/assets/css/custom_2.css">

    <div class="container" style="display:flex;">
        <div class="content">
            <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
            <h1 class="form-title">Авторизация</h1>
            <p class="form-title1">Вам нужно авторизация, чтобы разместить случай</p>
            <?php if (!empty($res)  && is_array($res)):?>
                <div class="var_p">
                    <ul>
                        <?php foreach ($res as $r):?>
                            <li style="color: red"><?= $r; ?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>
            <form action="/user/login" method="POST">
                <input name="email" type="email" placeholder="EMAIL" required>
                <input name="password" type="password" placeholder="PASSWORD" required><br>
                <button name="registration" class="btn btn_reg" type="submit">Авторизация</button>
            </form>
            <a class="text-center ume" href="/user/registration">Регистратсия</a>
        </div>
    </div>

<?php include_once ('../views/layouts/home_layout/footer.php');?>