const dateNow = moment().format('YYYY-MM-DD');

$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    format: 'yyyy-mm-dd', // date 2021-12-23
    value: dateNow,
});

$('#btn_search').click(function() {
    getDataReportResult()
    let txt_date = $('#datepicker').val()
});

getDataReportResult()
let logo = 'th'

async function getDataReportResult() {
    const date = $('#datepicker').val()
    const accessToken = localStorage.getItem('accessToken');
    try {
        let data = await callXMLHttpRequest(`${apiPort.apiHistoryAward}`, { date: date }, accessToken);
        if (data.status === 'success') {

            const lottoGroup = data.result.group
            const lottoGovt = data.result.govt
            const lottoStocks = data.result.stocks

            $('#awards_list').html('')
            lottoGroup.forEach((item, index) => {
                if (item.group_name !== 'หวยรัฐบาล') {
                    var result = lottoStocks.filter(el => el.lotto_group_id === item.lotto_group_id)
                    if (result.length > 0) {
                        $('#awards_list').append(`
                            <h6 class="m-0">${item.group_name} <span class="badge badge-secondary">${date}</span></h6>
                            <div class="container p-2">
                                <div class="row" id="list_stock_${item.lotto_group_id}"></div>
                            </div>
                        `)
                    } else {
                        $('#awards_list').append(`
                            <h6 class="m-0">${item.group_name}</h6>
                            <div class="container p-2">
                                <div class="row" id="list_stock_${item.lotto_group_id}">
                                    <div class="col-12">
                                        <div class="alert alert-warning text-center" role="alert">
                                            ไม่พบข้อมูล
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
                    }
                }
            });

            let list = ''
            lottoGovt.forEach((item, index) => {
                list = list + ` <tr>
                                    <td> <span class="badge badge-secondary">${item.date}</span></td>
                                    <td>${item.up3 !== '</t' ? item.up3 : ''}</td>
                                    <td>${item.up2 !== '</' ? item.up2 : ''}</td>
                                    <td>${item.down2 !== '</' ? item.down2 : ''}</td>
                                    <td>${item.down3 !== '</td>' ? item.down3 : ''}</td>
                                </tr>`
            });
            $('#tb_result_govt').html(list)

            list = ''
            for (let i = 0; i < lottoStocks.length; i++) {
                const item = lottoStocks[i]
                list = ` <div class="col-6 col-sm-4 mb-2 p-1">
                                    <div class="card border-dark text-center">
                                        <div class="card-header text-danger p-2">
                                            <span class="flag-icon flag-icon-${item.logo}"></span>${item.name}</div>
                                        <div class="card-body p-0">
                                            <div class="d-flex flex-row">
                                                <div class="card text-center w-50 border-card-right m-0">
                                                    <div class="card-header sub-card-header bg-transparent p-1">
                                                        3ตัวบน<br>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <p class="card-text">${parseInt(item.up3) ? item.up3 : '-'}</p>
                                                    </div>
                                                </div>
                                                <div class="card text-center w-50 border-card-right m-0">
                                                    <div class="card-header sub-card-header bg-transparent p-1">
                                                        2ตัวล่าง<br>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <p class="card-text">${parseInt(item.down2) ? item.down2 : '-'}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                $(`#list_stock_${item.lotto_group_id}`).append(list)
            }

        } else {
            alert(data.description)
        }

    } catch (error) {
        console.log(error)
    }
}