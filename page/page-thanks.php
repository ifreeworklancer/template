<?php

require_once('../views/base/header-secondary.php');

?>
<section id="thanks-page">
    <div class="container h-100">
        <div class="row h-100 flex-column justify-content-center">
            <div class="col-sm-6 col-lg-4 p-0 text-center mx-auto">
                <div class="thanks-page-item">
                    <h1 class="thanks-page-item__title">
                        СПАСИБО!
                    </h1>
                    <div class="thanks-page-item__description my-4">Наш менеджер с Вами свяжется</div>
                    <a href="#" class="btn btn-primary">На главную</a>
                </div>
            </div>
        </div>
    </div>
    <ul class="social-list list-unstyled d-flex justify-content-end">
        <li class="social-list-item social-list-item--facebook mr-3">
            <a href="#">
                <svg width="20" height="20">
                    <use xlink:href="#facebook-icon"></use>
                </svg>
            </a>
        </li>
        <li class="social-list-item social-list-item--instagram mr-3">
            <a href="#">
                <svg width="20" height="20">
                    <use xlink:href="#instagram-icon"></use>
                </svg>
            </a>
        </li>
        <li class="social-list-item social-list-item--youtube">
            <a href="#">
                <svg width="20" height="20">
                    <use xlink:href="#youtube-icon"></use>
                </svg>
            </a>
        </li>
    </ul>
</section>

<?php

require_once('../views/base/footer-secondary.php');