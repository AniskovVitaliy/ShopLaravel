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

        <div class="product">
            <div class="product__title _text-xl">
                <h2>Product name (article)</h2>
            </div>

            <div class="product__block _row-between">
                <div class="product__left-column">
                    <div class="product-slider _column-start _item-center">
                        <div class="product-slider__main-img-block">
                            <img src="asset/img/png/1.png" alt="">
                        </div>
                        <div class="product-slider__slider-track _row-between-wrap">
                            <div class="product-slider__slider-item active">
                                <img src="asset/img/png/1.png" alt="">
                            </div>
                            <div class="product-slider__slider-item">
                                <img src="asset/img/png/2.png" alt="">
                            </div>
                            <div class="product-slider__slider-item">
                                <img src="asset/img/png/3.png" alt="">
                            </div>
                            <div class="product-slider__slider-item">
                                <img src="asset/img/png/4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__right-column _column-start _item-end">
                    <div class="product__price _text-md">000.00 руб</div>
                    <div class="product__tags _row-right-wrap _text-md">
                        <div class="product__tag active">white</div>
                        <div class="product__tag">black</div>
                        <div class="product__tag">red</div>
                        <div class="product__tag">blue</div>
                    </div>
                </div>
            </div>

            <div class="product__bottom">
                <div class="product__bottom-title _text-lg">
                    <h3>Характеристики</h3>
                </div>
                <div class="line"></div>
                <table class="character">
                    <thead>
                    <tr>
                        <th>propertyName</th>
                        <th>value</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>propertyName1</td>
                        <td>value1</td>
                    </tr>
                    <tr>
                        <td>propertyName2</td>
                        <td>value2</td>
                    </tr>
                    <tr>
                        <td>propertyName3</td>
                        <td>value3</td>
                    </tr>
                    <tr>
                        <td>propertyName4</td>
                        <td>value4</td>
                    </tr>
                    <tr>
                        <td>propertyName5</td>
                        <td>value5</td>
                    </tr>
                    <tr>
                        <td>propertyName6</td>
                        <td>value6</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

@endsection
