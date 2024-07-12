const Loader = Swal.mixin({
    title: ' ',
    text: 'กำลังโหลด...',
    showConfirmButton: false,
    allowOutsideClick: false,
    didOpen: () => { Swal.showLoading() }
})

// Loader.fire()

// setTimeout(() => {
//     Loader.close()
// }, 5000);