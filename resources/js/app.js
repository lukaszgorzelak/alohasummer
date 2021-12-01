
import { handleClick } from "../js/_hamburgerMenu.js";
import { changeScroll, upper } from "../js/_scroll.js";
// import { validation } from"../js/_form";
import { addPhraseModal } from "./_addPhraseModal.js";
import { editModal } from "../js/_editModal.js";
import { closeModal } from "../js/_closeModal.js";
import { removeRoadPhrase } from "../js/_removeRoadPhraseModal.js";
import { toogleUl } from"../js/_dropdown.js";
import { addAnimation } from"../js/_animationSlide";
import { drawRandomPhrase, checkinputValue } from"../js/_quiz";
import { sliceCard,expandCard,collapseCard } from"../js/_expand";
import { validate } from"../js/_validationForm";

document.addEventListener('DOMContentLoaded', function() {
    const cardsRoad = [...document.querySelectorAll('.card--road')];
    const cardsTicket = [...document.querySelectorAll('.card--ticket')];
    const cardsRent = [...document.querySelectorAll('.card--rent')];
    const cardsTime = [...document.querySelectorAll('.card--time')];
    const cardsAirport = [...document.querySelectorAll('.card--airport')];
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    handleClick(),
    changeScroll(),
    upper(),
    // validation(),
    addPhraseModal(),
    closeModal(),
    editModal(),
    removeRoadPhrase(),
    toogleUl(),
    addAnimation(),
    drawRandomPhrase(),
    checkinputValue(),
    sliceCard(cardsRoad),
    sliceCard(cardsTicket),
    sliceCard(cardsRent),
    sliceCard(cardsTime),
    sliceCard(cardsAirport),
    expandCard(),
    collapseCard(),
    validate()
});