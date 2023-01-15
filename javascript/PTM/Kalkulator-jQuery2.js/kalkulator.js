kali.onclick = function () {
    let a = $('#bil1').val();
    let b = $('#bil2').val();
    let c = a * b;

    $('#hasil').html(c);
}

bagi.onclick = function () {
    let a = $('#bil1').val();
    let b = $('#bil2').val();
    let c = a / b;

    $('#hasil').html(c);
}

tambah.onclick = function () {
    let a = eval($('#bil1').val());
    let b = eval($('#bil2').val());
    let c = a + b;

    $('#hasil').html(c);
}

kurang.onclick = function () {
    let a = $('#bil1').val();
    let b = $('#bil2').val();
    let c = a - b;

    $('#hasil').html(c);
}