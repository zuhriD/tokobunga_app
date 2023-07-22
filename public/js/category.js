$('document').ready(function () {
    $('#editUserModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $.ajax({
            url: '/categories/' + id,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                var detail = data;

                $('#nameEdit').val(detail.name);
            }
        });
        var form = document.querySelector('#editForm');
        form.action = '/categories/' + id;
    });
});

function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageAdd-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

// Panggil fungsi previewImage() saat ada perubahan pada input file
$('#imageAdd').change(function () {
    previewImage(this);
});

function previewEditImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$('#imageEdit').change(function () {
    previewEditImage(this);
});

function previewBanner(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#bannerAdd-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

// Panggil fungsi previewBanner() saat ada perubahan pada input file
$('#bannerAdd').change(function () {
    previewBanner(this);
});

function previewEditBanner(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#banner-preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$('#bannerEdit').change(function () {
    previewEditBanner(this);
});
