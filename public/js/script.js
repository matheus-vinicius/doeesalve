$(document).ready(function(){
	$('.cpfcnpj').cpfcnpj({
        mask: true,
        validate: 'cpfcnpj',
        // event: 'focusout',
        // validateOnlyFocus: true,
        handler: '.cpfcnpj',
        ifValid: function (input){
        },
        ifInvalid: function (input) { 
        	alert('CPF Inválido'); 
        }
    });


$(document).ready(function(){

            $("#cpf").mask("000.000.000-00")
            $("#cep").mask("00000-000")
            $("#cns").mask("0000.0000.0000.0000")
            $("#rg").mask("99.999.999-W", {
                translation: {
                    'W': {
                        pattern: /[X0-9]/
                    }
                },
                reverse: true
            })
                        
            $("#celular").mask("(00) 0000-00009")
            
            $("#celular").blur(function(event){
                if ($(this).val().length == 15){
                    $("#celular").mask("(00) 00000-0009")
                }else{
                    $("#celular").mask("(00) 0000-00009")
                }
            })
        })
// function Rg(v){
//     v=v.replace(/\D/g,"");
//     v=v.replace(/(\d{2})(\d{3})(\d{3})(\d{1})$/,"$1.$2.$3-$4");
//     return v;
// }

  // RG (99.999.999-0): /^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\-[0-9]{1}$/

  // https://www.youtube.com/watch?v=l9cZE1spkbs
  // https://www.youtube.com/watch?v=zID7E6MkWd0



// 	// alert("teste");

// 	$("#cpf").focusout(function(){
// 		var aux = $("#cpf").val();
// 		var cpf = aux.replace(/[^\d]+/g,'');







// 		alert(cpf);
// 	});
});





















// //Código para validar CPF
// // !function(l){function u(n,a){if(""==(n=n.replace(/[^\d]+/g,"")))return!1;if(14!=n.length)return!1;if(/^(.)\1+$/.test(n))return!1;for(tamanho=n.length-2,numeros=n.substring(0,tamanho),digitos=n.substring(tamanho),soma=0,pos=tamanho-7,i=tamanho;1<=i;i--)soma+=numeros.charAt(tamanho-i)*pos--,pos<2&&(pos=9);if(resultado=soma%11<2?0:11-soma%11,resultado!=digitos.charAt(0))return!1;for(tamanho+=1,numeros=n.substring(0,tamanho),soma=0,pos=tamanho-7,i=tamanho;1<=i;i--)soma+=numeros.charAt(tamanho-i)*pos--,pos<2&&(pos=9);return resultado=soma%11<2?0:11-soma%11,resultado==digitos.charAt(1)}function f(n,a){var t=null!=a&&a?/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/:/^[0-9]{11}$/;if(null==n.match(t))return!1;if(null!=n.match(/\b(.+).*(\1.*){10,}\b/g))return!1;var s,e,r=n.replace(/\D/g,"");for(s=0,i=1;i<=9;i++)s+=parseInt(r.substring(i-1,i))*(11-i);if(10!=(e=10*s%11)&&11!=e||(e=0),e!=parseInt(r.substring(9,10)))return!1;for(s=0,i=1;i<=10;i++)s+=parseInt(r.substring(i-1,i))*(12-i);return 10!=(e=10*s%11)&&11!=e||(e=0),e==parseInt(r.substring(10,11))}l.fn.cpfcnpj=function(n){var e=l.extend({mask:!1,validate:"cpfcnpj",event:"focusout",handler:l(this),validateOnlyFocus:!1,ifValid:null,ifInvalid:null,returnType:null},n);if(e.mask)if(null==jQuery().mask)e.mask=!1,console.log("jQuery mask not found.");else{var a=["000.000.000-009","00.000.000/0000-00"],i=l(this);if("cpf"==e.validate)i.mask(a[0]);else if("cnpj"==e.validate)i.mask(a[1]);else{var r=function(n){return 0===n.length||12<=n.length?a[1]:a[0]},o={onChange:function(n,a,i){var t=l(i),s=t.cleanVal();t.mask(r(s),o)}};i.mask(r,o)}}return this.each(function(){var t=null,s=l(this);l(document).on(e.event,e.handler,function(){if(!e.validateOnlyFocus||e.validateOnlyFocus&&s.is(":focus")){var n=s.val(),a=n.length;if(returnType=null,t=!1,11!=a&&14!=a&&18!=a||("cpf"==e.validate?t=f(n,e.mask):"cnpj"==e.validate?t=u(n,e.mask):"cpfcnpj"==e.validate&&(f(n,e.mask)?(t=!0,returnType="cpf"):u(n,e.mask)&&(t=!0,returnType="cnpj"))),l.isFunction(e.ifValid))if(null!=t&&t){if(l.isFunction(e.ifValid)){var i=l.Callbacks();i.add(e.ifValid),i.fire(s)}}else l.isFunction(e.ifInvalid)&&e.ifInvalid(s)}})})}}(jQuery);

// (function ($) {
//     $.fn.cpfcnpj = function (options) {
//         // Default settings
//         var settings = $.extend({
//             mask: false,
//             validate: 'cpfcnpj',
//             event: 'focusout',
//             handler: $(this),
//             validateOnlyFocus: false,
//             ifValid: null,
//             ifInvalid: null,
//             returnType: null
//         }, options);

//         if (settings.mask) {
//             if (jQuery().mask == null) {
//                 settings.mask = false;
//                 console.log("jQuery mask not found.");
//             }
//             else {
//                 var masks = ['000.000.000-009', '00.000.000/0000-00'];
//                 var ctrl = $(this);
//                 if (settings.validate == 'cpf') {
//                     ctrl.mask(masks[0]);
//                 }
//                 else if (settings.validate == 'cnpj') {
//                     ctrl.mask(masks[1]);
//                 }
//                 else {
//                     var cpfCnpjMsk = function (val) {
//                         return val.length === 0 || val.length >= 15 ? masks[1] : masks[0];
//                     }

//                     var opt = {
//                         onChange: function (val, e, currentField) {
//                             var field = $(currentField);
//                             var value = field.cleanVal();
//                             field.mask(cpfCnpjMsk(value), opt);
//                         }
//                     };
//                     ctrl.mask(cpfCnpjMsk, opt);
//                 }
//             }
//         }

//         return this.each(function () {
//             var valid = null;
//             var control = $(this);

//             $(document).on(settings.event, settings.handler,
//                 function () {
//                     if (!settings.validateOnlyFocus || settings.validateOnlyFocus && control.is(':focus')) {
//                         var value = control.val();
//                         var lgt = value.length;
//                         returnType = null;

//                         valid = false;

//                         if (lgt == 11 || lgt == 14 || lgt == 18) {
//                             if (settings.validate == 'cpf') {
//                                 valid = validate_cpf(value, settings.mask);
//                             }
//                             else if (settings.validate == 'cnpj') {
//                                 valid = validate_cnpj(value, settings.mask)
//                             }
//                             else if (settings.validate == 'cpfcnpj') {
//                                 if (validate_cpf(value, settings.mask)) {
//                                     valid = true;
//                                     returnType = 'cpf';
//                                 }
//                                 else if (validate_cnpj(value, settings.mask)) {
//                                     valid = true;
//                                     returnType = 'cnpj';
//                                 }
//                             }
//                         }

//                         if ($.isFunction(settings.ifValid)) {
//                             if (valid != null && valid) {
//                                 if ($.isFunction(settings.ifValid)) {
//                                     var callbacks = $.Callbacks();
//                                     callbacks.add(settings.ifValid);
//                                     callbacks.fire(control);
//                                 }
//                             }
//                             else if ($.isFunction(settings.ifInvalid)) {
//                                 settings.ifInvalid(control);
//                             }
//                         }
//                     }
//                 });
//         });
//     }

//     function validate_cnpj(val, msk) {
//         val = val.replace(/[^\d]+/g, '');

//         // Elimina CNPJs inválidos conhecidos
//         if (val == '' || val.length != 14 || /^(.)\1+$/.test(val))
//             return false;

//         // Valida DVs
//         tamanho = val.length - 2
//         numeros = val.substring(0, tamanho);
//         digitos = val.substring(tamanho);
//         soma = 0;
//         pos = tamanho - 7;
//         for (i = tamanho; i >= 1; i--) {
//             soma += numeros.charAt(tamanho - i) * pos--;
//             if (pos < 2)
//                 pos = 9;
//         }
//         resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
//         if (resultado != digitos.charAt(0))
//             return false;

//         tamanho = tamanho + 1;
//         numeros = val.substring(0, tamanho);
//         soma = 0;
//         pos = tamanho - 7;
//         for (i = tamanho; i >= 1; i--) {
//             soma += numeros.charAt(tamanho - i) * pos--;
//             if (pos < 2)
//                 pos = 9;
//         }
//         resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
//         if (resultado != digitos.charAt(1))
//             return false;

//         return true;
//     }

//     function validate_cpf(val, msk) {
//         var regex = msk != undefined && msk ? /^\d{3}\.\d{3}\.\d{3}\-\d{2}$/ : /^[0-9]{11}$/;

//         if (val.match(regex) != null) {
//             //check all same numbers
//             if (val.match(/\b(.+).*(\1.*){10,}\b/g) != null)
//                 return false;

//             var strCPF = val.replace(/\D/g, '');
//             var sum;
//             var rest;
//             sum = 0;

//             for (i = 1; i <= 9; i++)
//                 sum = sum + parseInt(strCPF.substring(i - 1, i)) * (11 - i);

//             rest = (sum * 10) % 11;

//             if ((rest == 10) || (rest == 11))
//                 rest = 0;

//             if (rest != parseInt(strCPF.substring(9, 10)))
//                 return false;

//             sum = 0;
//             for (i = 1; i <= 10; i++)
//                 sum = sum + parseInt(strCPF.substring(i - 1, i)) * (12 - i);

//             rest = (sum * 10) % 11;

//             if ((rest == 10) || (rest == 11))
//                 rest = 0;
//             if (rest != parseInt(strCPF.substring(10, 11)))
//                 return false;

//             return true;
//         }

//         return false;
//     }
// }(jQuery));

