<?php include_once('../views/layouts/home_layout/header.php');?>
    <link rel="stylesheet" href="https://designreset.com/cork/ltr/demo6/plugins/file-upload/file-upload-with-preview.min.css">
    <link rel="stylesheet" href="https://designreset.com/cork/ltr/demo6/assets/css/scrollspyNav.css">
    <link rel="stylesheet" href="/assets/cork/assets/css/main1.css">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">
                    <div class="widget-heading">
                        <div class="row">
                            <div class="col-sm-6"><h5 class="">Добавить новость</h5></div>
                        </div>
                    </div>
                    <?php if (!empty($res)  && is_array($res)):?>
                        <div class="var_p">
                            <ul>
                                <?php foreach ($res as $r):?>
                                    <li style="color: red"><?= $r; ?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    <?php endif;?>
                    <div class="widget-content">
                        <ul class="nav nav-tabs mt-3" id="border-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="border-home-tab" data-toggle="tab" href="#border-home" role="tab" aria-controls="border-home" aria-selected="true"> Новости ru</a>
                            </li>
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" id="border-profile-tab" data-toggle="tab" href="#border-profile" role="tab" aria-controls="border-profile" aria-selected="false"> Profile</a>-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" id="border-contact-tab" data-toggle="tab" href="#border-contact" role="tab" aria-controls="border-contact" aria-selected="false"> Contact</a>-->
<!--                                </li>-->
                        </ul>
                        <div class="tab-content mb-4" id="border-tabsContent">
                            <form style="margin-top: 25px" action="/news/update?id=<?=$news['id'];?>" method="post" id="news-form"  enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?=$news['id'];?>">
                                <div class="tab-pane fade show active" id="border-home" role="tabpanel" aria-labelledby="border-home-tab">
                                        <div class="form-group mb-4">
                                            <label for="inputAddress">Заголовок ru</label>
                                            <input required type="text" name="title_ru" value="<?=$news['title_ru'];?>" class="form-control" id="inputAddress">
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                <label class="custom-file-container__custom-file" >
                                                    <input required type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="image">
                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <div id="editor"></div>
                                        </div>
                                    <textarea name="text_ru" id="text_value" style="display: none"><?=$news['text_ru'];?></textarea>
                                </div>
                                <div class="tab-pane fade" id="border-profile" role="tabpanel" aria-labelledby="border-profile-tab"></div>
                                <div class="tab-pane fade" id="border-contact" role="tabpanel" aria-labelledby="border-contact-tab"></div>
                                <input type="date" name="date" value="<?=$news['date'];?>">
                                <div class="form-group">
                                    <div class="form-check pl-0">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" name="status" value="1" class="custom-control-input" checked id="gridCheck">
                                            <label class="custom-control-label" for="gridCheck">Статус</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="sub_form" class="btn btn-primary mt-3">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="/assets/cork/assets/js/main1.js"></script>
    <script src="/assets/cork/assets/js/main2.js"></script>
    <script src="https://designreset.com/cork/ltr/demo6/assets/js/scrollspyNav.js"></script>
    <script src="https://designreset.com/cork/ltr/demo6/plugins/file-upload/file-upload-with-preview.min.js"></script>
    <script>
        var firstUpload = new FileUploadWithPreview('myFirstImage');
        tinymce.init({
            selector:
                '#textArea'
        });
    </script>
<?php include_once ('../views/layouts/home_layout/footer.php');?>