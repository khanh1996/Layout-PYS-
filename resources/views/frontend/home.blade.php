@extends('frontend.layout.master')

@section('content')
<div id="header" >
    <div id="nav-top" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="nav-left">
                            <span class="s1"><i class="fas fa-phone"></i> 024.44506070(Hà Nội) </span>
                            <span>|<i class="fas fa-phone s2"></i> 028.44506070(HCM)</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 ">
                    <div class="nav-right">
                        <span class="p"><i class="far fa-comments"></i><a href="#"> Cảm nhận của khách hàng</a></span>
                        <span class="p"><i class="fas fa-users"></i><a href="#"> Về PYS Travel</a></span>
                        <span><i class="fas fa-map-marker-alt"></i><a href="#"> Liên hệ</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="nav-menu" class="container-fluid">
        <div class="transparent">
            {{--<img src="{{url('image/background/background-1.png')}}"/>--}}
            <div class="container">
                <div class="row logo-menu">
                    <div class="col-md-3">
                        <div id="logo">
                            <a href="#"><img src="{{url('image/logo-2.png')}}"/></a>
                        </div>
                    </div>
                    <div class="menu col-md-9">
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link active" href="#"> Trang chủ</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#"> Tour trong nước</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#"> Tour quốc tế</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#"> Combo free & easy</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#"> team building</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#"> tin du lịch</a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav-center">
                    <h2>Bạn đang có kế hoạch đi du lịch?</h2>
                    <h5>Lên rừng hay xuống biển, đi cùng gia đình hay bạn bè, pys travel đều có gợi ý cho</h5>
                    <div class="nav-center-search">
                        <div class="searchBar">
                            <div class="input-group mb-3">
                                <div class="a">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected > Từ Hà Nội</option>
                                        <option value="1">Từ Hồ Chí Minh</option>
                                        <option value="2">Từ Đà Nẵng</option>
                                        <option value="3">Từ Cà Mau</option>
                                    </select>
                                </div>
                                <div class="b">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" class="form-control" placeholder="Bạn muốn đi đâu?" >
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary search-button">
                                        <i class="fa fa-search " aria-hidden="true"></i>Tìm Tour Ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bottom-down">
                <a href="#"><img src="{{url('image/icon/icon-movedown.png')}}"/></a>
            </div>
        </div>
    </div>
</div>
<div id="body" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="body-a">
                    <div class="body-a-top">
                        <div class="row reason">
                            <h2 class="col-md-12">Lý do Chọn PYS Travel</h2>
                        </div>
                        <div class="row rulers">
                            <div class="ruler col-md-12"> </div>
                        </div>
                    </div>
                    <div class="body-a-bot">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-5 symbol">
                                        <img src="{{url('image/banner/banner1.png')}}"/>
                                    </div>
                                    <div class="col-md-7 content-symbol">
                                        <p>Cam kết</p>
                                        <p>chất lượng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-5 symbol">
                                        <img src="{{url('image/banner/banner2.png')}}"/>
                                    </div>
                                    <div class="col-md-7 creation">
                                        <p>Luôn luôn mới mẻ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-5 symbol">
                                        <img src="{{url('image/banner/banner3.png')}}"/>
                                    </div>
                                    <div class="col-md-7 content-symbol">
                                        <p>Thương hiệu </p>
                                        <p>được khẳng định </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="body-b ">
        <div class="container reason">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2>Tour nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row rulers">
                <div class="ruler col-md-12"> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="body-b-top">
                        <p>PYS Travel gợi ý cho bạn các tour du lịch đang được nhiều người quan tâm nhất và có ưu đãi hấp dẫn</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="body-b-cap">
                <div class="row">
                    <div class="col-md-10">
                        <h4>Tour trong nước</h4>
                    </div>
                    <div class="col-md-2 see-tour">
                        <a href="#">Xem thêm tour <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="body-b-mid">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="list-item">
                            <div class="list-item-image">
                                <div class="card"><span>-15<small>%</small></span></div>
                                <img src="{{url("image/image/image1.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5>Tour Hà Nội - Hà Giang mùa hoa Tam giác mạnh</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  2 ngày 1 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/>  Thứ 7 hàng tuần</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: Từ Hà Nội</p>
                                <div class="price">
                                    <p class="price-new">2.180.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="list-item">
                            <div class="list-item-image">
                                <div class="card"><span>Tặng photo Tour</span></div>
                                <img src="{{url("image/image/image2.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5>Tour du lịch Mộc Châu mùa hoa cải trắng, cải vàng</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  6 ngày 5 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/> Từ 15/12 đến 21/12</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: Từ TP.Hồ Chí Minh</p>
                                <div class="price">
                                    <p class="price-new">2.180.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="list-item">
                            <div class="list-item-image">
                                <img src="{{url("image/image/image3.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5>Tour Hà Nội - Hà Giang mùa hoa Tam giác mạnh</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  6 ngày 5 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/>  Từ 15/12 đến 21/12</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: Từ Hà Nội</p>
                                <div class="price">
                                    <p class="price-new">2.180.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="body-b-cap">
                <div class="row">
                    <div class="col-md-12 see-tour">
                        <a href="#">Xem thêm tour <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="body-b-mid">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="list-item abc">
                            <div class="list-item-image">
                                <h4>Tour Quốc Tế</h4>
                                <p>Bạn sẽ có dịp khám phá những miền đất mới tại các nước Đông Nam Á,Châu Á, Châu Âu, Úc, Mỹ hay khám phá những vùng đất Châu Phi xa xôi...Với lịch trình bày, khởi hành đúng thời gian và cam kết, PYS là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục vũ du khách mọi lúc, mọi nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất thị trường</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="list-item">
                            <div class="list-item-image">
                                <div class="card"><span>-15<small>%</small></span></div>
                                <img src="{{url("image/image/image4.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5>Tour du lịch Mộc Châu mùa hoa cải trắng, cải vàng</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  6 ngày 5 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/> Từ 15/12 đến 21/12</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: Từ TP.Hồ Chí Minh</p>
                                <div class="price">
                                    <p class="price-new">2.180.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="list-item">
                            <div class="list-item-image">
                                <img src="{{url("image/image/image5.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5>Tour Hà Nội - Hà Giang mùa hoa Tam giác mạnh</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  6 ngày 5 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/>  Từ 15/12 đến 21/12</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: Từ Hà Nội</p>
                                <div class="price">
                                    <p class="price-new">2.180.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="body-b-cap">
                <div class="row">
                    <div class="col-md-10">
                        <h4>Tour Team Building</h4>
                    </div>
                    <div class="col-md-2 see-tour">
                        <a href="#">Xem thêm tour <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="body-b-mid">
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="list-item">
                            <div class="list-item-image">

                                <img src="{{url("image/image/image6.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5 class="list-item-label">Tour Nha Trang</h5>
                                <h5>Những trò chơi vui nhộn</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  6 ngày 5 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/>  Vé máy bay khứ hồi</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: Từ Hà Nội</p>
                                <div class="price">
                                    <p class="price-new">3.180.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="list-item">
                            <div class="list-item-image">
                                <img src="{{url("image/image/image7.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5 class="list-item-label">Tour Hà Nội</h5>
                                <h5>Những trò chơi vui nhộn</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  6 ngày 5 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/>  Từ 15/12 đến 21/12</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: Từ Hồ Chí Minh</p>
                                <div class="price">
                                    <p class="price-new">2.980.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="list-item">
                            <div class="list-item-image">

                                <img src="{{url("image/image/image6.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5 class="list-item-label">Tour Nha Trang</h5>
                                <h5>Những trò chơi vui nhộn</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  6 ngày 5 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/>  Vé máy bay khứ hồi</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: Từ Hà Nội</p>
                                <div class="price">
                                    <p class="price-new">3.180.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="list-item">
                            <div class="list-item-image">

                                <img src="{{url("image/image/image8.png")}}">
                            </div>
                            <div class="list-item-detail">
                                <h5 class="list-item-label">Tour Hà Nội</h5>
                                <h5>Những trò chơi vui nhộn</h5>
                                <p><img src="{{url('image/icon/icon-clock.png')}}"/>  6 ngày 5 đêm</p>
                                <p><img src="{{url('image/icon/icon-calendar.png')}}"/>  Từ 15/12 đến 21/12</p>
                                <p><img src="{{url('image/icon/icon-marker.png')}}"/>  Khởi hành: TP.Hồ Chí Minh</p>
                                <div class="price">
                                    <p class="price-new">2.980.000đ</p>
                                    <p class="price-old"><s>2.180.000đ</s></p>
                                </div>
                                <div class="book-tour">
                                    <button class="btn btn-primary" type="submit">Đặt Tour</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container"></div>
    </div>
    <div class="news-feed">
        <div class="container">
            <div class="row">
                <div class="col-md-8 new-feed-left">
                    <h2>Về PYS travel</h2>
                    <div class="rulers">
                        <div class="col-md-12"></div>
                    </div>
                    <div class="row new-feed-main">
                        <div class="col-md-12 new-feed-item-big">
                            <img class="img-big" src="{{url('image/image/image20.png')}}"/>
                        </div>
                            <div class="col-md-3 new-feed-item">
                                <img class="img-small" src="{{url('image/image/image10.png')}}"/>
                                <p>Hoạt động đóng gói bánh trưng từ thiện PYS Travel...</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>15/12/2017</p>
                            </div>
                            <div class="col-md-3 new-feed-item">
                                <img class="img-small" src="{{url('image/image/image11.png')}}"/>
                                <p>PYS Travel đón trung thu yêu thương</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>14/12/2017</p>
                            </div>
                            <div class="col-md-3 new-feed-item">
                                <img class="img-small" src="{{url('image/image/image13.png')}}"/>
                                <p>Hoạt động nhân sự của PYS Travel...</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>13/12/2017</p>
                            </div>
                            <div class="col-md-3 new-feed-item">
                                <img class="img-small" src="{{url('image/image/image14.png')}}"/>
                                <p>Chương trình Đại Lễ Phật Đản 2017 t...</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>12/12/2017</p>
                            </div>
                    </div>
                    <div class="row new-feed-bot">

                        <div class="col-md-12 see-more">
                            <span><a href="#">Xem thêm tin <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 new-feed-right">
                    <h2>về du lịch</h2>
                    <div class="rulers">
                        <div class="col-md-12"></div>
                    </div>
                    <div class=" row new-feed-right-list">
                        <div class="col-md-12">
                            <div class="new-feed-right-item">
                                <p>Đi chơi Mộc Châu Tết dương: mách nước kinh nghiệm sống ảo với nhóm bạn</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>15/12/2017</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="new-feed-right-item">
                                <p>Hội bỉm sữa mách nước những điểm đến tết dương lịch 2018 vui cho mẹ, an...</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>14/12/2017</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="new-feed-right-item">
                                <p>Thời điểm săn hoa hướng dương đẹp nhất tại Nghệ An không phải ai cũng biết.</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>13/12/2017</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="new-feed-right-item">
                                <p>Tổng hợp các địa điểm chụp ảnh hoa cải vàng đầu đông ngay gần Hà Nội</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>12/12/2017</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="new-feed-right-item">
                                <p>Tổng hợp các địa điểm chụp ảnh hoa cải vàng đầu đông ngay gần Hà Nội</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>11/12/2017</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="new-feed-right-item">
                                <p>Tổng hợp các địa điểm chụp ảnh hoa cải vàng đầu đông ngay gần Hà Nội</p>
                                <p class="p"><img src="{{url('image/icon/icon-calendar.png')}}"/>10/12/2017</p>
                            </div>
                        </div>
                        <div class="col-md-12 new-feed-right-bot">
                            <span><a href="#">Xem thêm tin <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="container">
            <div class="row">
                <div class="feedback-top">
                    <div class="col-md-12 ">
                        <h2>Khách hàng nói về chúng tôi</h2>
                    </div>
                        <div class="ruler col-md-12"></div>
                </div>
                <div class="feedback-bot">
                    <div class="row">
                        <div class="col-md-12 feedback-bot-label">
                            <h4>Khách hàng doanh nghiệp</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 feedback-bot-left">
                            <div class="feedback-main">
                                <div class="row feedback-main-top ">
                                    <div class="col-md-2 feedback-image">
                                        <img src="{{url('image/human/human1.png')}}"/>
                                    </div>
                                    <div class="col-md-7 feedback-name">
                                        <p>Nguyễn văn Hùng</p>
                                        <p class="feedback-position">Giám đốc Sun Group</p>
                                    </div>
                                    <div class="col-md-3 feedback-evaluate">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>

                                </div>
                                <div class="row feedback-main-mid">
                                    <div class="col-md-12">
                                        <img src="{{url('image/icon/icon-left-quote1.png')}}"/>
                                        <span>PYS Travel đã tạo nên một văn hóa thật tuyệt</span>
                                    </div>
                                    <div class="col-md-12 feedback-content">
                                    <span>Sau một tháng, tôi thấy như vẫn nợ một điều gì đó khi
                                            chưa thể nói lời cảm ơn PYS và đặc biệt cảm ơn người bạn HDV Xuân Tình năng nổ, chất,
                                            dí dỏm đã đảm bảo sự an toàn và đem lại tình yêu thương ngập tràn trong chuyến xe ấm áp Hà Giang.
                                            Cảm ơn Xuân Tình & PYS nhiều nhé!
                                    </span>
                                        <div class="feedback-ruler"></div>
                                    </div>
                                </div>
                                <div class="row feedback-main-bot">
                                    <div class="col-md-9">
                                        <div class="row feedback-address">
                                            <div class="col-md-3">Công ty:</div>
                                            <div class="col-md-9 content-address bold">Sun Group</div>
                                            <div class="col-md-3">Địa chỉ</div>
                                            <div class="col-md-9 content-address">583 Nguyễn Trãi, Hà Nội</div>
                                            <div class="col-md-3">Đã đi tour</div>
                                            <div class="col-md-9 content-address">Tour Hà Giang mùa hoa tam giác mạnh 3 ngày 2 đêm</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 logo-sun">
                                        <img src="{{url('image/logo-sun.png')}}"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 feedback-bot-right">
                            <div class="feedback-item">
                                <div class="feedback-item-small">
                                    <div class="feedback-image">
                                        <img src="{{url('image/human/human1.png')}}"/>

                                    </div>
                                    <div class="feedback-name">
                                        <a href="#">Nguyễn Văn Hùng</a>
                                        <p>Giám đốc Sun Group</p>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-item">
                                <div class="feedback-item-small">
                                    <div class="feedback-image">
                                        <img src="{{url('image/human/human1.png')}}"/>

                                    </div>
                                    <div class="feedback-name">
                                        <a href="#">Nguyễn Văn Hùng</a>
                                        <p>Giám đốc Sun Group</p>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-item">
                                <div class="feedback-item-small">
                                    <div class="feedback-image">
                                        <img src="{{url('image/human/human1.png')}}"/>

                                    </div>
                                    <div class="feedback-name">
                                        <a href="#">Nguyễn Văn Hùng</a>
                                        <p>Giám đốc Sun Group</p>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-item">
                                <div class="feedback-item-small">
                                    <div class="feedback-image">
                                        <img src="{{url('image/human/human1.png')}}"/>

                                    </div>
                                    <div class="feedback-name">
                                        <a href="#">Nguyễn Văn Hùng</a>
                                        <p>Giám đốc Sun Group</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-personal">
                    <div class="row">
                        <div class="col-md-12 feedback-personal-label">
                            <h4>Khách hàng cá nhân</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feedback-personal-item">
                                <div class="row">
                                    <div class="col-md-12 feedback-personal-top">
                                        <img src="{{url('image/icon/icon-left-quote1.png')}}"/>
                                        <span>PYS Travel đã tạo nên một văn hóa thật tuyệt</span>
                                    </div>
                                    <div class="col-md-12 feedback-personal-mid">
                                        <span>Cuộc sống ngoài kia với nhiều bộn bề, khó khăn và áp lực nhưng vượt qua tất cả, chúng ta đã được gặp nhau. Hẹn gặp lại PYS Travel trong chuyến đi gần nhất.<a href="#">[Xem chi tiết]</a> </span>
                                    </div>
                                    <div class="col-md-12 feedback-personal-bot">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="{{url('image/human/human2.png')}}"/>
                                            </div>
                                            <div class="col-md-10 feedback-item">
                                                <span>Nguyễn Thị Thu Tình</span>
                                                <span class="p1">|</span>
                                                <span class="p2">Đã đi tour Hà Giang ngày 20/12/2017</span>
                                                <div class="feedback-evaluate">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feedback-personal-item">
                                <div class="row">
                                    <div class="col-md-12 feedback-personal-top">
                                        <img src="{{url('image/icon/icon-left-quote1.png')}}"/>
                                        <span>PYS Travel đã tạo nên một văn hóa thật tuyệt</span>
                                    </div>
                                    <div class="col-md-12 feedback-personal-mid">
                                        <span>PYS đã xây dựng cho công ty một đội ngũ HDV, lái xe và trợ giúp chụp ảnh cho khách du lịch, một hình ảnh rất trẻ, năng động, hoạt bát, nhiệt tình từ chính tấm lòng của các bạn ấy.<a href="#">[Xem chi tiết]</a> </span>
                                    </div>
                                    <div class="col-md-12 feedback-personal-bot">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="{{url('image/human/human3.png')}}"/>
                                            </div>
                                            <div class="col-md-10 feedback-item">
                                                <span>Trần Văn Hùng</span>
                                                <span class="p1">|</span>
                                                <span class="p2">Đã đi tour Trung Quốc ngày 24/12/2017</span>
                                                <div class="feedback-evaluate">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="product-category">
        <div class="container">
            <div class="row">
                <div class="product-category-top">
                    <div class="col-md-12">
                        <h2>Danh mục sản phẩm</h2>
                    </div>
                    <div class="ruler col-md-12"></div>
                </div>
                <div class="product-category-bot">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="item-product">
                                <a href="#">
                                    <img src="{{url('image/image/image21.png')}}"/>
                                </a>
                                <div class="title-product">
                                    <h3><a href="#">Tour Đông tây bắc</a></h3>
                                </div>
                                <div class="item-product-content">
                                    <h3><a href="#">Tour Đông tây bắc</a></h3>
                                    <p class="">1000 Tour Team Building</p>
                                    <p>Cẩm nang Tour Team Building</p>
                                    <p>Khiếu nại Tour Team Building</p>
                                    <div class="seen-tour">
                                        <button type="button" class="btn btn-outline-light">Xem tour ngay</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="item-product">
                                <a href="#">
                                    <img src="{{url('image/image/image16.png')}}"/>
                                </a>
                                <div class="title-product">
                                    <h3><a href="#">Tour Team Building</a></h3>
                                </div>
                                <div class="item-product-content">
                                    <h3><a href="#">Tour Team Building</a></h3>
                                    <p class="">1000 Tour Team Building</p>
                                    <p>Cẩm nang Tour Team Building</p>
                                    <p>Khiếu nại Tour Team Building</p>
                                    <div class="seen-tour">
                                        <button type="button" class="btn btn-outline-light">Xem tour ngay</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="item-product">
                                <a href="#">
                                    <img src="{{url('image/image/image12.png')}}"/>
                                </a>
                                <div class="title-product">
                                    <h3><a href="#">Combo free & easy</a></h3>
                                </div>
                                <div class="item-product-content">
                                    <h3><a href="#">Tour Team Building</a></h3>
                                    <p class="">1000 Tour Team Building</p>
                                    <p>Cẩm nang Tour Team Building</p>
                                    <p>Khiếu nại Tour Team Building</p>
                                    <div class="seen-tour">
                                        <button type="button" class="btn btn-outline-light">Xem tour ngay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="item-product">
                                <a href="#">
                                    <img src="{{url('image/image/image17.png')}}"/>
                                </a>
                                <div class="title-product">
                                    <h3><a href="#">Tour biển đảo</a></h3>
                                </div>
                                <div class="item-product-content">
                                    <h3><a href="#">Tour Team Building</a></h3>
                                    <p class="">1000 Tour Team Building</p>
                                    <p>Cẩm nang Tour Team Building</p>
                                    <p>Khiếu nại Tour Team Building</p>
                                    <div class="seen-tour">
                                        <button type="button" class="btn btn-outline-light">Xem tour ngay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="item-product">
                                <a href="#">
                                    <img src="{{url('image/image/image18.png')}}"/>
                                </a>
                                <div class="title-product">
                                    <h3><a href="#">Tour hội thảo hội nghị</a></h3>
                                </div>
                                <div class="item-product-content">
                                    <h3><a href="#">Tour Team Building</a></h3>
                                    <p class="">1000 Tour Team Building</p>
                                    <p>Cẩm nang Tour Team Building</p>
                                    <p>Khiếu nại Tour Team Building</p>
                                    <div class="seen-tour">
                                        <button type="button" class="btn btn-outline-light">Xem tour ngay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="item-product">
                                <a href="#">
                                    <img src="{{url('image/image/image19.png')}}"/>
                                </a>
                                <div class="title-product">
                                    <h3><a href="#">Tour quốc tế</a></h3>
                                </div>
                                <div class="item-product-content">
                                    <h3><a href="#">Tour Team Building</a></h3>
                                    <p class="">1000 Tour Team Building</p>
                                    <p>Cẩm nang Tour Team Building</p>
                                    <p>Khiếu nại Tour Team Building</p>
                                    <div class="seen-tour">
                                        <button type="button" class="btn btn-outline-light">Xem tour ngay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="endow">
        <div class="container">
            <div class="row">
                <div class="endow-list">
                    <div class="col-md-12">
                        <h2>Đăng ký nhận ưu đãi</h2>
                    </div>
                    <div class="col-md-12 ruler"></div>
                    <div class="col-md-12">
                        <p>Mỗi ngày chúng tôi đều gửi đến khách hàng của mình những tin tức thứ vị, những ưu đãi hấp dẫn</p>
                    </div>
                    <div class="col-md-12 endow-item">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Đăng ký nhận Email" >
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary search-button">đăng ký</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection