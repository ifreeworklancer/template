<!-- Format -->
<section id="format">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-4 mx-auto">
                <h2 class="section-title text-center">
                    Формат участия
                </h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-start">
            <div class="col-sm-5 col-lg-4">
                <div class="format-card">
                    <div class="format-card-header">
                        <h3 class="format-card-header__title text-center">
                            Стандарт
                        </h3>
                    </div>
                    <div class="format-card-body">
                        <p class="format-card-body__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                            commodo consequat laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <div class="format-card-body-price d-flex justify-content-center align-items-center">
                            <div class="format-card-body-price__name mr-2">Цена</div>
                            <div class="format-card-body-price__value">$99</div>
                        </div>
                    </div>
                    <div class="format-card-footer">
                        <a href="#" class="btn btn-outline-primary format-card-footer__btn" data-idModal='format-standard'>ВыБРАТЬ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-lg-4">
                <div class="format-card">
                    <div class="format-card-header">
                        <h3 class="format-card-header__title text-center">
                            VIP
                        </h3>
                    </div>
                    <div class="format-card-body">
                        <div class="format-card-body__type">
                            Стандарт
                        </div>
                        <p class="format-card-body__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                            commodo consequat laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <div class="format-card-body-price d-flex justify-content-center align-items-center">
                            <div class="format-card-body-price__name mr-2">Цена</div>
                            <div class="format-card-body-price__value">$199</div>
                        </div>
                    </div>
                    <div class="format-card-footer">
                        <a href="#" class="btn btn-outline-primary format-card-footer__btn" data-idModal='format-vip'>ВыБРАТЬ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-circle decor-circle--big"></div>
    <div class="decor-circle decor-circle--middle"></div>
    <div class="decor-circle decor-circle--little"></div>
    <div id="format-standard" class="format-modal">
        <div class="close-modal">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="format-modal-header">
            <h3 class="format-modal-header__title">
                Курс "Стандарт"
            </h3>
        </div>
        <div class="format-modal-body">
            <form action="#" id="form-format-standard" class="format-modal-body__form">
                <div class="form-group mb-5">
                    <label for="user-name--standard" class="label-placeholder">Ваше имя</label>
                    <input type="text" class="form-control position-relative" id="user-name--standard">
                </div>
                <div class="form-group mb-5">
                    <label for="user-email--standard" class="label-placeholder">Ваш Email</label>
                    <input type="email" class="form-control position-relative" id="user-email--standard">
                </div>
                <div class="form-group mb-5">
                    <label for="user-phone--standard" class="label-placeholder">Номер телефона</label>
                    <input type="text" class="form-control position-relative" id="user-phone--standard">
                </div>
                <button class="btn btn-outline-primary text-white py-3">Записаться</button>
            </form>
        </div>
    </div>
    <div id="format-vip" class="format-modal">
        <div class="close-modal">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="format-modal-header">
            <h3 class="format-modal-header__title">
                Курс "VIP"
            </h3>
        </div>
        <div class="format-modal-body">
            <form action="#" id="form-format-vip" class="format-modal-body__form">
                <div class="form-group mb-5">
                    <label for="user-name--vip" class="label-placeholder">Ваше имя</label>
                    <input type="text" class="form-control position-relative" id="user-name--vip">
                </div>
                <div class="form-group mb-5">
                    <label for="user-email--vip" class="label-placeholder">Ваш Email</label>
                    <input type="email" class="form-control position-relative" id="user-email--vip">
                </div>
                <div class="form-group mb-5">
                    <label for="user-phone--vip" class="label-placeholder">Номер телефона</label>
                    <input type="text" class="form-control position-relative" id="user-phone--vip">
                </div>
                <button class="btn btn-outline-primary text-white py-3">Записаться</button>
            </form>
        </div>
    </div>
    <div class="modal-mask"></div>
</section>