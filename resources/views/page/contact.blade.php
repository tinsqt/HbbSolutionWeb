@extends('master')
@section('css')
    <link href="css/style_v3.39e08954.min.css" media="screen" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div id="main">
        <div class="bg_grnd bg_grnd_solid">
            <div class="content_holder">
                <div class="top-page-panel top-page-panel-visible">
                    <div class="frame clearfix">
                        <div class="tpp-heading">
                            <h1>{!!trans('home.lienheus')!!}</h1>

                        </div>
                    </div>
                </div>
                <div class="contact-holder">
                    <div class="frame clearfix">
                        <div class="ch-form">
                            <form method="post" action="contact-us" class="jq-contact-form">
                                <fieldset class="fancy-form">
                                    <div class="f-row">
                                        <div class="field-title clearfix">
                                            <span class="label">{{trans('home.hoten')}}</span>
                                            <span class="req">*</span>
                                        </div>
                                        <div class="ff-input">

                                            <input type="text" name="Name" id="Name" value="" placeholder=""></div>
                                    </div>
                                    <div class="f-row">
                                        <div class="field-title clearfix">
                                            <span class="label">Email</span>
                                            <span class="req">*</span>
                                        </div>
                                        <div class="ff-input">

                                            <input type="text" name="Email" id="Email" value="" placeholder=""></div>
                                    </div>
                                    <div class="f-row">
                                        <div class="field-title clearfix">
                                            <span class="label">{{trans('home.sdt')}}</span>
                                        </div>
                                        <div class="ff-input">

                                            <input type="text" name="Phone" id="Phone" value="" placeholder=""></div>
                                    </div>
                                    <div class="f-row">
                                        <div class="field-title clearfix">
                                            <span class="label">{{trans('home.company')}}</span>
                                        </div>
                                        <div class="ff-input">

                                            <input type="text" name="Company" id="Company" value="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="f-row">
                                        <div class="field-title clearfix">
                                            <span class="label">{{trans('home.noidung')}}</span>
                                        </div>
                                        <div class="ff-textarea">

                                            <textarea name="Comment" id="Comment" placeholder="" cols="50"
                                                      rows="5"></textarea></div>
                                    </div>
                                    <div class="f-row clearfix">

                                    </div>
                                    <div class="f-row">
                                        <div class="ff-submit">
                                            <input type="submit" value="{{trans('home.send')}}" class="ff-btn-submit"/>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="ch-contacts-details">
                            <ul class="contact-list">
                                <li class="addr">
                                    <strong class="title">{{trans('home.hcmc')}}</strong>
                                    <p>{!!trans('home.infoadr')!!}</p>
                                </li>
                                <li class="phone">
                                    <p>{{trans('home.llus')}}</p>
                                    <strong class="title">(+84) 8 225 324 89</strong>
                                </li>
                                <li class="fax">
                                    <p>Email</p>
                                    <strong class="title">info@hbbsolution.com</strong>
                                </li>
                            </ul>
                            <div class="hiring-box">
                                <strong class="title">{{trans('home.tuyendung')}}</strong>
                                <p>{{trans('home.phongvan')}}</p>
                                <p><a href="careers.php" class="arrow-link">{{trans('home.chitiet')}} </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection