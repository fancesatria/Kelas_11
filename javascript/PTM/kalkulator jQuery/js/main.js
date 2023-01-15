//function utk memanggil bilangan waktu bilangan itu di klik
function insert(num) {
    $('.kalku-display').val($('.kalku-display').val() + num);
}

//perhitungan matematika
function eql() {
    $('.kalku-display').val(eval($('.kalku-display').val()));
}

//function clear/hapus
function c() {
    $('.kalku-display').val('');
}

//hapus satu persatu 
function del() {
    value = $('.kalku-display').val();
    $('.kalku-display').val(value.substring(0, value.length - 1));
}