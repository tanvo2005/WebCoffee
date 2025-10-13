<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- nhúng fonts chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <ul class="header-list">
            <a class="header-item-link" href="{{ url('/about') }}"><li class="header-item">GIỚI THIỆU</li></a>
            <li class="header-item">SẢN PHẨM</li>
            <li class="header-item">TIN TỨC</li>
            <li class="header-item">LIÊN HỆ</li>
        </ul>
    </header>
    
    <main>
        @yield('content');
    </main>
    <footer class="footer">
        <div class="grid">
            <div class="grid-row">
                <div class="grid-row-3-3">
                    <h3 class="footer-name">Nhóm 2 Roastery Coffee</h3>
                    <ul class="footer-list">
                        <li class="footer-item">Địa chỉ :23 ,Mẹ Suốt, Q. Liên Chiểu, TP Đà Nẵng
                        <li class="footer-item">Điện thoại: 0999000000</li>
                        <li class="footer-item">Website: webdemo.com</li>
                        <li class="footer-item">Fanpage: fb.com/webdemo.com</li>
                    </ul>
                </div>

                 <div class="grid-row-3-3">
                    <h3 class="footer-name">BÀI VIẾT MỚI</h3>
                    <ul class="footer-list">
                        <li class="footer-item"><a href="" class="footer-item-link">Ăn hạt dinh dưỡng có tốt ko</a></li>
                        <li class="footer-item"><a href="" class="footer-item-link">Tác dụng kinh người của những loại hạt</a></li>
                        <li class="footer-item"><a href="" class="footer-item-link">Quả óc chó có thực sự có ích</a></li>
                        <li class="footer-item"><a href="" class="footer-item-link">Chào tất cả mọi người!</a></li>
                    </ul>
                </div>

                 <div class="grid-row-3-3">
                    <h3 class="footer-name">THEO DÕI</h3>
                    <ul class="footer-list">
                        <li class="footer-item"><a href="" class="footer-item-link">
                            <i class=" footer__list-item-icon fa-brands fa-facebook"></i>
                            <span class="footer__list-item-link-name">Facebook</span>
                        </a></li>
                        <li class="footer-item"><a href="" class="footer-item-link">
                            <i class=" footer__list-item-icon fa-brands fa-instagram"></i>
                            <span class="footer__list-item-link-name">Instagram</span>
                        </a></li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>

        <div class="copyright">
            <span class="copyright-name">Thiết kế bởi AZnet Việt Nam</span>
        </div>

    </footer>
</body>
</html>