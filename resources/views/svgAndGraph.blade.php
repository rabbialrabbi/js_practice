<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://findmatthew.com/style/style.css">
    <link rel="stylesheet" href="http://findmatthew.com/fonts/mdi/css/materialdesignicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="{{asset('/pts.js')}}"></script>
    <script src="{{asset('/modal.js')}}"></script>
</head>
<body>

{{--<div style="background-color: black" >--}}
{{--    <svg--}}
{{--        preserveAspectRatio="none"--}}
{{--        viewBox="0 0 100 102"--}}
{{--        height="75"--}}
{{--        width="100%"--}}
{{--        version="1.1"--}}
{{--        xmlns="http://www.w3.org/2000/svg"--}}
{{--        class="svgcolor-light"--}}
{{--    >--}}
{{--        <path d="M0 0 L50 100 L100 0 Z" fill="white" stroke="white"></path>--}}
{{--    </svg>--}}
{{--</div>--}}

<div>
    <section id="home" class="flex height-fix">
        <div id="pt" class="canvas"></div>
        <div class="flex">
            <div class="text">
                Hello, I'm <span class="highlight">Matthew Williams</span>.
                <br />
                I'm a full-stack web developer.
            </div>

            <div class="button page-link" dest="about">
                View my work <i class="mdi mdi-arrow-right"></i>
            </div>

            <nav class="flex">
                <div class="link-wrap">
                    <div class="active page-link" dest="home">home</div>
                    <div class="page-link" dest="about">about</div>
                    <div class="page-link" dest="portfolio">portfolio</div>
                    <div class="page-link" dest="blog">blog</div>
                    <div class="page-link" dest="contact">contact</div>
                </div>
                <i class="mdi mdi-menu"></i>
            </nav>
        </div>
    </section>
</div>

<script src="{{asset('canvas.js')}}"></script>


</body>
</html>

