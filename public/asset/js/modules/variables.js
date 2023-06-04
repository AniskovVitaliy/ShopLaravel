"use strict"

export const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

export const doc = {
    search: {
        elements: [
            document.querySelector('.search'),
        ],
        btnToShow: [
            document.querySelectorAll('.search_btn'),
        ],
        btnToClose: [
            document.querySelector('.close_search'),
        ],
        btnToShowToClose: [
            document.querySelectorAll('.search_btn'),
        ],
    },
    menu: {
        elements: [
            document.querySelector('.main-menu'),
            document.querySelector('.main-menu__top'),
        ],
        btnToShow: [
            document.querySelectorAll('.btn_menu'),
        ],
        btnToClose: [
            document.querySelector('.main-menu__top-close'),
        ],
        arrow: document.querySelectorAll('.arrow'),
    },
    body: document.querySelector('body'),
    logo: document.querySelector('.logo'),
}