<?php $title = 'cofficcc panel | Authorization'; include 'head.inc.php'; ?>

    <body>
        <div class="">

            <div id="global-loader" style="display: none;">
                <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>

            <div class="page">
                <div class="">

                    <div class="col col-login mx-auto mt-7">
                        <div class="text-center">
                            <a href="index.html"><img src="assets/images/brand/logo-white.png" style="border-radius: 7px;" class="header-brand-img" alt=""></a>
                        </div>
                    </div>

                    <div class="container-login100">
                        <div class="wrap-login100 p-6">
                            <form class="login100-form validate-form" action="/adminer/application/check-login.php" method="post" id="default">
                                    <span class="login100-form-title pb-5">
                                        <?=$lang['authorization']?>
                                    </span>
                                <div class="panel panel-primary">
                                    <div class="panel-body p-0 pt-5">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab5">
                                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="fa fa-user text-muted" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0" name="nickname" type="text" placeholder="<?=$lang['username']?>">
                                                </div>
                                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0" name="password" type="password" placeholder="<?=$lang['password']?>">
                                                </div>
                                                <div class="container-login100-form-btn">
                                                    <input type="submit" class="login100-form-btn btn btn-primary" value="<?=$lang['sign in']?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php include "footer.inc.php"; ?>
