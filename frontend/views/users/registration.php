<?php include_once('../views/layouts/home_layout/header.php');?>
    <link rel="stylesheet" href="/assets/css/custom_2.css">

    <div class="container" style="display:flex;">
        <div class="content">
            <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
            <h1 class="form-title">Регистратсия</h1>
            <p class="form-title1">Вам нужно зарегистрироваться, чтобы разместить случай</p>
            <?php if (!empty($res)  && is_array($res)):?>
                <div class="var_p">
                    <ul>
                        <?php foreach ($res as $r):?>
                            <li style="color: red"><?= $r; ?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>
            <form action="/user/registration" method="POST">
                <input name="email" type="email"  minlength="10" placeholder="EMAIL" required>
                <input name="phone" type="number" maxlength="12" minlength="12" placeholder="PHONE" required><br>
                <input name="password" type="password"   minlength="10" placeholder="PASSWORD" required><br>
                <button name="registration" class="btn btn_reg" type="submit">Регистратсия</button>
                <div class="col-md-4 recaptcha" id="g-recaptcha3"></div>
            </form>
            <a class="text-center ume" href="/user/login">У меня есть аккаунт</a>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {

                $('.recaptcha').each(function () {
                    grecaptcha.render(this.id, {
                        'sitekey': '6LdVkwkUAAAAACeeETRX--v9Js0vWyjQOTIZxxeB',
                        "theme": "light"
                    });
                });

            }, 2000);
        });
    </script>
<?php include_once ('../views/layouts/home_layout/footer.php');?>