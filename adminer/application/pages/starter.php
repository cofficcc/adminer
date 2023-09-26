<?php $title = 'Starter | cofficcc panel'; include 'head.inc.php' ?>

    <body class="app sidebar-mini login-img dark-mode">

        <div class="">

            <div id="global-loader" style="display: none;">
                <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>

            <div class="page">
                <div class="">

                    <div class="col col-login mx-auto mt-7">
                        <div class="text-center">
                            <img src="assets/images/brand/logo-white.png" class="header-brand-img" style="border-radius: 5px;" alt="">
                        </div>
                    </div>

                    <div class="container mt-3">
                        <div class="card">
                            <form action="/adminer/application/check-connection.php" id="default" method="post" class="card-body">
                                <div class="container-fluid d-flex justify-content-between align-items-center">
                                    <h2>Starter | cofficcc panel</h2>
                                    <a class="nav-link icon text-center" data-bs-target="#country-selector" data-bs-toggle="modal">
                                        <i class="fe fe-globe"></i><span class="fs-16 ms-2 d-none d-xl-block"><?=$lang['language']?></span>
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="server" placeholder="<?=$lang['server']?>" class="form-control">
                                    </div>
                                    <div class="col">
                                        <p>localhost</p>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" name="username" placeholder="<?=$lang['username']?>" class="form-control">
                                    </div>
                                    <div class="col">
                                        <p>root</p>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" name="password" placeholder="<?=$lang['password']?>" class="form-control">
                                    </div>
                                    <div class="col">
                                        <p>root</p>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="text" name="dbname" placeholder="<?=$lang['database name']?>" class="form-control">
                                    </div>
                                    <div class="col">
                                        <p>name</p>
                                    </div>
                                </div>

                                <input type="submit" value="<?=$lang['check connection']?>" class="mt-2 btn btn-success">

                                <div class="row">
                                    <div class="col">
                                        <div id="alertBlock" class="d-none">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <a target="_blank" class="btn text-white btn-primary"href="https://cofficcc.online/cofficcc-panel/help">Как работает данное ПО?</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    <?php include 'footer.inc.php'; ?>