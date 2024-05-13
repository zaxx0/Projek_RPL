const jenis_makanan = document.getElementById('jenis_makanan');
const hargaMakanan = document.getElementById('hargaMakanan');

const jumlahMakanan = document.getElementById('jumlahMakanan');

//Harga Makanan :
const hargaMakananList = {
	'Ayam Bakar': 10000,
	'Orek Tempe': 5000,
	'Telur Balado': 8000,
	'Ayam Goreng': 10000,
	'Sate Ayam': 10000,
    'Sayur Lodeh': 5000,
	'Sayur Asam': 4000,
	'Gorengan': 2000,
	'Usus Goreng': 3000
};

jenis_makanan.addEventListener('change', function() {
	const harga = hargaMakananList[this.value];
	if (harga) {
		hargaMakanan.innerHTML = '<h5>Rp. ' + harga + '</h5>';
	}else{
		hargaMakanan.innerHTML = '<h5>Rp. </h5>';
	}
	
	//hitungTotalHarga();
});

function harga(){
	const hargaMakananValue = hargaMakanan.innerHTML.replace('Rp. ');
}

window.addEventListener('load', function() {
	hargaMakanan.innerHTML = '<h5>Rp. 0</h5>';
});