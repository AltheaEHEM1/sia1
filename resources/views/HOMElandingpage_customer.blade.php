
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

<body>
        <nav class="flex items-center justify-between px-8 py-4 bg-[#011b33] sticky top-0 z-50">
                <!-- Logo -->
                <div class="flex-shrink-0">
                        <img src="./images/logo_login_headerC.png" alt="library logo" class="w-[135px]">
                </div>

                <!-- Centered Navigation Links -->
                <ul class="flex space-x-12 hidden md:flex">
                        <li><a href="/HOMElandingpage_customer" class="text-[#028ABE] flex items-center font-bold hover:text-[#028ABE]"><i class="fa fa-home mr-2"></i> Home</a></li>
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
                        <button id="dropdownToggle" class="text-white hover:text-[#028ABE] flex items-center">
                                <i class="fa fa-user mr-2"></i> My Account
                        </button>
                        <ul id="dropdownMenu" class="absolute hidden bg-[#011b33] text-white rounded-md shadow-lg mt-2 py-2 w-48">
                                <li><a href="/PROFILEpage" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center">
                                <i class="fa fa-user-circle mr-2"></i> Profile
                                </a></li>

                                <!-- Log Out Form -->
                                <li>
                                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                        @csrf
                                        <button type="submit" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center">
                                        <i class="fa fa-sign-out-alt mr-2"></i> Log Out
                                        </button>
                                </form>
                                </li>
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
                        <li><a href="/HOMElandingpage_customer" id="home-link" class="text-white text-2xl hover:text-[#028ABE]">Home</a></li>
                        <li><a href="/RESERVATIONreservation-page" class="text-white text-2xl hover:text-[#028ABE]">Reservation</a></li>
                        <li><a href="/ABOUTUSpage" class="text-white text-2xl hover:text-[#028ABE]">About Us</a></li>
                        <li><a href="/SHELFpage" class="text-white text-2xl hover:text-[#028ABE]">Shelf</a></li>
                        <li><a href="/PROFILEpage" class="text-white text-2xl hover:text-[#028ABE]">Profile</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Log Out</a></li>
                </ul>

        </div>

        <!-- Search Button -->
        <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">
                Search
        </button>
</div>

<!-- Categories Section -->
<div class="mx-auto bg-[#E4ECFF] p-10 rounded-lg shadow-md mx-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Category Cards-->
                <div class="bg-white p-4 rounded-lg shadow-md transform hover:scale-105 transition-all duration-300">
                        <a href="/Hspecific_category" class="block">
                                <img 
                                src="https://via.placeholder.com/300x200" 
                                alt="[categoty img]" 
                                class="w-full h-45 object-cover rounded-t-lg"
                                >
                                <div class="p-1 text-center font-semibold">[categoty name]</div>
                        </a>
                </div>
        </div>
</div>

@include('layout.CFooter')

</body>
</html>