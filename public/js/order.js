$('document').ready(function () {
    $('#editUserModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $.ajax({
            url: '/orders/' + id,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                var detail = data;

                $('#user_idEdit').val(detail.user_id);
                $('#product_idEdit').val(detail.product_id);
                $('#category_idEdit').val(detail.category_id);
                $('#quantityEdit').val(detail.quantity);
                $('#priceEdit').val(detail.price);
                $('#addressEdit').val(detail.address);
                $('#send_methodEdit').val(detail.send_method);
                $('#category_idEdit').val(detail.category_id);
            }
        });
        var form = document.querySelector('#editForm');
        form.action = '/orders/' + id;
    });
});
