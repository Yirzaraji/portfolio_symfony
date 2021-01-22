//--------Display hide cards----------//

$(document).ready(function() {
    $('.navTabs > li > a').click(function(event) {
    event.preventDefault();

    //get displaying tab content jQuery selector
    let activeTabsSelector = $('.navTabs > li.active > a').attr('href');

    //find active tabs and remove 'active'
    let activedNav = $('.navTabs > li.active');
    activedNav.removeClass('active');

    //add 'active' into clicked navigation
    $(this).parents('li').addClass('active');

    //hide displaying tab content
    $(activeTabsSelector).removeClass('active');
    $(activeTabsSelector).addClass('hide');

    //show target tab content
    let targetTabsSelector = $(this).attr('href');
    $(targetTabsSelector).removeClass('hide');
    $(targetTabsSelector).addClass('active');
    });
});

$(document).ready(function() {
    $('.navTabsTech > li > a').click(function(event) {
    event.preventDefault();

    //get displaying tab content jQuery selector
    let activeTabsSelector = $('.navTabsTech > li.active > a').attr('href');

    //find actived navigation and remove 'active' css
    let activedNav = $('.navTabsTech > li.active');
    activedNav.removeClass('active');

    //add 'active' css into clicked navigation
    $(this).parents('li').addClass('active');

    //hide displaying tab content
    $(activeTabsSelector).removeClass('active');
    $(activeTabsSelector).addClass('hide');

    //show target tab content
    let targetTabsSelector = $(this).attr('href');
    $(targetTabsSelector).removeClass('hide');
    $(targetTabsSelector).addClass('active');
    });
});

let navbar = document.querySelector(".navbar-mobile")
let ham = document.querySelector(".ham")

ham.addEventListener("click", toggleHamburger)

// toggles hamburger menu in and out when clicking on the hamburger
function toggleHamburger(){
  navbar.classList.toggle("showNav")
  ham.classList.toggle("showClose")
}

let menuLinks = document.querySelectorAll(".menuLink")

menuLinks.forEach( 
  function(menuLink) { 
    menuLink.addEventListener("click", toggleHamburger) 
  }
)



