$(document).ready(function() {
    $('#fontUpload').on('change', function() {
        var formData = new FormData();
        formData.append('file', this.files[0]);

        $.ajax({
            url: 'ajax/upload_font.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert(response);
                fetchFontList();
            }
        });
    });

    function fetchFontList() {
        $.ajax({
            url: 'ajax/get_fonts.php',
            method: 'GET',
            success: function(data) {
                $('#fontList').html(data);
            }
        });
    }

    $('#addRow').on('click', function() {
        $('#fontGroupRows').append('<div><select name="font[]" required></select><button type="button" class="removeRow">Remove</button></div>');
    });

    $(document).on('click', '.removeRow', function() {
        $(this).parent().remove();
    });

    fetchFontList();
});
