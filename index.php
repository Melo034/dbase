<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'Includes/header.php'; ?>
</head>

<body class="bg-gradient-to-r from-red-400 to-red-900">
    <?php include 'Includes/navbar.php'; ?>
    <!-- ====== Form Section Start -->
    <main
        class="w-full h-screen flex flex-col relative space-y-8 p-5 lg:px-20 flex flex-col md:flex-row items-center justify-center">
        <div class="w-full space-y-6 text-gray-600 sm:max-w-md">
            <div class="text-center">
                <span class="self-center text-xl sm:text-xl md:text-2xl lg:text-3xl xl:text-5xl font-semibold whitespace-nowrap">
                    <span style="font-family: 'Elsie Swash Caps', serif; font-weight: 900; font-style: normal;">
                        <span class="text-white">Profession Dbase</span>
                    </span>
                </span>
            </div>
            <div class="bg-white shadow p-4 py-6 sm:p-6 sm:rounded-lg">
                <?php if (isset($_GET['message'])) : ?>
                    <div id="alert-3" class="flex item-center bg-gradient-to-r from-lime-500 via-lime-600 to-lime-700 text-white p-2 rounded mt-2" role="alert">
                        <div class="ms-3 text-sm font-medium">
                            <?= htmlspecialchars($_GET['message']); ?>
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 text-white p-1.5 inline-flex items-center justify-center alert-del h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['error'])) : ?>
                    <div id="alert-4" role="alert" class="flex items-center bg-gradient-to-r from-red-500 via-red-600 to-red-700 text-white p-2 rounded my-2">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                            <?= htmlspecialchars($_GET['error']); ?>
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 text-white p-1.5 inline-flex items-center justify-center alert-del h-8 w-8" data-dismiss-target="#alert-4" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="./backend/post.php" method="POST" class="space-y-5">
                    <div>
                        <label class="font-medium">Name</label>
                        <input
                            type="text"
                            name="full_name"
                            required
                            class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                    </div>
                    <div>
                        <label class="font-medium">Select Gender</label>
                        <select id="gender" name="gender" class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg">
                            <option selected>Choose a Gender</option>
                            <option value="m">male</option>
                            <option value="f">female</option>
                            <option value="n">Prefer not to say</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-medium">Select Gender</label>
                        <select id="position" name="position" class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg">
                            <option selected>Choose a Profession</option>
                            <option value="d">Doctor</option>
                            <option value="f">Nurse</option>
                            <option value="e">Engineer</option>
                            <option value="j">Journalist</option>
                            <option value="sw">Social Worker</option>
                            <option value="t">Teacher</option>
                        </select>
                    </div>
                    <div class="justify-center pt-3 item-center flex ">
                        <button class="cursor-pointer inline-flex items-center rounded-full px-9 py-3 text-xl font-mono font-semibold text-rose-600 hover:text-white border-2 border-rose-600
                                hover:bg-rose-600 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-75 hover:bg-rose-600 duration-300  focus:bg-transparent">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- ====== Form Section End -->
    <!-- ====== Scripts Section Start -->
    <?php include 'Includes/scripts.php'; ?>
    <!-- ====== Scripts Section End -->
</body>
<!-- ====== Footer Section Start -->
<?php include 'Includes/footer.php'; ?>
<!-- ====== Footer Section End -->

</html>