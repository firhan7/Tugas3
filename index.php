<!DOCTYPE html>
<html>
<head>
  <title>3D Kalkulator</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
  <header>
  </header>
  <div class="main">
    <div class="container">
      <div class="judul">3D Kalkulator</div>
      <h1>Selamat <span id="waktu"></span>, <span id="nama"></span></h1>
      <p>Menghitung volume dan luas permukaan dari silinder, kerucut, dan bola.</p>
      <div class="Silinder">
        <h1>Silinder</h1>
        <p>Masukkan jari-jari silinder (dalam meter)</p>
        <input type="text" name="jari2" id="tabung" value="" placeholder=""><br><br>
        <p>Masukkan tinggi silinder (dalam meter)</p>
        <input type="text" name="tinggi" id="tabungA" value="" placeholder=""><br><br>
        <div class="hitung">
          <span class="button message" onclick="hasilSilinder()">Hitung!</span> 
        </div>

        <br><br>
        <h2>Hasil Perhitungan</h2>
        <p>Luas Permukaan: <span id="lp silinder"></span> m<sup>2</sup></p><br>
        <p>Volume: <span id="vl silinder"></span> m<sup>3</sup></p>
      </div>
      <div class="Kerucut">
        <h1>Kerucut</h1>
        <p>Masukkan jari-jari Kerucut (dalam meter)</p>
        <input type="text" name="jari2" id="topiB" value="" placeholder=""><br><br>
        <p>Masukkan garis pelukis kerucut (dalam meter)</p>
        <input type="text" name="gp" id="topi" value="" placeholder=""><br><br>
        <p>Masukkan tinggi kerucut (dalam meter)</p>
        <input type="text" name="tinggi" id="topiC" value="" placeholder=""><br><br>
        <div class="hitung">
          <span class="button message" onclick="hasilKerucut()">Hitung!</span>  
        </div>
 
        <br><br>
        <h2>Hasil Perhitungan</h2>
        <p>Luas Permukaan: <span id="lp kerucut"></span> m<sup>2</sup></p><br>
        <p>Volume: <span id="vl kerucut"></span> m<sup>3</sup></p>
      </div>
      <div class="Bola">
        <h1>Bola</h1>
        <p>Masukkan jari-jari Bola (dalam meter)</p>
        <input type="text" name="jari2" id="bulet" value="" placeholder=""><br><br>
        <div class="hitung">
          <span class="button message" onclick="hasilBola()">Hitung!</span> 
        </div>

        <br><br>
        <h2>Hasil Perhitungan</h2>
        <p>Luas Permukaan: <span id="lp bola"></span> m<sup>2</sup></p><br>
        <p>Volume: <span id="vl bola"></span> m<sup>3</sup></p>
      </div>
    </div>
  </div>
  <footer>
    <div class="header-left">
      <p>Copyright &copy; 2021 Firhan Ramadhan | 3D kalkulator</p>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>
