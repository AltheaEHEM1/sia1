<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/tabicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Novella</title>

    <style>
        html, body {
            overflow-x: hidden;  /* Prevent horizontal scrolling */
            width: 100%;          /* Ensure the body takes full width */
            height: 100%;         /* Make sure the body takes full height */
        }

        section {
            overflow-x: hidden;  /* Prevent overflow for section if needed */
        }
    </style>
</head>

<body class="bg-[#E4ECFF]">
        <nav class="flex items-center justify-between px-8 py-4 bg-[#011b33] sticky top-0 z-50">
                <!-- Logo -->
                <div class="flex-shrink-0">
                        <img src="./images/logo_login_headerC.png" alt="library logo" class="w-[135px]">
                </div>

                <!-- Centered Navigation Links -->
                <ul class="flex space-x-12 hidden md:flex">
                        <li><a href="/HOMElandingpage_customer" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-home mr-2"></i> Home</a></li>
                        <li><a href="/RESERVATIONreservation-page" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-calendar-alt mr-2"></i> Reservation</a></li>
                        <li><a href="/ABOUTUSpage" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-info-circle mr-2"></i> About Us</a></li>
                </ul>

                <!-- Right-aligned Shelf and My Account --->
                <div class="flex items-center space-x-12 hidden md:flex">
                        <a href="/SHELFpage" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-book mr-2"></i> Shelf</a>
                        
                        <!-- Notification Icon -->
                        <div class="relative">
                                <i id="notificationIcon" class="fa fa-bell text-white text-xl hover:text-[#028ABE] cursor-pointer"></i>
                                <!-- Notification Badge -->
                                <span id="notificationBadge" class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 bg-red-500 text-white text-xs font-bold rounded-full px-2 py-0.5">
                                5
                                </span>
                                <!-- Notification Box -->
                                <div id="notificationBox" class="absolute top-10 right-0 bg-white border border-gray-300 rounded-lg shadow-lg w-72 max-h-96 overflow-y-auto hidden z-50">
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">New message received</div>
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Your book is ready for pickup</div>
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Reminder: Return due tomorrow</div>
                                <div class="p-4 text-center text-gray-500">No more notifications</div>
                                </div>
                        </div>

                        <!-- My Account with Dropdown -->
                        <div class="relative">
                                <button id="dropdownToggle" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-user mr-2"></i> My Account</button>
                                <ul id="dropdownMenu" class="absolute hidden bg-[#011b33] text-white rounded-md shadow-lg mt-2 py-2 w-48">
                                        <li><a href="/PROFILEpage" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center"><i class="fa fa-user-circle mr-2"></i> Profile</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center"> <i class="fa fa-sign-out-alt mr-2"></i> Log Out</a></li>
                                </ul>
                        </div>
                        
                        <!-- My Account with Dropdown -->
                        <div class="relative">
                                <button id="dropdownToggle" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-user mr-2"></i> My Account</button>
                                <ul id="dropdownMenu" class="absolute hidden bg-[#011b33] text-white rounded-md shadow-lg mt-2 py-2 w-48">
                                        <li><a href="/PROFILEpage" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center"><i class="fa fa-user-circle mr-2"></i> Profile</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center"> <i class="fa fa-sign-out-alt mr-2"></i> Log Out</a></li>
                                </ul>
                        </div>
                </div>

                 <!-- Hamburger Menu Button and Icons (for mobile view) -->
                 <div class="flex items-center md:hidden space-x-4">
                        <!-- Notification Icon -->
                        <div class="relative">
                                <i id="mobileNotificationIcon" class="fa fa-bell text-white text-xl hover:text-[#028ABE] cursor-pointer"></i>
                                <span id="mobileNotificationBadge" class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 bg-red-500 text-white text-xs font-bold rounded-full px-2 py-0.5">
                                5
                                </span>
                                <div id="mobileNotificationBox" class="absolute top-10 right-0 bg-white border border-gray-300 rounded-lg shadow-lg w-64 max-h-96 overflow-y-auto hidden z-50">
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">New message received</div>
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Your book is ready for pickup</div>
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Reminder: Return due tomorrow</div>
                                <div class="p-4 text-center text-gray-500">No more notifications</div>
                                </div>
                        </div>

                        <button id="hamburgerMenu" class="text-white text-3xl">
                                <i class="fas fa-bars"></i>
                        </button>
                </div>
        </nav>


        <!-- Mobile Menu (hidden by default) -->
        <div id="mobileMenu" class="md:hidden fixed inset-0 bg-[#011b33] bg-opacity-90 z-50 flex flex-col items-center justify-center space-y-6 py-8 hidden">
                <!-- Close Button (X) -->
                <button id="closeMenu" class="absolute top-4 right-4 text-white text-3xl">
                        <i class="fas fa-times"></i>
                </button>

                <!-- Navigation Links -->
                <ul class="flex flex-col items-center space-y-6">
                        <li><a href="/HOMElandingpage_customer" class="text-white text-2xl hover:text-[#028ABE]">Home</a></li>
                        <li><a href="/RESERVATIONreservation-page" class="text-white text-2xl hover:text-[#028ABE]">Reservation</a></li>
                        <li><a href="/ABOUTUSpage" class="text-white text-2xl hover:text-[#028ABE]">About Us</a></li>
                        <li><a href="/SHELFpage" class="text-white text-2xl hover:text-[#028ABE]">Shelf</a></li>
                        <li><a href="/PROFILEpage" class="text-white text-2xl hover:text-[#028ABE]">Profile</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Log Out</a></li>
                </ul>
        </div>

        <main class="min-h-screen p-8 mb-0">
            <!-- Back Button -->
            <div class="flex justify-start mb-4 ml-4 sm:ml-8 md:ml-16 lg:ml-60 mt-16">
                <a href="/Hspecific_category" class="text-[#000] hover:text-[#028ABE] flex items-center">
                    <i class="fas fa-arrow-left"></i>
                    <span class="ml-2">Back</span>
                </a>
            </div>

            <!-- Book Details Section -->
            <div class="flex flex-col lg:flex-row lg:space-x-8 space-y-8 lg:space-y-0 mt-5 ml-4 sm:ml-16 md:ml-32 lg:ml-64 mr-4 sm:mr-8 md:mr-16 lg:mr-20">
                <!-- Book Image -->
                <div class="flex-shrink-0 w-40 mx-auto lg:w-48 lg:mx-0">
                    <img src="https://via.placeholder.com/150" alt="Noli Me Tangere" class="w-full h-72 rounded-lg shadow-md">
                </div>

                <!-- Book Information and Reserve Button -->
                <div class="flex-grow flex flex-col lg:flex-row items-start space-y-4 lg:space-y-0 lg:space-x-6">
                    <div class="space-y-2 text-gray-700">
                        <div>
                            <h1 class="text-2xl font-bold">Noli Me Tangere</h1>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">Type:</p>
                            <p class="inline">Book</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">Authors:</p>
                            <p class="inline">Jose P. Rizal</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">ISBN 10:</p>
                            <p class="inline">9710807528</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">ISBN 13:</p>
                            <p class="inline">1234567891012</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">Category:</p>
                            <p class="inline">Unknown</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">Publication Year:</p>
                            <p class="inline">1961</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">Publisher:</p>
                            <p class="inline">Signet Classic</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">Pages:</p>
                            <p class="inline">328</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">Tags:</p>
                            <p class="inline">Classics, Political, Psychological, Satire, Literary, Dystopian, Censorship, <br>100 Books to Read in a Lifetime, Customer’s Favorite</p>
                        </div>
                        <div>
                            <p class="font-semibold inline mr-2">Stock:</p> 
                            <p class="inline">4</p>
                        </div>
                    </div>

                    <!-- Reserve Button and Status -->
                    <div class="flex flex-col space-y-4">
                        <a href="/Hreservationdetails">
                        <button class="bg-[#028ABE] text-white py-2 px-4 rounded-lg w-full hover:bg-[#026c94] transition duration-200">
                            Reserve
                        </button>
                        </a>
                        <div class="text-center">
                            <p class="text-lg font-semibold">Status:</p>
                            <p class="text-green-600">Available</p> 
                        </div>
                    </div>
                </div>
            </div>
        </main>


    
         <!-- Footer -->
        <footer class="flex flex-col md:flex-row justify-between items-start md:items-center px-8 md:px-16 lg:px-60 py-8 bg-[#011b33] text-white text-sm space-y-6 md:space-y-0">
                <!-- Left Section: Logo and Contact Information -->
                <div class="flex flex-col md:flex-row md:items-center space-y-6 md:space-y-0 md:space-x-9">
                        <!-- Logo -->
                        <img src="./images/logo_login_headerC.png" alt="library logo" class="w-32 md:w-[135px]">
                        <!-- Contact Info -->
                        <div class="text-center md:text-left">
                        <p>Don Fabian St. Commonwealth</p>
                        <p>altheacamorasis@gmail.com</p>
                        <p>+639123456789</p>
                        </div>
                </div>

                <!-- Right Section: Rights Reserved -->
                <div class="text-center md:text-right">
                        <p>All rights reserved.</p>
                </div>
        </footer>


        <script>
                // DROPDOWN START
                // Select the toggle button, dropdown menu, and dropdown items
                const dropdownToggle = document.getElementById('dropdownToggle');
                const dropdownMenu = document.getElementById('dropdownMenu');
                const dropdownItems = document.querySelectorAll('.dropdown-item');

                // Add click event listener to the toggle button
                dropdownToggle.addEventListener('click', function () {
                // Toggle the visibility of the dropdown menu
                dropdownMenu.classList.toggle('hidden');
                });

                // Add click event listener to each dropdown item
                dropdownItems.forEach((item) => {
                item.addEventListener('click', function () {
                        // Close the dropdown menu when a dropdown item is clicked
                        dropdownMenu.classList.add('hidden');
                });
                });
                // DROPDOWN END

                // Get the hamburger button, mobile menu, and close button
                const hamburgerMenu = document.getElementById('hamburgerMenu');
                const mobileMenu = document.getElementById('mobileMenu');
                const closeMenuButton = document.getElementById('closeMenu');

                // Toggle mobile menu visibility when hamburger button is clicked
                hamburgerMenu.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
                });

                // Close the mobile menu when the close button (X) is clicked
                closeMenuButton.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
                });
        </script>

</body>
</html>