$(function () {
    $(".summernote").summernote({
        height: 300,
        callbacks: {
            onChange: function (contents, $editable) {
                $(this).text($(this).summernote('isEmpty') ? "" : contents);
                $(this).trigger('keyup');
            }
        }
    });

    $(".custom-file-input").on("change", function () {
        console.log("das");
        let fileName = $(this).val().split("\\").pop();
        $(this).next(".custom-file-label").addClass("selected").html(fileName);
    });

    $(".deleteArticleForm .deleteBtn").on("click", function () {
        $("#deleteConfirmationModal #articleToDelete").html(
            $(this).attr("data-articleTitle")
        );
        $("#deleteConfirmationModal #confirmBtn").data(
            "submitForm",
            $(this).parent("form").attr("id")
        );
        $("#deleteConfirmationModal").modal("show");
    });

    $(".deleteUserForm .deleteBtn").on("click", function () {
        $("#deleteConfirmationModal #userToDelete").html(
            $(this).attr("data-userName")
        );
        $("#deleteConfirmationModal #confirmBtn").data(
            "submitForm",
            $(this).parent("form").attr("id")
        );
        $("#deleteConfirmationModal").modal("show");
    });

    $("#deleteConfirmationModal #confirmBtn").on("click", function () {
        $("#" + $(this).data("submitForm")).trigger("submit");
    });

    setTimeout(function () {
        $(".alert.alert-timed")
            .fadeTo(500, 0)
            .slideUp(500, function () {
                $(this).remove();
            });
    }, 3000);
});
