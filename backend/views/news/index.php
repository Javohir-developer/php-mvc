<?php include_once('../views/layouts/home_layout/header.php');?>
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-three">
                        <div class="widget-heading">
                            <div class="row">
                                <div class="col-sm-6"><h5 class="">Новости  </h5></div>
                                <div class="col-sm-6"><a style="float: right" href="/news/create" class="btn btn-outline-success pay-now">Добавить новость</a></div>
                            </div>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content th-heading">фото</div></th>
                                        <th><div class="th-content">Титле ру</div></th>
                                        <th><div class="th-content th-heading">Техт ру</div></th>
                                        <th><div class="th-content">дата</div></th>
                                        <th><div class="th-content">статус</div></th>
                                        <th><div class="th-content"></div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($news as $new):?>
                                        <tr>
                                            <td><div class="td-content"><img src="../../../../frontend/web/assets/files/news/salom.png" alt=""></div></td>
                                            <td><div class="td-content"><?= substr($new->title_ru, 0, 50).'...'; ?></div></td>
                                            <td><div class="td-content"><?= substr($new->text_ru, 0, 50).'...'; ?></div></td>
                                            <td><div class="td-content"><?= $new->date; ?></div></td>
                                            <td><div class="td-content"><?= $new->status == 1  ? 'Активе' : 'Не активе'; ?></div></td>
                                            <td>
                                                <div class="td-content">
                                                    <a href="/news/update?id=<?=$new->id; ?>">
                                                        <svg style="color: green" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </a>
                                                    <a href="/news/delete?id=<?=$new->id; ?>">
                                                        <svg  style="color: red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




<?php include_once ('../views/layouts/home_layout/footer.php');?>