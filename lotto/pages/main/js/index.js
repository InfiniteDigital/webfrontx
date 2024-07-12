const accessToken = localStorage.getItem('accessToken');
if (accessToken) {
    getListgame();
}
let logo = 'th'

const dateNow = new Date().toLocaleDateString('th-TH', {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
});

$('.txt_date').html(dateNow)

async function getListgame() {
    // Loader.fire()

    try {
        let data = await callXMLHttpRequest(`${apiPort.apiGetStockListLotto}`, {}, accessToken);
        // console.log(data)
        if (data.status === 'success') {
            let list = ''
            let list_game = []

            const lottoList = data.result.lottoList

            const lottoGroup = data.result.lottoGroup
            lottoGroup.forEach((item, index) => {

                const result = lottoList.filter(el => el.type === item.group_name);
                if (result.length > 0) {
                    $('#list_games').append(
                        `<h5 style="color:#000">${item.group_name} <span class="badge badge-dark txt_date"></span></h5>
                        <div class="row" id="list_${item.lotto_group_id}">
                        </div>
                        <br />
                        <br /> `
                    )
                } else {
                    $('#list_games').append(
                        `<h5>${item.group_name} <span class="badge badge-dark txt_date"></span></h5>
                        <div class="row" id="list_${item.lotto_group_id}">
                            <div class="col-12">
                                <div class="alert alert-danger text-center" role="alert">
                                    ** ตลาดปิด **
                                </div>
                            </div>
                        </div>
                        <br />
                        <br /> `
                    )
                }
            });
            lottoList.forEach((item, i) => {
                        let statusTime = ''
                        let status = ''
                        let color = ''
                        let icon = ''
                        logoName(item.type, item.name)

                        if (item.status === 'ยังไม่มีงวดถัดไป') {
                            statusTime = 'ปิดรับแล้ว'
                            status = 'ยังไม่มีงวดถัดไป'
                            color = '#6D757D'
                            icon = '<i class="fas fa-times-circle" style="margin-top: 2px;"></i>'

                        } else {
                            if (item.id == 46) {
                                let day = moment(item.date).day();
                                let arr = [1, 3, 5]
                                if (arr.includes(day)) {
                                    if (item.status === 'เปิดอีก') {
                                        statusTime = 'เปิดเวลา ' + item.open
                                        status = 'เปิดอีก'
                                        color = '#18A2B8'
                                        icon = '<i class="fas fa-stopwatch text-info" style="margin-top: 2px;"></i>'
                                    } else {
                                        statusTime = 'ปิดเวลา ' + item.close
                                        status = 'ปิดอีก'
                                        color = '#28A745'
                                        icon = '<i class="fas fa-clock text-success" style="margin-top: 2px;"></i>'
                                    }
                                } else {
                                    statusTime = 'ปิดรับแล้ว'
                                    status = 'ยังไม่มีงวดถัดไป'
                                    color = '#6D757D'
                                    icon = '<i class="fas fa-times-circle" style="margin-top: 2px;"></i>'
                                }
                            } else if (item.group_id == 4) {
                                let day = moment(item.date).day();
                                let arr = (item.id != 42) ? [1, 2, 3, 4, 5] : [2, 3, 4, 5, 6];
                                if (arr.includes(day)) {
                                    if (item.status === 'เปิดอีก') {
                                        statusTime = 'เปิดเวลา ' + item.open
                                        status = 'เปิดอีก'
                                        color = '#18A2B8'
                                        icon = '<i class="fas fa-stopwatch text-info" style="margin-top: 2px;"></i>'
                                    } else {
                                        statusTime = 'ปิดเวลา ' + item.close
                                        status = 'ปิดอีก'
                                        color = '#28A745'
                                        icon = '<i class="fas fa-clock text-success" style="margin-top: 2px;"></i>'
                                    }
                                } else {
                                    statusTime = 'ปิดรับแล้ว'
                                    status = 'ยังไม่มีงวดถัดไป'
                                    color = '#6D757D'
                                    icon = '<i class="fas fa-times-circle" style="margin-top: 2px;"></i>'
                                }
                            } else {
                                if (item.status === 'เปิดอีก') {
                                    statusTime = 'เปิดเวลา ' + item.open
                                    status = 'เปิดอีก'
                                    color = '#18A2B8'
                                    icon = '<i class="fas fa-stopwatch text-info" style="margin-top: 2px;"></i>'
                                } else {
                                    statusTime = 'ปิดเวลา ' + item.close
                                    status = 'ปิดอีก'
                                    color = '#28A745'
                                    icon = '<i class="fas fa-clock text-success" style="margin-top: 2px;"></i>'
                                }
                            }

                        }

                        list = list + ` <div class="col-6 col-sm-3 m-0 p-2">
                                    ${status === 'ปิดอีก' ? `<a href="../bet/index.html?id=${item.id}" class="text-decoration-none text-dark">` : ''}
                                        <div class="card border-secondary">
                                            <div class="card-header text-right p-2" style="background-color: ${color};">
                                                <h6 class="text-light m-0 p-0"><span class="flag-icon flag-icon-${item.logo}"></span>${item.name}</h6>
                                                <span class="badge badge-dark">${statusTime}</span>
                                            </div>
                                            <div class="card-body p-2 d-flex justify-content-between">                           
                                                ${icon}
                                                <div class="text-right">
                                                    <p class="card-text" style="font-size: 12px;">${status} <span id="txt_timer_${i}"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    ${status === 'ปิดอีก' ? '</a>' : ''}
                                </div>`;

                if (item.status !== 'ยังไม่มีงวดถัดไป') {
                    if (item.status.includes('เปิดอีก')) {
                        // const today = new Date().toLocaleDateString('en-US');
                        // const tomorrow = new Date();
                        // tomorrow.setDate(tomorrow.getDate() + 1)

                        // ระบบมันบัคบ่อย ต้องเช็ควันเวลาก่อนว่าสอดคล้องกับความเป็นจริงมั้ย 
                        // if(item.open === '00:30:00' && item.date === today) {    
                        //     countDown(tomorrow.toLocaleDateString('en-US'), item.open, i)
                        // } else 
                        countDown(item.date, item.open, i)

                    } else {
						if(item.id == 46){
							let day = moment(item.date).day();
							let arr = [1, 3, 5]
							if(arr.includes(day)){
								countDown(item.date, item.close, i)
							}
						}else if(item.group_id == 4){
							let day = moment(item.date).day();
							let arr = (item.id != 42) ? [1, 2, 3, 4, 5] : [2, 3, 4, 5, 6];
							if(arr.includes(day)){
								countDown(item.date, item.close, i)
							}
						}else{
							countDown(item.date, item.close, i)
						}
                        
                        list_game.push({ id: item.id, name: item.name, date: item.date, open: item.open, close: item.close, type: i === 0 ? 'govt' : 'stocks' })
                    }
                }

                $(`#list_${item.group_id}`).append(list)
                list = ''
            })
            // for (let i = 0; i < lottoList.length; i++) {
            //     const item = lottoList[i]
            //     let statusTime = ''
            //     let status = ''
            //     let color = ''
            //     let icon = ''
            //     logoName(item.type, item.name)

            //     if (item.status === 'ยังไม่มีงวดถัดไป') {
            //         statusTime = 'ปิดรับแล้ว'
            //         status = 'ยังไม่มีงวดถัดไป'
            //         color = '#6D757D'
            //         icon = '<i class="fas fa-times-circle" style="margin-top: 2px;"></i>'

            //     } else {
            //         if (item.id == 46) {
            //             let day = moment(item.date).day();
            //             let arr = [1, 3, 5]
            //             if (arr.includes(day)) {
            //                 if (item.status === 'เปิดอีก') {
            //                     statusTime = 'เปิดเวลา ' + item.open
            //                     status = 'เปิดอีก'
            //                     color = '#18A2B8'
            //                     icon = '<i class="fas fa-stopwatch text-info" style="margin-top: 2px;"></i>'
            //                 } else {
            //                     statusTime = 'ปิดเวลา ' + item.close
            //                     status = 'ปิดอีก'
            //                     color = '#28A745'
            //                     icon = '<i class="fas fa-clock text-success" style="margin-top: 2px;"></i>'
            //                 }
            //             } else {
            //                 statusTime = 'ปิดรับแล้ว'
            //                 status = 'ยังไม่มีงวดถัดไป'
            //                 color = '#6D757D'
            //                 icon = '<i class="fas fa-times-circle" style="margin-top: 2px;"></i>'
            //             }
            //         } else if (item.group_id == 4) {
            //             let day = moment(item.date).day();
            //             let arr = (item.id != 42) ? [1, 2, 3, 4, 5] : [2, 3, 4, 5, 6];
            //             if (arr.includes(day)) {
            //                 if (item.status === 'เปิดอีก') {
            //                     statusTime = 'เปิดเวลา ' + item.open
            //                     status = 'เปิดอีก'
            //                     color = '#18A2B8'
            //                     icon = '<i class="fas fa-stopwatch text-info" style="margin-top: 2px;"></i>'
            //                 } else {
            //                     statusTime = 'ปิดเวลา ' + item.close
            //                     status = 'ปิดอีก'
            //                     color = '#28A745'
            //                     icon = '<i class="fas fa-clock text-success" style="margin-top: 2px;"></i>'
            //                 }
            //             } else {
            //                 statusTime = 'ปิดรับแล้ว'
            //                 status = 'ยังไม่มีงวดถัดไป'
            //                 color = '#6D757D'
            //                 icon = '<i class="fas fa-times-circle" style="margin-top: 2px;"></i>'
            //             }
            //         } else {
            //             if (item.status === 'เปิดอีก') {
            //                 statusTime = 'เปิดเวลา ' + item.open
            //                 status = 'เปิดอีก'
            //                 color = '#18A2B8'
            //                 icon = '<i class="fas fa-stopwatch text-info" style="margin-top: 2px;"></i>'
            //             } else {
            //                 statusTime = 'ปิดเวลา ' + item.close
            //                 status = 'ปิดอีก'
            //                 color = '#28A745'
            //                 icon = '<i class="fas fa-clock text-success" style="margin-top: 2px;"></i>'
            //             }
            //         }

            //     }

            //     list = list + ` <div class="col-6 col-sm-3 m-0 p-2">
            //                         ${status === 'ปิดอีก' ? `<a href="../bet/index.html?id=${item.id}" class="text-decoration-none text-dark">` : ''}
            //                             <div class="card border-secondary">
            //                                 <div class="card-header text-right p-2" style="background-color: ${color};">
            //                                     <h6 class="text-light m-0 p-0"><span class="flag-icon flag-icon-${item.logo}"></span>${item.name}</h6>
            //                                     <span class="badge badge-dark">${statusTime}</span>
            //                                 </div>
            //                                 <div class="card-body p-2 d-flex justify-content-between">                           
            //                                     ${icon}
            //                                     <div class="text-right">
            //                                         <p class="card-text" style="font-size: 12px;">${status} <span id="txt_timer_${i}"></span></p>
            //                                     </div>
            //                                 </div>
            //                             </div>
            //                         ${status === 'ปิดอีก' ? '</a>' : ''}
            //                     </div>`;

            //     if (item.status !== 'ยังไม่มีงวดถัดไป') {
            //         if (item.status.includes('เปิดอีก')) {
            //             // const today = new Date().toLocaleDateString('en-US');
            //             // const tomorrow = new Date();
            //             // tomorrow.setDate(tomorrow.getDate() + 1)

            //             // ระบบมันบัคบ่อย ต้องเช็ควันเวลาก่อนว่าสอดคล้องกับความเป็นจริงมั้ย 
            //             // if(item.open === '00:30:00' && item.date === today) {    
            //             //     countDown(tomorrow.toLocaleDateString('en-US'), item.open, i)
            //             // } else 
            //             countDown(item.date, item.open, i)

            //         } else {
			// 			if(item.id == 46){
			// 				let day = moment(item.date).day();
			// 				let arr = [1, 3, 5]
			// 				if(arr.includes(day)){
			// 					countDown(item.date, item.close, i)
			// 				}
			// 			}else if(item.group_id == 4){
			// 				let day = moment(item.date).day();
			// 				let arr = (item.id != 42) ? [1, 2, 3, 4, 5] : [2, 3, 4, 5, 6];
			// 				if(arr.includes(day)){
			// 					countDown(item.date, item.close, i)
			// 				}
			// 			}else{
			// 				countDown(item.date, item.close, i)
			// 			}
                        
            //             list_game.push({ id: item.id, name: item.name, date: item.date, open: item.open, close: item.close, type: i === 0 ? 'govt' : 'stocks' })
            //         }
            //     }

            //     $(`#list_${item.group_id}`).append(list)
            //     list = ''
            // }

            $('#loading').hide()
            $('#list_games').show()
            localStorage.setItem('list_game', JSON.stringify(list_game));
        } else {
            Swal.fire({
                icon: 'error',
                title: data.description,
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    // window.location.replace('/index')
                }
            })
        }
        // Loader.close()

    } catch (error) {
        console.log(error)
    }
}

function logoName(type, name) {
    if (type === 'หวยรัฐบาล' || type === 'หุ้นไทย' || type === 'หวยไทย (ออนไลน์)') {
        logo = 'th'
    } else if (type === 'หวยลาว') {
        logo = 'la'
    } else if (type === 'หวยมาเลย์') {
        logo = 'my'
    } else if (type === 'หุ้นต่างประเทศ') {
        if (name.includes('นิเคอิ')) {
            logo = 'jp'
        } else if (name.includes('จีน')) {
            logo = 'cn'
        } else if (name.includes('ฮั่งเส็ง')) {
            logo = 'hk'
        } else if (name.includes('ไต้หวัน')) {
            logo = 'tw'
        } else if (name.includes('เกาหลี')) {
            logo = 'kr'
        } else if (name.includes('สิงค์โปร')) {
            logo = 'sg'
        } else if (name.includes('อินเดีย')) {
            logo = 'in'
        } else if (name.includes('อียิปต์')) {
            logo = 'eg'
        } else if (name.includes('รัสเซีย')) {
            logo = 'ru'
        } else if (name.includes('เยอรมัน')) {
            logo = 'de'
        } else if (name.includes('อังกฤษ')) {
            logo = 'gb'
        } else if (name.includes('ดาวโจนส์')) {
            logo = 'us'
        }
    } else if (type === 'หวยเวียดนาม' || type === 'หวยเวียดนาม (ออนไลน์)') {
        logo = 'vn'
    }
}

// นับเวลาถอยหลัง
async function countDown(date, time, id) {
    const dateClose = moment(`${date} ${time}`);
    var countdown = setInterval(async function () {
        const dateNow = moment();
        let timeOut = dateClose.diff(dateNow,'seconds')
        const timeCountdown = await timeDifference(dateClose, dateNow)

// console.log(timeCountdown);//Test Safari
        $(`#txt_timer_${id}`).html(timeCountdown)
        if (timeOut <= 0) {
            clearInterval(countdown)
            // getListgame()
        }
    }, 1000);
}

// ช่วงต่างของเวลา
async function timeDifference(laterdate, earlierdate) {
    // คำนวณความแตกต่างของวันที่
	var st = moment(laterdate)
	var en = moment(earlierdate)

	var dayDifference = st.diff(en,'days');
	var hoursDifference = st.subtract(dayDifference,'days').diff(en,'hours');
	var minutesDifference = st.subtract(hoursDifference,'hours').diff(en,'minutes');
	var secondsDifference = st.subtract(minutesDifference,'minutes').diff(en,'seconds');

    var time = `${dayDifference}วัน ${hoursDifference}ชม. ${minutesDifference}น. ${secondsDifference}วิ.`
    if (dayDifference === 0) {
        time = `${hoursDifference}ชม. ${minutesDifference}น. ${secondsDifference}วิ.`
    }
    return time
}