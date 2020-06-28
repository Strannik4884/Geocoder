// when document ready
$(document).ready(function () {
  // create textarea character counter
  $('input#input_text, textarea#address').characterCounter();

  // add regexp method to form validation rules
  $.validator.addMethod(
      "regexp",
      function(value, element, regexp) {
        const re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
      },
      "Regular expression failed"
  );

  // form validation
  $("#address_form").validate({
    rules: {
      address: {
        required: true,
        maxlength: 512
      },
    },
    // error messages
    messages: {
      address:{
        required: "Введите адрес",
      }
    },
    // display errors
    errorElement : 'div',
    errorPlacement: function(error, element) {
      const placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
  });

  // address form submit event handler
  $('#address_form').submit(function (event) {
    // get form
    let addressForm = $('#address_form');
    // handle default action
    event.preventDefault();
    addressForm.validate();
    // if address form is valid
    if(addressForm.valid()){
      $.ajax({
        type: "POST",
        url: "geocoder.php",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (result) {
          // parse response
          const response = JSON.parse(result);
          // if successful
          if(typeof(response['successful']) != "undefined" && response['successful'] !== null){
            // clear and hide address form
            document.getElementById("address_form").reset();
            $('.character-counter').remove();
            // show result
          }
          // if error
          else if(typeof(response['error']) != "undefined" && response['error'] !== null){
            alert(response['error']);
          }
        },
        error: function () {
          alert('Ошибка при отправке формы - попробуйте позже!');
        }
      });
    }
  });
});