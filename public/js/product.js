$('document').ready(function () {
    $('#editUserModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $.ajax({
            url: '/products/' + id,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                var detail = data;
                $('#nameEdit').val(detail.name);
                $('#priceEdit').val(detail.price);
                $('#descriptionEdit').val(detail.description);
            }
        });
        var form = document.querySelector('#editForm');
        form.action = '/products/' + id;
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
