@extends('public.layouts.main')

@section('content')

<main class="main _space-auto">
    <div class="_container">

        <!-- SLIDER -->
        <div class="slider">
            <div class="slider__item _radius">
                <div class="slider__item-container _row-evenly">
                    <div class="slider__left-content _column-start">
                        <div class="slider__left-content-title _text-xl">
                            <h3>Какой-то Title</h3>
                        </div>
                        <div class="slider__left-content-text _text-sm">
                            Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст
                        </div>
                        <div class="slider__left-content-button">
                            <div class="button _row-between _item-center _radius _box-shadow-s">Подробнее
                                <span class="google_icon-double_arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__right-content">
                        <div class="slider__image-block">
                            <img src="asset/img/png/1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__item _radius">
                <div class="slider__item-container _row-evenly">
                    <div class="slider__left-content _column-start">
                        <div class="slider__left-content-title _text-xl">
                            <h3>Какой-то Title</h3>
                        </div>
                        <div class="slider__left-content-text _text-sm">
                            Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст
                        </div>
                        <div class="slider__left-content-button">
                            <div class="button _row-between _item-center _radius _box-shadow-s">Подробнее
                                <span class="google_icon-double_arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__right-content">
                        <div class="slider__image-block">
                            <img src="asset/img/png/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__item _radius">
                <div class="slider__item-container _row-evenly">
                    <div class="slider__left-content _column-start">
                        <div class="slider__left-content-title _text-xl">
                            <h3>Какой-то Title</h3>
                        </div>
                        <div class="slider__left-content-text _text-sm">
                            Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст
                        </div>
                        <div class="slider__left-content-button">
                            <div class="button _row-between _item-center _radius _box-shadow-s">Подробнее
                                <span class="google_icon-double_arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__right-content">
                        <div class="slider__image-block">
                            <img src="asset/img/png/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__item _radius">
                <div class="slider__item-container _row-evenly">
                    <div class="slider__left-content _column-start">
                        <div class="slider__left-content-title _text-xl">
                            <h3>Какой-то Title</h3>
                        </div>
                        <div class="slider__left-content-text _text-sm">
                            Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст
                        </div>
                        <div class="slider__left-content-button">
                            <div class="button _row-between _item-center _radius _box-shadow-s">Подробнее
                                <span class="google_icon-double_arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__right-content">
                        <div class="slider__image-block">
                            <img src="asset/img/png/4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./SLIDER -->

        <!-- PRODUCT CARDS -->
        <div class="cards">
            <div class="cards__title _text-lg">Продукты</div>
            <div class="line"></div>
            <div class="cards__item _row-between-wrap">

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта Название продукта Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/2.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/3.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/4.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

            </div>
        </div>
        <!-- ./PRODUCT CARDS -->

        <!-- CATEGORIES CARDS -->
        <div class="cards">
            <div class="cards__title _text-lg">Категории</div>
            <div class="line"></div>
            <div class="cards__item _row-between-wrap">

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта Название продукта Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/2.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/3.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/4.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

                <a class="card-item _column-start">
                    <div class="card-item__top-block">
                        <div class="card-item__image-block">
                            <img src="asset/img/png/1.png" alt="">
                        </div>
                    </div>
                    <div class="card-item__middle-block _space-auto _text-md">
                        Название продукта
                    </div>
                    <div class="card-item__bottom-block _row-between _item-end">
                        <div class="card-item__button">
                            <div class="button _row-between _item-center _radius">Корзина</div>
                        </div>
                        <div class="card-item__price _text-md">000.00 руб</div>
                    </div>
                </a>

            </div>
        </div>
        <!-- ./CATEGORIES CARDS -->

    </div>
</main>

@endsection
