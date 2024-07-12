function coupon_voucher(id) {
    let coupon = document.getElementById('coupon_ipt').value;
    if (!coupon) {
        Swal.fire(
            'แจ้งเตือน !',
            'กรุณาใส่ Code ก่อน',
            'error'
        )
    } else {
        $.ajax({
            url: url_backend + '/ApiCoupon',
            method: 'post',
            data: {
                id: id,
                coupon: coupon,
                path: 'frontend'
            },
            success: function(data) {
                if (data.statusCodeText == '200') {
                    Swal.fire(
                        'แจ้งเตือน !',
                        'ยินดีด้วย คุณได้รับ ' + data.amount + ' เครดิต',
                        'success'
                    )
                    document.getElementById('coupon_ipt').value = '';
                    $('#modal-coupon').modal('hide');
                    checkCreditData();
                } else {
                    Swal.fire(
                        'แจ้งเตือน !',
                        data.description,
                        'error'
                    )
                }
            }
        })

    }
}