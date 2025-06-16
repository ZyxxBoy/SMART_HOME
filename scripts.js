// URL API yang akan diambil datanya
const apiUrl = 'api/read.php';

// Fungsi untuk mengambil dan memperbarui data
async function fetchData() {
  try {
    const response = await fetch(apiUrl);
    const data = await response.json();
    updateData(data);
  } catch (error) {
    console.error('Error fetching data:', error);
    showError();
  }
}

// Memperbarui elemen HTML dengan data yang diterima
function updateData(data) {
  document.getElementById('data-id').textContent = data.id;
  document.getElementById('data-nilai-sensor').textContent = data.nilai_sensor;

  const statusLampu = data.status_lampu === "1" ? "Hidup" : "Mati";
  const lampuClass = data.status_lampu === "1" ? 'bg-success' : 'bg-danger';

  document.getElementById('data-status-lampu').textContent = statusLampu;
  updateLampuCard(lampuClass);

  document.getElementById('data-waktu').textContent = data.waktu;
}

// Memperbarui kelas latar belakang untuk status lampu
function updateLampuCard(lampuClass) {
  const lampuCard = document.getElementById('lampu-card');
  lampuCard.classList.remove('bg-success', 'bg-danger');
  lampuCard.classList.add(lampuClass);
}

// Menampilkan pesan error jika data gagal diambil
function showError() {
  document.getElementById('data-id').textContent = 'Error';
  document.getElementById('data-nilai-sensor').textContent = 'Error';
  document.getElementById('data-status-lampu').textContent = 'Error';
  document.getElementById('data-waktu').textContent = 'Error';
}

// Memanggil fetchData setiap 5 detik untuk mendapatkan data terbaru
setInterval(fetchData, 5000);

// Memanggil fetchData saat pertama kali halaman dimuat
fetchData();
