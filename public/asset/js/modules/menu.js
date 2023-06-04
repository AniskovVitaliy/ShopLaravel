"use strict"

import {Handler} from "./handler.js";

export class Menu {

    constructor(menuElements) {
        this.menuElements = menuElements;
    }

    show(btn) {

        let context = this;

        Handler.createEvents(btn, 'click', function () {
            Handler.addClassName(context.menuElements[0], '_show-b');
            Handler.addClassName(context.menuElements[1], '_show-f');
        })
    }

    close(btn) {

        let context = this;

        Handler.createEvents(btn, 'click', function () {
            Handler.removeClassName(context.menuElements[0], '_show-b');
            Handler.removeClassName(context.menuElements[1], '_show-f');
        })
    }

    /**
     * menu-link с 2 уровнем вложенности получет доп.класс parent
     *
     * @param arrows
     */
    initArrow(arrows){
        arrows.forEach(function (arrow) {
            arrow.previousElementSibling.classList.add('parent');
        })
    }

    /**
     * Получает массив стрелок и вешает события
     *
     * @param arrows - стрелки для меню
     */
    arrowEvents(arrows){
        Handler.createEvents(arrows, 'click', function (e, arrow) {
            arrow.nextElementSibling.classList.toggle('open'); // вещает/убирает open на ul под arrow
            arrow.classList.toggle('active'); // вещает/убирает на элемент arrow active
        })
    }

}