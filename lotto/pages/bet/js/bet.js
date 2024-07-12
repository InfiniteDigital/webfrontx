// รายการหน้า ใส่ราคา
// ปุ่มส่งโพย
$('#btn_send_poy').click(function () {
    event.preventDefault();
    const balance = localStorage.getItem('balance').replaceAll(',', '')
    if (parseFloat(balance) >= parseFloat(total_price_confirm)) {
        // postDobet()
        // ตรวจสอบโพยก่อน
        postCheckDobet()
    } else {
        Swal.fire({
            icon: 'error',
            title: ' ',
            text: 'ยอดเครดิตไม่เพียงพอ!',
        })
    }
})

async function postCheckDobet() {
    var accessToken = localStorage.getItem('accessToken');

    let data = {
        listnumber: list_again,
        lotto_id: param.id,
        lotto_date: lotto_date
    };
    let resNumber = await callXMLHttpRequest(`${apiPort.apiCheckRateNumberAgain}`, data, accessToken);
    if (resNumber.status == 'success') {
        if (!resNumber.check) {
            Swal.fire({
                icon: 'error',
                title: 'มีอัตราจ่ายเปลี่ยนแปลง',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#modalConfirm').modal('show');
                    listNumberConfirm();
                }
            })
        } else {
            Swal.fire({
                icon: 'success',
                title: 'เพิ่มตัวเลขสำเร็จแล้ว',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.reload();
                }
            })
        }

    }

}


// set list number แปลงเป็น array รูปแบบส่งโพย
async function listNumberConfirm() {
    total_price = 0
    list_number_confirm = []
    list_number.forEach(el => {
        el.number.forEach(number => {
            if (el.up !== '0') {
                list_number_confirm.push({
                    number: number,
                    up: el.up,
                    down: '',
                    tod: ''
                })
            }

            if (el.down !== '0') {
                list_number_confirm.push({
                    number: number,
                    up: '',
                    down: el.down,
                    tod: ''
                })
            }

            if (el.tod !== '0') {
                list_number_confirm.push({
                    number: number,
                    up: '',
                    down: '',
                    tod: el.tod
                })
            }
        });
    })
    setTableListNumberConfirm()
}

// set array ลงตาราง และสรุปราคารวม
async function setTableListNumberConfirm() {
    $(`#tb_list_number_confirm`).html('')

    order = 1;
    total_price_confirm = 0;
    var accessToken = localStorage.getItem('accessToken');

    let data = {
        listnumber: list_number_confirm,
        lotto_id: param.id,
        lotto_date: lotto_date
    };
    let resNumber = await callXMLHttpRequest(`${apiPort.apiCheckRateNumber}`, data, accessToken);
    if (resNumber.status == 'success') {
        list_again = resNumber.listnumber;
        await loopList(resNumber.listnumber);
        $('#modalConfirm').modal('show');
    } else {
        Swal.fire({
            icon: 'error',
            title: resNumber.status,
            allowOutsideClick: false,
        })
    }

    $('#txt_total_price_confirm').html(total_price_confirm.toLocaleString("en-US"));

    const balance = localStorage.getItem('balance')
    if (parseFloat(total_price_confirm) <= parseFloat(balance.replaceAll(',', '')) && parseFloat(total_price_confirm) !== 0) {
        $('.card-total-price-confirm').addClass("border-success");
        $('.card-total-price-confirm').removeClass("border-danger");
        $('.card-total-price-confirm div').addClass("text-success");
        $('.card-total-price-confirm div').removeClass("text-danger");

    } else {
        $('.card-total-price-confirm').addClass("border-danger");
        $('.card-total-price-confirm').removeClass("border-success");
        $('.card-total-price-confirm div').addClass("text-danger");
        $('.card-total-price-confirm div').removeClass("text-success");
    }
}

function loopList(array) {
    var txt = ''
    for (let i = 0; i < array.length; i++) {
        let item = array[i];
        let numberTxt = '';
        let payTxt = '';
        let totalTxt = '';
        let descTxt = '';
        if (!item.status) {
            numberTxt = '<span style="color:red;">' + item.number + '</span>';
            payTxt = '<span style="color:red;">-</span>';
            totalTxt = '<span style="color:red;">-</span>';
            descTxt = '<span style="color:red;">***' + item.description + '</span>';
        } else {
            numberTxt = '<span>' + item.number + '</span>';
            payTxt = '<span>' + item.rate + '</span>';
            totalTxt = '<span>' + Number(item.amount * item.rate).toLocaleString('en') + '</span>';
            descTxt = '<span>-</span>';
            total_price_confirm = parseFloat(total_price_confirm) + (!isNaN(parseFloat(item.up)) ? parseFloat(item.up) : 0) + (!isNaN(parseFloat(item.down)) ? parseFloat(item.down) : 0) + (!isNaN(parseFloat(item.tod)) ? parseFloat(item.tod) : 0)
        }
        txt = txt + `<tr>
            <th scope="row">${order}</th>
            <td style="min-width: 40px;">${numberTxt}</td>
            <td style="min-width: 40px;">${payTxt}</td>
            <td class="p-2">
                <input type="number" typevalue="up" indexvalue="${order - 1}" ordervalue="${order}" id="ipt_price_up_${order}" value="${item.up}" min="5" class="form-control form-control-sm ipt_price" ${item.up ==0 ? "disabled" : ""} />
            </td>
            <td style="min-width: 40px;">
                <input type="number" typevalue="down" indexvalue="${order - 1}" ordervalue="${order}" id="ipt_price_down_${order}" value="${item.down}" min="5" class="form-control form-control-sm ipt_price" ${item.down ==0 ? "disabled" : ""} />
            </td>
            <td class="p-2">
                <input type="number" typevalue="tod" indexvalue="${order - 1}" ordervalue="${order}" id="ipt_price_tod_${order}" value="${item.tod}" min="5" class="form-control form-control-sm ipt_price" ${item.tod ==0 ? "disabled" : ""} />
            </td>
            <td style="min-width: 40px;">${totalTxt}</td>
            <td style="min-width: 40px;">${descTxt}</td>
            <td class="p-2">
                <button type="button" indexvalue="${order - 1}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>`

        order = order + 1

    }

    $(`#tb_list_number_confirm`).append(txt)
    if (total_price_confirm > 0) {
        el('btn_send_poy').disabled = false;
    } else {
        el('btn_send_poy').disabled = true;
    }
}

$(`.list-number-confirm`).delegate('button.btn-outline-danger.btn-sm', 'click', async function (event) {
    const indexvalue = $(this).attr("indexvalue");
    deleteListNumberModal(indexvalue)
    setTableListNumberConfirm()
});

$(`.list-number-confirm`).delegate('input.ipt_price', 'change', async function (event) {
    const order = $(this).attr("ordervalue");
    const index = $(this).attr("indexvalue");
    const typevalue = $(this).attr("typevalue");
    const value = $(`#ipt_price_${typevalue}_${order}`).val()
    list_number_confirm[index][typevalue] = value
    setTableListNumberConfirm()
});

// ตัดเลขซ้ำ
$('#btn_cut_duplicatenumber').click(function () {
    function getUniqueListBy(arr) {
        return [...new Map(arr.map(item => [item.number, item])).values()];
    }
    list_number_confirm = getUniqueListBy(list_number_confirm);

    setTableListNumberConfirm()
})

// input ราคาเท่ากันทั้งหมด
$('#btn_sameprice').click(function () {
    let price = $('#ipt_sameprice').val();
    let list_key = ['up', 'down', 'tod']

    list_number_confirm.forEach(item => {
        list_key.forEach(key => {
            if (item[key] !== '') {
                item[key] = price
            }
        });
    });
    setTableListNumberConfirm();
})

// ปุ่มเลขราคาเท่ากันทั้งหมด
$('.btn_update_price').click(function () {
    let price = $(this).attr("pricevalue");
    let list_key = ['up', 'down', 'tod']

    list_number_confirm.forEach((item, index) => {
        list_key.forEach(key => {
            if (item[key] !== '') {
                item[key] = price
            }
        });
    });

    setTableListNumberConfirm();
    // sumTotalPrice();
});

// set list_number ก่อนส่งโพย
async function setListNumberSend() {
    var list_number_send = []
    list_number_confirm.forEach(el => {
        if (el.number.length === 3) {
            if (el.up !== '') {
                list_number_send.push({
                    number: el.number,
                    rewardTypeId: reward_type?.up3 || 38,
                    price: el.up
                })
            }
            if (el.down !== '') {
                list_number_send.push({
                    number: el.number,
                    rewardTypeId: reward_type?.down3 || 4,
                    price: el.down
                })
            }
            if (el.tod !== '') {
                list_number_send.push({
                    number: el.number,
                    rewardTypeId: reward_type?.tod3 || 2,
                    price: el.tod
                })
            }

        } else if (el.number.length === 2) {
            if (el.up !== '') {
                list_number_send.push({
                    number: el.number,
                    rewardTypeId: reward_type?.up2 || 5,
                    price: el.up
                })
            }
            if (el.down !== '') {
                list_number_send.push({
                    number: el.number,
                    rewardTypeId: reward_type?.down2 || 6,
                    price: el.down
                })
            }

        } else if (el.number.length === 1) { // วิ่ง
            if (el.up !== '') {
                list_number_send.push({
                    number: el.number,
                    rewardTypeId: reward_type?.uprun || 7,
                    price: el.up
                })
            }
            if (el.down !== '') {
                list_number_send.push({
                    number: el.number,
                    rewardTypeId: reward_type?.downrun || 8,
                    price: el.down
                })
            }

        }
    });

    return list_number_send
}

// ส่งโพย
async function postDobet() {
    const comment = $('#ipt_comment').val()
    const list_number_send = await setListNumberSend()

    try {
        const accessToken = localStorage.getItem('accessToken');
        var config = {
            method: 'post',
            url: `/Api/key/insertNumber`,
            headers: {
                'Authorization': `Bearer ${accessToken}`,
                'Content-Type': 'application/json',
            },
            data: {
                lottoTypeId: bet_id,
                rateId: sl_payrate,
                numberData: list_number_send,
                customerName: comment
            }
        };

        const { data } = await axios(config);
        if (data.status) {
            var txt_html = ''
            data.result.forEach(item => {
                item.numberVerify.forEach(el => {
                    let deprive = el.deprive.status ? `<span class="text-warning">เลขนี้อัตราจ่าย ${el.reward} </span>` : ''
                    if (el.statusInsertNumber.status === 'success') {
                        txt_html = txt_html + `<p class="text-success m-0">${el.number} (${el.statusInsertNumber.text}) ${deprive}</p>`
                    } else {
                        txt_html = txt_html + `<p class="text-danger m-0">${el.number} (${el.statusInsertNumber.text})</p>`
                    }
                });
            });

            Loader.close()
            Swal.fire({
                title: `สำเร็จ`,
                html: txt_html,
                showDenyButton: true,
                allowOutsideClick: false,
                confirmButtonText: 'ประวัติการแทง',
                denyButtonText: 'แทงต่อ',
            }).then((result) => {
                localStorage.removeItem(`list_number_${pageName}`);
                localStorage.removeItem(`key_list_number_${pageName}`);

                if (result.isConfirmed) {
                    window.location.replace('/history')

                } else if (result.isDenied) {
                    window.location.replace(`/bet/${bet_id}`)
                }
            })

        } else {
            Loader.close()
            console.log(data)
            Swal.fire({
                icon: 'error',
                title: ' ',
                text: data.text,
            })
        }

    } catch (error) {
        Loader.close()
        console.log(error)
    }
}

