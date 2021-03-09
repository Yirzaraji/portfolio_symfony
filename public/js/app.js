//--------Display hide cards----------//

$(document).ready(function () {
  $(".navTabs > li > a").click(function (event) {
    event.preventDefault();

    //get displaying tab content jQuery selector
    let activeTabsSelector = $(".navTabs > li.active > a").attr("href");

    //find active tabs and remove 'active'
    let activedNav = $(".navTabs > li.active");
    activedNav.removeClass("active");

    //add 'active' into clicked navigation
    $(this).parents("li").addClass("active");

    //hide displaying tab content
    $(activeTabsSelector).removeClass("active");
    $(activeTabsSelector).addClass("hide");

    //show target tab content
    let targetTabsSelector = $(this).attr("href");
    $(targetTabsSelector).removeClass("hide");
    $(targetTabsSelector).addClass("active");
  });
});

$(document).ready(function () {
  $(".navTabsTech > li > a").click(function (event) {
    event.preventDefault();

    //get displaying tab content jQuery selector
    let activeTabsSelector = $(".navTabsTech > li.active > a").attr("href");

    //find actived navigation and remove 'active' css
    let activedNavTech = $(".navTabsTech > li.active");
    activedNavTech.removeClass("active");

    //add 'active' css into clicked navigation
    $(this).parents("li").addClass("active");

    //hide displaying tab content
    $(activeTabsSelector).removeClass("active");
    $(activeTabsSelector).addClass("hide");

    //show target tab content
    let targetTabsSelector = $(this).attr("href");
    $(targetTabsSelector).removeClass("hide");
    $(targetTabsSelector).addClass("active");
  });
});

//MENU BURGER
let navbar = document.querySelector(".navbar-mobile");
let ham = document.querySelector(".ham");

ham.addEventListener("click", toggleHamburger);

// toggles hamburger menu in and out when clicking on the hamburger
function toggleHamburger() {
  navbar.classList.toggle("showNav");
  ham.classList.toggle("showClose");
}

let menuLinks = document.querySelectorAll(".menuLink");

menuLinks.forEach(function (menuLink) {
  menuLink.addEventListener("click", toggleHamburger);
});

// ######## Block collection add images form ##########

$("#add-image").click(function () {
  // Je récupère le numéro des futurs champs que je vais créer
  const index = +$("#widgets-counter").val();

  // Je récupère le prototype des entrées
  const tmpl = $("#create_form_images")
    .data("prototype")
    .replace(/__name__/g, index);

  // J'injecte ce code au sein de la div
  $("#create_form_images").append(tmpl);

  $("#widgets-counter").val(index + 1);

  // Je gère le bouton supprimer
  handleDeleteButtons();
});

function handleDeleteButtons() {
  $('button[data-action="delete"]').click(function () {
    const target = this.dataset.target;
    $(target).remove();
  });
}

function updateCounter() {
  const count = +$("#create_form_images div.form-group").length;

  $("#widgets-counter").val(count);
}

updateCounter();
handleDeleteButtons();

// ######## Block collection add tag form ##########

$("#add-tag").click(function () {
  // Je récupère le numéro des futurs champs que je vais créer
  const index = +$("#widgets-counter").val();

  // Je récupère le prototype des entrées
  const tmpl = $("#create_form_tags")
    .data("prototype")
    .replace(/__name__/g, index);

  // J'injecte ce code au sein de la div
  $("#create_form_tags").append(tmpl);

  $("#widgets-counter").val(index + 1);

  // Je gère le bouton supprimer
  handleDeleteButtonsTag();
});

function handleDeleteButtonsTag() {
  $('button[data-action="delete"]').click(function () {
    const target = this.dataset.target;
    $(target).remove();
  });
}

function updateCounterTag() {
  const count = +$("#create_form_tags div.form-group").length;

  $("#widgets-counter").val(count);
}

updateCounterTag();
handleDeleteButtonsTag();

//-------------------------------------------------------------------------//

// ######## Block skill transition onclick isotope.js librairy ##########

//------------------------------------------------------------------------//

// init Isotope
var $grid = $(".grid").isotope({
  itemSelector: ".element-item",
  filter: ".back",
  layoutMode: "fitRows",
});
// filter functions

// bind filter button click
$(".filters-button-group").on("click", "button", function () {
  var filterValue = $(this).attr("data-filter");
  // use filterFn if matches value
  filterValue = $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$(".button-group").each(function (i, buttonGroup) {
  var $buttonGroup = $(buttonGroup);
  $buttonGroup.on("click", "button", function () {
    $buttonGroup.find(".is-checked").removeClass("is-checked");
    $(this).addClass("is-checked");
  });
});

// init Isotope FOR CARDS BLOCK
var $gridCards = $(".gridCards").isotope({
  itemSelector: ".element-itemCards",
  layoutMode: "fitRows",
});
// filter functions

// bind filter button click
$(".filters-button-groupCards").on("click", "button", function () {
  var filterValue = $(this).attr("data-filterCards");
  // use filterFn if matches value
  filterValue = $gridCards.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$(".button-groupCards").each(function (i, buttonGroup) {
  var $buttonGroup = $(buttonGroup);
  $buttonGroup.on("click", "buttonCards", function () {
    $buttonGroup.find(".is-checkedCards").removeClass("is-checkedCards");
    $(this).addClass("is-checkedCards");
  });
});

let tagColor = document.getElementsByClassName("tagsPost");
