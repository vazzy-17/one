<style>
/* Mengatur body agar memiliki tinggi penuh */
body {
    height: 100vh; /* Mengatur tinggi body menjadi 100% dari viewport */
    display: flex; /* Menggunakan flexbox untuk memusatkan konten */
    align-items: center; /* Memusatkan konten secara vertikal */
    justify-content: center; /* Memusatkan konten secara horizontal */
    background-color: #f0f0f0; /* Warna latar belakang untuk kontras */
    margin: 0; /* Menghapus margin default */
}

/* Gaya untuk div tengah */
.tengah {
    background-color: white; /* Warna latar belakang putih untuk div */
    padding: 20px; /* Memberikan padding di dalam div */
    border-radius: 8px; /* Membuat sudut div menjadi bulat */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan pada div */
}

/* Gaya untuk label */
.label1 {
    font-weight: bold; /* Mengatur label menjadi tebal */
    /* display: inline-block;
            width: 100px;
            /* Tentukan lebar untuk memastikan semuanya sejajar */
            /* font-weight: bold; */
}

/* Gaya untuk input dan tombol */
input {
    width: 100%; /* Mengatur lebar input menjadi 100% dari div */
    margin-left: 10px; /* Memberikan jarak antara label dan input */
    margin-bottom: 10px; /* Memberikan jarak di bawah input */
    padding: 10px; /* Memberikan padding di dalam input */
    border: 1px solid #ccc; /* Menambahkan border pada input */
    border-radius: 4px; /* Membuat sudut input menjadi bulat */
}

button {
    margin-top: 10px; /* Memberikan jarak di atas tombol */
    padding: 10px 15px; /* Memberikan padding di dalam tombol */
    background-color: #007bff; /* Warna latar belakang tombol */
    color: white; /* Warna teks tombol */
    border: none; /* Menghapus border tombol */
    border-radius: 5px; /* Membuat sudut tombol menjadi bulat */
    cursor: pointer; /* Menambahkan kursor pointer saat hover */
}

button:hover {
    background-color: #0056b3; /* Mengubah warna tombol saat hover */
}
</style>


<div class ="tengah">
    <label class="label1">Username</label>
    <label>:</label>
    <input type="text">
    <br>
    <label class="label1">Password</label>
    <label>:</label>
    <input type="password">
    <br>
    <button>log in</button>
</div>