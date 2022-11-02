var nama = prompt("Harap masukkan Nama Anda");
console.log(nama);
document.write(nama);

var header2 = document.getElementsByTagName('h2');
header2[1].style.backgroundColor = 'lime';

var footerLogo = document.getElementsByClassName('footer-logo');
footerLogo[1].style.backgroundColor = 'maroon'

var welcome = document.getElementById('welcome');
var tekan = document.getElementById('tekan');
tekan.addEventListener("click", function logoWarna(){
    welcome.style.backgroundColor = 'skyblue';
});