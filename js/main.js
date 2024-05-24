(function ($) {
  "use strict";

  // for baground image
  $('[data-bgimg]').each(function () {
    $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')')
  })


  $(document).ready(function () //Document Ready Function 
  {
    $('.enqui_form_ai').on('submit', function () //Form Submission Event:
    {
      var nform = $(this);
      var btn = true;
      var url = $(this).attr('action') // perform action
      nform.find('input, textarea, select').each(function () // validate input text area or select feild is empty or not?
      { //Form Validation
        var n = $(this).val();
        if ($.trim(n) == "") {
          $(this).css("border", "1px solid red");
          btn = false;
        } else {
          $(this).css("border", "1px solid #ccc");
        }
      });

      if (btn == true)  
      {
        var mbtn = nform.find('button'); // find bbutton from form 
        mbtn.html('Please Wait...'); // onclick button chenge into please wait
        mbtn.attr('disabled', true); // desale that button
        mbtn.css("cursor", "not-allowed"); // same
        $.ajax({ // AJAX Request (if validation passes) 
          type: 'POST',
          url: url,
          data: nform.find(":input").serializeArray(),
          success: function (data) {
            if (data == "y") { // we got that y from sen_mail.php file in which we write a code of data base connection to submit data into database
              nform.find('.success1').html('Thankyou For Your Enquiry');
              setTimeout(function () {
                mbtn.attr('disabled', false); // enable button
                mbtn.css("cursor", "pointer"); // enable pointer
                window.location.href = 'thankyou'; // redirecting that page to thankyou page
              }, 2000)
            } else {
              nform.find('.error1').html(data);
              setTimeout(function () {
                nform.find(".error1").html("")
                mbtn.html('Submit');
              }, 4000)
              mbtn.attr('disabled', false);
              mbtn.css("cursor", "pointer");
            }
          }
        });
      }
      console.log(btn);
      return false;
    })
    $(".dropdown-submenu > a").on("click", function (e) {
      // Prevent the default behavior of the link
      e.preventDefault();
      // Toggle the display of the sub-sub dropdown menu
      var subsubmenu = $(this).next();
      subsubmenu.toggle();
      // Stop the event propagation to the parent elements
      e.stopPropagation();
    });

  });


  $('.form_servi').on('change', function () {
    let a = $(this).val()
    $('.form_deptart optgroup').addClass('d-none')
    $('.form_deptart optgroup[label="' + a + '"]').removeClass('d-none')
  })


  function validateForm() {
    var collegeSelect = document.getElementById("collegeSelect", "courseSelect");
    var selectedCollege = collegeSelect.options[collegeSelect.selectedIndex].value;

    if (selectedCollege === "") {
      alert("Please select a college");
      return false; // Prevent form submission
    }
    return true; // Form submission allowed
  }

  // Initiate the wowjs
  new WOW().init();

  //form working





})(jQuery);