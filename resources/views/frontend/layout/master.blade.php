<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>home</title>

        <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('plugin/fontawesome/css/all.css')}}" />

</head>
<body>
<div id="wrapper">
    @yield('content')
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 footer-main">
                    <div class="row">
                        <div class="col-md-4 footer-left">
                            <div class="footer-img">
                                <img src="{{url('image/logo-2.png')}}"/>
                            </div>
                            <div>
                                <span>PYS Travel nỗ lực từng ngày để đem đến những sản phẩm du lịch mới mẻ và chất lượng dịch vụ hoàn hảo tới khách hàng.</span></div>
                            </div>
                        <div class="col-md-4">
                            <div class="footer-h5">
                                <h5>Hoạt động</h5>
                            </div>
                            <div class="footer-p">
                                <p><img src="image/icon/icon-arrowright.png"/>Về PYS Travel</p>
                                <p><img src="image/icon/icon-arrowright.png"/>Khách hàng nói về PYS Travel</p>
                                <p><img src="image/icon/icon-arrowright.png"/>Tuyển dụng</p>
                                <p><img src="image/icon/icon-arrowright.png"/>Hoạt động của PYS Travel</p>
                                <p><img src="image/icon/icon-arrowright.png"/>Báo chi nói về PYS Travel</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-h5">
                                <h5>Thông tin hữu ích</h5>
                            </div>
                            <div class="footer-p">
                                <p><img src="image/icon/icon-arrowright.png"/>Hình thức thanh toán</p>
                                <p><img src="image/icon/icon-arrowright.png"/>Chính sách hoàn hủy</p>
                                <p><img src="image/icon/icon-arrowright.png"/>Điều khoản sử dụng</p>
                                <p><img src="image/icon/icon-arrowright.png"/>Chính sách bảo mật</p>
                                <p><img src="image/icon/icon-arrowright.png"/>Bản quyền hình ảnh</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="rectangle">
                                <img src="image/rectangle.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-name">
                                <p>Công Ty TNHH du lịch và truyền thông giải pháp cho giới trẻ</p>
                            </div>
                            <div class="footer-license">
                                <p><img src="{{url('image/icon/icon-paper.png')}}"/> Giấy phép kinh doanh số 0105225586 do cơ sở KH&ĐT TP Hà Nộ cấp ngày 29/3 năm 2011</p>
                                <p><img src="{{url('image/icon/icon-paper.png')}}"/> Giấy phép Kinh doanh Lữ hành Quốc Tê số 01771/2015/TCDL-GPLHQT</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-h5">
                        <h5>Thông tin liên lạc</h5>
                    </div>
                    <div class="footer-contact">
                        <p class="footer-contact-first">Trụ sở chính tại hà nội</p>
                        <p><img src="{{url('image/icon/icon-phone-right.png')}}"/> 024.44506070</p>
                        <p><img class="icon-home" src="{{url('image/icon/icon-home1.png')}}"/> P 502A, tòa nhà M3-M4, 91 Nguyễn Chí Thanh, Đống Đa, Hà Nội.</p>
                    </div>
                    <div class="footer-contact">
                        <p class="footer-contact-first">Văn phòng đại diện tại TP.Hồ Chí Minh</p>
                        <p><img src="{{url('image/icon/icon-phone-right.png')}}"/> 028.44506070</p>
                        <p><img class="icon-home" src="{{url('image/icon/icon-home1.png')}}"/> 216 Nguyễn Thị Minh Khai, P.6, Q.3, TP.Hồ Chí Minh.</p>
                    </div>
                    <div>
                        <p><img src="{{url('image/icon/icon-message1.png')}}"/> info@pystravel.com</p>
                    </div>
                    <div class="notify">
                        <img src="{{url('image/notify.png')}}"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bot">
            <span>Copyright © 2011-2017. All Rights Reserved by PYS Travel</span>
        </div>

    </div>
</div>
    <div class="phone-fixed">
        <img src="{{url('image/icon/icon-phone-fixed.png')}}" alt="fixed-phone">
        <div class="content-fixed">
            <p>HN &nbsp; &nbsp;: 024.44506070</p>
            <p>HCM : 028.44506070</p>
        </div>
    </div>


    <script src="{{url('plugin/fontawesome/js/fontawesome.js')}}" ></script>
    <script src="{{url('plugin/fontawesome/generate.js')}}" ></script>
    <script src="{{url('plugin/jquery/dist/jquery.min.js')}}" ></script>
</body>
</html>