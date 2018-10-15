document.addEventListener( 'DOMContentLoaded', function() { 
    var burger = document.getElementById( 'burger' );
    var header = document.getElementById( 'header' );
    var page = document.documentElement;
    burger.addEventListener( 'click', function () {
        header.classList.toggle( 'active' );
        page.classList.toggle( 'noscroll' );
    });
}, false);