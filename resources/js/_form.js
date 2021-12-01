const form = document.querySelector("form#addRoadForm");
const inputPhrase = form.querySelector("textarea[name=phrase]");
const inputTranslation = form.querySelector("textarea[name=translation]");
const formMessage = document.querySelector(".form__message");
const successMessage = document.querySelector("div.success");

const validation = function(){

    form.setAttribute("novalidate", true);
    
    form.addEventListener("change", () => {

        if(inputPhrase.value) {
            inputPhrase.classList.remove("invalid");
            inputPhrase.classList.add("valid");
        }else if(!inputPhrase.value) {
            inputPhrase.classList.remove("valid");
            inputPhrase.classList.add("invalid");
        }

        if(inputTranslation.value) {
            inputTranslation.classList.remove("invalid");
            inputTranslation.classList.add("valid");
        }else if(!inputTranslation.value) {
            inputTranslation.classList.remove("valid");
            inputTranslation.classList.add("invalid");
        }
     
     });
    
    form.addEventListener("submit", e => {
      e.preventDefault();
      
      let formErrors = [];
    
      if (!inputPhrase.value) {
          formErrors.push("Zwrot");
          inputPhrase.classList.remove("valid");
          inputPhrase.classList.add("invalid");
      }
    
      if (!inputTranslation.value) {
          formErrors.push("Tłumaczenie");
          inputTranslation.classList.remove("valid");
          inputTranslation.classList.add("invalid");
      }
      if (!formErrors.length) {
      
        const formData = new FormData(form);
        const url = form.getAttribute("action");
        const method = form.getAttribute("method");
        const road = $(".wrapper--road");
        // fetch(url, {
        //     method: method,
        //     headers: {
        //         'Content-Type' : 'application/octet-stream',
        //         'Accept': 'application/json',
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //     },
        //     body:JSON.stringify(formData)
        // })
        // .then(res => res.json())
        // .then(res => {
        //     console.log("Dodałem użytkownika:");
        //     console.log(res);
        // })

        // $.ajax({
        //     url: url,
        //     type: method,
        //     data:formData,
        //     dataType:'html',
        //     processData: false,
        //     contentType: false,
        //     success:function(response){
        //         JSON.stringify(response)
        //         console.log('tak');
        //         road.append(response);
        //         console.log(response);
        //     },
        //     error: function(error) {
        //         console.log('nie');
        //         console.log(error);
        //     }
        // });
        // successMessage.innerHTML = `
        //       <h4>SUKCES</h4>
        //       <i class="icon-ok-circle" aria-hidden="true"></i>
        //       `;
              
          e.target.submit();
      } else {
        
        formMessage.style.marginBottom = '-3rem';
          formMessage.innerHTML = `
              <h4 class="form-error-title">Wypełnij te pola:</h4>
              <ul class="form-error-list">
                  ${formErrors.map(el => `<li>${el}</li>`).join("")}
              </ul>
          `;
         
          const modal = document.querySelector("#addRoadPhrase");
          modal.style.height = '65' + 'rem';
      }
    });
    }
    
    export { validation }