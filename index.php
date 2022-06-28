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
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-cols-2 grid-rows-1 justify-center w-1/2">
            <form method="post" class="w-full m-auto" style="border-right: 1px solid aliceblue;">
                <h3 class="text-neutral-50 text-center font-bold">Signup</h3>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="userid">Telegram Id (as your username)</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="text" name="userid" id="userid" placeholder="Your telegram id with out @">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="p1">password</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="password" name="p1" id="p1" placeholder="Your password">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="p2">password confirmation</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="password" name="p2" id="p2" placeholder="Your password confirmation">
                </div>
                <div class="ms-wrapper">
                <label class="text-neutral-50 block text-center" for="cars">Your voip extention</label>
                <select class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" name="cars" id="cars">
                    <option class="text-neutral-50 bg-slate-800" value="volvo">Volvo</option>
                    <option class="text-neutral-50 bg-slate-800" value="saab">Saab</option>
                    <option class="text-neutral-50 bg-slate-800" value="mercedes">Mercedes</option>
                    <option class="text-neutral-50 bg-slate-800" value="audi">Audi</option>
                </select>
                </div>
                <div class="ms-wrapper">
                    <input class="text-neutral-50 btn m-auto block" type="submit" name="signup" value="signup">
                </div>
            </form>
            <form method="post" class="w-full m-auto">
                <h3 class="text-neutral-50 text-center font-bold">Signin</h3>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="userid-s">username</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="text" name="userid" id="userid-s" placeholder="Your telegram id with out @">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="p">password</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="password" name="p" id="p" placeholder="Your password">
                </div>
                <div class="ms-wrapper">
                    <input class="text-neutral-50 btn m-auto block" type="submit" value="signin" name="login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
