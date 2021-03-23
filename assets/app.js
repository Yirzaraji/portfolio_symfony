/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import "./styles/app.css";
import "./styles/app.scss";

// start the Stimulus application
//import "./bootstrap";

// loads the jquery package from node_modules
const $ = require("jquery");
// loads the bootstrap package from node_modules
require("bootstrap");
require("bootstrap/dist/css/bootstrap.css");

$(document).ready(function () {
  $('[data-toggle="popover"]').popover();
});

$(document).ready(function () {
  console.log("jquery is loaded in encore");
});

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
/* var $grid = $(".grid").isotope({
  itemSelector: ".element-item",
  filter: ".back",
  layoutMode: "fitRows",
}); */
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
/* var $gridCards = $(".gridCards").isotope({
  itemSelector: ".element-itemCards",
  layoutMode: "fitRows",
}); */
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

const spanTag = document.querySelectorAll("span.tagsPost");
console.log(spanTag);

//arrow function is not working using encore but why ???
function searchTag() {
  for (let i = 0; i < spanTag.length; i++) {
    spanTag[i].textContent;
    console.log(spanTag[i].textContent);
    if (spanTag[i].textContent === "sql") {
      console.log("tag : sql detected");
      spanTag[i].style.background = "#ff8f00";
    } else if (spanTag[i].textContent === "php") {
      console.log("tag : php detected");
      spanTag[i].style.background = "#004480";
    } else if (spanTag[i].textContent === "symfony") {
      spanTag[i].style.background = "#4242c8";
    } else if (spanTag[i].textContent === "js") {
      spanTag[i].style.background = "rgb(255, 241, 42)";
      spanTag[i].style.color = "#dbdbdb";
    } else if (spanTag[i].textContent === "photoshop") {
      spanTag[i].style.background = "rgb(0, 112, 255)";
    } else if (spanTag[i].textContent === "indesign") {
      spanTag[i].style.background = "rgb(255, 0, 72)";
    } else if (spanTag[i].textContent === "illustrator") {
      spanTag[i].style.background = "rgb(255, 72, 0)";
    } else if (spanTag[i].textContent === "vue.js") {
      spanTag[i].style.background = "#42b983";
    } else if (spanTag[i].textContent === "react.js") {
      spanTag[i].style.background = "#61dafb";
    } else if (spanTag[i].textContent === "twig") {
      spanTag[i].style.background = "#71b236";
    } else if (spanTag[i].textContent === "mongo") {
      spanTag[i].style.background = "#116149";
    } else if (spanTag[i].textContent === "nosql") {
      spanTag[i].style.background = "#954495";
    } else if (spanTag[i].textContent === "node.js") {
      spanTag[i].style.background = "#026e00";
    } else if (spanTag[i].textContent === "bootstrap") {
      spanTag[i].style.background = "#7952b3";
    } else if (spanTag[i].textContent === "html") {
      spanTag[i].style.background = "#e44d26";
    } else if (spanTag[i].textContent === "css") {
      spanTag[i].style.background = "#264de4";
    } else if (spanTag[i].textContent === "c#") {
      spanTag[i].style.background = "#690081";
    } else if (spanTag[i].textContent === "unity") {
      spanTag[i].style.background = "#002835";
    }
  }
}

searchTag();
