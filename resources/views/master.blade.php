<!doctype html lang="en">
<head>

    <meta charset="utf-8">
    <title>HBB Solutions - Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}">
    <link type="icon" href="images/fav.ico">
    <script async="true" type="text/javascript" src="js/_biz-a.js" ></script>
    <link href="css/ihover.css" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="js/conversion.js"> </script>
    @yield('css')
    <link href="css/home.833fea7b.min.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="css/animate.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >
    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">

    <script>
        new WOW().init();
    </script>

    <style>
        body{

            overflow-x:hidden;
        }
    </style>
</head>
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5875b348926a51336fdc1c4c/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<div class="wrapper wrapper-textured">
    @include('header')
    @yield('content')
</div>
@include('footer')
@include('scripts')
@yield('script')
</body>
</html>
