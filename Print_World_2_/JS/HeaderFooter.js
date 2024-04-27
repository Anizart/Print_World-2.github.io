document.addEventListener( "DOMContentLoaded", function() {
    const burger = document.querySelector("#Burger");
    burger.addEventListener( "click", function () {
        document.querySelector( ".header" ).classList.toggle( "open" )
    })
})