$('document').ready(function () {
    $('#editUserModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        console.log(id);
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
