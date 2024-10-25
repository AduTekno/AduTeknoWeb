<div class="page-menu">
    <ul class="menu">
    <?php 
    $current_page = basename($_SERVER['PHP_SELF']);
    $current_page2 = $_SERVER['PHP_SELF'];
    $current_title = basename(dirname($current_page2));

    $menu_items = array(
        "Mevzuat" => "mevzuat.php",
        "Teknokent Kavramı" => "teknoKavram.php",
        "Hakkımızda" => "hakkimizda.php",
        "Yönetim Kurulu" => "yonetimKurulu.php",
        "Yönetim Ofisi" => "yonetimOfisi.php",
        "Desteklerimiz" => "destek.php",
        "S.S.S" => "sss.php",
        "Girişimcilik Ve Ticarileşme Birimi" => "girisim.php",
        "Fikri Haklar Birimi" => "fikriHak.php",
        "Proje Destek Birimi" => "projeDestek.php",
        "Kamu-Üniversite-Sanayi İşbirliği Birimi" => "kamuUni.php",
        "Farkındalık Bilgilendirme Ve Eğitim Hizmetleri Birimi" => "hizmetBirimi.php",
        "Başvuru Formu" => "basvuruForm.php",
        "Hakem Kayıt" => "hakemKayit.php",
        "2021 Raporu" => "2021raporu.php",
        "2020 Raporu" => "2020raporu.php",
        "2019 Raporu" => "2019raporu.php",
        "2018 Raporu" => "2018raporu.php",
        "2017 Raporu" => "2017raporu.php",
        "Kariyer Fırsatları" => "kariyerFirsat.php",
        "İş Başvurusu" => "isBasvuru.php",
        "Staj Başvurusu" => "stajBasvuru.php"
    );

    foreach ($menu_items as $menu_item => $link) {
        if($link == $current_page){
            echo "<h4>$current_title</h4>";
            echo "<li>$menu_item</li>";
        }
    }
    ?>
    </ul>
</div>