
<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="px-36">
        <div class="flex bg-black py-4">
            <ul class="flex ml-auto items-center gap-4">
                <?php
                    if(isset($_SESSION["users_id"])) {
                ?>
                    <li class="text-white">
                        <a href="#"><?php echo $_SESSION["username"]; ?></a>
                    </li>
                    <li class="px-6 py-2 bg-blue-500 rounded-lg mr-2">
                        <a href="includes/logout.php">Logout</a>
                    </li>
                <?php
                    } 
                    else
                    {
                ?>
                    <li class="text-white">
                        <a href="#">Register</a>
                    </li>
                    <li class="px-6 py-2 bg-blue-500 rounded-lg mr-2">
                        <a href="#">Login</a>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <div class="flex justify-between mt-10">
            <div>
                <p class="text-3xl font-medium">Register</p>
                <p class="mt-2 text-zinc-500">Don't have account yet? Sign up here?</p>
                <form method="post" action="includes/register.php">
                    <input type="text" name="username" placeholder="Username..." class="mt-2 border border-zinc-300 rounded-md px-4 py-1 w-full">
                    <br/>
                    <input type="password" name="password" placeholder="Password..." class="my-2 border border-zinc-300 rounded-md px-4 py-1 w-full">
                    <br/>
                    <input type="password" name="password_confirmation" placeholder="Confirm password..." class="mb-2 border border-zinc-300 rounded-md px-4 py-1 w-full">
                    <br/>
                    <input type="text" name="email" placeholder="Email..." class="mb-2 border border-zinc-300 rounded-md px-4 py-1 w-full">
                    <br/>
                    <div class="w-full flex">
                        <button type="submit" name="submit" class="bg-blue-600 text-white px-4 py-1 rounded-lg my-6 ml-auto">SIGN UP</button>
                    </div>
                </form>
            </div>
            <div class="bg-zinc-800 px-20 py-4 rounded-lg">
                <p class="text-3xl font-medium text-center text-white">Login</p>
                <p class="mt-2 text-zinc-500 text-white">Don't have account yet? Sign up here?</p>
                <form method="post" action="includes/login.php">
                    <input type="text" name="username" placeholder="Username..." class="mt-2 border border-zinc-300 rounded-md px-4 py-1 w-full">
                    <br/>
                    <input type="password" name="password" placeholder="Password..." class="my-2 border border-zinc-300 rounded-md px-4 py-1 w-full">
                    <div class="w-full flex">
                        <button type="submit" name="submit" class="bg-blue-600 text-white px-4 py-1 rounded-lg my-6 ml-auto">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>