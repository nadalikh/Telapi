<?php
include "classes/dbContext.php";
$db = new dbContext();
$extensions = $db->getExtensions();
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 grid grid-cols-2 grid-rows-1 justify-center w-2/3">
            <form id="signup-form" class="w-full m-auto" style="border-right: 1px solid aliceblue;">
                <h3 class="text-neutral-50 text-center font-bold">Signup</h3>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="userid">Telegram Id (as your username)</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="text" name="userid" id="userid" placeholder="Your telegram id with out @" pattern="[a-z0-9_]{5,}" title=" must be at least 5-characters long, and may consist only of a-z, 0–9, and underscores.">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="name">Name</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="text" name="name" id="name" placeholder="Your voip preferred voip name" pattern="[a-zA-Z]*{,25}" title="You'r name should consist maximum 25 alphabet character">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="p1">Password</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="password" name="p1" id="p1" placeholder="Your password" pattern="[a-zA-Z0-9@#$%&*_-]{5,}" title="you password can only consist of six or more alphabets, digits and @#$%&*_-.">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="p2">Password confirmation</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="password" name="p2" id="p2" placeholder="Your password confirmation" pattern="[a-zA-Z0-9@#$%&*_-]{5,}" title="you password can only consist of six or more alphabets, digits and @#$%&*_-.">
                </div>
                <div class="ms-wrapper">
                <label class="text-neutral-50 block text-center" for="extension">Your voip extension</label>
                <select class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" name="extension" id="extension">
                    <option class="text-neutral-50 bg-slate-800" disabled selected hidden value="Choose your preferred number">Choose your preferred number</option>
                    <?php foreach($extensions as $extension){ ?>
                        <option class="text-neutral-50 bg-slate-800" value="<?= $extension ?>"><?= $extension ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="ms-wrapper">
                    <button class="text-neutral-50 btn m-auto block" type="button" id="signup">signup</button>
                </div>
            </form>
            <form method="post" class="w-full m-auto">
                <h3 class="text-neutral-50 text-center font-bold">Signin</h3>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="userid-s">Username</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="text" name="userid" id="userid-s"  placeholder="Your telegram id with out @" pattern="[a-z0-9_]{5,}" title=" must be at least 5-characters long, and may consist only of a-z, 0–9, and underscores.">
                </div>
                <div class="ms-wrapper">
                    <label class="text-neutral-50 block text-center" for="p">Password</label>
                    <input class="outline-none text-neutral-50 block ms-transparent ms-input transition-all w-2/3 m-auto" type="password" name="p" id="p" placeholder="Your password" pattern="[a-zA-Z0-9@#$%&*_-]{5,}" title="you password can only consist of six or more alphabets, digits and @#$%&*_-.">
                </div>
                <div class="ms-wrapper">
                    <input class="text-neutral-50 btn m-auto block" type="submit" value="signin" name="login">
                </div>
            </form>
        </div>
    </div>
<script>
    var userid = $("#userid")
    var name = $("#name")
    var p1 = $("#p1")
    var p2 = $("#p2")
    var submitSignup = $("#signup");
    var signupForm = $("#signup-form");
    submitSignup.click(function (){
       signupForm[0].checkValidity();
        $.ajax({
            type: "POST",
            url: "./requests/singup.php",
            data: {
                method:"signup",
                userid:userid.val(),
                name:name.val(),
                p1:p1.val(),
                p2:p2.val (),
                extension:$('#extension').find(":selected").text(),
            },
            success: function(res, data){
                res = JSON.parse(res)
                swal(res.status ? "successfully done":"operation is failed", res.message, res.status ? "success":"error");
            },
        });


    })

</script>
</body>
</html>
