<?php
session_start();
include_once "./backend/db.php";
$stmt = $pdo->query('SELECT * FROM people');
$people = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'Includes/header.php'; ?>
</head>

<body class="bg-gradient-to-r from-red-400 to-red-900">
    <?php include 'Includes/navbar.php'; ?>
    <!-- ====== Dashboard Section Start -->
    <!-- Page title starts -->
    <div class="mt-24 w-full">
        <div class="container px-6 py-6 sm:py-0 mx-auto">
            <ul class="flex flex-row pt-8">
                <li role="listitem" class="rounded-lg w-32 h-12 flex items-center justify-center bg-white text-sm text-black"><a href="javascript:void(0)">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <!-- Page title ends -->
    <div class="container mx-auto px-6 mt-10 ">
        <div class="w-full h-full rounded border-dashed border-2 p-6 border-gray-300">

            <!-- Card is full width. Use in 12 col grid for best view. -->
            <!-- Card code block start -->
            <div class="w-full grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <a aria-label="card 1" href="javascript:void(0)" class="bg-white rounded">
                    <div class="shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg3.svg" alt="icon" />
                        </div>
                        <?php
                        // Define the position you want to count
                        $positionToCount = 'Engineer'; // Change this to the position you're interested in
                        // Prepare and execute the SQL query to count the specific position or NULLs
                        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM people WHERE position = :position");
                        $stmt->execute(['position' => $positionToCount]);
                        // Fetch the count
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $count = $result['count'];
                        // Determine the correct pluralization
                        $positionToCountPlural = $count > 1 ? $positionToCount . 's' : $positionToCount;
                        ?>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-black font-bold text-2xl"><?php echo $count; ?></h3>
                            <p class="text-gray-700 text-sm tracking-normal font-normal leading-5"><?php echo $positionToCountPlural ?></p>
                        </div>
                    </div>
                </a>
                <a aria-label="card 2" href="javascript:void(0)" class="bg-white rounded">
                    <div class=" shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded text-white">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg3.svg" alt="icon" />
                        </div>
                        <?php
                        // Define the position you want to count
                        $positionToCount = 'Doctor';
                        // Prepare and execute the SQL query to count the specific position or NULLs
                        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM people WHERE position = :position");
                        $stmt->execute(['position' => $positionToCount]);
                        // Fetch the count
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $count = $result['count'];
                        // Determine the correct pluralization
                        $positionToCountPlural = $count > 1 ? $positionToCount . 's' : $positionToCount;
                        ?>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-black font-bold text-2xl"><?php echo $count; ?></h3>
                            <p class="text-gray-700 text-sm tracking-normal font-normal leading-5"><?php echo $positionToCountPlural ?></p>
                        </div>
                    </div>
                </a>
                <a aria-label="card 3" href="javascript:void(0)" class="bg-white rounded">
                    <div class=" shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded text-white">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg3.svg" alt="icon" />
                        </div>
                        <?php
                        // Define the position you want to count
                        $positionToCount = 'Nurse';
                        // Prepare and execute the SQL query to count the specific position or NULLs
                        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM people WHERE position = :position");
                        $stmt->execute(['position' => $positionToCount]);
                        // Fetch the count
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $count = $result['count'];
                        // Determine the correct pluralization
                        $positionToCountPlural = $count > 1 ? $positionToCount . 's' : $positionToCount;
                        ?>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-black font-bold text-2xl"><?php echo $count; ?></h3>
                            <p class="text-gray-700 text-sm tracking-normal font-normal leading-5"><?php echo $positionToCountPlural ?></p>
                        </div>
                    </div>
                </a>
                <a aria-label="card 4" href="javascript:void(0)" class="bg-white rounded">
                    <div class="shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded text-white">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg3.svg" alt="icon" />
                        </div>
                        <?php
                        // Define the position you want to count
                        $positionToCount = 'Journalist';
                        // Prepare and execute the SQL query to count the specific position or NULLs
                        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM people WHERE position = :position");
                        $stmt->execute(['position' => $positionToCount]);
                        // Fetch the count
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $count = $result['count'];
                        // Determine the correct pluralization
                        $positionToCountPlural = $count > 1 ? $positionToCount . 's' : $positionToCount;
                        ?>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-black font-bold text-2xl"><?php echo $count; ?></h3>
                            <p class="text-gray-700 text-sm tracking-normal font-normal leading-5"><?php echo $positionToCountPlural ?></p>
                        </div>
                    </div>
                </a>
                <a aria-label="card 4" href="javascript:void(0)" class="bg-white rounded">
                    <div class="shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded text-white">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg3.svg" alt="icon" />
                        </div>
                        <?php
                        // Define the position you want to count
                        $positionToCount = 'Social Worker';
                        // Prepare and execute the SQL query to count the specific position or NULLs
                        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM people WHERE position = :position");
                        $stmt->execute(['position' => $positionToCount]);
                        // Fetch the count
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $count = $result['count'];
                        // Determine the correct pluralization
                        $positionToCountPlural = $count > 1 ? $positionToCount . 's' : $positionToCount;
                        ?>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-black font-bold text-2xl"><?php echo $count; ?></h3>
                            <p class="text-gray-700 text-sm tracking-normal font-normal leading-5"><?php echo $positionToCountPlural ?></p>
                        </div>
                    </div>
                </a>
                <a aria-label="card 4" href="javascript:void(0)" class="bg-white rounded">
                    <div class="shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded text-white">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg3.svg" alt="icon" />
                        </div>
                        <?php
                        // Define the position you want to count
                        $positionToCount = 'Teacher';
                        // Prepare and execute the SQL query to count the specific position or NULLs
                        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM people WHERE position = :position");
                        $stmt->execute(['position' => $positionToCount]);
                        // Fetch the count
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $count = $result['count'];
                        // Determine the correct pluralization
                        $positionToCountPlural = $count > 1 ? $positionToCount . 's' : $positionToCount;
                        ?>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-black font-bold text-2xl"><?php echo $count; ?></h3>
                            <p class="text-gray-700 text-sm tracking-normal font-normal leading-5"><?php echo $positionToCountPlural ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card code block end -->
            <!-- Charts Section -->
            <div class="col-span-12 mt-8">
                <div class="grid gap-2 grid-cols-1 lg:grid-cols-2">
                    <div class="bg-white shadow-lg rounded-lg flex justify-center items-center p-4 w-full" id="gender_chart"></div>
                    <div class="bg-white shadow-lg rounded-lg flex justify-center items-center p-4 w-full" id="position_chart"></div>
                </div>
            </div>
            <div class="col-span-12 mt-8">
                <div class="grid grid-cols-1">
                    <div class="bg-white shadow-lg rounded-lg flex justify-center items-center p-4 w-full" id="bar_chart"></div>
                </div>
            </div>
            <!-- Charts Section End -->
            <!---Table--->
            <div>
                <div class="rounded-lg bg-white mt-14">
                    <span class="item-center  self-center text-xl sm:text-xl md:text-2xl p-2 lg:text-3xl xl:text-5xl font-semibold whitespace-nowrap">
                        <span style="font-family: 'Elsie Swash Caps', serif; font-weight: 900; font-style: normal;">
                            <span class="text-center justify-center flex text- from-red-400 to-red-900">Profession Dbase</span>
                        </span>
                    </span>
                    <div class=" px-4 md:px-8">
                        <div class="mt-5 shadow-sm rounded-lg overflow-x-auto">
                            <table class="w-full table-auto text-sm text-left">
                                <thead class="text-gray-600 font-medium border-b">
                                    <tr>
                                        <th class="py-3 px-6 text-center">No</th>
                                        <th class="py-3 px-6 text-center">Name</th>
                                        <th class="py-3 px-6 text-center">Gender</th>
                                        <th class="py-3 px-6 text-center">Profession</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 divide-y">
                                    <?php if (!empty($people)) : ?>
                                        <?php foreach ($people as $index => $people) : ?>
                                            <tr class="odd:bg-gray-50 even:bg-white">
                                                <td class="px-6 py-4 whitespace-nowrap text-center"><?php echo $index + 1; ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center"><?php echo htmlspecialchars($people['full_name']); ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center"><?php echo htmlspecialchars($people['gender']); ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center"><?php echo htmlspecialchars($people['position']); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="6" class="px-6 py-4 text-center">No people found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!---End Table--->
        </div>
    </div>
    <!-- ====== Dashboard Section End -->
     <!-- ====== Dashboard scripts Start -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./JS/gender.js"></script>
    <script src="./JS/bar.js"></script>
    <script src="./JS/profession.js"></script>
     <!-- ====== Dashboard scripts End -->
</body>
<!-- ====== Footer Section Start -->
<?php include 'Includes/footer.php'; ?>
<!-- ====== Footer Section End -->

</html>