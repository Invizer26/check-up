

window.addEventListener("DOMContentLoaded", function() {
    function setCursorPosition(pos, elem) {
        elem.focus();
        if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
        else if (elem.createTextRange) {
            let range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select()
        }
    }

    function mask(event) {
        let matrix = this.defaultValue,
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, "");
        def.length >= val.length && (val = def);
        matrix = matrix.replace(/[_\d]/g, function(a) {
            return val.charAt(i++) || "_";
        });
        this.value = matrix;
        i = matrix.lastIndexOf(val.substr(-1));
        i < matrix.length && matrix != this.defaultValue ? i++ : i = matrix.indexOf("_");
        setCursorPosition(i, this)
    }

    let input = document.getElementById("phone");
    input.onfocus = () => input.defaultValue = "+7(___)___-__-__";
    input.addEventListener("input", mask, false)

    $('#appointmentForm').submit(function (event) {
        // console.log(input.value);
        event.preventDefault();
        if (input.value[1] != 7 || input.value.includes("_")){
            alert("Неверно введён телефон");
            return false;
        }
        else {
            let formData = $(this).serialize()
            $.ajax({
                type: 'POST',
                url: '../php/form.php',
                data: formData,
                success: function (data){
                    alert('заявка отправленна');
                }
            })
        }
    })
});