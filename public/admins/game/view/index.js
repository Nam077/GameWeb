function actionDelete(event) {
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);
    console.log(urlRequest);

    Swal.fire({
        title: 'Bạn muốn xoá không?',
        text: "Sẽ không hoàn lại được thao tác này",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Error',
                            'Xoá thành công',
                            'success');
                    }
                },
                error: function (data) {
                        data = data.responseJSON;
                        console.log(data);
                    if (data.code === 400) {
                        Swal.fire(
                            'Deleted!',
                            data.message,
                            'error');
                    }
                }


            });

            // Swal.fire(
            //     'Deleted!',
            //     'Your file has been deleted.',
            //     'success'
            // )
        }
    })
}


$(function () {
    $(document).on('click', '.btn-delete', actionDelete);

});
