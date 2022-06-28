<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.17.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>NKH call center</title>
</head>

<body>
    <div class="ms-full-height ms-img-background w-full bg-cover bg-no-repeat bg-center">
        <div class="ms-darkbackground w-full h-full">
            <div class="grid grid-flow-col auto-cols-max justify-center gap-2.5">
                <a href="#desktop" class="text-neutral-50 ms-nav-item block m-3 px-5 py-3 rounded-md transition-all">Desktop</a>
                <a href="#mobile" class="text-neutral-50 ms-nav-item block m-3 px-5 py-3 rounded-md transition-all">Mobile</a>
            </div>
        </div>
        <form>
            <label for="userid">Telegram Id (as your username)</label>
            <input type="text" name="userid" id="userid" placeholder="Your telegram id with out @">
            <label for="p1">password</label>
            <input type="password" name="p1" id="p1">
            <label for="p2">password confirmation</label>
            <input type="password" name="p2" id="p2">
            <label for="cars">Your voip extention</label>
            <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </form>
    </div>
</body>
</html>
