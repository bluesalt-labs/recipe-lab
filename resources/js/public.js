
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

//let showSidebar = true;
//
//function debounce(fn, delay) {
//    let timer = null;
//    return () => {
//        let context = this, args = arguments;
//        clearTimeout(timer);
//        timer = setTimeout(() => {
//            fn.apply(context, args);
//    }, delay);
//    }
//}
//
//function resize() {
//    showSidebar = (window.innerWidth > 992)
//}
//
//window.addEventListener("resize", debounce(resize, 250));
//
//document.addEventListener("DOMContentLoaded", () => {
//    resize();
//
//    const navBtnToggle = document.getElementById('header-nav-btn-toggle');
//    const navBtnUser   = document.getElementById('header-nav-btn-user');
//
//    if(navBtnToggle) { navBtnToggle.onclick = onNavBtnToggleClick; }
//    if(navBtnUser)   { navBtnUser.onclick = onNavBtnClick; }
//});