var type_2 = true
var type_3 = false
var type_6_revers = false
var type_19_door = false
var type_run = false
var reversnumber = false
var list_btn_number = []
let type_input = '';

setListBtnNumber()
typeinput('ipt_number');
function typeinput(id) {
    type_input = id;

    el('ipt_number').style = 'border: 2px solid #ced4da;';
    el('ipt_price_up').style = 'border: 2px solid #ced4da;';
    el('ipt_price_down').style = 'border: 2px solid #ced4da;';
    el('ipt_price_tod').style = 'border: 2px solid #ced4da;';

    el(type_input).style = 'border: 2px solid #17a2b8;';

}

$('#btn_type_2').click(async function () {
    if (!await clearListBtnNumber(type_2)) return

    type_2 = true
    type_3 = false
    type_6_revers = false
    type_19_door = false
    type_run = false
    $('#btn_type_2').addClass("active");
    $('#btn_type_3').removeClass("active");
    $('#btn_type_6_revers').removeClass("active");
    $('#btn_type_19_door').removeClass("active");
    $('#btn_type_run').removeClass("active");

    $('#btn_number_double').show();
    $('#btn_number_tong').hide();

    // input
    $('#btn_revers').show();
    $('#div_ipt_price_down').show();
    $('#div_ipt_price_tod').hide();
})

$('#btn_type_3').click(async function () {
    if (!await clearListBtnNumber(type_3)) return

    type_2 = false
    type_3 = true
    type_6_revers = false
    type_19_door = false
    type_run = false
    $('#btn_type_3').addClass("active");
    $('#btn_type_2').removeClass("active");
    $('#btn_type_6_revers').removeClass("active");
    $('#btn_type_19_door').removeClass("active");
    $('#btn_type_run').removeClass("active");
    el('btn_revers_btn').disabled = false;
    $('#btn_number_double').hide();
    $('#btn_number_tong').show();

    // input
    $('#btn_revers').show();
    $('#div_ipt_price_tod').show();

    if (stock_detail[0].type === 'govt') {
        $('#div_ipt_price_down').show();
    } else {
        $('#div_ipt_price_down').hide();
    }
})

$('#btn_type_6_revers').click(async function () {
    if (!await clearListBtnNumber(type_6_revers)) return

    type_2 = false
    type_3 = false
    type_6_revers = true
    type_19_door = false
    type_run = false
    $('#btn_type_6_revers').addClass("active");
    $('#btn_type_3').removeClass("active");
    $('#btn_type_2').removeClass("active");
    $('#btn_type_19_door').removeClass("active");
    $('#btn_type_run').removeClass("active");
    el('btn_revers_btn').disabled = false;
    $('#btn_number_double').hide();
    $('#btn_number_tong').hide();

    // input
    $('#btn_revers').hide();
    $('#div_ipt_price_down').hide();
    $('#div_ipt_price_tod').hide();
})

$('#btn_type_19_door').click(async function () {
    if (!await clearListBtnNumber(type_19_door)) return

    type_2 = false
    type_3 = false
    type_6_revers = false
    type_19_door = true
    type_run = false
    $('#btn_type_19_door').addClass("active");
    $('#btn_type_6_revers').removeClass("active");
    $('#btn_type_3').removeClass("active");
    $('#btn_type_2').removeClass("active");
    $('#btn_type_run').removeClass("active");

    $('#btn_number_double').hide();
    $('#btn_number_tong').hide();

    // // input
    el('btn_revers_btn').disabled = true;
    // $('#btn_revers').hide();
    $('#div_ipt_price_down').show();
    $('#div_ipt_price_tod').hide();
})

$('#btn_type_run').click(async function () {
    if (!await clearListBtnNumber(type_run)) return

    type_2 = false
    type_3 = false
    type_6_revers = false
    type_19_door = false
    type_run = true
    $('#btn_type_run').addClass("active");
    $('#btn_type_19_door').removeClass("active");
    $('#btn_type_6_revers').removeClass("active");
    $('#btn_type_3').removeClass("active");
    $('#btn_type_2').removeClass("active");
    el('btn_revers_btn').disabled = true;
    $('#btn_number_double').hide();
    $('#btn_number_tong').hide();

    // input
    // $('#btn_revers').hide();
    $('#div_ipt_price_down').show();
    $('#div_ipt_price_tod').hide();
})

// ปุ่มเลขเบิ้ล
$('#btn_number_double').click(function () {
    let arr_number = ['00', '11', '22', '33', '44', '55', '66', '77', '88', '99']
    arr_number.forEach(item => {
        list_btn_number.push(item)
    });
    setListBtnNumber()
})

// ปุ่มเลขตอง
$('#btn_number_tong').click(function () {
    let arr_number = ['000', '111', '222', '333', '444', '555', '666', '777', '888', '999']
    arr_number.forEach(item => {
        list_btn_number.push(item)
    });
    setListBtnNumber()
})

// ปุ่มกลับเลข
$('#btn_revers').click(function () {
    reversnumber = !reversnumber
    $('.btn_revers').toggleClass('active')
})

// // กรอกตัวเลข
// $("#ipt_number").keyup(function () {
//     var value = $("#ipt_number").val()
//     setValueNumber(value)
// });

function setKeyInput(num) {
    if (num == 99) {
        el(type_input).innerHTML = '';

    } else if (num != -1) {
        var value = el(type_input).innerHTML;
        value = value + num.toString();
        el(type_input).innerHTML = value;
        if (type_input == 'ipt_number') {
            setValueNumber(value);
        }

    } else if (num == -1) {
        var value = el(type_input).innerHTML;
        value = value.slice(0, value.length - 1);
        el(type_input).innerHTML = value;
    }
}

// ปุ่มลบเลข
$('#btn_del_list_btn_number').click(function () {
    dellAllListBtnNumber()
})

function dellAllListBtnNumber() {
    list_btn_number = []
    setListBtnNumber()
}

// หากเปลี่ยน type จะลบข้อมูล ตัวเลข
async function clearListBtnNumber(value) {
    if (list_btn_number.length === 0) return true
    if (!value) {
        const result = await Swal.fire({
            title: 'ข้อมูลที่ยังไม่บันทึกจะหายไปทันที กรุณายืนยันที่จะเปลี่ยนอีกครั้ง',
            icon: 'warning',
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก',
            allowOutsideClick: false,
        })
        if (result.isConfirmed) {
            list_btn_number = []
            setListBtnNumber()
            return true

        } else {
            return false
        }
    } else return false
}

// ข้อมูลตัวเลข
function setListBtnNumber() {
    var txt = ''
    list_btn_number.forEach((item, index) => {
        txt = txt + `<button type="button" class="btn btn-info mr-2 mb-2" indexvalue="${index}">${item}</button>`
    });
    $('#list_btn_number').html(txt)
}

// กำหนดให้ button ที่เพิ่มขึ้นมาใหม่สามารถ กดได้
$(`#list_btn_number`).delegate('button.btn-info', 'click', async function (event) {
    const indexvalue = $(this).attr("indexvalue");
    delListBtnNumber(indexvalue)
});

// ลบข้อมูลตัวเลขรายตัว
function delListBtnNumber(index) {
    list_btn_number.splice(index, 1);
    setListBtnNumber()
}

// ปุ่มเพิ่มบิล
$('#btn_add_order').click(function () {
    addOrder()
})

function addOrder() {
    var price_up = el('ipt_price_up').innerHTML ? parseInt(el('ipt_price_up').innerHTML) : 0;
    var price_down = el('ipt_price_down').innerHTML ? parseInt(el('ipt_price_down').innerHTML) : 0;
    var price_tod = el('ipt_price_tod').innerHTML ? parseInt(el('ipt_price_tod').innerHTML) : 0;
    console.log(price_up);
    console.log(price_down);
    console.log(price_tod);
    setAddBill(price_up, price_down, price_tod)
}

// เพิ่มรายการ
function addListNumber(type, price_up, price_down, price_tod) {
    list_number.push({ type: type, up: price_up, down: price_down, tod: price_tod, number: [] })
    list_btn_number.forEach(item => {
        list_number[list_number.length - 1].number.push(item)
    })
}