$(document).ready(function(){
        console.log("Hola");
        
        $('.tagsinput').tagsinput({
                tagClass: 'badge-info'
        });


        jQuery('input[type=file]').change(function(){
                console.log('aqui');
                var filename = jQuery(this).val().split('\\').pop();
                var idname = jQuery(this).attr('id');
                console.log(jQuery(this));
                console.log(filename);
                console.log(idname);
                jQuery('div.field-'+idname+' label').html("<span class='fw-bolder font-12'>CARGADA</span>");
                jQuery('div.field-'+idname+' label').css("background-color", '#00ac5a');
                // jQuery('div.field-'+idname+' label').attr("style", 'padding-left:1rem !important;padding-right: 1rem !important');
        });

       

        
});

 $('input[name=templateRadio]').change(function() {
        $.ajax({
                url: "/frontend/web/admin/get-template-colors",
                type: 'post',
                dataType: 'json',
                data: {
                    plantilla_id: $(this).val(),
                    _csrf: '<?=Yii::$app->request->getCsrfToken()?>'
                },
                success: function (data) {
                    console.log(data);
                    
                    $('.main-banner-profile').css("background-color", data.banner_background);
                    $('.properties-banner-profile').css("background-color", data.body_background);
                }
        });
});



function showTemplates(){
        // $(".card-setting").show();

        $(".card-setting .card").animate({
      width: "toggle"
    });
}

"use strict";

// Setting Color

$(window).resize(function() {
        $(window).width(); 
});


function customCheckColor(){
        var logoHeader = $('.logo-header').attr('data-background-color');
        if (logoHeader !== "white") {
                $('.logo-header .navbar-brand').attr('src', '../assets/img/logo.svg');
        } else {
                $('.logo-header .navbar-brand').attr('src', '../assets/img/logo2.svg');
        }
}


var toggle_customSidebar = false,
custom_open = 0;

if(!toggle_customSidebar) {
        var toggle = $('.custom-template .custom-toggle');

        toggle.on('click', (function(){
                if (custom_open == 1){
                        $('.custom-template').removeClass('open');
                        toggle.removeClass('toggled');
                        custom_open = 0;
                }  else {
                        $('.custom-template').addClass('open');
                        toggle.addClass('toggled');
                        custom_open = 1;
                }
        })
        );
        toggle_customSidebar = true;
}


function validateFirstPart(){

        // fields = ['contactform-name', 'contactform-monto', 'contactform-cedula', 'contactform-nacionalidad', 'contactform-email', 'contactform-name', 'contactform-phone'];
        // classes = ['selectgroup-input']
        state = true;
        for (var i = $(".form-part1").length - 1; i >= 0; i--) {
                if (!$(".form-part1")[i].checkValidity()) {
                        state = false;
                }
        }
        if (state && validateEmail($("#contactform-email").val())) {
                $(".step-2").show();
                $(".step-1").hide();
                console.log('valido');
        }else{
                console.log('No valido');
                swal('Alerta', 'Debe completar todos los campos de manera correcta', 'warning');
        }
}

function validateEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


function formatNumber(number){

        // number = number.toFixed(2);
        console.log(number);
        var value = (number).toLocaleString(
          'en-US', // leave undefined to use the visitor's browser 
                     // locale or a string like 'en-US' to override it.
          { minimumFractionDigits: 0 }
        );
        console.log(value);
        return value;
}


$(function(){
        $('#calcular').click(function(){

            var monto = parseInt($('#monto').val());
            var meses = parseInt($('#meses').val());
            var tasa = parseFloat($('#tasa').val());

           
            var tasafinal = tasa / 1200;
            var factor = Math.pow(tasafinal+1,meses);
            var cuota= monto*tasafinal*factor/(factor-1);

            var totalInterest = cuota * meses - monto;
            var totalPay = monto + totalInterest;

            cuota = formatNumber(cuota);
            totalInterest = formatNumber(totalInterest);
            totalPay = formatNumber(totalPay);
                $(".resultados").show();


        $('#monthlypay').html("$"+cuota);
        $('#totalinterest').html("$"+totalInterest); 
        $('#totalpay').html("$"+totalPay);

        })

        $('#reset').click(function(){
                ('#calculadora' ).trigger("reset");
                $(".resultados").hide();
        })

})