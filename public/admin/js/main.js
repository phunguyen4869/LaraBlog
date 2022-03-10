// X-CSRF-TOKEN
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#upload').change(function () {
    const form = new FormData();
    form.append('files[]', $(this)[0].files[0]);
    $.ajax({
        contentType: false,
        processData: false,
        type: 'POST',
        datatype: 'JSON',
        data: form,
        url: '/admin/upload',
        success: function (results) {
            if (results.error === false) {
                $('#upload-image').html('<a href="' + results.url + '" target="_blank"><img src="' + results.url + '" width="200px" /></a>');

                $('#image').val(results.url);
            } else {
                alert('Upload error');
            }
        }
    });
});

function removeRow(id, url) {
    if (confirm('Bạn có chắc chắn muốn xóa mục này không?')) {
        $.ajax({
            type: 'DELETE',
            datatype: 'json',
            data: {
                id
            },
            url: url,
            success: function (result) {
                console.log(result);
                if (result.error === false) {
                    alert(result.message);
                    $(".card-body").load(location.href + " .card-body>*", "");
                } else {
                    alert('Xoá không thành công, vui lòng thử lại');
                }
            }
        });
    }
}
