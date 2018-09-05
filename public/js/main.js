/* Tooltip */
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

/* Máscaras */
var TelMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
telOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(TelMaskBehavior.apply({}, arguments), options);
    }
};
$('.mask-telefone').mask(TelMaskBehavior, telOptions);