<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="facebook-icon" viewBox="0 0 448 512">
            <path d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path>
        </symbol>

        <symbol id="instagram-icon" viewBox="0 0 448 512">
            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
        </symbol>

        <symbol id="youtube-icon" viewBox="0 0 448 512">
            <path d="M186.8 202.1l95.2 54.1-95.2 54.1V202.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-42 176.3s0-59.6-7.6-88.2c-4.2-15.8-16.5-28.2-32.2-32.4C337.9 128 224 128 224 128s-113.9 0-142.2 7.7c-15.7 4.2-28 16.6-32.2 32.4-7.6 28.5-7.6 88.2-7.6 88.2s0 59.6 7.6 88.2c4.2 15.8 16.5 27.7 32.2 31.9C110.1 384 224 384 224 384s113.9 0 142.2-7.7c15.7-4.2 28-16.1 32.2-31.9 7.6-28.5 7.6-88.1 7.6-88.1z"></path>
        </symbol>
    </svg>


    <header id="app-header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-1">
                    <a href="#" class="logo d-block">
                        <img src="images/icon/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-sm-9">
                    <nav class="menu justify-content-center align-items-center">
                        <ul class="menu-list list-unstyled d-flex flex-column flex-lg-row justify-content-between align-items-center">
                            <li class="menu-list-item">
                                <a href="#" class="menu-list-item__link scroll-link">
                                    О семинаре
                                </a>
                            </li>
                            <li class="menu-list-item">
                                <a href="#" class="menu-list-item__link scroll-link">
                                    Для кого семинар
                                </a>
                            </li>
                            <li class="menu-list-item">
                                <a href="#" class="menu-list-item__link scroll-link">
                                    Автор и ведущий
                                </a>
                            </li>
                            <li class="menu-list-item">
                                <a href="#" class="menu-list-item__link scroll-link">
                                    Программа
                                </a>
                            </li>
                            <li class="menu-list-item">
                                <a href="#" class="menu-list-item__link scroll-link">
                                    Форматы участия
                                </a>
                            </li>
                            <li class="menu-list-item">
                                <a href="#" class="menu-list-item__link scroll-link">
                                    Отзывы
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="burger-menu d-lg-none d-flex flex-column justify-content-center align-items-center">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </header>

    <main>
