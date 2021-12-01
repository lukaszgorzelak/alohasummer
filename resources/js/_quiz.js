const drawBtn = document.querySelector('.quiz__btn-draw');
const drawnPhrase = document.querySelector('.quiz__random__phrase');
const inputValue = document.querySelector('input[name="quiz__translate"]');
const checkBtn = document.querySelector('.quiz__btn-check');
const answear = document.querySelector('.quiz__check__answear');
const incorrect = document.createElement("p");
const correct = document.createElement("p");

const randomPhrases = ["Excuse me, I'm trying to find the Green Hostel.", 'Przepraszam, próbuję znaleźć Green Hostel?', "How much are the tickets?", "Ile kosztują bilety?", "I would like to hire a car.", "Chciałbym wypożyczyć samochód.", "What time is it?", "Która jest godzina?"];

const drawRandomPhrase = () => {

    if(drawBtn) {
        drawBtn.addEventListener('click', function(){
            document.getElementById('quiz__translate__field').value = '';
            checkBtn.classList.add('not-allowed');
            const indexPhrase = Math.floor(Math.random() * randomPhrases.length);
            drawnPhrase.style.display = "flex";
            drawnPhrase.textContent = `${randomPhrases[indexPhrase]}`;
            answear.style.display = 'none';  
        })
    }
}

const checkinputValue = () => {

    if(inputValue) {
        inputValue.addEventListener("input", function () {
            checkBtn.classList.remove('not-allowed');

            if (inputValue.value === randomPhrases[1] && drawnPhrase.textContent === randomPhrases[0] || drawnPhrase.textContent === randomPhrases[1] && inputValue.value === randomPhrases[0] || inputValue.value === randomPhrases[2] && drawnPhrase.textContent === randomPhrases[3] || drawnPhrase.textContent === randomPhrases[2] && inputValue.value === randomPhrases[3] || inputValue.value === randomPhrases[4] && drawnPhrase.textContent === randomPhrases[5] || drawnPhrase.textContent === randomPhrases[4] && inputValue.value === randomPhrases[5] || inputValue.value === randomPhrases[6] && drawnPhrase.textContent === randomPhrases[7] || drawnPhrase.textContent === randomPhrases[6] && inputValue.value === randomPhrases[7]) {

                checkBtn.addEventListener("click", () => {
                    answear.style.display = "flex";
                    correct.innerHTML = `<p class="correct">
                                            <i class="bi bi-emoji-smile"></i>
                                            Dobrze!!!
                                        </p>`
                    answear.append(correct);
                    incorrect.remove();
                })
            } else {
                checkBtn.addEventListener("click", () => {
                    answear.style.display = "flex";
                    incorrect.innerHTML = `<p class="incorrect">
                                            <i class="bi bi-emoji-frown"></i>
                                            Źle!!!
                                        </p>`
                    answear.append(incorrect);
                    correct.remove();
                })
            }
        
        })
    }
}

export { drawRandomPhrase,checkinputValue }
