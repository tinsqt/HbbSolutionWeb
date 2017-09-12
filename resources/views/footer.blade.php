<div class="foot-area anim-section">
    <div class="rd-box-holder">
        <div class="rd-box stream">
            <strong class="txt">Sẵn sàng để thảo luận về dự án của bạn?</strong>
            <a class="btn-simple link-arrow" href="#">Liên Hệ Ngay</a>
        </div>
    </div>


    <div class="subscribe jq-newsletter-container">
        <strong class="ttl">Đăng ký để nhận những xu hướng công nghệ mới nhất.</strong>
        <div class="subscribe-form" id="footer-newsletter-form-container">
            <form id="footer-newsletter-form" action="javascript:void(0);" method="post">
                <div class="esu-input" id="footer-newsletter-container">

                    <input type="text"  name="email" id="email" value="" placeholder="Nhập email">            </div>
                <a class="btn-simple link-arrow" id="signUpBtn" href="#" onclick="thank();return false;" >Đăng ký</a>
                <input type="hidden" name="nl_type" value="nl_footer" />
            </form>
        </div>
        <div id="footer-newsletter-thankyou-container" class="thank-you-message" style="display: none;">
            Cảm ơn!
        </div>
        <div id="footer-newsletter-message" class="message" style="display: none;"></div>
    </div>
</div>
<div class="foot-anim foot-area anim-box">
    <div class="location-area">
        <div class="frame">
            <strong class="location-ttl">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 342 463">
                    <path d="M172 463s21-75 90-137c68-63 86-122 78-180C314-49 27-49 2 146c-8 58 10 117 78 180 68 62 92 137 92 137zm-2-401c59 0 106 47 106 106s-47 106-106 106S64 227 64 168 111 62 170 62z" />
                </svg>
                <span>Địa Chỉ</span>
            </strong>
            <div class="t-holder">
                <div class="location-cell t-cell loc-ny">
                    <div class="loc-visual">
                        <img width="363" height="174" src="images/home/3.jpg" alt="New York Headquarters">
                    </div>
                    <div class="loc-txt">
                        <address class="loc-address">
                            Lầu 3, Tòa nhà Jabels<br />
                            244 Cống Quỳnh, Quận 1
                            <br>Tp Hồ Chí Minh, Việt Nam.
                        </address>
                    </div>
                </div>

                <div class="location-cell t-cell loc-chicago">

                    <div class="loc-visual">
                        <img width="363" height="174" src="images/home/1.jpg" alt="New York Headquarters">
                    </div>
                    <div class="loc-txt">
                        <address class="loc-address">
                            Nevada 6671<br />
                            Las vegas Blvd, Suite 210
                            <br>NV 8911, USA.
                        </address>
                    </div>
                </div>
                <div class="location-cell t-cell loc-seattle">

                    <div class="loc-visual">
                        <img width="363" height="174" src="images/home/2.jpg" alt="New York Headquarters">
                    </div>
                    <div class="loc-txt">
                        <address class="loc-address">
                            New York 555<br />
                            Madison Ave, New York
                            <br>NY 10022, USA.
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg bg-chicago"></div>
        <div class="bg bg-seattle"></div>
        <div class="bg bg-ny"></div>
    </div>

    <div class="socials-box">
        <div class="frame">
            <div class="socials" style="padding: 10px">
                <div class="col-md-8 text-left ">
                    <h4 class="ttl">Tham Gia Mạng Xã Hội Với HBBS <a style="" class="soc-fb" target="_blank" href="https://www.facebook.com/hbbsolutions/">
                            <span class="icn"></span>
                        </a></h4>
                </div>
                <div class="col-md-4 text-left ">
                    <div class="">
                        <p style="color: #fff;font-size: 20px">Phone: (+84) 8 225 324 89</p>
                        <p style="color: #fff;font-size: 20px">Email: info@hbbsolution.com</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="f-menu-wrapper">
        <div class="f-menu-content frame">
            <ul class="fmc-list clearfix" id="TabmenuF">
                <li class="link"><a href="#">Sản Phẩm</a></li>
                <li class="link"><a href="#">Dịch Vụ</a></li>
                <li class="link"><a href="#">Đối tác</a></li>
                <li class="link"><a href="#">Giới Thiệu</a></li>
                <li class="link"><a href="#">Liên Hệ</a></li>

            </ul>
            <div class="fmc-copyright">
                <span class="fmcc-text">Copyright &copy; 2008 HBB Solutions, Inc, USA.<br> All Rights Reserved.</span>
            </div>
        </div>
    </div>
</div>
<script>
    $('#TabmenuF li a').on('click', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        $('#TabmenuF li').removeClass('active');
        $('#TabmenuF li a[href="' + activeTab + '"]').parents('li').addClass('active');
    }
</script>
