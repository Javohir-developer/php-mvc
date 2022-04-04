<?php include_once('../views/layouts/home_layout/header.php');?>
    <script src="/assets/js/jquery.min.js"></script>
    <div class="container1 container" >
        <h1 class="text-center">Добавьте свою заявку</h1>
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-4">
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p><small>Контактные данные</small></p>
                </div>
                <div class="stepwizard-step col-xs-4">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p><small>Общая информация</small></p>
                </div>
                <div class="stepwizard-step col-xs-4">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p><small>Дополнительная информация</small></p>
                </div>
            </div>
        </div>
        <form role="form" action="/create-work/create"  method="post" enctype="multipart/form-data">
            <div class="panel panel-primary setup-content" id="step-1">
                <div class="panel-heading">
                    <h3 class="panel-title">Контактные данные</h3>
                    <ul>
                        <?php if(isset($res) && count($res)){ foreach ($res as $key => $value){ ?>
                            <li style="color: red;"><?= $value;?></li>
                        <?php }} ?>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Имя, Фамилия <sup class="sup">*</sup></label>
                                <input maxlength="100" name="name" type="text" required="required" class="form-control"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Возраст  <sup class="sup">*</sup></label>
                                <input maxlength="100" name="age" type="number" required="required" class="form-control"   />
                            </div>
                            <div class="form-group">
                                <label for="cars">Страна, Область <sup class="sup">*</sup></label>
                                <select required="required" class="form-control"  id="cars" name="country">
                                    <option value="Город Ташкент" selected>Город Ташкент</option>
                                    <option value="Республика Каракалпакстан">Республика Каракалпакстан</option>
                                    <option value="Хорезмская область">Хорезмская область</option>
                                    <option value="Ферганская область">Ферганская область</option>
                                    <option value="Ташкентская область">Ташкентская область</option>
                                    <option value="Сырдарьинская область">Сырдарьинская область</option>
                                    <option value="Сурхандарьинская область">Сурхандарьинская область</option>
                                    <option value="Самаркандская область">Самаркандская область</option>
                                    <option value="Наманганская область">Наманганская область</option>
                                    <option value="Навоийская область">Навоийская область</option>
                                    <option value="Кашкадарьинская область">Кашкадарьинская область</option>
                                    <option value="Джизакская область">Джизакская область</option>
                                    <option value="Бухарская область">Бухарская область</option>
                                    <option value="Андижанская область">Андижанская область</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Адрес  <sup class="sup">*</sup></label>
                                <input  type="text" name="adress" required="required" class="form-control"   />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Телегам <sup class="sup">*</sup></label>
                                <input maxlength="100" name="telegram" type="text" required="required" class="form-control"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Телефон  <sup class="sup">*</sup></label>
                                <input maxlength="100" type="number" name="tell" required="required" class="form-control"   />
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary nextBtn pull-right"  type="button">Следующий</button>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-2">
                <div class="panel-heading">
                    <h3 class="panel-title">Общая информация</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Заголовок <sup class="sup">*</sup></label>(название болезни)
                                <input  type="text" required="required" name="title" class="form-control"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Необходимая сумма  <sup class="sup">sum *</sup></label>
                                <input maxlength="100" type="number" name="price" required="required" class="form-control"   />
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Дата начала <sup class="sup">*</sup></label>
                                        <input maxlength="100" type="date" name="begin_date" required="required" class="form-control"  />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Дата окончания <sup class="sup">*</sup></label>
                                        <input maxlength="100" type="date" name="end_date" required="required" class="form-control"   />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Описание случая  <sup class="sup">*</sup></label>(причина необходимости)
                                <textarea name="commit" required="required" class="form-control" id="textarea"  rows="10" cols="50"> </textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary nextBtn pull-right" type="button">Следующий</button>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-3">
                <div class="panel-heading">
                    <h3 class="panel-title">Дополнительная информация</h3>
                </div>
                <div class="panel-body">
                    <div  class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Добавить документы <sup class="sup">*</sup></label>
                                <input type="file"  name="files[]" accept=".doc, .docx,.ppt, .pptx,.txt,.pdf,.png,.jpg,.jpeg" class="form-control" multiple  required/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Добавить фото  <sup class="sup">*</sup></label>
                                <input  type="file" name="images[]" accept="image/*"  class="form-control" multiple required/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Добавить видео</label>
                                <input type="file"  name="video" accept="video/*" class="form-control"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Добавить пластик карта</label>
                                <input type="number"  name="humo_card" placeholder="0000 0000 0000 0000" class="form-control"  required/>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success pull-right" type="submit">Отправить!</button>
                </div>
            </div>
            <div class="col-md-4 recaptcha" id="g-recaptcha3"></div>
        </form>

    </div>
    <style>
        .container1{
            margin-top: 165px;
            margin-bottom: 100px;
        }
        .sup{
            color: red;
        }
        .stepwizard-step p {
            margin-top: 0px;
            color:#666;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }
        .stepwizard-step button[disabled] {
            /*opacity: 1 !important;
            filter: alpha(opacity=100) !important;*/
        }
        .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
            opacity:1 !important;
            color:#bbb;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content:" ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-index: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
        /*a {*/
        /*    -webkit-transition: .3s all;*/
        /*    transition: .3s all;*/
        /*    color: #eee!important;*/
        /*}*/
    </style>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback"></script>
    <script>
        $(document).ready(function () {
// setTimout is not necessary
            setTimeout(function() {

                $('.recaptcha').each(function() {
                    grecaptcha.render(this.id, {
                        'sitekey': '6LdVkwkUAAAAACeeETRX--v9Js0vWyjQOTIZxxeB',
                        "theme":"light"
                    });
                });

            }, 2000);

            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    $item.addClass('btn-success');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='file'],input[type='url'],input[type='number'],input[type='date'],textarea[name='textarea']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-success').trigger('click');
        });
    </script>
<?php include_once ('../views/layouts/home_layout/footer.php');?>