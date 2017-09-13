@extends('master')
@section('css')
    <link href="css/style_v3.28a2ff7d.min.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="css/home.833fea7b.min.css" media="screen" rel="stylesheet" type="text/css" >
    @endsection
@section('content')
    <div class="wrapper wrapper-textured">
        <div id="main">
            <div class="bg_grnd bg_grnd_solid">
                <div class="content_holder">

                    <div class="top-page-panel static-sublevel">
                        <div class="frame clearfix anim-start">
                            <strong class="ttl fade-anim">{{trans('home.service')}}</strong>
                            <ul class="tpp-nav">

                                <li class="">
                                    <a class="fade-anim" href="{{asset('')}}dich-vu-hbb.html">{!!trans('home.ttnt2')!!}</a>

                                </li>
                                <li class="">
                                    <a class="fade-anim" href="{{asset('')}}dich-vu-hbb.html">{!!trans('home.xdweb2')!!}</a>

                                </li>

                                <li class="">
                                    <a class="fade-anim" href="{{asset('')}}dich-vu-hbb.html">{!!trans('home.xdapp2')!!}</a>

                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="services-pg">
                        <div class="top-section">
                            <div class="bg full-height">
                                <div class="frame clearfix">
                                    <div class="s-left">
                                        <h1>{!!trans('home.xdth')!!}</h1>
                                        <p>{!!trans('home.alldichvu')!!}</p>
                                    </div>
                                    <div class="s-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="obj1" class="services-wide-section services-wide-list shadow">
                        <a href="#obj1" class="go-next-step step-color-white step-border-light-grey js-next-step"
                           style="background-image:url('images/down.png');
	background-size:cover;">

                        </a>

                        <div class="service-wide-item creative-serv-item">
                            <div class="frame">
                                <div class="service-dt-columns">
                                    <div class="sw-logo">
                                        <div class="ih-item circle effect3 right_to_left"><a href="#">
                                                <div class="img"><img src="images/logos/ai.png" alt="img"></div>
                                                <div class="info">
                                                    <h3>AI</h3>
                                                    <p>TRÍ TUỆ NHÂN TẠO</p>
                                                </div></a></div>
                                    </div>
                                    <div class="sw-description">
                                        <h2><a href="#">Trí Tuệ Nhân Tạo</a></h2>
                                        <p>Chúng tôi áp dụng hàng loạt các thủ thuật tùy chỉnh để mang đến những giải pháp và dịch vụ ứng dụng trí tuệ nhân tạo tốt nhất để hỗ trợ cho việc kinh doanh của bạn.</p>
                                        <a href="#" class="btn-simple btn-simple-orange">Đọc tiếp</a>
                                    </div>
                                    <div class="sw-list-col">
                                        <ul class="bullet-service-list">
                                            <li><a href="#">Phân tích hành vi nhu cầu khách hàng.</a></li>
                                            <li><a href="#">Đề xuất sản phẩm cho người dùng. </a></li>
                                            <li><a href="#">Định hướng phát triển sản xuất. </a></li>
                                            <li><a href="#">Dự đoán xu thế trong tương lai.</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-wide-item mobiledev-serv-item">
                            <div class="frame">
                                <div class="service-dt-columns">
                                    <div class="sw-logo">
                                        <div class="ih-item circle effect3 right_to_left"><a href="#">
                                                <div class="img"><img src="images/logos/web.png" alt="img"></div>
                                                <div class="info">
                                                    <h3>Website</h3>
                                                    <p>XÂY DỰNG WEB</p>
                                                </div></a></div>
                                    </div>
                                    <div class="sw-description">
                                        <h2><a href="#">Xây Dựng Web</a></h2>
                                        <p>Với đội ngũ các lập trình viên chuyên nghiệp, nhiều kinh nghiệm, chúng tôi luôn đề cao việc phát triển tương tác cho mọi nhu cầu của khách hàng.</p>
                                        <a href="#" class="btn-simple btn-simple-purple">Đọc Tiếp</a>
                                    </div>
                                    <div class="sw-list-col">
                                        <ul class="bullet-service-list">
                                            <li><a href="#">Thiết kế Website.</a></li>
                                            <li><a href="#">Thiết kế Website thương mại điện tử.</a></li>
                                            <li><a href="#">Hệ thống quản lý nội dung.</a></li>
                                            <li><a href="#">Thiết kế website linh hoạt.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-wide-item mobileapps-serv-item">
                            <div class="frame">
                                <div class="service-dt-columns">
                                    <div class="sw-logo">
                                        <div class="ih-item circle effect3 right_to_left"><a href="#">
                                                <div class="img"><img src="images/logos/mobi.png" alt="img"></div>
                                                <div class="info">
                                                    <h3>Mobile Apps</h3>
                                                    <p>XÂY DỰNG MOBILE APP</p>
                                                </div></a></div>
                                    </div>
                                    <div class="sw-description">
                                        <h2><a href=#">Xây Dựng Mobile App</a></h2>
                                        <p>Ứng dụng di động là cầu nối giữa doanh nghiệp với khách hàng mục tiêu. Chúng tôi có thể thiết kế, phát triển và tiếp thị ứng dụng của bạn để đảm bảo việc tăng trưởng cho thương hiệu của bạn.</p>
                                        <a href="#" class="btn-simple btn-simple-red">Đọc Tiếp</a>
                                    </div>
                                    <div class="sw-list-col">
                                        <ul class="bullet-service-list">
                                            <li><a href="#">Chiến lược xây dựng ứng dụng di động.</a></li>
                                            <li><a href="#">Thiết kế ứng dụng di động.</a></li>
                                            <li><a href="#">Xây dựng ứng dụng di động.</a></li>
                                            <li><a href="#">Tiếp thị ứng dụng di động.</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
    @endsection
@section('script')
    <script type="text/javascript" src="js/production.min.js"></script>
    <script type="text/javascript" src="js/newsletter.js"></script>
    <script type="text/javascript" src="js/snap.svg-min.js"></script>
    <script type="text/javascript" src="js/services-anim.min.js"></script>
    @endsection