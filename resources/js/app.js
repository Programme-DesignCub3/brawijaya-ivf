require("./bootstrap");

const el = document.querySelector("body");
const navbarFixed = document.querySelector("#navbarFixed");
let old_visible = false;

function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top <= -500
        // &&
        // rect.left >= 0 &&
        // rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        // rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
    );
}

function onVisibilityChange(el, callback) {
    return function () {
        var visible = isElementInViewport(el);
        if (visible != old_visible) {
            old_visible = visible;
            if (typeof callback == "function") {
                callback();
            }
        }
    };
}

var handler = onVisibilityChange(el, function () {
    navbarFixed.classList.toggle("-translate-y-[110%]");
});

if (window.addEventListener) {
    // addEventListener('DOMContentLoaded', handler, false);
    // addEventListener('load', handler, false);
    addEventListener("scroll", handler, false);
    addEventListener("resize", handler, false);
} else if (window.attachEvent) {
    // attachEvent('onDOMContentLoaded', handler); // Internet Explorer 9+ :(
    // attachEvent('onload', handler);
    attachEvent("onscroll", handler);
    attachEvent("onresize", handler);
}
