$(document).ready(function () {
    $("#form").on('submit', (function (e) {
        e.preventDefault();
        $('#graphic_err').html("");
        var graphic = $('#formFile').val();
        if (graphic == "") {
            $('#graphic_err').html("Plz select graphic first");
        } else {
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function (response) {
                    if (response.code == 100) {
                        $('#graphic_err').html(response.msg);
                    } else {
                        // $('#graphic_err').html(response.msg).css("color", "green");
                        // $("#graphic_err").fadeOut(5000);
                        $('.graphic_add').removeClass("hidden");
                        setTimeout(function () {
                            var element = document.getElementById("graphic_add");
                            element.classList.add("hidden");
                            location.reload();
                        }, 2000);
                    }
                }
            })
        }
    }))
    $('#delete_graphic').click(function (e) {
        if (delete_confirm()) {
           return true;
        }
        else{
            return false;
        }
    })
    function delete_confirm() {
        return confirm("Are you sure to delete this");
    }
})