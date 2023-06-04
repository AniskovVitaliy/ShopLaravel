import {doc} from "./variables.js";

export class Handler{

    /**
     * Перебираем массив с элементами и отдает элементы в коллбек
     *
     * @param elements массив с элементами
     * @param callback
     */
    static getElements(elements, callback) {

        if(!elements.length && doc.body.contains(elements)){
            return callback(elements);
        }

        //перебор элементов
        elements.forEach(function (element) {

            //если элемент не является элементом дом
            if (
                element.length ||
                !doc.body.contains(element)
            )
                return Handler.getElements(element, callback);

            //отдает элеменит в колбек функцию если он является элементом дом дерева
            callback(element);
        })
    }

    /**
     * Перебирает элементы и создает события к ним
     *
     * @param elements - элементы
     * @param event - тип события
     * @param callback
     */
    static createEvents(elements, event, callback){

        Handler.getElements(elements, function (element) {

            element.addEventListener(event, function (e) {
                callback(e, element)
            })

        });
    }

    /**
     * Удаляет класс у элементов который соответсвует переданному значению "className"
     *
     * @param elements - элементы
     * @param className - имя класса
     */
    static removeClassName(elements, className){
        Handler.getElements(elements, function (element) {
            if (element.classList.contains(className)) {
                element.classList.remove(className)
            }
        })
    }

    /**
     * Добавляет класс к элементам которые соответсвует переданному значению "className"
     *
     * @param elements - элементы
     * @param className - имя класса
     */
    static addClassName(elements, className){
        Handler.getElements(elements, function (element) {
            if (!element.classList.contains(className)) {
                element.classList.add(className)
            }
        })
    }

    /**
     * Добавляет/Удаляет класс у элементов которые соответсвют переданному значению "className"
     *
     * @param elements - элементы
     * @param className - имя класса
     */
    static addOrRemoveClassName(elements, className){
        Handler.getElements(elements, function (element) {
            element.classList.toggle(className);
        })
    }

}