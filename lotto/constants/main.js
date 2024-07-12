async function setData() {
    let accessToken = localStorage.getItem('accessToken');
    let username = localStorage.getItem('username');
    let param = await getParamInGetUrl();
    if (!param.token) {
        if (!username) {
            if (!accessToken) {
                Swal.fire({
                    icon: 'error',
                    title: 'กรุณาล็อกอินก่อน',
                    allowOutsideClick: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        // window.location.replace('/index')
                    }
                })
            }
        }
    } else {
        localStorage.removeItem('accessToken');
        localStorage.removeItem('username');
        localStorage.removeItem('balance');
        localStorage.removeItem('userid');
        console.log(parseJwt(param.token))
        localStorage.setItem('userid', parseJwt(param.token).id);
        localStorage.setItem('accessToken', param.token);
        localStorage.setItem('username', parseJwt(param.token).name);
        window.location.href = 'index.html';
    }
}
var payrate = [];
$(document).ready(async function() {
    await setData();
    let txt_balance = document.getElementsByClassName('txt_balance');
    let balance_txt = setInterval(async function() {

        if (txt_balance[0].innerHTML == '-') {
            await getCredit();
        } else {
            clearInterval(balance_txt);
        }
        let username = localStorage.getItem('username');
        $('.txt_username').html(username.split("_")[1]);
    }, 100);
});
$(function() {
    $('[data-toggle="popover"]').popover()
})

async function getCredit() {
    var accessToken = localStorage.getItem('accessToken');
    try {
        // var accessToken = null;
        let data = await callXMLHttpRequest(`${apiPort.apiGetBalanceUser}`, {}, accessToken);
        if (!data.status == 'success') {
            Swal.fire({
                icon: 'error',
                title: data.description,
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    // window.location.replace('/index')
                }
            })
        } else {
            localStorage.setItem('balance', data.result)
            $('.txt_balance').html(Number(data.result).toLocaleString('en'))
        }
    } catch (error) {
        console.log(error);
        Swal.fire({
            icon: 'error',
            title: `session หมดอายุ หรือ มีการ login ซ้อน`,
            allowOutsideClick: false,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/login')
            }
        })
    }
}

$('#load-credit').click(async function(event) {
    event.preventDefault();
    $('#load-credit i').addClass('fa-spin')
    await getCredit()
    $('#load-credit i').removeClass('fa-spin')
})

// ออกจากระบบ
$('.btn-logout').click(async function() {
    var accessToken = localStorage.getItem('accessToken');
    try {
        var config = {
            method: 'get',
            url: '/api/v1/member/logoutgame',
            headers: {
                'Authorization': `Bearer ${accessToken}`,
                'Content-Type': 'application/json',
            },
        };
        localStorage.clear();
        window.location.replace('/login')

    } catch (error) {
        console.log(error)
        localStorage.clear();
        window.location.replace('/login')
    }
})