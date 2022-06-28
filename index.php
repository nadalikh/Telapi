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
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2  -translate-y-1/2 grid grid-cols-2 grid-rows-1 justify-center w-1/2">
            <form method="post" class="w-2/3 m-auto">
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block w-full" for="userid">Telegram Id (as your username)</label>
                    <input class="text-neutral-50 block w-full ms-wrapper" type="text" name="userid" id="userid" placeholder="Your telegram id with out @">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block " for="p1">password</label>
                    <input class="text-neutral-50 block w-full ms-wrapper" type="password" name="p1" id="p1">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block" for="p2">password confirmation</label>
                    <input class="text-neutral-50 block w-full ms-wrapper" type="password" name="p2" id="p2">
                </div>
                <div class="ms-wrapper">
                <label class="text-neutral-50 block" for="cars">Your voip extention</label>
                <select class="text-neutral-50 block w-full ms-wrapper" name="cars" id="cars">
                    <option class="text-neutral-50 " value="volvo">Volvo</option>
                    <option class="text-neutral-50 " value="saab">Saab</option>
                    <option class="text-neutral-50 " value="mercedes">Mercedes</option>
                    <option class="text-neutral-50 " value="audi">Audi</option>
                </select>
                </div>
                <div class="ms-wrapper">
                    <input class="text-neutral-50 " type="submit" name="signup" value="signup">
                </div>
            </form>
            <form method="post" class="w-2/3 m-auto">
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block " for="userid">username</label>
                    <input class="text-neutral-50 block w-full ms-wrapper" type="text" name="userid" id="userid" placeholder="Your telegram id with out @">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block" for="p">password</label>
                    <input class="text-neutral-50 block w-full ms-wrapper" type="password" name="p" id="p">
                </div>
                <input class="text-neutral-50 block " type="submit" value="signin" name="login">
            </form>
        </div>
    </div>
</body>
</html>
