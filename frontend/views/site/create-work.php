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

        <form role="form">
            <div class="panel panel-primary setup-content" id="step-1">
                <div class="panel-heading">
                    <h3 class="panel-title">Контактные данные</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Имя, Фамилия <sup class="sup">*</sup></label>
                                <input maxlength="100" type="text" required="required" class="form-control"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Возраст  <sup class="sup">*</sup></label>
                                <input maxlength="100" type="number" required="required" class="form-control"   />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Страна, Город <sup class="sup">*</sup></label>
                                <input maxlength="100" type="text" required="required" class="form-control"  />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Адрес  <sup class="sup">*</sup></label>
                                <input  type="text" required="required" class="form-control"   />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Телегам <sup class="sup">*</sup></label>
                                <input maxlength="100" type="text" required="required" class="form-control"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Телефон  <sup class="sup">*</sup></label>
                                <input maxlength="100" type="text" required="required" class="form-control"   />
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
                                <label class="control-label">Заголовок <sup class="sup">*</sup></label>
                                <input  type="text" required="required" class="form-control"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Необходимая сумма  <sup class="sup">sum *</sup></label>
                                <input maxlength="100" type="number" required="required" class="form-control"   />
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Дата начала <sup class="sup">*</sup></label>
                                        <input maxlength="100" type="date" required="required" class="form-control"  />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Дата окончания <sup class="sup">*</sup></label>
                                        <input maxlength="100" type="date" required="required" class="form-control"   />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Описание случая  <sup class="sup">*</sup></label>
                                <textarea name="textarea" required="required" class="form-control" id="textarea"  rows="10" cols="50"> </textarea>
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
                    <div class="form-group">
                        <label class="control-label">Добавить документы <sup class="sup">*</sup></label>
                        <input maxlength="100" type="file" required="required" class="form-control"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Добавить фото  <sup class="sup">*</sup></label>
                        <input  type="file" name="image[]"  class="form-control" accept="image/*" multiple=""/>
                    </div>
                    <button class="btn btn-success pull-right" type="submit">Отправить!</button>
                </div>
            </div>
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
    <script>
        $(document).ready(function () {

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