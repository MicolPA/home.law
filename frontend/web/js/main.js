$(document).ready(function(){
        console.log("Hola");
        
        $('.tagsinput').tagsinput({
                tagClass: 'badge-info'
        });


       

        
});

 $('input[name=templateRadio]').change(function() {
        $.ajax({
                url: "/frontend/web/admin/get-template-colors",
                type: 'post',
                dataType: 'json',
                data: {
                    stateID: $(this).val(),
                    _csrf: '<?=Yii::$app->request->getCsrfToken()?>'
                },
                success: function (data) {
                    console.log(data);
                    
                    $('#cand_circ').empty();
                    $('#cand_circ').prepend('<option value="" selected>Seleccionar...</option>');
                    $.each(data, function (key, value) {
                        console.log(value.Descripcion);
                        $('#cand_circ').append('<option value="' + value.Codigocircunscripcion + '">' + value.Descripcion + '</option>');
                    });
                    $('#cand_mun').empty();
                    $('#cand_mun').prepend('<option value="" selected>Seleccionar...</option>');
                    //$('#circ_id').append('<option value="">Todos</option>');
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