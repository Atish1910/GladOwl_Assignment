(function ($) {
  "use strict";

  // for baground image
  $('[data-bgimg]').each(function () {
    $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')')
  })


  $(document).ready(function () // ready the funcion
    {
      $('.enqui_form_ai').on('submit', function () // finding that class from entire file
        {
          var nform = $(this); // initilse nform 
          var btn = true;
          var url = $(this).attr('action') //take action on that url
          nform.find('input, textarea, select').each(function () //select the attribute you want to validate
            { // validation is performing here with if else condition if input or textarea is blank border will become red
              var n = $(this).val();
              if ($.trim(n) == "") {
                $(this).css("border", "1px solid red");
                btn = false;
              } else {
                $(this).css("border", "1px solid #ccc");
              }
            });

          if (btn == true) {


            var mbtn = nform.find('button'); //after validation is completed when end youser click on the sumbmit button 
            mbtn.html('Please Wait...'); // convert that button into please wait.
            mbtn.attr('disabled', true); //  desable that button 
            mbtn.css("cursor", "not-allowed"); // cursor is also converted to pointer

            $.ajax({ //
              type: 'POST',
              url: url,
              data: nform.find(":input").serializeArray(),
              success: function (data) 
              {
                if (data == "y")
                {
                  nform.find('.success1').html('Thankyou For Your Enquiry');
                  setTimeout(function () 
                  {
                    mbtn.attr('disabled', false);
                    mbtn.css("cursor", "pointer");
                    window.location.href = 'thankyou';
                  }, 2000)
                } 
                else 
                {
                  nform.find('.error1').html(data);
                  setTimeout(function () 
                  {
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