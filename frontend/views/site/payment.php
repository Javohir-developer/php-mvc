<?php include_once('../views/layouts/home_layout/header.php');?>


<!--<div class="container" style="padding-top: 150px">-->
<!--    <div class="text-center">-->
<!--        <h2>Выберите метод пожертвования</h2>-->
<!--    </div>-->
<!--    <div class="cards-list">-->
<!--        <div class="card 1">-->
<!--            <div class="card_image">-->
<!--                <img src="/assets/files/img/click.png" />-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="card 2">-->
<!--            <div class="card_image">-->
<!--                <img src="/assets/files/img/payme.png" />-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="card 3">-->
<!--            <div class="card_image">-->
<!--                <img src="/assets/files/img/paynet.png" />-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="card 4">-->
<!--            <div class="card_image">-->
<!--                <img src="/assets/files/img/oson.png" />-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->
    <div class="wrapper" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="text-center">
            <h2>Выберите метод пожертвования</h2>
        </div>
        <section class="content">
            <div class="columns">
                <div id="sidebar">
                </div>
                <div id="semicircle">
                    <svg viewBox="0 0 412 1080" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" transform="translate(-69.000000, 0.000000)">
                                <g id="Rectangle-Copy-10" fill-opacity="1">
                                    <use filter="url(#filter-2)" xlink:href="#path-1"></use>
                                </g>
                                <path d="M0,0 L0,1080 L107.077379,1080 C529.830472,806.915754 563.790352,276.501473 107.077379,8.29024349e-14 L0,0 Z" id="Path" fill="#000000"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div id="main">
                    <div class="payments">
                        <div class="card 1"  id="add-card">
                            <div class="card_image">
                                <img src="/assets/files/img/click.png" />
                            </div>
                        </div>

                        <div class="card 2" id="main-card">
                            <div class="card_image">
                                <img src="/assets/files/img/payme.png" />
                            </div>
                        </div>

                        <div class="card 3" id="other-card">
                            <div class="card_image">
                                <img src="/assets/files/img/oson.png" />
                            </div>
                        </div>
                    </div>

                    <section id="payment">
                        <section class="row" id="total">
                            <h2>Пожертвовать</h2>
                            <section>
                                <form>
                                    <h1>PAYME</h1>
                                    <div class="input-label-group">
                                        <input type="text" name="sum" placeholder=" " id="__input_text" required/>
                                        <label htmlFor="__input_text">Сума пожертвования</label>
                                    </div>

                                    <div class="input-label-group">
                                        <input type="text" name="name" placeholder=" " id="__input_text2" required/>
                                        <label htmlFor="__input_text2">Имя</label>
                                    </div>

                                    <div class="input-label-group">
                                        <input type="text" name="first_name" placeholder=" " id="__input_text2" required/>
                                        <label htmlFor="__input_text2">Фамилия</label>
                                    </div>

                                    <div class="input-label-group">
                                        <input type="text" name="tell" placeholder=" " id="__input_text2" required/>
                                        <label htmlFor="__input_text2">Номер телефона</label>
                                    </div>

                                    <div class="input-label-group">
                                        <input type="text" name="comment" placeholder=" " id="__input_text2" />
                                        <label htmlFor="__input_text2">Комментарий</label>
<!--                                        <small id="nameHelp" class="form-text text-muted">Full name as displayed on card.</small>-->

                                    </div>
                                    <button type="submit"  class="btn">Пожертвовать</button>
                                </form>
                            </section>
                </div>
            </div>
        </section>
    </div>
    <style>
        @media only screen and (max-width: 1000px) {
            .payments {
                display: none;
            }
        }

        .wrapper{
            width: 60%;
            /*min-height: 80vh;*/
            background: #fff;
            display: flex;
            flex-direction: column;
            margin: 0 auto;
        }
        .content {
            flex: 1;
            background: #fff;
            display: flex;
            color: #000;
            -webkit-box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
            -moz-box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
            box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
        }
        .columns{
            display: flex;
            flex: 1;
        }
        #sidebar{
            flex: 1;
            background: #f3f1eb;
            color: #fff;
        }
        #semicircle svg {
            width: 80%;
            height: 100%;
        }
        #main {
            width: 60%;
            background: #fff;
        }
        #main-card {
            width: 18%;
            position: absolute;
            top: 390px;
            left: 24%;
        }
        #add-card {
            width: 10%;
            position: absolute;
            top: 185px;
            left: 24%;
        }
        #other-card {
            position: absolute;
            width: 10%;
            top: 591px;
            left: 24%;
        }
        #semicircle path {
            height: 100%;
            fill: #f3f1eb;
        }

        #total h2 {
            margin-left: 18%;
            font-size: 1.5em;
            text-transform: uppercase;
        }
        #total svg {
            margin-top: 3%;
        }
        .price {
            font-size: 1.7em;
            font-weight: 700;
        }
        .cents {
            font-weight: 400;
            font-size: .5em;
        }

        #payment {
            width: 80%;
            margin-top: 7%;
            margin-left: 25%;
        }

        #payment h1 {
            font-size: 1.1em;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .btn {
            padding: 5px 50px;
            border-radius: 0;
            margin-top: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: box-shadow 1s;
        }
        .form-control {
            border-radius: 0;
        }
        form {
            margin-top: 12%;
        }
        form button {
            margin-left: 20%;
            text-align:center;
        }
        .btn:hover {
            padding: 5px 50px;
            border-radius: 0;
            box-shadow: 0 0 11px rgba(33,33,33,.2);
        }

        /*responsive */
        @media (max-width: 576px) {
            #semicircle svg {
                width: 100%!important;
            }
        }

        @media (max-width: 768px) {
            .form-control {
                height: calc(1.75rem + 2px);
                font-size: .6rem;
            }
            #semicircle svg {
                width: 80%;
                height: 100%;
            }
            .wrapper {
                width: 90%;
            }
            .content {
                height: 400px;
            }

            #main-card {
                width: 30%!important;
                top: 160px;
                left: 12%;
            }
            #add-card {
                width: 17%;
                top: 75px!important;
                left: 15%!important;
            }
            #other-card {
                width: 17%!important;
                top: 300px!important;
                left: 18%!important;
            }
            form {
                margin-top: 5%;
            }
            .btn {
                margin-top: 15px;
                padding: 2px 30px;
            }
            .btn:hover {
                padding: 2px 30px;
            }
        }

        @media (max-width: 992px) {
            #total h2 {
                margin-left: 10%;
            }
            .price {
                font-size: 1.3em;
            }
            #add-card {
                top: 110px;
                left: 30%;
            }
            #other-card {
                top: 390px;
                left: 30%;
            }
            #main {
                width: 75%;
            }
            #payment h1 {
                font-size: .9em;
            }
            label {
                margin-bottom: 0;
                font-size: .7em;
            }

        }

        @media (max-width: 1200px) {
            #total h2 {
                margin-left: 15%;
            }
        }

        @media (max-width: 1550px) {
            #payment {
                margin-left: 10%;
            }
            #main-card {
                width: 15%;
            }
        }
    </style>
<style>
        .cards-list {
            z-index: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            margin: 30px auto;
            width: 200px;
            height: 150px;
            border-radius: 40px;
            box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
            cursor: pointer;
            transition: 0.4s;
        }

        .card .card_image {
            /*width: inherit;*/
            height: inherit;
            border-radius: 40px;
        }

        .card .card_image img {
            width: inherit;
            height: inherit;
            border-radius: 40px;
            object-fit: cover;
        }

        .card .card_title {
            text-align: center;
            border-radius: 0px 0px 40px 40px;
            font-family: sans-serif;
            font-weight: bold;
            font-size: 30px;
            margin-top: -80px;
            height: 40px;
        }

        .card:hover {
            transform: scale(0.9, 0.9);
            box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25),
            -5px -5px 30px 15px rgba(0,0,0,0.22);
        }
    </style>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");
        html, body {
            font-family: "Inter", sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input, select {
            width: 80%;
            padding: 15px 10px 16px 10px;
            border: 1px solid rgba(61, 61, 77, 0.16);
            border-radius: 4px;
            outline: none;
            font-size: 13px;
            line-height: 17px;
            letter-spacing: -0.01em;
        }
        input:focus, select:focus {
            border-color: #2f6deb;
        }

        .input-label-group {
            position: relative;
            margin: 5px 0;
        }
        .input-label-group input {
            display: block;
            padding: 20px 10px 9px 10px;
        }
        .input-label-group input + label {
            position: absolute;
            left: 10px;
            top: 8px;
            color: #ababb2;
            font-size: 10px;
            transition: 50ms all ease-in-out;
            user-select: none;
        }
        .input-label-group input:placeholder-shown:not(:focus) + label, .input-label-group input[value=__unselected]:not(:focus) + label {
            left: 10px;
            top: 16px;
            font-size: 13px;
        }
    </style>

<?php include_once ('../views/layouts/home_layout/footer.php');?>