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
