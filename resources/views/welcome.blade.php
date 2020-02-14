<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

    <div id="list">Hello World</div>
    <button onclick="loadDoc()">Click Here</button>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
{{--    axios is a ajex library--}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function loadDoc() {
            var posts = [
                {title:'First title', body:'First title body'},
                {title:'First title', body:'First title body'}
            ];

            function firstCall(){
                setTimeout(()=>{
                    var q = '';
                    posts.forEach((posts)=>{
                        q += `<li>${posts.title}</li>`})
                    document.getElementById('list').innerHTML= q
                },1000)
            }

            function secondCall(callBack) {
                setTimeout(()=>{
                    posts.push({title:'Third title',body:'Third title body'})
                    console.log(posts);
                    callBack();
                },2000)
            }

            secondCall(firstCall);
        }



    </script>
    </body>
</html>
