var list_number = []
var order = 1
var pageName = ''
var bet_id = 0;
var stock_detail = { id: '', name: '', open: '', close: '', type: '' }
var rate = {}
var total_price = 0
var total_price_confirm = 0
var list_number_confirm = []
var sl_payrate = ''
var reward_type = null
let param = getParamInGetUrl();
let lotto_date = '';
let list_again = [];
let pay_list = [];
window.onload = async function() {
    await setData();
    await setPay();
    setStockDetail()
    let lcs_list_number = localStorage.getItem(`list_number_${pageName}`);
    // list_number = lcs_list_number ? JSON.parse(lcs_list_number) : list_number;
    // getDeprive();
}

async function setPay() {
    var accessToken = localStorage.getItem('accessToken');
    let data = {
        lotto_type: param.id,
    };
    let resNumber = await callXMLHttpRequest(`${apiPort.apiQueryLottoLimitMin}`, data, accessToken);
    if (resNumber.statusCodeText == '200') {
        for (let i = 0; i < resNumber.result.length; i++) {
            if (resNumber.result.length == 6) {
                if (i == 2) {
                    pay_list.push({
                        id: 0,
                        name: '3down',
                        pay_min: 0,
                        name_th: '3 ตัวล่าง',
                    });
                    pay_list.push({
                        id: resNumber.result[i].id,
                        name: resNumber.result[i].reward_name,
                        pay_min: resNumber.result[i].play_min,
                        name_th: resNumber.result[i].description,
                    });
                } else {
                    pay_list.push({
                        id: resNumber.result[i].id,
                        name: resNumber.result[i].reward_name,
                        pay_min: resNumber.result[i].play_min,
                        name_th: resNumber.result[i].description,
                    });
                }
            } else {
                pay_list.push({
                    id: resNumber.result[i].id,
                    name: resNumber.result[i].reward_name,
                    pay_min: resNumber.result[i].play_min,
                    name_th: resNumber.result[i].description,
                });
            }
        }
    }
}

async function setData() {
    let bet_c = localStorage.getItem("bet_id");
    if (!param.id) {
        if (bet_c) {
            bet_id = bet_c;
        } else {
            window.location.href = '../main';
        }
    } else {
        el('bet_id').value = param.id;
        bet_id = param.id;
        localStorage.setItem("bet_id", bet_id);
    }
}

const dateNow = new Date().toLocaleDateString('th-TH', {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
});
$('.txt_date').html(dateNow)

// $('#inputform').on('keydown', function (event) {
//     if (event.which == 13) {
//         event.preventDefault();
//         var $this = $(event.target);
//         var index = parseFloat($this.attr('data-index'));

//         if (type_3) {
//             if (stock_detail[0].type === 'stocks') {
//                 if (index === 3) {
//                     return addOrder()
//                 }
//             } else if (stock_detail[0].type === 'govt') {
//                 if (index === 4) {
//                     return addOrder()
//                 }
//             }

//         } else {
//             if (index === 3) {
//                 return addOrder()
//             }
//         }
//         $('[data-index="' + (index + 1).toString() + '"]').focus();

//     }
// });
// แสดงข้อมูล หวย
function setStockDetail() {
    let list_game = JSON.parse(localStorage.getItem('list_game'));
    stock_detail = list_game.filter((item, index) => item.id == bet_id);
    pageName = stock_detail[0].type + "_" + stock_detail[0].id
    $('#txt_name').html(stock_detail[0].name)
    if (stock_detail[0].type === 'govt') {
        $('#btn_down3,#div-panel-down3').show()
    }
    lotto_date = stock_detail[0].date;
    countDown(stock_detail[0].date, stock_detail[0].close)
}

// นับเวลาถอยหลัง
async function countDown(date, time) {
    const arr_date = date.split('-')
    const dateFM = arr_date[1] + "/" + arr_date[2] + "/" + arr_date[0]
    const dateClose = new Date(dateFM + ' ' + time);

    var countdown = setInterval(async function() {
        const dateNow = new Date();
        let timeOut = dateClose.getTime() - dateNow.getTime()
        const timeCountdown = await timeDifference(dateClose, dateNow)


        $(`.txt_timer`).html(timeCountdown)
        if (timeOut <= 0) {
            clearInterval(countdown)
            Swal.fire({
                icon: 'warning',
                title: 'หมดเวลาแทง',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace('/pages/main')
                }
            })
        }
    }, 1000);
}

// ช่วงต่างของเวลา
async function timeDifference(laterdate, earlierdate) {
    // คำนวณความแตกต่างของวันที่
    var difference = laterdate.getTime() - earlierdate.getTime();
    // แปลงเป็นวัน ชม. นาที วินาที
    var dayDifference = Math.floor(difference / 1000 / 60 / 60 / 24);
    difference -= dayDifference * 1000 * 60 * 60 * 24
    var hoursDifference = Math.floor(difference / 1000 / 60 / 60);
    difference -= hoursDifference * 1000 * 60 * 60
    var minutesDifference = Math.floor(difference / 1000 / 60);
    difference -= minutesDifference * 1000 * 60
    var secondsDifference = Math.floor(difference / 1000);
    // แสดงผล
    var time = dayDifference + "วัน " + hoursDifference + "ชม. " + minutesDifference + "น. " + secondsDifference + "วิ."
    if (dayDifference === 0) {
        time = hoursDifference + "ชม. " + minutesDifference + "น. " + secondsDifference + "วิ."
    }
    return time
}

// alert เพิ่มรายการ
function SwalAlertAddList() {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'เพิ่มรายการสำเร็จ',
        showConfirmButton: false,
        timer: 1500,
        toast: true,
    })
}

// ปุ่มลบรายการแทง
$('#list_number').delegate('div div a', 'click', async function(event) {
    event.preventDefault();
    const indexvalue = $(this).attr("indexvalue");
    delListNUmber(indexvalue)
})

// set Array Btn Number
function setValueNumber(value) {
    if (type_2) {
        if ((value.length === 2 && parseInt(value)) || value === '00') {
            list_btn_number.push(value)
            if (reversnumber) {
                let number = reversSetNumber(value, 2)
                if (number) {
                    list_btn_number.push(number)
                }
            }
            el('ipt_number').innerHTML = '';
            setListBtnNumber()
        } else if (value.length > 2) {
            setSpanValue(2)
        }

    } else if (type_3) {
        if ((value.length === 3 && parseInt(value)) || value === '000') {
            if (reversnumber) {
                // list_btn_number.push(value)
                list_btn_number = list_btn_number.concat(reversSetNumber(value, 3))
            } else {
                list_btn_number.push(value)
            }
            el('ipt_number').innerHTML = '';
            setListBtnNumber()
        } else if (value.length > 3) {
            setSpanValue(3)
        }

    } else if (type_6_revers) {

    } else if (type_19_door) {
        if ((value.length === 1 && parseInt(value)) || value === '0') {
            for (let index = 0; index < 10; index++) {
                let txt_number = value + '' + index
                list_btn_number.push(txt_number)
            }
            for (let index = 0; index < 10; index++) {
                let number_repeated = value + "" + value
                let txt_number = index + value

                if (txt_number !== number_repeated) {
                    list_btn_number.push(txt_number)
                }
            }
            el('ipt_number').innerHTML = '';
            setListBtnNumber()
        }

    } else if (type_run) {
        if ((value.length === 1 && parseInt(value)) || value === '0') {
            list_btn_number.push(value)
            el('ipt_number').innerHTML = '';
            setListBtnNumber()
        } else if (value.length > 1) {
            setSpanValue(1)
        }
    }

    function setSpanValue(length) {
        value = value.replaceAll(" ", ",");
        value = value.replaceAll("\n", ",");
        value = value.replaceAll(".", ",");
        value = value.replaceAll("|", ",");
        value = value.replaceAll("-", ",");
        value = value.replaceAll("=", ",");
        value = value.replaceAll("/", ",");
        value = value.split(",")

        value = value.filter(item => !isNaN(item) && item.length === length);

        arr_reversnumber = []
        if (reversnumber) {
            value.forEach(item => {
                let number = reversSetNumber(item, length)
                if (number) {
                    if (length === 2) {
                        arr_reversnumber.push(number)
                    } else if (length === 3) {
                        arr_reversnumber = arr_reversnumber.concat(number)
                    }
                }
            });
        }

        if (length === 3) {
            if (reversnumber) {
                value = arr_reversnumber
            } else {
                value = value.concat(arr_reversnumber)
            }

        } else if (length === 2) {
            value = value.concat(arr_reversnumber)
        }

        list_btn_number = list_btn_number.concat(value);

        el('ipt_number').innerHTML = '';
        setListBtnNumber()
    }

    // กลับเลข
    function reversSetNumber(value, length) {
        if (length === 2) {
            let num1 = value.substring(0, 1)
            let num2 = value.substring(1, 2)
            if (num1 !== num2) {
                return rever_number = num2 + "" + num1
            } else return null
        } else if (length === 3) {
            let arr_number = []
            let num1 = value.substring(0, 1)
            let num2 = value.substring(1, 2)
            let num3 = value.substring(2, 3)

            arr_number.push(num1 + "" + num2 + "" + num3)
            arr_number.push(num1 + "" + num3 + "" + num2)
            arr_number.push(num2 + "" + num1 + "" + num3)
            arr_number.push(num2 + "" + num3 + "" + num1)
            arr_number.push(num3 + "" + num1 + "" + num2)
            arr_number.push(num3 + "" + num2 + "" + num1)

            arr_number = Array.from(new Set(arr_number))
            return arr_number
        }
    }
}
let pay_rate_check = false;
// เพิ่มรายการ
async function setAddBill(price_up, price_down, price_tod) {
    pay_rate_check = true;

    price_up = price_up == 0 ? '' : price_up
    price_down = price_down == 0 ? '' : price_down
    price_tod = price_tod == 0 ? '' : price_tod

    if (list_btn_number.length === 0) {
        Swal.fire({
            icon: 'warning',
            title: 'กรุณาเพิ่มเลขที่จะเล่น',
        })
    } else if (price_up || price_down || price_tod) {
        if ((isNaN(parseInt(price_up)) && price_up !== '') || (isNaN(parseInt(price_down)) && price_down !== '') || (isNaN(parseInt(price_tod)) && price_tod !== '')) {
            Swal.fire({
                icon: 'warning',
                title: 'กรุณาใส่ราคาที่จะเล่นให้ถูกต้อง',
            })

        } else {
            if (type_3) {
                if ((price_up !== '' && parseInt(price_up) < pay_list[0].pay_min)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'ราคา ' + pay_list[0].name_th + ' แทงขั้นต่ำ ' + pay_list[0].pay_min + ' บาทค่ะ',
                    })
                    pay_rate_check = false
                }


                if ((price_tod !== '' && parseInt(price_tod) < pay_list[1].pay_min)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'ราคา ' + pay_list[1].name_th + ' แทงขั้นต่ำ ' + pay_list[1].pay_min + ' บาทค่ะ',
                    })
                    pay_rate_check = false
                }

                if ((price_down !== '' && parseInt(price_down) < pay_list[2].pay_min)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'ราคา ' + pay_list[2].name_th + ' แทงขั้นต่ำ ' + pay_list[2].pay_min + ' บาทค่ะ',
                    })
                    pay_rate_check = false
                }

            }

            if (type_2 || type_19_door) {
                if ((price_up !== '' && parseInt(price_up) < pay_list[3].pay_min)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'ราคา ' + pay_list[3].name_th + ' แทงขั้นต่ำ ' + pay_list[3].pay_min + ' บาทค่ะ',
                    })
                    pay_rate_check = false
                }

                if ((price_down !== '' && parseInt(price_down) < pay_list[4].pay_min)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'ราคา ' + pay_list[4].name_th + ' แทงขั้นต่ำ ' + pay_list[4].pay_min + ' บาทค่ะ',
                    })
                    pay_rate_check = false
                }
            }
            if (type_run) {
                console.log(1);
                if ((price_up !== '' && parseInt(price_up) < pay_list[5].pay_min)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'ราคา ' + pay_list[5].name_th + ' แทงขั้นต่ำ ' + pay_list[5].pay_min + ' บาทค่ะ',
                    })
                    pay_rate_check = false
                }

                if ((price_down !== '' && parseInt(price_down) < pay_list[6].pay_min)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'ราคา ' + pay_list[6].name_th + ' แทงขั้นต่ำ ' + pay_list[6].pay_min + ' บาทค่ะ',
                    })
                    pay_rate_check = false
                }

            }
            if (pay_rate_check) {
                SwalAlertAddList()
                price_down = price_down ? parseInt(price_down) : '0'
                price_up = price_up ? parseInt(price_up) : '0'
                price_tod = price_tod ? parseInt(price_tod) : '0'

                if (type_2 || type_19_door || type_run) {
                    await addListNumber(type_run ? 'วิ่ง' : '2ตัว', price_up, price_down, '0')
                } else if (type_3) {
                    if (stock_detail[0].type === 'stocks') price_down = '0'

                    if (price_up === '0' && price_down === '0' && price_tod === '0') {

                    } else addListNumber('3ตัว', price_up, price_down, price_tod)

                }
                dellAllListBtnNumber()
                setListNumber()
                $('#ipt_price_up,#wangpoy-price-up').text('')
                $('#ipt_price_down,#wangpoy-price-down').text('')
                $('#ipt_price_tod,#wangpoy-price-tod').text('')

                localStorage.setItem(`list_number_${pageName}`, JSON.stringify(list_number))

            }
        }

    } else {
        Swal.fire({
            icon: 'warning',
            title: 'กรุณาใส่ราคาที่จะเล่น',
        })
    }
}

// set รายการลง list 
function setListNumber() {
    var txt = ''
    list_number.forEach((item, index) => {
        txt = txt + `<div class="row">
                        <div class="col-4 col-sm-3 pl-1 pr-0 border-right text-center">
                            <p class="m-0">${item.type}</p>
                    `
        if (item.type === '2ตัว' || item.type === 'วิ่ง') {
            txt = txt + `       <p class="m-0">บน x ล่าง</p>
                                <p class="m-0"><strong>${item.up} x ${item.down}</strong></p>`
        } else txt = txt + `    <p class="m-0">บน x ล่าง x โต๊ด</p>
                                <p class="m-0"><strong>${item.up} x ${item.down} x ${item.tod}</strong></p>`
        txt = txt + `</div>
                        <div class="col-7 col-sm-8 px-1 text-left">
                            ${item.number.toString()}
                        </div>
                        <div class="col-1 p-0 mt-4">
                            <a href="" class="text-danger" indexvalue="${index}"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <hr/>`
    })
    $('#list_number').html(txt)
    sumTotalPrice()
}

// ลบ List Number จาก Index 
function delListNUmber(index) {
    list_number.splice(index, 1);
    setListNumber()
    localStorage.setItem(`list_number_${pageName}`, JSON.stringify(list_number))
}

// รวมยอดแทงทั้งหมด
function sumTotalPrice() {
    var total = 0
    list_number.forEach(item => {
        total = total + parseInt(item.number.length) * parseInt(item.up)
        total = total + parseInt(item.number.length) * parseInt(item.down)
        total = total + parseInt(item.number.length) * parseInt(item.tod)
    });
    $('#txt_total_price').html(total.toLocaleString("en-US"));
    const balance = localStorage.getItem('balance').replaceAll(',', '')
    if (parseFloat(total) <= parseFloat(balance) && total !== 0) {
        $('.card-total-price').addClass("border-success");
        $('.card-total-price').removeClass("border-danger");
        $('.card-total-price div').addClass("text-success");
        $('.card-total-price div').removeClass("text-danger");

    } else {
        $('.card-total-price').addClass("border-danger");
        $('.card-total-price').removeClass("border-success");
        $('.card-total-price div').addClass("text-danger");
        $('.card-total-price div').removeClass("text-success");
    }
}

// ปุ่มล้างรายการ
$('#btn_clear').click(function() {
    Swal.fire({
        icon: 'warning',
        title: `คุณต้องการลบรายการทั้งหมดใช่หรือมั้ย`,
        showCancelButton: true,
        confirmButtonText: 'ยืนยัน',
        cancelButtonText: 'ยกเลิก',
    }).then((result) => {
        if (result.isConfirmed) {
            list_number = []
            setListNumber()
        }
    })
})

// ปุ่มบันทึก
$('#btn_save').click(function() {
    if (list_number.length > 0) {
        const balance = localStorage.getItem('balance').replaceAll(',', '')
        var total_price = $('#txt_total_price').html().replaceAll(',', '')
        if (parseFloat(balance) < parseFloat(total_price)) {
            Swal.fire(
                'ยอดเครดิตไม่เพียงพอ',
                '',
                'error'
            )

        } else {

            listNumberConfirm();
        }

    } else {
        Swal.fire(
            'ไม่สามารถทำรายการได้',
            'กรุณาเพิ่มรายการแทงก่อน',
            'error'
        )
    }
})

function deleteListNumberModal(index) {
    list_number_confirm.splice(index, 1);
}

// เลขอั้น
async function getDeprive() {
    const accessToken = localStorage.getItem('accessToken');
    try {
        var config = {
            method: 'post',
            url: `/Api/key/getDeprive`,
            headers: {
                'Authorization': `Bearer ${accessToken}`,
                'Content-Type': 'application/json',
            },
            data: {
                lottoTypeId: bet_id,
                rateId: sl_payrate
            }
        };

        const { data } = await axios(config)
        if (data.status === 'success') {
            let list = ''

            if (data.result.length == 7) {
                data.result[0].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_up3').html(data.result[0].deprive.length > 0 ? list : '-')

                list = ''
                data.result[1].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_tod3').html(data.result[1].deprive.length > 0 ? list : '-')

                list = ''
                data.result[2].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_down3').html(data.result[2].deprive.length > 0 ? list : '-')

                list = ''
                data.result[3].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_up2').html(data.result[3].deprive.length > 0 ? list : '-')

                list = ''
                data.result[4].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_down2').html(data.result[4].deprive.length > 0 ? list : '-')

                list = ''
                data.result[5].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_runup').html(data.result[5].deprive.length > 0 ? list : '-')

                list = ''
                data.result[6].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_rundown').html(data.result[6].deprive.length > 0 ? list : '-')
            } else {

                data.result[0].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_up3').html(data.result[0].deprive.length > 0 ? list : '-')

                list = ''
                data.result[1].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_tod3').html(data.result[1].deprive.length > 0 ? list : '-')
                $('.txt_deprive_down3').html("-")

                list = ''
                data.result[2].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_up2').html(data.result[2].deprive.length > 0 ? list : '-')

                list = ''
                data.result[3].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_down2').html(data.result[3].deprive.length > 0 ? list : '-')

                list = ''
                data.result[4].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_runup').html(data.result[4].deprive.length > 0 ? list : '-')

                list = ''
                data.result[5].deprive.forEach(item => {
                    list = list + item.number + ', '
                });
                $('.txt_deprive_rundown').html(data.result[5].deprive.length > 0 ? list : '-')
            }



        }

    } catch (error) {
        console.log(error)
    }
}


$('.sl_payrate').on('change', function() {
    sl_payrate = this.value
});




$('#btn_lotto_number').click(async function() {
    var accessToken = localStorage.getItem('accessToken');
    let data = {
        username: localStorage.getItem('username')
    };
    let resNumber = await callXMLHttpRequest(`${apiPort.apiGetLottoNumberGroup}`, data, accessToken);
    // console.log("🚀 ~ file: index.js:675 ~ $ ~ resNumber:", resNumber)
    if (resNumber.statusCode == 200) {
        let htm = '';
        for (let i = 0; i < resNumber.data.length; i++) {
            htm += '<tr>';
            htm += '<td scope="row" class="text-center" style="color:#000;">' + resNumber.data[i].group_number + '</td>';
            htm += '<td scope="row" class="text-center" style="color:#000;">' + resNumber.data[i].group_name + '</td>';
            htm += `<td scope="row" class="text-center" style="color:#000;"><button class="btn btn-info" onclick="setDataLotto('${resNumber.data[i].group_number}')">เลือก</button></td>`;
            htm += '</tr>';
        }
        document.getElementById('tb_detail').innerHTML = htm;
        $('#lottoNumberModal').modal('show');
    }
})

async function setDataLotto(id) {
    $('#lottoNumberModal').modal('hide');
    list_number_confirm = [];
    var accessToken = localStorage.getItem('accessToken');
    let data = {
        username: localStorage.getItem('username'),
        id: id
    };
    let resNumber = await callXMLHttpRequest(`${apiPort.apiGetLottoNumberDetail}`, data, accessToken);
    if (resNumber.statusCodeText == '200') {
        let total = 0;
        for (let i = 0; i < resNumber.data.length; i++) {
            let data = resNumber.data[i];
            for (let j = 0; j < pay_list.length; j++) {
                let pay = pay_list[j];
                if (data.lotto_reward_type_name == pay.name) {
                    if (pay.id != 0) {
                        if ((data.lotto_reward_type_name == '3tong') || (data.lotto_reward_type_name == '2up') || (data.lotto_reward_type_name == 'runup')) {
                            list_number_confirm.push({
                                number: data.numbers,
                                up: pay.pay_min,
                                down: '',
                                tod: ''
                            })
                            total += pay.pay_min;
                            break;
                        }
                        if ((data.lotto_reward_type_name == '3tod' && data.id == pay.id)) {
                            list_number_confirm.push({
                                number: data.numbers,
                                up: '',
                                down: '',
                                tod: pay.pay_min
                            })
                            total += pay.pay_min;
                            break;
                        }
                        if ((data.lotto_reward_type_name == '3down') || (data.lotto_reward_type_name == '2down') || (data.lotto_reward_type_name == 'rundown')) {
                            list_number_confirm.push({
                                number: data.numbers,
                                up: '',
                                down: pay.pay_min,
                                tod: ''
                            })
                            total += pay.pay_min;
                            break;
                        }
                    }
                }
            }
        }
        if (list_number_confirm.length > 0) {
            const balance = localStorage.getItem('balance').replaceAll(',', '')
            if (parseFloat(balance) < parseFloat(total)) {
                Swal.fire(
                    'ยอดเครดิตไม่เพียงพอ',
                    '',
                    'error'
                )
            } else {
                setTableListNumberConfirm();
            }
        }
    }
}