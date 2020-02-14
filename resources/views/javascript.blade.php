<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript Tutorial</title>
</head>
<body>
<div>
    <p>Hi It is the paragraph tag</p>
    <p>The time is Now: <span id="time"></span></p>
    <p>The Date is Now: <span id="date"></span></p>
    <p>The Day is Now: <span id="day"></span></p>
    <p>The hour is Now: <span id="hour"></span></p>
    <p>The Min is Now: <span id="min"></span></p>

    <p>And Your Age is : <span id="age"></span></p>


    <script>
        var today = new Date();
        document.getElementById('time').innerHTML = today.toString();
        document.getElementById('date').innerHTML = today.getDate();
        document.getElementById('day').innerHTML = today.getDay();
        document.getElementById('hour').innerHTML = today.getHours();
        document.getElementById('min').innerHTML = today.getMinutes();
        var birthday = new Date(1988, 10, 28);
        var result = today.getTime()-birthday.getTime();
        var age = result/31556900000;
        document.getElementById('age').innerHTML = Math.floor(age);



    </script>
</div>
</body>
</html>
