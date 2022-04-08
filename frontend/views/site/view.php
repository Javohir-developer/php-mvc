<?php include_once('../views/layouts/home_layout/header.php');?>
<?php switch ($applications['price']) {
    case $applications['price'] < 10000000:
        $num = 1;
        break;
    case $applications['price'] > 100000000:
        $num = 3;
        break;
    default: $num = 2;}?>
    <div class="container">
        <div class="row" style="margin-top: 120px">
            <div class="col-sm-7">
                <a href="/assets/files/work-images/<?= json_decode($applications['images'], true)[1];?>" id="main1" class="with-caption image-link"  title="<?=$applications['title']?>">
                    <img src="/assets/files/work-images/<?= json_decode($applications['images'], true)[1];?>" id="main" width="172" height="105" />
                </a>
                <div id="thumbnails">
                    <?php foreach (json_decode($applications['images'], true) as $key =>  $val): ?>
                        <img src="/assets/files/work-images/<?= $val;?>">
                    <?php endforeach;?>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="detail-case" style="margin-top: 19px">
                    <div class="detail-needed">
                        <div class="amount-received">
                            <strong class="big-custom-price"  style="font-size: 24px; font-weight: 500;"><?=substr($applications['price'], 0, $num);?>
                                <sup>мил</sup>
                            </strong>
                            <span style="font-size: 14px">Из 110,000 необходимых</span>
                        </div>
                        <div class="progress-box">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" style="width:51%"></div>
                            </div>
                            <span class="data-percent data-percent-big">51%</span>
                        </div>
                    </div>
                    <div class="donors-and-time">
                        <div class="detail-number-donors" >
                            <strong>0 </strong>
                            <span style="margin-left: 10px">Пожертвования</span>
                        </div>
                        <div class="detail-time">
                            <strong title=" 7 May 2022">0  </strong>
                            <span style="margin-left: 10px">Осталось дней</span>
                        </div>
                    </div>
                    <div class="detail-buttons">
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="new-btn new-btn-danger" href="payment?id=<?=$applications['id']?>">
                                    Пожертвовать
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a style="border: 1px solid black; color: black" target="_blank" class="new-btn new-btn-dark-outline" href="https://t.me/muhtoj_uz">
                                    Поделись в Telegram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .detail-case {
            background-color: #fff;
            border: 1px solid #e7e7e7;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%);
            border-radius: 4px;
            margin-bottom: 18px;
        }
        @media (min-width: 992px){
            .detail-needed {
                padding: 56px 19px 60px;
            }
        }
        .detail-needed .amount-received {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .detail-needed .amount-received .big-custom-price {
            margin-bottom: 5px;
            margin-right: 20px;
        }

        .detail-needed .big-custom-price {
            font-size: 28px;
            font-weight: 900;
        }
        .big-custom-price {
            font-weight: 900;
            font-size: 46px;
            line-height: 1;
        }
        .big-custom-price, .custom-price {
            box-align: start;
            -moz-align-items: flex-start;
            -ms-align-items: flex-start;
            -o-align-items: flex-start;
            align-items: flex-start;
            -ms-flex-align: start;
            display: -webkit-box;
            display: -moz-box;
            display: box;
            display: -moz-flex;
            display: flex;
            box-orient: horizontal;
            box-direction: normal;
            -moz-flex-direction: row;
            flex-direction: row;
            box-pack: start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            -o-justify-content: flex-start;
            justify-content: flex-start;
            -ms-flex-pack: start;
            color: #101010;
            margin: 0;
        }
        b, strong {
            font-weight: inherit;
            font-weight: bolder;
        }
        .detail-needed .progress-box {
            margin-bottom: 0;
        }

        .progress-box {
            display: flex;
            align-items: center;
            margin-bottom: 35px;
        }
        .progress {
            display: flex;
            flex: 1;
            width: 100%;
            height: 4px;
            border-radius: 4px;
            background-color: #e7e7e7;
            overflow: hidden;
            margin-bottom: 0;
        }

        .progress {
            display: block;
            height: 6px;
            margin-bottom: 1rem;
        }
        .progress-bar-danger {
            background-color: #ff5456;
            box-shadow: 0 2px 5px 0 rgb(255 84 86 / 25%);
        }
        .progress-bar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #ff5455;
            transition: width .5s linear;
        }
        .donors-and-time {
            display: flex;
            flex-wrap: wrap;
            border-top: 1px solid #e7e7e7;
            border-bottom: 1px solid #e7e7e7;
        }
        @media (min-width: 576px){
            .detail-number-donors {
                border-right: 1px solid #e7e7e7;
                border-bottom: 0;
                flex: 1;
                width: auto;
            }
        }
        .detail-number-donors {
            display: flex;
            justify-content: center;
            align-items: baseline;
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
            font-size: 14px;
            padding: 24px 20px;
        }
        @media (min-width: 576px) {
            .detail-time {
                flex: 1;
                width: auto;
            }
        }

        .detail-time {
            display: flex;
            justify-content: center;
            align-items: baseline;
            width: 100%;
            font-size: 14px;
            padding: 24px 20px;
        }
        .data-percent-big {
            font-size: 18px;
            font-weight: 900;
        }
        .data-percent {
            margin-left: 28px;
            color: #101010;
            font-weight: 500;
            font-size: 14px;
            line-height: 1;
            white-space: nowrap;
            display: inline-block;
        }
        @media (min-width: 992px){
            .detail-buttons {
                padding: 30px;
            }
        }
        .detail-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 33px;
        }
        @media (min-width: 576px) {
            .detail-buttons .new-btn:first-child {
                margin-right: 10px;
                margin-bottom: 0;
            }
        }
        .detail-buttons .new-btn:first-child {
            margin-bottom: 20px;
        }
        @media (min-width: 576px) {
            .detail-buttons .new-btn {
                width: auto;
            }
        }
        .detail-buttons .new-btn {
            width: 100%;
        }
        .new-btn-danger {
            background-color: #ff5456;
            box-shadow: 0 2px 5px 0 rgb(255 84 86 / 25%);
        }
        @media (min-width: 992px) {
            .new-btn {
                padding: 17px 15px;
            }
        }
        .new-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            border-radius: 4px;
            border: 1px solid transparent;
            min-width: 166px;
            padding: 11px 15px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            cursor: pointer;
        }


    </style>
    <style>
        #main, #thumbnails img {
            box-shadow: 2px 2px 10px 5px #b8b8b8;
            border-radius: 10px;
        }
        #thumbnails {
            text-align: center;
        }
        #thumbnails img {
            width: 100px;
            height: 100px;
            margin: 10px;
            cursor: pointer;
        }
        @media only screen and (max-width: 480px) {
            #thumbnails img {
                width: 50px;
                height: 50px;
            }
        }
        #thumbnails img:hover {
            transform: scale(1.05);
        }

        #main {
            width: 50%;
            height: 400px;
            object-fit: cover;
            display: block;
            margin: 20px auto;
        }
        @media only screen and (max-width: 480px) {
            #main {
                width: 100%;
            }
        }
    </style>
    <script>
        var thumbnails = document.getElementById("thumbnails")
        var imgs = thumbnails.getElementsByTagName("img")
        var main = document.getElementById("main")
        var main1 = document.getElementById("main1")
        var counter=0;

        for(let i=0;i<imgs.length;i++){
            let img=imgs[i]


            img.addEventListener("click",function(){
                main.src=this.src
                main1.href=this.src
            })

        }
    </script>
<?php include_once ('../views/layouts/home_layout/footer.php');?>