
const validate = function(){

    const allForms = $('form[data-form="valid"]');
    const phrase = $("textarea[name=phrase]");
    const translation = $("textarea[name=translation]");
    const message = $(".form__message");

    allForms.attr("novalidate", true);

    allForms.change(function() {

       if($(this).find(phrase).val()) {
            $(this).find(phrase).removeClass("invalid");
            $(this).find(phrase).addClass("valid");
       }else if(!$(this).find(phrase).val()) {
            $(this).find(phrase).removeClass("valid");
            $(this).find(phrase).addClass("invalid");
       }

       if($(this).find(translation).val()) {
            $(this).find(translation).removeClass("invalid");
            $(this).find(translation).addClass("valid");
       }else if(!$(this).find(translation).val()) {
            $(this).find(translation).removeClass("valid");
            $(this).find(translation).addClass("invalid");
       }
    });
    
    allForms.submit(function(e){
        e.preventDefault();

        let formErrors = [];
    
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
            console.log($(this))
            e.target.submit();
        } else {
            $(this).closest('div').find(message).css("margin-bottom", "-3rem");
            $(this).closest('div').find(message).html(`
            <h4 class="form-error-title">Wypełnij te pola:</h4>
            <ul class="form-error-list">
                ${formErrors.map(el => `<li>${el}</li>`).join("")}
            </ul>
            `);
         $(this).closest('div').css("height", "65rem");
      }
    })
}

export { validate }