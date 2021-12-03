/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/_addPhraseModal.js":
/*!*****************************************!*\
  !*** ./resources/js/_addPhraseModal.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "addPhraseModal": () => (/* binding */ addPhraseModal)
/* harmony export */ });
var mask = document.createElement("div");
var body = document.body;
var addPhraseBtn = document.querySelectorAll('.card__add-btn');

var addPhraseModal = function addPhraseModal() {
  addPhraseBtn.forEach(function (el) {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      var closest = el.previousElementSibling;
      closest.style.display = "block";
      mask.classList.add("mask");
      body.appendChild(mask);
    });
  });
};



/***/ }),

/***/ "./resources/js/_animationSlide.js":
/*!*****************************************!*\
  !*** ./resources/js/_animationSlide.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "addAnimation": () => (/* binding */ addAnimation)
/* harmony export */ });
var confirm = document.querySelector('.confirm');

var addAnimation = function addAnimation() {
  if (location.pathname == "/home") {
    confirm.classList.add("animationSlide");
  }

  ;
};



/***/ }),

/***/ "./resources/js/_closeModal.js":
/*!*************************************!*\
  !*** ./resources/js/_closeModal.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "closeModal": () => (/* binding */ closeModal)
/* harmony export */ });
var close = document.querySelectorAll('.modal__close');

var closeModal = function closeModal() {
  close.forEach(function (el) {
    el.addEventListener('click', function () {
      var mask = document.querySelector('div.mask');
      var closest = el.closest('div');
      closest.style.display = "none";
      mask.remove();
    });
  });
};



/***/ }),

/***/ "./resources/js/_dropdown.js":
/*!***********************************!*\
  !*** ./resources/js/_dropdown.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "toogleUl": () => (/* binding */ toogleUl)
/* harmony export */ });
var dropdown = document.querySelector('.dropdown');
var navExpand = document.querySelector('.nav--expand');

var toogleUl = function toogleUl() {
  if (dropdown) {
    dropdown.addEventListener('click', function () {
      navExpand.classList.toggle("show");
    });
  }
};



/***/ }),

/***/ "./resources/js/_editModal.js":
/*!************************************!*\
  !*** ./resources/js/_editModal.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "editModal": () => (/* binding */ editModal)
/* harmony export */ });
var mask = document.createElement("div");
var body = document.body;
var roadEditBtn = document.querySelectorAll('.card__action__edit');

var editModal = function editModal() {
  roadEditBtn.forEach(function (el) {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      var closest = el.previousElementSibling;
      closest.style.display = "block";
      mask.classList.add("mask");
      body.appendChild(mask);
    });
  });
};



/***/ }),

/***/ "./resources/js/_expand.js":
/*!*********************************!*\
  !*** ./resources/js/_expand.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "sliceCard": () => (/* binding */ sliceCard),
/* harmony export */   "expandCard": () => (/* binding */ expandCard),
/* harmony export */   "collapseCard": () => (/* binding */ collapseCard)
/* harmony export */ });
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var expandsP = document.querySelectorAll('.expand__paragraph');

var collapse = _toConsumableArray(document.querySelectorAll('div.collapse'));

var sliceCard = function sliceCard(cards) {
  if (cards.length > 9) {
    var lastCard = cards.length;
    var cardSlice = cards.slice(9, lastCard);
    cardSlice.forEach(function (card) {
      card.classList.add('hidden');
      card.classList.remove('block');
    });
  }
};

var expandCard = function expandCard() {
  expandsP.forEach(function (el) {
    el.addEventListener('click', function () {
      var closest = el.closest('div');
      var next = el.parentElement.nextElementSibling;
      closest.classList.add('hidden');
      next.classList.add('block');
      var childrens = el.parentElement.parentElement.querySelectorAll('div.hidden');
      childrens.forEach(function (children) {
        if (children.classList.contains('expand')) {
          children.classList.add('hidden');
        } else {
          children.classList.remove('hidden');
          children.classList.add('slice');
        }

        ;
      });
    });
  });
};

var collapseCard = function collapseCard() {
  collapse.forEach(function (el) {
    el.addEventListener('click', function () {
      var section = el.closest('section');
      var closest = el.closest('div').previousElementSibling;
      closest.classList.remove('hidden');
      section.scrollIntoView({
        behavior: "smooth"
      });
      el.classList.remove('block');
      var childrens = el.parentElement.parentElement.querySelectorAll('div.slice');
      childrens.forEach(function (children) {
        children.classList.add('hidden');
        children.classList.remove('slice');
      });
    });
  });
};



/***/ }),

/***/ "./resources/js/_hamburgerMenu.js":
/*!****************************************!*\
  !*** ./resources/js/_hamburgerMenu.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "handleClick": () => (/* binding */ handleClick)
/* harmony export */ });
var hamburger = document.querySelector('.hamburger');
var nav = document.querySelector('.navigation');

var handleClick = function handleClick() {
  hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger--active');
    nav.classList.toggle('navigation--active');
  });
};



/***/ }),

/***/ "./resources/js/_newCard.js":
/*!**********************************!*\
  !*** ./resources/js/_newCard.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "scrollToNewCard": () => (/* binding */ scrollToNewCard)
/* harmony export */ });
var scrollToNewCard = function scrollToNewCard(pathname, card) {
  if (location.pathname == pathname) {
    var last = $(card).last();
    var allCard = $(card).length;
    var p = last.find("p.card__heading").first();
    var collapse = last.closest('section').find('.collapse');
    p.before("<p class=\"new\">NEW</p>");
    var card__heading = $('.new');
    setTimeout(function () {
      card__heading.slideUp();
    }, 4000);

    if (allCard > 9) {
      var cardHidden = last.closest('section').find('.hidden').removeClass('hidden').addClass('slice');
      var expand = last.closest('section').find('.expand').addClass('hidden');
      var expandParagraph = last.closest('section').find('.expand > .expand__paragraph ');
      collapse.addClass('block');
    }

    var offset = last.offset();
    $('html, body').animate({
      scrollTop: offset.top,
      scrollLeft: offset.left,
      behavior: "smooth"
    });
    collapse.click(function () {
      var slice = last.closest('section').find('.slice').removeClass('slice').addClass('hidden');
    });
  }

  ;
};



/***/ }),

/***/ "./resources/js/_quiz.js":
/*!*******************************!*\
  !*** ./resources/js/_quiz.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "drawRandomPhrase": () => (/* binding */ drawRandomPhrase),
/* harmony export */   "checkinputValue": () => (/* binding */ checkinputValue)
/* harmony export */ });
var drawBtn = document.querySelector('.quiz__btn-draw');
var drawnPhrase = document.querySelector('.quiz__random__phrase');
var inputValue = document.querySelector('input[name="quiz__translate"]');
var checkBtn = document.querySelector('.quiz__btn-check');
var answear = document.querySelector('.quiz__check__answear');
var incorrect = document.createElement("p");
var correct = document.createElement("p");
var randomPhrases = ["Excuse me, I'm trying to find the Green Hostel.", 'Przepraszam, próbuję znaleźć Green Hostel?', "How much are the tickets?", "Ile kosztują bilety?", "I would like to hire a car.", "Chciałbym wypożyczyć samochód.", "What time is it?", "Która jest godzina?"];

var drawRandomPhrase = function drawRandomPhrase() {
  if (drawBtn) {
    drawBtn.addEventListener('click', function () {
      document.getElementById('quiz__translate__field').value = '';
      checkBtn.classList.add('not-allowed');
      var indexPhrase = Math.floor(Math.random() * randomPhrases.length);
      drawnPhrase.style.display = "flex";
      drawnPhrase.textContent = "".concat(randomPhrases[indexPhrase]);
      answear.style.display = 'none';
    });
  }
};

var checkinputValue = function checkinputValue() {
  if (inputValue) {
    inputValue.addEventListener("input", function () {
      checkBtn.classList.remove('not-allowed');

      if (inputValue.value === randomPhrases[1] && drawnPhrase.textContent === randomPhrases[0] || drawnPhrase.textContent === randomPhrases[1] && inputValue.value === randomPhrases[0] || inputValue.value === randomPhrases[2] && drawnPhrase.textContent === randomPhrases[3] || drawnPhrase.textContent === randomPhrases[2] && inputValue.value === randomPhrases[3] || inputValue.value === randomPhrases[4] && drawnPhrase.textContent === randomPhrases[5] || drawnPhrase.textContent === randomPhrases[4] && inputValue.value === randomPhrases[5] || inputValue.value === randomPhrases[6] && drawnPhrase.textContent === randomPhrases[7] || drawnPhrase.textContent === randomPhrases[6] && inputValue.value === randomPhrases[7]) {
        checkBtn.addEventListener("click", function () {
          answear.style.display = "flex";
          correct.innerHTML = "<p class=\"correct\">\n                                            <i class=\"bi bi-emoji-smile\"></i>\n                                            Dobrze!!!\n                                        </p>";
          answear.append(correct);
          incorrect.remove();
        });
      } else {
        checkBtn.addEventListener("click", function () {
          answear.style.display = "flex";
          incorrect.innerHTML = "<p class=\"incorrect\">\n                                            <i class=\"bi bi-emoji-frown\"></i>\n                                            \u0179le!!!\n                                        </p>";
          answear.append(incorrect);
          correct.remove();
        });
      }
    });
  }
};



/***/ }),

/***/ "./resources/js/_removeRoadPhraseModal.js":
/*!************************************************!*\
  !*** ./resources/js/_removeRoadPhraseModal.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "removeRoadPhrase": () => (/* binding */ removeRoadPhrase)
/* harmony export */ });
var mask = document.createElement("div");
var body = document.body;
var removeBtn = document.querySelectorAll('.card__action__road-remove');

var removeRoadPhrase = function removeRoadPhrase() {
  removeBtn.forEach(function (el) {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      var closest = el.previousElementSibling;
      closest.style.display = "block";
      mask.classList.add("mask");
      body.appendChild(mask);
    });
  });
};



/***/ }),

/***/ "./resources/js/_scroll.js":
/*!*********************************!*\
  !*** ./resources/js/_scroll.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "changeScroll": () => (/* binding */ changeScroll),
/* harmony export */   "upper": () => (/* binding */ upper)
/* harmony export */ });
var scrollItem = document.querySelector('#scroll');

var changeScroll = function changeScroll() {
  var y = window.pageYOffset;

  if (y >= 500) {
    scrollItem.style.display = 'block';
    scrollItem.classList.add('scrollBox');
  }

  if (y == 0) {
    scrollItem.style.display = 'none';
    scrollItem.classList.remove('scrollBox');
  }
};

var upper = function upper() {
  var y = window.pageYOffset;

  if (y >= 500) {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
    y = 0;
  }

  if (y == 0) {
    scrollItem.style.display = 'none';
    scrollItem.classList.remove('scrollBox');
  }
};

window.addEventListener('scroll', changeScroll);
scrollItem.addEventListener('click', upper);


/***/ }),

/***/ "./resources/js/_validationForm.js":
/*!*****************************************!*\
  !*** ./resources/js/_validationForm.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "validate": () => (/* binding */ validate)
/* harmony export */ });
var validate = function validate() {
  var allForms = $('form[data-form="valid"]');
  var phrase = $("textarea[name=phrase]");
  var translation = $("textarea[name=translation]");
  var message = $(".form__message");
  allForms.attr("novalidate", true);
  allForms.change(function () {
    if ($(this).find(phrase).val()) {
      $(this).find(phrase).removeClass("invalid");
      $(this).find(phrase).addClass("valid");
    } else if (!$(this).find(phrase).val()) {
      $(this).find(phrase).removeClass("valid");
      $(this).find(phrase).addClass("invalid");
    }

    if ($(this).find(translation).val()) {
      $(this).find(translation).removeClass("invalid");
      $(this).find(translation).addClass("valid");
    } else if (!$(this).find(translation).val()) {
      $(this).find(translation).removeClass("valid");
      $(this).find(translation).addClass("invalid");
    }
  });
  allForms.submit(function (e) {
    e.preventDefault();
    var formErrors = [];

    if (!$(this).find(phrase).val()) {
      formErrors.push("Zwrot");
      $(this).find(phrase).removeClass("valid");
      $(this).find(phrase).addClass("invalid");
    }

    if (!$(this).find(translation).val()) {
      formErrors.push("Tłumaczenie");
      $(this).find(translation).removeClass("valid");
      $(this).find(translation).addClass("invalid");
    }

    if (!formErrors.length) {
      // const formData = new FormData(form);
      // const url = form.getAttribute("action");
      // const method = form.getAttribute("method");
      // const road = $(".wrapper--road");
      console.log($(this));
      e.target.submit();
    } else {
      $(this).closest('div').find(message).css("margin-bottom", "-3rem");
      $(this).closest('div').find(message).html("\n            <h4 class=\"form-error-title\">Wype\u0142nij te pola:</h4>\n            <ul class=\"form-error-list\">\n                ".concat(formErrors.map(function (el) {
        return "<li>".concat(el, "</li>");
      }).join(""), "\n            </ul>\n            "));
      $(this).closest('div').css("height", "65rem");
    }
  });
};



/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_hamburgerMenu_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../js/_hamburgerMenu.js */ "./resources/js/_hamburgerMenu.js");
/* harmony import */ var _js_scroll_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/_scroll.js */ "./resources/js/_scroll.js");
/* harmony import */ var _addPhraseModal_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./_addPhraseModal.js */ "./resources/js/_addPhraseModal.js");
/* harmony import */ var _js_editModal_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../js/_editModal.js */ "./resources/js/_editModal.js");
/* harmony import */ var _js_closeModal_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../js/_closeModal.js */ "./resources/js/_closeModal.js");
/* harmony import */ var _js_removeRoadPhraseModal_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../js/_removeRoadPhraseModal.js */ "./resources/js/_removeRoadPhraseModal.js");
/* harmony import */ var _js_dropdown_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../js/_dropdown.js */ "./resources/js/_dropdown.js");
/* harmony import */ var _js_animationSlide__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../js/_animationSlide */ "./resources/js/_animationSlide.js");
/* harmony import */ var _js_quiz__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../js/_quiz */ "./resources/js/_quiz.js");
/* harmony import */ var _js_expand__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../js/_expand */ "./resources/js/_expand.js");
/* harmony import */ var _js_validationForm__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../js/_validationForm */ "./resources/js/_validationForm.js");
/* harmony import */ var _js_newCard__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../js/_newCard */ "./resources/js/_newCard.js");
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }


 // import { validation } from"../js/_form";











document.addEventListener('DOMContentLoaded', function () {
  var cardsRoad = _toConsumableArray(document.querySelectorAll('.card--road'));

  var cardsTicket = _toConsumableArray(document.querySelectorAll('.card--ticket'));

  var cardsRent = _toConsumableArray(document.querySelectorAll('.card--rent'));

  var cardsTime = _toConsumableArray(document.querySelectorAll('.card--time'));

  var cardsAirport = _toConsumableArray(document.querySelectorAll('.card--airport'));

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  (0,_js_hamburgerMenu_js__WEBPACK_IMPORTED_MODULE_0__.handleClick)(), (0,_js_scroll_js__WEBPACK_IMPORTED_MODULE_1__.changeScroll)(), (0,_js_scroll_js__WEBPACK_IMPORTED_MODULE_1__.upper)(), // validation(),
  (0,_addPhraseModal_js__WEBPACK_IMPORTED_MODULE_2__.addPhraseModal)(), (0,_js_closeModal_js__WEBPACK_IMPORTED_MODULE_4__.closeModal)(), (0,_js_editModal_js__WEBPACK_IMPORTED_MODULE_3__.editModal)(), (0,_js_removeRoadPhraseModal_js__WEBPACK_IMPORTED_MODULE_5__.removeRoadPhrase)(), (0,_js_dropdown_js__WEBPACK_IMPORTED_MODULE_6__.toogleUl)(), (0,_js_animationSlide__WEBPACK_IMPORTED_MODULE_7__.addAnimation)(), (0,_js_quiz__WEBPACK_IMPORTED_MODULE_8__.drawRandomPhrase)(), (0,_js_quiz__WEBPACK_IMPORTED_MODULE_8__.checkinputValue)(), (0,_js_expand__WEBPACK_IMPORTED_MODULE_9__.sliceCard)(cardsRoad), (0,_js_expand__WEBPACK_IMPORTED_MODULE_9__.sliceCard)(cardsTicket), (0,_js_expand__WEBPACK_IMPORTED_MODULE_9__.sliceCard)(cardsRent), (0,_js_expand__WEBPACK_IMPORTED_MODULE_9__.sliceCard)(cardsTime), (0,_js_expand__WEBPACK_IMPORTED_MODULE_9__.sliceCard)(cardsAirport), (0,_js_expand__WEBPACK_IMPORTED_MODULE_9__.expandCard)(), (0,_js_expand__WEBPACK_IMPORTED_MODULE_9__.collapseCard)(), (0,_js_validationForm__WEBPACK_IMPORTED_MODULE_10__.validate)(), (0,_js_newCard__WEBPACK_IMPORTED_MODULE_11__.scrollToNewCard)('/road', '.card--road'), (0,_js_newCard__WEBPACK_IMPORTED_MODULE_11__.scrollToNewCard)('/ticket', '.card--ticket'), (0,_js_newCard__WEBPACK_IMPORTED_MODULE_11__.scrollToNewCard)('/rent', '.card--rent'), (0,_js_newCard__WEBPACK_IMPORTED_MODULE_11__.scrollToNewCard)('/time', '.card--time'), (0,_js_newCard__WEBPACK_IMPORTED_MODULE_11__.scrollToNewCard)('/airport', '.card--airport');
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;