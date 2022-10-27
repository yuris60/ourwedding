const flashData = $('.flash-data').data('flashdata');
if (flashData) {
  Swal.fire({
    title: 'Selamat',
    text: 'Komentar anda berhasil ' + flashData,
    icon: 'success',
    timer: 2000,
    showConfirmButton: false
  });
}

//belum tersedia
$('.belum-tersedia').on('click', function (e) {
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Maaf saat ini konten belum tersedia',
    timer: 1000,
    showConfirmButton: false
  });
});