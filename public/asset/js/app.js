import {doc, isMobile} from "./modules/variables.js";
import {Search} from "./modules/search.js";
import {Menu} from "./modules/menu.js";

/* MENU... */
let searchObj = new Search([doc.search.elements, doc.logo]);
searchObj.showClose(doc.search.btnToShow);
searchObj.close(doc.search.btnToClose);
/* ...MENU */

/* SEARCH... */
if (isMobile.any()) {
    doc.body.classList.add('touch');

    let menuObj = new Menu(doc.menu.elements);
    menuObj.show(doc.menu.btnToShow);
    menuObj.close(doc.menu.btnToClose);
    menuObj.initArrow(doc.menu.arrow);
    menuObj.arrowEvents(doc.menu.arrow);

} else {
    doc.body.classList.add('mouse');
}
/* ...SEARCH */

/* SLICK SLIDER MAIN PAGE... */
$(document).ready(function () {
    $('.slider').slick({
        arrows: true, //Стрелки
        dots: true, //Точки
        slidesToShow: 1, //Количество слайдов для показа
        slidesToScroll: 1, //Кол-во слайдов для скрола
        speed: 1000, //Скорость прокрутки слайдов
        infinite: true, //Бесконечный слайдер (по кругу)
        initialSlide: 0, //C какого слайда запускать
        autoplay: true, //Автопрокрутка
        autoplaySpeed: 5000, //Тайминг для автоплея слайдера
        pauseOnFocus: true, //Пауза автопрокрутки при фокусе
        pauseOnHover: true, //Пауза автопрокрутки при наведнии
        pauseOnDotsHover: true, //Пауза автопрокрутки при наведении на точки
    });
})
/* ...SLICK SLIDER MAIN PAGE */

