<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home page</title>
</head>

<body>
    <div>
        <div class="w-screen h-screen relative">
            <img src="../assets/img/parking.jpg" alt="Parkir" />
            <div class="absolute w-96 bottom-[30vh] ml-[30rem]">
                <div class="flex items-center">
                    <div class="py-14 ml-[10vh] text-3xl font-semibold text-zinc-100">
                        LOG IN E PARKING
                    </div>
                </div>
                <form class="justify-items-center bg-transparent rounded-xl">
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-[20px] font-semibold text-white">Email address</label>
                        <input type="email " id="email "
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="nuruldwipajriah@gmail.com " required />
                    </div>
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            password</label>
                        <input type="password" id="password"
                            class="bg-gray-50 border border-gray-300 rounded-lg text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">
                    </div>
                    <a href="../index/index.php" type="btn"
                        class=" text-white bg-blue-200 hover:bg-blue-500 focus:ring-3 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-3 py-2 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOG_IN</a>

                    <a href="../register/register.php" type="btn"
                        class="  ml-6 text-white bg-blue-200 hover:bg-blue-500 focus:ring-3 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800">REGISTER</a>

                </form>
            </div>
        </div>
    </div>
</body>

</html>