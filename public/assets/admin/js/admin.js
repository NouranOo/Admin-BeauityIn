$('.submitBTN').on('click' ,function () {
    var form = $(this).closest('form');
    var url = form.attr('action');

    $.ajax({
        url : url,
        method : 'POST',
        dataType: 'json',
        data : new FormData(form[0]),
        contentType:false,
        cache: false,
        processData:false,
        success : function (response) {
            if (response.status === "success") {
                var alertSelector = '.SuccessMessage';
                var alertOpSelector = '.ErrorMessage';
            } else if (response.status === "error") {
                var alertSelector = '.ErrorMessage';
                var alertOpSelector = '.SuccessMessage';
            }
            $(alertSelector).html(response.data);
            $(alertSelector).hide().removeClass('hidden').fadeIn();
            setTimeout(function () {
                $(alertSelector).fadeOut().addClass('hidden');
            }, 3000);
            $(alertOpSelector).fadeOut().addClass('hidden');
            if (response.status === "success") {
                window.location.reload();
            }
        }
    });
    return false;
});

// --------------------------Trigger File upload browsing Section ---------------------------
$(document).on('click', '.btn-product-image', function () {
    var btn = $(this);
    var uploadInp = btn.next('input[type=file]');
    uploadInp.change(function () {
        if (validateImgFile(this)) {
            btn.html('');
            previewURL(btn, this);
        }
    }).click();
});

function previewURL(btn, input) {
    if (input.files && input.files[0]) {
        // collecting the file source
        var file = input.files[0];
        // preview the image
        var reader = new FileReader();
        reader.onload = function (e) {
            var src = e.target.result;
            btn.attr('src', src);
        };
        reader.readAsDataURL(file);
    }
}
//validating the file
function validateImgFile(input) {
    if (input.files && input.files[0]) {
        // collecting the file source
        var file = input.files[0];
        // validating the image name
        if (file.name.length < 1) {
            alert("الملف لا يجب ان يكون فارغ");
            return false;
        }
        // validating the image size
        else if (file.size > 20000000) {
            alert("The file is too big");
            return false;
        }
        // validating the image type
        else if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/gif' && file.type != 'image/jpeg') {
            alert("نوع الملف يجب ان يكون  png, jpg or gif");
            return false;
        }
        return true;
    }
}


////Delete method
$('.deleteBTN').on('click' ,function () {
    var url = $(this).data('url');
    var button = $('.modalDLTBTN');
    button.attr('href' ,url);
});


////accept method
$('.acceptBtn').on('click' ,function () {
    var url = $(this).data('url');
    var button = $('.modalactTBTN');
    button.attr('href' ,url);
});