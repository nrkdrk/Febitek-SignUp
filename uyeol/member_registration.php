<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$schoolNumber = $_POST['schoolNumber'];
$telephoneNumber = $_POST['telephoneNumber'];
$about = $_POST['about'];
$faculty = $_POST['faculty'];
$program = $_POST['program'];
$your_technical = $_POST['your_technical'];
$expectation = $_POST['expectation'];
$mind = $_POST['mind'];
    if(empty($name)){
        echo("<center><b>Adınızı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($surname)){
        echo("<center><b>Soyadınızı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($email)){
        echo("<center><b>Email Adresinizi Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($schoolNumber)){
        echo("<center><b>Okul Numaranızı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($telephoneNumber)){
        echo("<center><b>Telefon Numaranızı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($about)){
        echo("<center><b>Kendinizden bahsedin kısmını doldurmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($program)){
        echo("<center><b>Okuduğunuz Bölümü Yazmadınız.Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($your_technical)){
        echo("<center><b>Bölüme Dair Teknik Bilgiler Kısmını Doldurmadınız.Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($expectation)){
        echo("<center><b>Beklentilerinizi Doldurmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }elseif(empty($mind)){
        echo("<center><b>Fikirlerinizi Doldurmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
    }else{
        include("db.php");
        $sql = "insert into membership (name, surname, email, school_number, phone_number,about,faculty,program,your_technical,expectation,mind)
    values ('$name', '$surname', '$email', '$schoolNumber', '$telephoneNumber','$about','$faculty','$program','$your_technical','$expectation','$mind')";
        $kayit = mysql_query($sql);
    }
    if (isset ($kayit)){
        include ("success.html");
    }
    else {
        echo "Kayıt Başarısız iletişime geçin";
}
?>
