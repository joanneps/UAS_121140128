const form = document.getElementById('form');

const nama_barang = document.getElementById('nama_barang');
const stok = document.getElementById('stok');
const harga_satuan = document.getElementById('harga_satuan');
const lokasi = document.getElementById('lokasi');
const tanggal_masuk = document.getElementById('tanggal_masuk');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  
  if (checkInputs()) {
    form.submit();
}
});

const checkInputs = () => {
  let isValid = true;
  const nama_barangValue = nama_barang.value.trim();
  const stokValue = stok.value.trim();
  const harga_satuanValue = harga_satuan.value.trim();
  const lokasiValue = lokasi.value.trim();
  const tanggal_masukValue = tanggal_masuk.value.trim();
  
  if(nama_barangValue === '') {
    setErrorFor(nama_barang, 'Nama Barang cannot be blank');
    isValid = false;
  } else {
    setSuccessFor(nama_barang);
  }
  
  if(stokValue === '') {
    setErrorFor(stok, 'Stok cannot be blank');
    isValid = false;
  } else {
    setSuccessFor(stok);
  }
  
  if(harga_satuanValue === '') {
    setErrorFor(harga_satuan, 'Harga Satuan cannot be blank');
    isValid = false;
  } else {
    setSuccessFor(harga_satuan);
  }

  if(lokasiValue === '') {
    setErrorFor(lokasi, 'Lokasi cannot be blank');
    isValid = false;
  } else {
    setSuccessFor(lokasi);
  }

  if(tanggal_masukValue === '') {
    setErrorFor(tanggal_masuk, 'Tanggal Masuk cannot be blank');
    isValid = false;
  } else {
    setSuccessFor(tanggal_masuk);
  }
  return isValid;

}

const setErrorFor = (input, message) => {
  const formControl = input.parentElement; 

  formControl.classList.add('error');
  formControl.classList.remove('success');
} 

const setSuccessFor = (input) => {
  const formControl = input.parentElement; 
  
  formControl.classList.add('success');
  formControl.classList.remove('error');
}
