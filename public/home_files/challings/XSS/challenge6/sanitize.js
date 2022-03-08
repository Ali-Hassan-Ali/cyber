function encodeHTML(s) {
     return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
}

$( document ).ready(function() {
    $('#form-submit').click(function(ev) {
        ev.preventDefault();
        var input_box = $('#widget-name-input');
        var sanitized_input = encodeHTML(input_box.val());
        input_box.val(sanitized_input);
        $('#create-form').submit();
    });
});
