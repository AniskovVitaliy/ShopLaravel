"use strict"

import {Handler} from "./handler.js";
import {doc} from "./variables.js";

export class Search {

    constructor(searchBlock) {
        this.searchData = searchBlock;
    }

    show(btn) {

        let context = this;

        Handler.createEvents(btn, 'click', function () {
            Handler.removeClassName(context.searchData[0], '_hide');

            if (doc.body.clientWidth < 500) {
                Handler.addClassName(context.searchData[1], '_hide');
            }
        })

    }

    close(btn) {

        let context = this;

        Handler.createEvents(btn, 'click', function () {
            Handler.addClassName(context.searchData[0], '_hide');

            if (doc.body.clientWidth < 500 || context.searchData[1].classList.contains('_hide')) {
                Handler.removeClassName(context.searchData[1], '_hide');
            }
        })

    }

    showClose(btn) {

        let context = this;

        Handler.createEvents(btn, 'click', function () {
            Handler.addOrRemoveClassName(context.searchData[0], '_hide');

            if (doc.body.clientWidth < 500 || context.searchData[1].classList.contains('_hide')) {
                Handler.addOrRemoveClassName(context.searchData[1], '_hide');
            }
        })

    }
}