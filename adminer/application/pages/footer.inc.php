<script src="assets/js/jquery.min.js"></script>

<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/show-password.min.js"></script>

<script src="assets/js/generate-otp.js"></script>

<script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<script src="assets/js/themeColors.js"></script>

<script src="assets/js/custom.js"></script>
<script src="assets/js/app.js"></script>

<div class="modal fade" id="country-selector" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h6 class="modal-title"><?=$lang['choose language']?></h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <ul class="row p-3">
                    <li class="col-lg-6 mb-2">
                        <a href="?lang=en" class="btn btn-country btn-lg btn-block<?php if($_SESSION['lang'] == 'en') echo ' active'; ?>">
                            <span class="country-selector"></span>Английский
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="?lang=ru" class="btn btn-country btn-lg btn-block<?php if($_SESSION['lang'] == 'ru') echo ' active'; ?>">
                            <span class="country-selector"></span>Русский
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


</body>

</html>