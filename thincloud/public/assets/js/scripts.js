(function (window, undefined) {
  'use strict';




})(window);


$(document).ready(function () {
    $(".btnNext").click(function () {

      $(".nav-tabs > .nav-item").next("li").find("a")[0].click();

    });

  });

  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var yyyy = today.getFullYear()-15;
   if(dd<10){
          dd='0'+dd
      }
      if(mm<10){
          mm='0'+mm
      }

  today = yyyy+'-'+mm+'-'+dd;
  document.getElementById("datefield").setAttribute("max", today);


    // variables
    var form = $('.validate-form'),
      select2 = $('.select2'),
      accountNumberMask = $('.account-number-mask');

    // jQuery Validation for all forms
    // --------------------------------------------------------------------
    if (form.length) {
      form.each(function () {
        var $this = $(this);

        $this.validate({
          rules: {
            password: {
              required: true
            },
            'password': {
              required: true,
              minlength: 8
            },
            'password_confirmation': {
              required: true,
              minlength: 8,
              equalTo: '#register-password'
            },
            apiKeyName: {
              required: true
            }
          },
          messages: {
            'password': {
              required: 'Parolanızı Giriniz',
              minlength: 'En az 8 karakter girin'
            },
            'password_confirmation': {
              required: 'Lütfen parolanızı onaylayın',
              minlength: 'En az 8 karakter girin',
              equalTo: 'Parolalarınız Eşleşmedi'
            }
          }
        });
      });
    }

    //phone
    if (accountNumberMask.length) {
      accountNumberMask.each(function () {
        new Cleave($(this), {
          phone: true,
          phoneRegionCode: 'TR'
        });
      });
    }

    // For all Select2
    if (select2.length) {
      select2.each(function () {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this.select2({
          dropdownParent: $this.parent()
        });
      });
    }


