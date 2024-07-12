const dateNow = moment().format('YYYY-MM-DD')
var betted = true
var betcancel = false
var betchecked = false

var groupList = []
var reportList = []



$('#startDate').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    format: 'yyyy-mm-dd', // date 2021-12-31
    value: dateNow,
    maxDate: function() {
        return $('#endDate').val();
    }
});

$('#endDate').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    value: dateNow,
    format: 'yyyy-mm-dd', // date 2021-12-31
    minDate: function() {
        return $('#startDate').val();
    }
});

$('#nav-betted-tab').click(function() {
    betted = true
    betcancel = false
    betchecked = false
    $('#slt_option').val('')
    $('#txt_div_win').hide()
    $('#th_win').hide()
    getDataReportBetted()
})

$('#nav-betcancel-tab').click(function() {
    betted = false
    betcancel = true
    betchecked = false
    $('#slt_option').val('')

    $('#txt_div_win').hide()
    $('#th_win').hide()

})

$('#nav-betchecked-tab').click(function() {
    betted = false
    betcancel = false
    betchecked = true
    $('#slt_option').val('')
    $('#txt_div_win').show()
    $('#th_win').show()
    getDataReportBetchecked()
})

// กดปุ่มค้นหา
$('#btn_search').click(function() {
    $('#slt_option').val('')
    if (betted) {
        getDataReportBetted()
    } else if (betcancel) {} else if (betchecked) {
        getDataReportBetchecked()
    }
})

// เลือกโพย
$('#slt_option').change(async function() {
    const accessToken = localStorage.getItem('accessToken');
    if (betted) {
        let resNumber = await callXMLHttpRequest(`${apiPort.apiHistoryBetOrderDetail}`, { order_id: el('slt_option').value }, accessToken);
        let list = '';
        if (resNumber.status === 'success') {
            for (let i = 0; i < resNumber.result.length; i++) {
                let item = resNumber.result[i];
                list += ` <tr>
                                        <th scope="row">${i + 1}</th>
                                        <td>${item.reward}</td>
                                        <td>${item.description}</td>
                                        <td>${item.numbers}</td>
                                        <td>${item.amount}</td>
                                        <td></td>
                                    </tr>`
            }
            $('#tb_result').html(list)
        }
    } else if (betchecked) {
        resNumber = await callXMLHttpRequest(`${apiPort.apiHistoryBetOrderDetail}`, { order_id: el('slt_option').value }, accessToken);
        let list = '';
        if (resNumber.status === 'success') {
            for (let i = 0; i < resNumber.result.length; i++) {
                let item = resNumber.result[i];
                let htm = '';
                let winner = '';
                if (item.winner_flag == 0) {
                    htm = '<span style="color:red">ไม่ถูกรางวัล</span>';
                } else {
                    htm = '<span style="color:green">ถูกรางวัล</span>';
                    winner = '<span style="color:green">+' + item.winner_amount + '</span>';
                }
                list += ` <tr>
                                        <th scope="row">${i + 1}</th>
                                        <td>${item.reward}</td>
                                        <td>${item.description}</td>
                                        <td>${item.numbers}</td>
                                        <td>${item.amount}</td>
                                        <td>${htm}</td>
                                        <td>${winner}</td>
                                    </tr>`
            }
            $('#tb_result').html(list)
        }
    }
});

$(document).ready(function() {
    $('#nav-betted-tab').click();
});

// รายงานการแทง ยังไม่ประกาศผล
async function getDataReportBetted() {
    const accessToken = localStorage.getItem('accessToken');
    const startDate = $('#startDate').val();
    const endDate = $('#endDate').val();
    let dataQ = {
        start: startDate,
        end: endDate,
        flag: 1,
        user_id: localStorage.getItem('userid'),
        username: localStorage.getItem('username'),

    };

    try {
        let resNumber = await callXMLHttpRequest(`${apiPort.apiHistoryBetOrder}`, dataQ, accessToken);
        if (resNumber.status === 'success') {
            let htm = '';
            console.log(resNumber.result)
            if (resNumber.result) {
                for (let i = 0; i < resNumber.result.length; i++) {
                    let data = resNumber.result[i];
                    let year = moment(data.lotto_date).format('YYYY');
                    let dateLotto = `${Number(year) + 543}${moment(data.lotto_date).format('-MM-DD')}`;
                    htm += `<div class="poy-list">
            <div class="poy-list-head">
                <small>โพยเลขที่</small>
                <span>#${data.order_num}</span>
                <div class="poy-status notyet">
                    รอออกผล </div>
            </div>
            <div class="poy-list-content">
                <div class="row">
                    <div class="col m-0 pl-2 pr-1 pb-1">
                        <div class="poy-type ">
                            <span>${data.lotto_name}</span><br>
                            <small>วันที่ : ${dateLotto}</small>
                        </div>
                    </div>
                    <div class="col m-0 pl-1 pr-3 pb-1 border-left">
                        <div class="d-flex justify-content-between">
                            <small>เงินเดิมพัน</small>
                            <span class="thb text-dark">฿ ${data.sum}</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small>ถูกรางวัล</small>
                            <span class="thb">฿ 0</span>
                        </div>
                    </div>
                    <div class="col-12 border-top m-0 pt-1">
                        <span class="badge" style="color:#000">
                            <i class="far fa-calendar-alt"></i> ${formatDateTH(data.datetime_created)} </span>
                        <span class="badge" style="color:#000">
                            <i class="far fa-clock"></i> ${formatTime(data.datetime_created)} </span>
                        <a href="#"
                            class="btn btn-secondary btn-sm py-0 px-1 float-right" onclick="showDetail('${data.order_id}')">
                            รายละเอียด <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>`;
                }
            } else {
                htm = `<div class="text-center">
            <span class="text-danger">ไม่มีรายการ</span>
            </div>`;
            }
            el('poy-today').innerHTML = htm;
        }

    } catch (error) {
        console.log(error)
    }
}
// รายงานการแทง ประกาศผลแล้ว
async function getDataReportBetchecked() {
    const accessToken = localStorage.getItem('accessToken');
    const startDate = $('#startDate').val();
    const endDate = $('#endDate').val();
    let dataQ = {
        start: startDate,
        end: endDate,
        flag: 2,
        user_id: localStorage.getItem('userid'),
        username: localStorage.getItem('username'),
    };

    try {
        let resNumber = await callXMLHttpRequest(`${apiPort.apiHistoryBetOrder}`, dataQ, accessToken);
        if (resNumber.status === 'success') {
            let htm = '';
            if (resNumber.result) {
                console.log(resNumber.result);
                for (let i = 0; i < resNumber.result.length; i++) {
                    let data = resNumber.result[i];
                    let year = moment(data.lotto_date).format('YYYY');
                    let dateLotto = `${Number(year) + 543}${moment(data.lotto_date).format('-MM-DD')}`;
                    htm += `<div class="poy-list">
            <div class="poy-list-head">
                <small>โพยเลขที่</small>
                <span>#${data.order_num}</span>
                <div class="poy-status notyet" style="background-color:green;color:#fff">
                    ออกผลแล้ว </div>
            </div>
            <div class="poy-list-content">
                <div class="row">
                    <div class="col m-0 pl-2 pr-1 pb-1">
                        <div class="poy-type ">
                            <span>${data.lotto_name}</span><br>
                            <small>วันที่ :  ${dateLotto}</small>
                        </div>
                    </div>
                    <div class="col m-0 pl-1 pr-3 pb-1 border-left">
                        <div class="d-flex justify-content-between">
                            <small>เงินเดิมพัน</small>
                            <span class="thb text-dark">฿ ${data.sum}</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small>ถูกรางวัล</small>`;
                    if (data.winner > 0) {
                        htm += `<span class="thb" style="color:green">฿ ${data.winner}</span>`;
                    } else {
                        htm += `<span class="thb">฿  ${data.winner}</span>`;
                    }

                    htm += `</div>
                    </div>
                    <div class="col-12 border-top m-0 pt-1">
                        <span class="badge" style="color:#000">
                            <i class="far fa-calendar-alt"></i> ${formatDateTH(data.datetime_created)} </span>
                        <span class="badge" style="color:#000">
                            <i class="far fa-clock"></i> ${formatTime(data.datetime_created)} </span>
                        <a href="#"
                            class="btn btn-secondary btn-sm py-0 px-1 float-right" onclick="showDetailWinner('${data.order_id}')">
                            รายละเอียด <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>`;
                }
            } else {
                htm = `<div class="text-center">
            <span class="text-danger">ไม่มีรายการ</span>
            </div>`;
            }
            el('poy-today').innerHTML = htm;
        }
    } catch (error) {
        console.log(error)
    }
}

// ยกเลิกโพย
$('#btn_betcancel').click(async function() {
    Swal.fire({
        title: 'ยกเลิกโพยนี้?',
        showDenyButton: true,
        showCancelButton: true,
        showConfirmButton: false,
        denyButtonText: 'ยกเลิกโพย',
        cancelButtonText: 'ไม่ยกเลิก'
    }).then((result) => {
        if (result.isDenied) getBetcancel()
    })
})

// ยกเลิกโพย
async function getBetcancel() {
    const accessToken = localStorage.getItem('accessToken');
    const order_id = $('#slt_option').val()
    if (!order_id && order_id === '') return

    try {
        var config = {
            method: 'get',
            url: `/Api/history/betcancel/${order_id}`,
            headers: {
                'Authorization': `Bearer ${accessToken}`,
                'Content-Type': 'application/json',
            }
        };

        const { data } = await axios(config)

        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: data.result
            })
            $('#slt_option').val('')
            getDataReportBetted()
            setTimeout(() => {
                getCredit()
            }, 500);

        } else {
            Swal.fire({
                icon: 'warning',
                title: ' ',
                text: data.result
            })
        }

    } catch (error) {
        console.log(error)
    }
}

async function showDetail(order) {
    const accessToken = localStorage.getItem('accessToken');
    const startDate = $('#startDate').val();
    const endDate = $('#endDate').val();
    let dataQ = {
        start: startDate,
        end: endDate,
        flag: 1,
        user_id: localStorage.getItem('userid'),
        username: localStorage.getItem('username'),
        order_id: order
    };
    let resNumber = await callXMLHttpRequest(`${apiPort.apiHistoryBetOrderDetail}`, dataQ, accessToken);
    let list = '';
    if (resNumber.status === 'success') {
        el('order_head').innerHTML = resNumber.order[0].order_num;
        el('order_date').innerHTML = formatDateTH(resNumber.order[0].datetime_created);
        el('order_time').innerHTML = formatTime(resNumber.order[0].datetime_created);
        el('order_sum').innerHTML = resNumber.order[0].sum;
        el('order_name').innerHTML = resNumber.order[0].lotto_name;

        for (let i = 0; i < resNumber.detail.length; i++) {
            let item = resNumber.detail[i];
            list += ` <div class="poy-list" style="width:100% !important">
            <div class="poy-list-head">
                <small>ลำดับ</small>
                <span>${(i + 1)}</span>
                <div class="poy-status notyet">รอออกผล</div>
            </div>
            <div class="poy-list-content pb-0">
                <div class="row">
                    <div class="col m-0 pl-2 pr-1 pb-1">
                        <div class="poy-type text-center">
                            <h3 class="text-primary">${item.numbers}</h3>
                            <small>${item.description}</small>
                        </div>
                    </div>
                    <div class="col m-0 pl-1 pr-3 pb-1 border-left">
                        <div class="d-flex justify-content2-between border-bottom">
                            <font color="#000000"> <small>เลขที่ออก</small>
                                <span>
                                    - </span>
                            </font>
                        </div>
                        <font color="#000000">
                            <div class="d-flex justify-content-between">
                                <small>ราคาจ่าย</small>
                                <span class="thb">฿ ${item.reward}</span>
                            </div>
                        </font>
                    </div>
                    <div class="col-12 bg-white border-top m-0 pt-1 d-flex justify-content-between">
                        <div class="d-flex">
                            <small class="mr-2">ราคาแทง:</small>
                            <span class="thb">฿ ${item.amount}</span>
                        </div>
                        <div class="d-flex">
                            <small class="mr-2">ผลถูกรางวัล:</small>
                            <h5 class="thb ">฿ 0</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>`
        }
        $('#poy-list-modal').html(list)
    }
    $('#lottoNumberModal').modal('show');
}

async function showDetailWinner(order) {
    const accessToken = localStorage.getItem('accessToken');
    const startDate = $('#startDate').val();
    const endDate = $('#endDate').val();
    let dataQ = {
        start: startDate,
        end: endDate,
        flag: 1,
        user_id: localStorage.getItem('userid'),
        username: localStorage.getItem('username'),
        order_id: order
    };
    let resNumber = await callXMLHttpRequest(`${apiPort.apiHistoryBetOrderDetail}`, dataQ, accessToken);
    let list = '';
    if (resNumber.status === 'success') {
        el('order_head1').innerHTML = resNumber.order[0].order_num;
        el('order_date1').innerHTML = formatDateTH(resNumber.order[0].datetime_created);
        el('order_time1').innerHTML = formatTime(resNumber.order[0].datetime_created);
        el('order_sum1').innerHTML = resNumber.order[0].sum;
        el('order_name1').innerHTML = resNumber.order[0].lotto_name;
        el('order_name1').innerHTML = resNumber.order[0].lotto_name;
        if (resNumber.winner > 0) {
            el('winner_result').innerHTML = resNumber.winner
            el('winner_result').style = 'color:green';
        } else {
            el('winner_result').innerHTML = resNumber.winner
            el('winner_result').style = 'color:red';
        }


        for (let i = 0; i < resNumber.detail.length; i++) {
            let item = resNumber.detail[i];
            let result = '';
            if (item.reward_name == "3tong") {
                result = resNumber.result.three_up;
            } else if (item.reward_name == "3tod") {
                result = resNumber.result.three_tod;
            } else if (item.reward_name == "3down") {
                result = resNumber.result.three_tong;
            } else if (item.reward_name == "2up") {
                result = resNumber.result.two_up;
            } else if (item.reward_name == "2down") {
                result = resNumber.result.two_down;
            } else if (item.reward_name == "runup") {
                result = resNumber.result.run_up;
            } else if (item.reward_name == "rundown") {
                result = resNumber.result.run_down;
            }
            list += ` <div class="poy-list" style="width:100% !important">
            <div class="poy-list-head">
                <small>ลำดับ</small>
                <span>${(i + 1)}</span>
                <div class="poy-status notyet" style="background-color:green;color:#fff">ออกผลแล้ว</div>
            </div>
            <div class="poy-list-content pb-0">
                <div class="row">
                    <div class="col m-0 pl-2 pr-1 pb-1">
                        <div class="poy-type text-center">
                            <h3 class="text-primary">${item.numbers}</h3>
                            <small>${item.description}</small>
                        </div>
                    </div>
                    <div class="col m-0 pl-1 pr-3 pb-1 border-left">
                        <div class="d-flex justify-content2-between border-bottom">
                            <font color="#000000"> <small>เลขที่ออก</small>
                                <span>
                                    ${result} </span>
                            </font>
                        </div>
                        <font color="#000000">
                            <div class="d-flex justify-content-between">
                                <small>ราคาจ่าย</small>
                                <span class="thb">฿ ${item.reward}</span>
                            </div>
                        </font>
                    </div>
                    <div class="col-12 bg-white border-top m-0 pt-1 d-flex justify-content-between">
                        <div class="d-flex">
                            <small class="mr-2">ราคาแทง:</small>
                            <span class="thb">฿ ${item.amount}</span>
                        </div>
                        <div class="d-flex">
                            <small class="mr-2">ผลถูกรางวัล:</small>`;
            if (item.winner_flg == 1) {
                list += `<h5 class="thb " style="color:green">฿ ${item.winner_amount}</h5>`
            } else {
                list += `<h5 class="thb " style="color:red">฿ 0 </h5>`
            }
            list += `</div>
                    </div>
                </div>
            </div>
        </div>`
        }
        $('#poy-list-modal1').html(list)
    }
    $('#lottoNumberModalWinner').modal('show');
}