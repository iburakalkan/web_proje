<!doctype html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proje Detayları</title>
        <link rel="icon" href="images/templatemo-barber-logo.png" type="image/png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-barber-shop.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 p-4">
                    <a href="index.php" class="btn custom-btn smoothscroll">
                        <i class="bi-arrow-left"></i> Ana Sayfaya Dön
                    </a>
                </div>

                <section class="section-padding" id="proje-tanitim">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-10 col-12">
                                <h2 class="mb-4">Proje Hakkında</h2>
                                <p class="lead mb-4">Bu proje, dinamik veri yönetimi ve kullanıcı etkileşimi üzerine kurulu web tabanlı bir randevu sistemidir.</p>

                                <div class="mb-5 text-center">
                                    <img src="images/mysql.png  " class="img-fluid rounded shadow" alt="Proje Görseli" >
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <h4 class="mb-3 text-warning">Kullanılan Diller & Araçlar</h4>
                                        <ul class="list-group list-group-flush bg-transparent">
                                            <li class="list-group-item bg-transparent text-muted ps-0">
                                                <i class="bi-code-slash text-dark me-2"></i> <strong>Backend:</strong> PHP ve MySQL (PDO)
                                            </li>
                                            <li class="list-group-item bg-transparent text-muted ps-0">
                                                <i class="bi-window-fullscreen text-dark me-2"></i> <strong>Frontend:</strong> HTML5, CSS3, Bootstrap 5
                                            </li>
                                            <li class="list-group-item bg-transparent text-muted ps-0">
                                                <i class="bi-layers text-dark me-2"></i> <strong>Script:</strong> JavaScript (jQuery)
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <h4 class="mb-3 text-warning">Sistem Özellikleri</h4>
                                        <ul class="list-group list-group-flush bg-transparent">
                                            <li class="list-group-item bg-transparent text-muted ps-0">
                                                <i class="bi-arrow-repeat text-dark me-2"></i> 
                                                <strong>AJAX Etkileşimi:</strong> Şube seçildiğinde sayfa yenilenmeden berber listesi dinamik olarak güncellenir.
                                            </li>
                                            <li class="list-group-item bg-transparent text-muted ps-0">
                                                <i class="bi-diagram-3 text-dark me-2"></i> 
                                                <strong>İlişkisel Veritabanı:</strong> Şubeler, berberler ve randevular ID'ler üzerinden birbirine bağlıdır.
                                            </li>
                                            <li class="list-group-item bg-transparent text-muted ps-0">
                                                <i class="bi-shield-check text-dark me-2"></i> 
                                                <strong>Veri Kontrolü:</strong> Form gönderiminde Regex ile telefon doğrulama ve sunucu taraflı kontroller yapılır.
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <a href="https://github.com/iburakalkan/web_proje" target="_blank" class="btn custom-btn smoothscroll me-2">
                                        <i class="bi-github"></i> Kaynak Kodlar
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>