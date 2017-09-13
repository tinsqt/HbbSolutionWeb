@extends('master')
@section('content')
<div id="home-slider-wrapper" class="home-slider-wrapper slider-activated">
    <div class="home-slider-content frame clearfix">
        <div class="hs-left">
            <div class="hsl-header">
                <div class="general-text">
                    <h1 class="wow bounceInLeft">{{trans('home.ttnt')}}</h1>
                    {!!trans('home.xdweb')!!}
                </div>
                <div class="hsl-subcaption wow bounceInRight">

                    <p>{!!trans('home.ptthuonghieu')!!}</p>
                </div>
            </div>
            <div id="home-slider" class="home-slider active-item-1 activated">
                <ul class="slides">
                    <li><img src=" images/home-top/header-anim-screen.png" alt="" height="90%"/></li>
                </ul>
                <div id="hs-items-desc" class="hs-items-desc hidden">
                    <div class="hs-items-logo">
                        <img class="logo-engel" src=" images/home-top/logo-engel.png" alt=""/>
                        <img class="logo-aol" src=" images/home-top/logo-aol.png" alt=""/>
                        <img class="logo-paul" src=" images/home-top/logo-paul-stuart.png" alt=""/>
                    </div>
                    <div class="hs-items-texts">
                        <div class="hs-item-text">
                            <p>From their early beginning as a real estate boutique in Germany, Engel &amp; Völkers
                                has grown into one of the world’s largest and most respected luxury real estate
                                companies.</p>
                                <a class="hs-btn" target="_blank" href="http://www.evre.nyc/">VIEW PROJECT <span class="icon">&raquo;</span></a>
                                </div>
                                <div class="hs-item-text">
                                    <p>In an effort to expand its advertising networks AOL launched AOL On, a new video
                                        network for curated and unique entertainment content. </p>
                                        <a data-hash-id="aol" class="js-hs-btn hs-btn" href="#link">VIEW PROJECT <span class="icon">&raquo;</span></a>
                                    </div>
                                    <div class="hs-item-text">
                                        <p>For over seven decades, Paul Stuart been a purveyor of some of the finest clothing to be found anywhere in the world.</p>
                                        <a data-hash-id="paulstuart" class="js-hs-btn hs-btn" href="#link">VIEW PROJECT <span class="icon">&raquo;</span></a>
                                    </div>
                                </div>
                                <div class="hs-control-nav">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <div class="control-nav-item" id="hs-demo-lnk"></div>
                                </div>
                                <ul class="hs-direction-nav">
                                    <li class="prev"></li>
                                    <li class="next"></li>
                                </ul>
                            </div>
                        </div>

                        <a href="#" class="btn-raq wow tada">{{trans('home.web_content')}}</a>
                    </div>
                </div>
                <div class="hs-sub-row">
                    <div class="frame">
                        <img src=" images/img-doitac/logo-05.png" alt="" class="hs-sub-item hs-item-ima" width="130"
                        height="130"/>
                        <img src=" images/img-doitac/logo-31.png" alt="" class="hs-sub-item hs-item-google" width="130"
                        height="130"/>
                    </div>
                </div>

                <div class="home-company-logos-wrapper container" style="padding: 0px">
                    @foreach($clients as $key => $client)
                    @if($key < 6)
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <img src=" images/img-doitac/{{$client->image}}">
                    </div>
                    @endif
                    @endforeach
                </div>

                <a id="init-slider" class="init-slider" href="#link"></a>
            </div>


            <div class="solutions-section shadow">

                <div class="frame frame-wide">
                    <h2 class="wow bounceInDown">{!!trans('home.slogan')!!}</h2>
                    <div class="list">
                        <div class="d-block-tablet ">
                            @foreach($sevices as $key=>$sevice)
                            <div class="d-block-mobile">
                                <div class="item mobile wow @if($key=0){{'bounceInLeft'}} @else {{'bounceInRight'}} @endif">
                                    <div class="ih-item circle effect3 left_to_right"><a href="#">
                                        <div class="img"><img src=" images/logos/{{$sevice->image}}" alt="img"></div>
                                        <div class="info">
                                            <h3>{{$sevice->abbreviate}}</h3>
                                            <p>{{$sevice->title_vi}}</p>
                                        </div>
                                    </a></div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>

            <div class="feat-expanded-section" id="obj1">
                <a href="#obj1" class="go-next-step step-color-dark step-border-white js-next-step" style="background-image:url('images/down.png');
                background-size:cover;">

            </a>

            <div class="feat-section-frame feat-home">
                <div class="section-title in-dark">
                    <h2><span>{!!trans('home.duannoibat')!!}</span></h2>
                    <p>{{trans('home.thanhcong')}}</p>
                </div>

                <div class="clearfix js-expanded-section-bottom js-expanded-section" data-mode="">

                    <div class="es-items clearfix">

                        <!-- 1 -->
                        @foreach($featured_projects as $key=>$featured_project)
                        <div class="js-es-item js-es-item-1 tab-lnk show-in-mobile">
                            <a data-hash-id="aol" href="#" class="js-es-lnk">
                                <span class="show-in-desktop an-item @if($key=0){{'an-aol'}}@elseif($key=1){{'an-amf'}}@else{{'an-serviceking'}}@endif">
                                    <span style="background: url('images/projects/{{$featured_project->image}}')50% 0/100% auto no-repeat;"
                                      class="bg"></span>
                                      <span style="background: url('images/projects/{{$featured_project->image}}')50% 0/100% auto no-repeat;"
                                          class="an-brand"></span>
                                      </span>
                                      <img class="show-in-tablet show-in-mobile"
                                      src="images/projects/{{$featured_project->image}}" alt="Aol Logo"
                                      width="353" height="304"/>
                                  </a>
                              </div>
                              @endforeach


                              <div class="bfm-awards ready-discuss js-es-item js-es-item-1 tab-lnk txt-tab-lnk">
                                <div class="holder">
                                    <div class="txt">{!!trans('home.sansang')!!}
                                    </div>
                                    <a href="#" class="btn-green">{{trans('home.lienhengay')}}</a>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>


            <div class="industry-section">
                <div class="frame">
                    <h2>{!!trans('home.wephucvu')!!}</h2>
                    <p class="subheading">{!!trans('home.wedungdau')!!}</p>
                    <div class="content">
                        <ul class="list">
                            <li><a class="startups">AI</a></li>
                            <li><a class="ecommerce">E-Commerce</a></li>
                            <br class="show-in-mobile">
                            <li><a class="enterprise">{{trans('home.doanhnghiep')}}</a></li>
                            <li><a class="education">{{trans('home.giaoduc')}}</a></li>
                            <br class="show-in-mobile">
                            <li><a class="profit">{{trans('home.philoinhuan')}}</a></li>

                        </ul>
                        <div class="industry-expand-list js-ind-slide">
                            <ul>

                                <li><a>Nhà hàng</a></li>
                                <li><a>Bất Động Sản</a></li>
                                <li><a>Spa</a></li>
                                <li><a>Sang Trọng</a></li>
                                <li><a>Công Ty Nhỏ</a></li>
                                <li><a>Thương Mại Điện Tử</a></li>
                                <li><a>Sức Khỏe</a></li>
                                <li><a>Giải Trí</a></li>
                                <li><a>Dịch Vụ Công Nghệ</a></li>


                            </ul>
                        </div>
                        <a href="#link" class="button js-ind-open">{{trans('home.xemthem')}}</a>
                    </div>

                </div>
            </div>

            <div id="obj2" class="full-services-section">
                <a href="#obj2" class="go-next-step step-color-light-grey step-border-blue js-next-step" style="background-image:url(' images/down.png');
                background-size:cover;">

            </a>
            <div class="fss-frame">
                <h2>
                    {!!trans('home.3buoc')!!}
                </h2>
                <div id="fss-tabs" class="fss-active-0">
                    <ul class="jq-tabs services-tabs">
                        <li>
                            <a href="#web-traffic">
                                <span class="fss-step-number">
                                    <strong><em>1</em></strong>
                                </span>
                                <span class="tab-text">
                                  {{$approachs[0]->title_vi}}
                              </span>
                          </a>
                      </li>
                      <li>
                        <a href="#customer">
                            <span class="fss-step-number">
                                <strong><em>2</em></strong>
                            </span>
                            <span class="tab-text">
                              {{$approachs[1]->title_vi}}
                          </span>
                      </a>
                  </li>
                  <li>
                    <a href="#customer-value">
                        <span class="fss-step-number">
                            <strong><em>3</em></strong>
                        </span>
                        <span class="tab-text">
                            {{$approachs[2]->title_vi}}
                        </span>
                    </a>
                </li>
            </ul>
            <div class="progress-filler">
                <span class="progress-indicator">
                    <span class="progress-active"></span>
                </span>
            </div>
            <div class="tabs-content">
                <div id="web-traffic" class="jq-tab-box clearfix">
                    <div class="tabs-column">

                        <p>{!! $approachs[0]->short_content_vi !!}</p>
                    </div>
                    <div class="tabs-column step">
                        <p>{!! $approachs[0]->content_vi !!}</p>
                    </div>
                </div>
                <div id="customer" class="jq-tab-box clearfix">
                    <div class="tabs-column step">
                        <p>{!! $approachs[1]->short_content_vi !!}</p>
                    </div>
                    <div class="tabs-column">
                        <p>{!! $approachs[1]->content_vi !!}</p>
                    </div>
                </div>
                <div id="customer-value" class="jq-tab-box clearfix">
                    <div class="tabs-column">
                        <p>{!! $approachs[2]->short_content_vi !!}.</p>
                    </div>
                    <div class="tabs-column step">
                        <p>{!! $approachs[2]->content_vi !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<div id="obj4" class="lead-box">
    <a href="#obj4" class="go-next-step step-border-light-grey step-color-white js-next-step" style="background-image:url(' images/down.png');
    background-size:cover;">

</a>
<div class="container">
    <div class="section-title">
        <h2><strong>{{trans('home.tintuc')}}</strong></h2>
    </div>
    <div class="lead-sections">

        <div class="lead-col">
            <div class="ttl">
                <h3>Press</h3>
            </div>
            <div class="t-holder">

                <div class="divider"></div>

                <div class="de-blog-item">
                    <a class="de-blog-img" href="#">
                        <span class="overflow">
                            <img src="images/press/{{$press->image}}" class="img-responsive"
                            alt="{{$press->title_blog_vi}}">
                        </span>
                    </a>
                    <div class="de-text">
                        <div class="de-text-frame">
                            <div class="tag">{{$press->abbreviate}}</div>
                            <div class="de-blog-title">
                                <a href="#">
                                    {{$press->title_blog_vi}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="read-more-anim"
                    href="#"><span>{{trans('home.docthem')}}</span></a>
                </div>
                <div class="divider"></div>
            </div>
            <div class="shadow">
                <a class="btn-raq" href="#">{{trans('home.allpress')}}</a>
            </div>
        </div>

        <div class="lead-col">
            <div class="ttl">
                <h3>Blog</h3>
            </div>
            <div class="t-holder">

                <div class="divider"></div>
                <div class="de-blog-item">
                    <a class="de-blog-img" href="#">
                        <span class="overflow">
                            <img src="images/blog/{{$blogs->image}}" class="img-responsive"
                            alt="Cách mà một ứng dụng di động có thể giúp bạn quản lý sức khỏe của mình">
                        </span>
                    </a>
                    <div class="de-text">
                        <div class="de-text-frame">
                            <div class="tag">{{$blogs->abbreviate}}</div>
                            <div class="de-blog-title">
                                <a href="#">
                                    {{$blogs->title_blog_vi}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="read-more-anim" href="#"><span>{{trans('home.docthem')}}</span></a>
                </div>
                <div class="divider"></div>
            </div>
            <div class="shadow">
                <a class="btn-raq" href="#">{{trans('home.allblog')}}</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection