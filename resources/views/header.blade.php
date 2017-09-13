<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<div class="header clearfix anim-start">
    <div class="frame clearfix fade-anim">
        <a href="#menu" class="open-m-menu"><span class="ir">Menu</span></a>
        <strong class="logo">
            <a href="{{asset('')}}"><img alt="Blue Fountain Media logo" src="images/logo1.png" width="300" height="60"></a>
        </strong>
        <div class="head-r-side">
            <div class="head-top clearfix">
                <div class="ht-nav ht-simplemenu">
                    <ul class="additional-nav">
                        <li ><a href="{{asset('')}}"><em class="arrow"></em><span>Blog</span></a></li>
                        <li ><a href="{{asset('')}}"><em class="arrow"></em><span>Press</span></a></li>
                        <li ><a href="language/en"><em class="arrow"></em><span><img src="images/flag_en.jpg" /></span></a></li>
                        <li ><a href="language/vi"><em class="arrow"></em><span><img src="images/flag_vn.jpg" /></span></a></li>
                    </ul>
                    <div class="search-line">
                        <div class="search-field">
                            <form action="search" id="cse-search-box2">
                                <div class="header_search_box_bg">
                                    <input name="q" id="q" maxlength="200" type="text" placeholder="Search" />
                                    <input type="submit" class="btn_search_top" name="sa" value="Search" style="display: none; "/>

                                    <input type="hidden" name="cx" value="005153606586280074192:arevx6pl1o0" />
                                    <input type="hidden" name="cof" value="FORID:10" />
                                    <input type="hidden" name="ie" value="UTF-8" />
                                </div>
                            </form>
                        </div>
                        <a href="#" class="search jq-open-search">tìm kiếm</a>
                    </div>
                    <a href="tel:08 225 324 89" class="phone"><em></em>(+84) 8 225 324 89</a>
                </div>
            </div>
        </div>
        <div class="hm-advancedmenu">
            <ul class="nav clearfix" id="Tabmenu">
                <li class="link">
                    <a href="san-pham-hbb.html">{{trans('home.product')}}</a>

                </li>
                <li class="link">
                    <a href="{{asset('')}}dich-vu-hbb.html">{{trans('home.service')}}</a>
                    <ul class="nav-submenu">

                        <li>
                            <a href="{{asset('')}}dich-vu-hbb.html">{{trans('home.gptm')}}</a>

                        </li>
                        <li>
                            <a href="{{asset('')}}dich-vu-hbb.html">{{trans('home.menuxd')}}</a>

                        </li>

                        <li>
                            <a href="{{asset('')}}dich-vu-hbb.html">{{trans('home.xdapp')}}</a>

                        </li>
                    </ul>
                </li>
                <li class="link ">
                    <a href="{{asset('')}}doi-tac-hbb.html">{{trans('home.client')}}</a>

                </li>
                <li class="link">
                    <a href="{{asset('')}}gioi-thieu-hbb.html">{{trans('home.about')}}</a>
                </li>
                <li class="link"><a href="{{asset('')}}lien-he-hbb.html">{{trans('home.contact')}}</a></li>
                <li class="p-box"><a href="tel:+84919580654" class="phone"><em></em>(+84) 8 225 324 89</a></li>
                <li ><a href="https://template.hbbsolution.com/" target="_blank" class="btn-raq wow tada" data-wow-duration="2s" data-wow-delay="0s"data-wow-iteration="50">{{trans('home.web')}}</a></li>
            </ul>
        </div>
    </div>
</div>
<nav id="menu" class="mobile-panel-menu">
    <div class="menu-title">
        <a href="#menu" class="open-m-menu"><span class="ir">Menu</span></a>
        <span>Menu</span>
    </div>
    <div class="mob-menus">
        <ul>
            <li>
                <a href="{{asset('')}}san-pham-hbb.html">Sản Phẩm</a>

            </li>

            <li>
                <a class="jq-has-drop" href="{{asset('')}}dich-vu-hbb.html">Dịch Vụ</a>
                <ul class="sub">


                    <li>
                        <a  href="{{asset('')}}">Giải Pháp Thông Minh</a>

                    </li>
                    <li>
                        <a  href="{{asset('')}}">Xây Dựng Web</a>

                    </li>

                    <li>
                        <a  href="{{asset('')}}">Xây Dựng Mobile Apps</a>

                    </li>
                </ul>
            </li>

            <li>
                <a href="{{asset('')}}doi-tac-hbb.html">Đối Tác</a>

            </li>

            <li>
                <a href="{{asset('')}}gioi-thieu-hbb.html">Giới Thiệu</a>

            </li>

            <li><a href="{{asset('')}}lien-he-hbb.html">Liên Hệ</a></li>

        </ul>

        <ul class="secondary-menu">

            <li><a href="{{asset('')}}">Blog</a></li>
            <li><a href="{{asset('')}}">Press</a></li>
            <li><a href="language/en"><img src="images/flag_en.jpg" /></a></li>
            <li><a href="language/vi"><img src="images/flag_vn.jpg" /></a></li>
        </ul>
    </div>
</nav>
<script>
    $('#Tabmenu li a').on('click', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        $('#Tabmenu li').removeClass('active');
        $('#Tabmenu li a[href="' + activeTab + '"]').parents('li').addClass('active');
    }
</script>
