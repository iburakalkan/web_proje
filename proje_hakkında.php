<!doctype html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proje Detayları | Barber Shop</title>
        <link rel="icon" href="images/templatemo-barber-logo.png" type="image/png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-barber-shop.css" rel="stylesheet">
        
        <style>
            .tech-card {
                border: none;
                background: #f8f9fa;
                transition: transform 0.3s;
                border-radius: 15px;
            }
            .tech-card:hover {
                transform: translateY(-5px);
                background: #fff;
                shadow: 0 10px 20px rgba(0,0,0,0.1);
            }
            .video-container {
                position: relative;
                padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
                height: 0;
                overflow: hidden;
                border-radius: 20px;
                box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            }
            .video-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .badge-tech {
                background-color: #592727; /* Berber dükkanının temasına uygun bir renk */
                color: white;
                margin-right: 5px;
            }
        </style>
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
                                <div class="text-center mb-5">
                                    <h2 class="mb-3">Proje Hakkında</h2>
                                    <p class="lead">Bu çalışma, modern web teknolojilerini kullanarak geliştirilmiş dinamik bir <strong>Berber Randevu Sistemi</strong>dir.</p>
                                    <img src="images/mysql.png" class="img-fluid rounded" style="max-width: 600px;" alt="MySQL Logo">
                                </div>

                                <div class="row mb-5">
                                    <div class="col-12 mb-4">
                                        <h4 class="text-warning border-bottom pb-2">Kullanılan Teknolojiler</h4>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <div class="card tech-card p-3 h-100">
                                            <h5 class="card-title"><i class="bi bi-code-square me-2"></i>Frontend</h5>
                                            <p class="small text-muted">Arayüz tasarımı ve kullanıcı deneyimi için:</p>
                                            <div>
                                                <span class="badge badge-tech">HTML5</span>
                                                <span class="badge badge-tech">CSS3</span>
                                                <span class="badge badge-tech">Bootstrap 5</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <div class="card tech-card p-3 h-100">
                                            <h5 class="card-title"><i class="bi bi-cpu me-2"></i>Backend</h5>
                                            <p class="small text-muted">Sunucu taraflı işlemler ve veritabanı yönetimi:</p>
                                            <div>
                                                <span class="badge badge-tech">PHP 8.x</span>
                                                <span class="badge badge-tech">PDO (SQL)</span>
                                                <span class="badge badge-tech">MySQL</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <div class="card tech-card p-3 h-100">
                                            <h5 class="card-title"><i class="bi bi-lightning-charge me-2"></i>Dinamik Yapı</h5>
                                            <p class="small text-muted">Sayfa yenilenmeden veri iletişimi için:</p>
                                            <div>
                                                <span class="badge badge-tech">JavaScript</span>
                                                <span class="badge badge-tech">jQuery</span>
                                                <span class="badge badge-tech">AJAX / JSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="text-center mt-4">
                                    <a href="https://github.com/iburakalkan/web_proje" target="_blank" class="btn custom-btn smoothscroll me-2">
                                        <i class="bi-github"></i> GitHub Kaynak Kodları
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