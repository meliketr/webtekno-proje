<?php
// Sabit kullanıcı bilgileri (hardcoded)
$dogru_kullanici = "b241210355@sakarya.edu.tr";
$dogru_sifre = "b241210355";

// Formdan gelen verileri al
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $gelen_kullanici = $_POST['username'] ?? '';
    $gelen_sifre = $_POST['password'] ?? '';

    // Boş kontrolü
    if (empty($gelen_kullanici) || empty($gelen_sifre)) {
        echo "<h3>Lütfen kullanıcı adı ve şifre alanlarını doldurun.</h3>";
        exit;
    }

    // Doğrulama
    if ($gelen_kullanici === $dogru_kullanici && $gelen_sifre === $dogru_sifre) {
        // Başarılı girişte hakkimda.html sayfasına yönlendir, parametre ile baloncuk göster
        header("Location: hakkimda.html?welcome=1");
        exit;
    } else {
        echo "<h3 style='color:red; text-align:center; margin-top:50px;'>Hatalı kullanıcı adı veya şifre!</h3>";
        echo "<p style='text-align:center;'><a href='login.html'>Geri dön</a></p>";
    }
} else {
    // Doğrudan erişimde kullanıcıyı geri gönder
    header("Location: index.html");
    exit;
}
?>
