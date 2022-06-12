/* Preload*/
$(window).on('load', function () { // makes sure the whole site is loaded
        $('[data-loader="circle-side"]').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({
                'overflow': 'visible'
        });
    $('#ajax-loader').hide();
    $(".number-mask").mask('000,000,000.00', {reverse: true});
    // $(".number-mask").numeric({ decimal : ".",  negative : false, scale: 3 });

})

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


// var toggle_customSidebar = false,
// custom_open = 0;

// if(!toggle_customSidebar) {
//         var toggle = $('.custom-template .custom-toggle');

//         toggle.on('click', (function(){
//                 if (custom_open == 1){
//                         $('.custom-template').removeClass('open');
//                         toggle.removeClass('toggled');
//                         custom_open = 0;
//                 }  else {
//                         $('.custom-template').addClass('open');
//                         toggle.addClass('toggled');
//                         custom_open = 1;
//                 }
//         })
//         );
//         toggle_customSidebar = true;
// }


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
        // console.log(number);
        var value = (number).toLocaleString(
          'en-US', // leave undefined to use the visitor's browser 
                     // locale or a string like 'en-US' to override it.
          { minimumFractionDigits: 2, maximumFractionDigits:3 }
        );
        // console.log(value);
        return value;
}

function validateCalculadora(){

        if ($('#monto').val() == '') {
                swal('Alerta', 'Debe ingresar el monto', 'warning');
                return false;
        }


        if ($('#meses').val() == '') {
                swal('Alerta', 'Debe ingresar la cantidad de meses', 'warning');
                return false;
        }

        if ($('#tasa').val() == '') {
                swal('Alerta', 'Debe ingresar la tasa', 'warning');
                return false;
        }

        return true;
}


$('#calcular').click(function(){

        if (validateCalculadora()) {
                limpiarCaluladoraResultados();
                // var monto = parseInt($('#monto').val());
                var monto = $('#monto').val();
                var meses = parseInt($('#meses').val());
                // var tasa = parseFloat($('#tasa').val());
                var tasa = $('#tasa').val();
                $(".calculadoraPDF").attr('href', '/frontend/web/tasas-hipotecarias/tabla-amortizacion?monto='+monto+'&meses='+meses+'&tasa='+tasa);



                console.log(monto);
                monto =  monto.toString().replace(",", ""); 
                console.log(monto);
                tasa =  tasa.toString().replace(",", ""); 
                monto = parseFloat(monto);
                tasa = parseFloat(tasa);
                console.log(monto);
                   
                // var tasafinal = tasa / 1200;
                // var factor = Math.pow(tasafinal+1,meses);
                // var cuota= monto*tasafinal*factor/(factor-1);

                // var totalInterest = cuota * meses - monto;
                // var totalPay = monto + totalInterest;

                getTablaAmortizacion(monto, meses, tasa);

                datos = calcularCuota(monto, meses, tasa);

                cuota = formatNumber(datos.cuota);
                totalInterest = formatNumber(datos.totalInterest);
                totalPay = formatNumber(datos.totalPay);
                
                $(".resultados").show();

                
                $('#monthlypay').html("$"+cuota);
                $('#totalinterest').html("$"+totalInterest); 
                $('#totalpay').html("$"+totalPay);
        }

        

})

function calcularCuota(monto, meses, tasa){

        // monto =  monto.toString().replace(",", ""); 
        // tasa =  tasa.toString().replace(",", ""); 


        // monto = parseFloat(monto);
        // tasa = parseFloat(tasa);

        datos = [];
        tasafinal = tasa / 1200;
        factor = Math.pow(tasafinal+1,meses);
        datos.cuota = monto * tasafinal * factor / (factor - 1);

        datos.totalInterest = datos.cuota * meses - monto;
        datos.totalPay = monto + datos.totalInterest;

        return datos;

}

function getTablaAmortizacion(monto, meses, tasa){

        // monto =  monto.toString().replace(",", ""); 
        // tasa =  tasa.toString().replace(",", ""); 


        // monto = parseFloat(monto);
        // tasa = parseFloat(tasa);

        console.log(monto);
        console.log(tasa);

        montoc = 0;
        cuota = 0;
        for (var i = 1; i < meses + 1; i++) {
                // console.log(i);
                var date = new Date();
                var newDate = new Date(date.setMonth(date.getMonth() + i));

                // saldo = montoc == 0 ? monto : montoc;
                // datos = calcularCuota(saldo, mesesCount, tasa);

                if (i == 1) {
                        saldo = monto;
                        datos = calcularCuota(saldo, meses, tasa);
                        // cuota = formatNumber(datos.cuota);
                        cuota =  datos.cuota;
                        montoc = monto - cuota;

                        // console.log(datos);

                }else{
                        saldo = balance;
                        montoc = montoc - cuota + datosMes.totalInterest;

                }
                datosMes = calcularCuota(saldo, 1, tasa);
                // console.log(datosMes);
                
                totalInterest = datosMes.totalInterest;
                totalPay = datosMes.totalPay;

                balance = montoc + totalInterest;

                
                $('tbody').append($('thead').html());
                $("tbody tr:last-child .cuota").html(i);
                $("tbody tr:last-child .fecha").html(newDate.toLocaleDateString());
                $("tbody tr:last-child .pago").html("$"+formatNumber(cuota));
                $("tbody tr:last-child .interes").html("$"+formatNumber(totalInterest));
                
                if (i < meses) {
                        $("tbody tr:last-child .balance").html("$"+formatNumber(balance));
                }else{
                        $("tbody tr:last-child .balance").html('-');
                }
                // $('.tBody').show();
        }
}

function limpiarCaluladoraResultados(){
        $("tbody").html('');
        $(".resultados").hide();
        $('#calculadora').trigger("reset");
}
$('#reset').click(function(){
        
        limpiarCaluladoraResultados();
})

$(".read-more").click(function() {
        $(".cardbody").delay(350).attr('class', 'col-md-6 cardbody p-0');
        $(".card-primary").attr('class', 'col-md-6');
        $('.card-secondary').delay(350).show();
        // $('#preloader').delay(350).fadeOut('slow');
        // $(".cardbody").animate({
            // opacity: 0.25,
            // right: "+=50",
            // width: "toggle"
        // }, 5000, function() {
            // $(".cardbody").attr('class', 'col-md-6 cardbody p-0')
        // });
});

function closeYoutubeModal(){
        console.log('aqi');
        var video = $("#playerid").attr("src");
        $("#playerid").attr("src","");
        $("#playerid").attr("src",video);
        $('#youtubeModal').modal('hide');
}