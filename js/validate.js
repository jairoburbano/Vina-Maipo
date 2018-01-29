(function($) {
    function validacionFormulario() {
        $('<div class="message"></div>').hide().appendTo('#form');
        $('#contactForm').validate({
            rules: {
                name: "required",
                surname: "required",
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required:true,
                    minlength:8
                },
                selectpais: "required",
            },
            messages: {
                name: {
                    required: "Usa solo letras"
                },
                surname: {
                    required: "Usa solo letras"
                },
                email: {
                    required: "Ingresa un Email válido",
                    email: "Ingresa un Email válido"
                },
                message: {
                    required: "Ingresar un mensaje/consulta"
                },
                selectpais: {
                    required: "Selecciona un país"
                }
            },
            errorElement: 'p',
            errorClass: 'msg-error',
            validClass: 'validacion',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                $('#form .loading').css({opacity: 0}).animate({opacity: 1});
                $.post($('#contactForm').attr('action'), $('#contactForm').serialize(), function (data) {
                    var obj = $.parseJSON(data);
//                    console.log(obj);
                    $('#form .loading').fadeOut();
                    $('.form-contact .input-group.send input').val('Sending');
                    if (obj.exito === 'exito') {
                        $('#form .message').html('<p class="success-msg">Gracias por contactarnos.</p>').fadeIn().delay('3000').fadeOut();
                        $('#contactForm').find('.validacion').removeClass('validacion');
                        $('#contactForm')[0].reset();
                        $('.form-contact .input-group.send input').val('Send');
                    } else {
                        $('#contactForm .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                    }
                });
                return false;
            }
        });
    }
    validacionFormulario();
})(jQuery);