@extends('public.layouts.main')

@section('content')

<main class="main _space-auto">
    <div class="_container">

        <!-- BREADCRUMBS -->
        <nav class="breadcrumbs _row-left _item-center">
            <ul class="breadcrumbs__items _row-left">
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">Главная</a>
                    <div class="breadcrumbs__arrow"><span class="google_icon-arrow_back_2"></span></div>
                </li>
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">Сантехника</a>
                    <div class="breadcrumbs__arrow"><span class="google_icon-arrow_back_2"></span></div>
                </li>
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">Смесители</a>
                    <div class="breadcrumbs__arrow"><span class="google_icon-arrow_back_2"></span></div>
                </li>
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">Для кухни</a>
                    <div class="breadcrumbs__arrow"><span class="google_icon-arrow_back_2"></span></div>
                </li>
                <li class="breadcrumbs__item _row-left _item-center">
                    <a href="" class="_text-md">frap 512</a>
                </li>
            </ul>
        </nav>
        <!-- ./BREADCRUMBS -->

        <!-- CATEGORIES CARDS -->
{{--        <div class="cards">--}}
{{--            <div class="cards__title _text-lg">Категории</div>--}}
{{--            <div class="line"></div>--}}
{{--            <div class="cards__item _row-between-wrap">--}}

{{--                <a class="card-item _column-start">--}}
{{--                    <div class="card-item__top-block">--}}
{{--                        <div class="card-item__image-block">--}}
{{--                            <img src="asset/img/png/1.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-item__middle-block _space-auto _text-md">--}}
{{--                        Название продукта Название продукта Название продукта--}}
{{--                    </div>--}}
{{--                    <div class="card-item__bottom-block _row-between _item-end">--}}
{{--                        <div class="card-item__button">--}}
{{--                            <div class="button _row-between _item-center _radius">Корзина</div>--}}
{{--                        </div>--}}
{{--                        <div class="card-item__price _text-md">000.00 руб</div>--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--                <a class="card-item _column-start">--}}
{{--                    <div class="card-item__top-block">--}}
{{--                        <div class="card-item__image-block">--}}
{{--                            <img src="asset/img/png/2.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-item__middle-block _space-auto _text-md">--}}
{{--                        Название продукта--}}
{{--                    </div>--}}
{{--                    <div class="card-item__bottom-block _row-between _item-end">--}}
{{--                        <div class="card-item__button">--}}
{{--                            <div class="button _row-between _item-center _radius">Корзина</div>--}}
{{--                        </div>--}}
{{--                        <div class="card-item__price _text-md">000.00 руб</div>--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--                <a class="card-item _column-start">--}}
{{--                    <div class="card-item__top-block">--}}
{{--                        <div class="card-item__image-block">--}}
{{--                            <img src="asset/img/png/3.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-item__middle-block _space-auto _text-md">--}}
{{--                        Название продукта--}}
{{--                    </div>--}}
{{--                    <div class="card-item__bottom-block _row-between _item-end">--}}
{{--                        <div class="card-item__button">--}}
{{--                            <div class="button _row-between _item-center _radius">Корзина</div>--}}
{{--                        </div>--}}
{{--                        <div class="card-item__price _text-md">000.00 руб</div>--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--                <a class="card-item _column-start">--}}
{{--                    <div class="card-item__top-block">--}}
{{--                        <div class="card-item__image-block">--}}
{{--                            <img src="asset/img/png/4.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-item__middle-block _space-auto _text-md">--}}
{{--                        Название продукта--}}
{{--                    </div>--}}
{{--                    <div class="card-item__bottom-block _row-between _item-end">--}}
{{--                        <div class="card-item__button">--}}
{{--                            <div class="button _row-between _item-center _radius">Корзина</div>--}}
{{--                        </div>--}}
{{--                        <div class="card-item__price _text-md">000.00 руб</div>--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--                <a class="card-item _column-start">--}}
{{--                    <div class="card-item__top-block">--}}
{{--                        <div class="card-item__image-block">--}}
{{--                            <img src="asset/img/png/1.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-item__middle-block _space-auto _text-md">--}}
{{--                        Название продукта--}}
{{--                    </div>--}}
{{--                    <div class="card-item__bottom-block _row-between _item-end">--}}
{{--                        <div class="card-item__button">--}}
{{--                            <div class="button _row-between _item-center _radius">Корзина</div>--}}
{{--                        </div>--}}
{{--                        <div class="card-item__price _text-md">000.00 руб</div>--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--            </div>--}}
{{--        </div>--}}
        <!-- ./CATEGORIES CARDS -->

        <!-- PRODUCT CARDS -->
        <div class="cards">
            <div class="cards__title _text-lg">Продукты</div>
            <div class="line"></div>

            <!-- SORT -->
            <div class="sort-block _row-left _text-sm">
                <h3>Сортировка: </h3>
                <nav class="sort">
                    <ul class="sort__list">
                        <li>
                            <a href="" class="sort__link no-click">Популярность</a>
                            <ul class="sort__dropdown-list">
                                <li><a href="" class="sort__dropdown-link">Убывание цены</a></li>
                                <li><a href="" class="sort__dropdown-link">Возрастание цены</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- ./SORT -->

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

            <div class="line"></div>

        </div>
        <!-- ./PRODUCT CARDS -->

        <!-- PAGINATION -->
        <div class="pagination-block _row-around">
            <nav class="pagination">
                <ul class="pagination__list _row-left _text-sm">
                    <li class="pagination__link _radius"><span class="google_icon-double_arrow"></span></li>
                    <li class="pagination__link _radius active"><a href="#">1</a></li>
                    <li class="pagination__link _radius"><a href="#">2</a></li>
                    <li class="pagination__link _radius"><a href="#">3</a></li>
                    <li class="pagination__link _radius"><a href="#">4</a></li>
                    <li class="pagination__link _radius"><a href="#">5</a></li>
                    <li class="pagination__link _radius no-click"><a href="#">...</a></li>
                    <li class="pagination__link _radius"><a href="#">10</a></li>
                    <li class="pagination__link _radius"><span class="google_icon-double_arrow"></span></li>
                </ul>
            </nav>
        </div>
        <!-- ./PAGINATION -->

    </div>
</main>

@endsection
