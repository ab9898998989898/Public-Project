<style>
    nav {
        background-color: black;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
        z-index: 9999;
    }

    nav ul {
        list-style-type: none;
    }

    ul>li>a:hover {
        color: aqua;
    }

    .d-lg-none {
        display: none !important;
    }

    .download-btn:hover {
        background-color: aquamarine;
        transition: background-color 0.3s;
    }

    /* Dark Theme (Default) */
    body {
        background-color: #121212;
        color: white;
    }

    nav {
        background-color: black;
        color: white;
    }

    nav ul li a {
        color: white;
        /* Change link color */
    }

    nav a:hover {
        color: aqua;
        /* Hover effect for dark theme */
    }

    /* Light Theme */
    body.light-theme {
        background-color: #ffffff;
        color: black;
    }

    nav.light-theme {
        background-color: white;
        color: black;
    }

    nav.light-theme ul li a {
        color: black;
        /* Change link color */
    }

    nav.light-theme a:hover {
        color: aqua;
        /* Hover effect for light theme */
    }

    nav.light-theme .b-div button{
        height: 2.5rem;
    }

    /* Transition for smooth theme change */
    body,
    nav {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Light Mode */
    #scroll-top svg {
        fill: black;
        /* Make the SVG black in light mode */
        transition: fill 0.7s ease;
        /* Optional smooth transition */
    }

    /* Dark Mode */
    body.dark-theme #scroll-top svg {
        fill: #F9FAFB;
        /* Retain original color for dark mode */
    }
    @media (min-width: 1025px){
        ul li{
            margin-bottom:0.6rem;
        }
    }
    @media (max-width: 1024px){
        ul li{
            margin-top: 1.5rem;
        }
    }

    @media (max-width: 768px) {

        ul li {
            display: none;
        }

        .b-div {
            display: none;
        }

        .d-md-block {
            display: block !important;
        }

        /* Dropdown Container */
        .dropdown-content {
            position: fixed;
            top: 0;
            right: -300px;
            /* Initially off-screen */
            width: 300px;
            /* Set width for the sliding menu */
            height: 100vh;
            /* Full screen height */
            background-color: slategrey;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            /* justify-content: space-between; */
            /* Space between content and actions */
            padding: 20px;
            transition: right 0.3s ease-in-out;
            /* Smooth slide-in effect */
            z-index: 1000;
        }

        /* Links inside the Dropdown */
        .dropdown-content a {
            color: black;
            text-decoration: none;
            margin: 1rem 1rem 1rem 0;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transition */
        }

        .dropdown-content a:hover {
            background-color: rgb(2 6 23 / var(--tw-bg-opacity, 1));
            color: beige
        }

        /* Menu Actions Section */
        .menu-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            /* Space between the icon and button */
            margin-top: 20px;
            cursor: pointer;
        }

        /* Icon */
        .action-icon {
            width: 50px;
            /* Adjust size of the icon */
            height: auto;
            cursor: pointer;
            /* Makes the icon clickable */
        }

        /* Button */
        .menu-actions button {
            background-color: rgb(2 6 23 / var(--tw-bg-opacity, 1));
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            text-align: center;
            transition: background-color 0.3s;
        }

        .menu-actions button:hover {
            background-color: blue;
            /* Slightly lighter slate color */
        }

        /* Class to Show the Dropdown */
        .dropdown-content.show {
            right: 0;
            /* Slide in the menu */
        }

        /* Hidden State */
        .hidden {
            display: none;
        }

        .dropdown-content .cross {
            display: flex;
            justify-content: flex-end;
        }
        

    }
</style>



<nav id="nav" class="grid grid-cols-4 content-center mx-auto w-11/12 place-content-between pl-4 h-20 items-center">
    <a id="scroll-top" aria-label="Go to main"><img class="col-span-1 items-center" style="cursor: pointer"
            src="./navbar/logo.svg" alt="this is an image"></a>
    <ul class="flex col-start-3 gap-6 justify-end">
        <li><a id="about-btn" href="#about" aria-label="Go To About">About</a></li>
        <li><a href="#wk" aria-label="Go to work">Work</a></li>
        <li><a href="#testi" aria-label="Go to Testimonials">Testimonials</a></li>
        <li><a href="#connect" aria-label="Go to connect">Contact</a></li>
        <li><a href="#skill" aria-label="Go to skill">Skills</a></li>
        <li><a href="#exp" aria-label="Go to experience">Experience</a></li>
    </ul>
    <div class="flex gap-6 justify-center b-div">
        <img id="theme-toggle" src="./navbar/Icon-Button.png" style="cursor: pointer" alt="this is an image">
        <button class="bg-slate-50 w-40 text-black text-center rounded-xl download-btn"  onclick="location.href='./contact/contact.php'">Contact me</button>
    </div>
    <div class="d-lg-none d-md-block dropdown place-self-end">
        <img src="./navbar/hamburger.svg" alt="Hamburger Icon" class="hamburger" onclick="toggleDropdown()">

        <div id="myDropdown" class="dropdown-content right hidden">
            <div class="cross">
                <img src="./navbar/cross.svg" alt="cross">
            </div>
            <a href="#about" aria-label="Go To About">About</a>
            <a href="#wk" aria-label="Go to work">Work</a>
            <a href="#testi" aria-label="Go to Testimonials">Testimonials</a>
            <a href="#connect" aria-label="Go to connect">Contact Us</a>
            <a href="#skill" aria-label="Go to skill">Skills</a>
            <a href="#exp" aria-label="Go to experience">Experience</a>
            <!-- Icon and Download Button -->
            <div class="menu-actions">
                <img id="toggle-2" src="./navbar/Icon-Button.png" alt="Icon" class="action-icon">
                <button onclick="location.href='./contact/contact.php'" id="contact-btn" class=" bg-slate-950 w-40 text-white text-center rounded-xl">Contact me</button>
            </div>
        </div>
    </div>

</nav>


<script>
    function toggleDropdown() {
        const dropdown = document.getElementById("myDropdown");

        // Toggle sliding animation
        if (dropdown.classList.contains("show")) {
            dropdown.classList.remove("show");
            setTimeout(() => dropdown.classList.add("hidden"), 300); // Delay hiding after animation
        } else {
            dropdown.classList.remove("hidden");
            setTimeout(() => dropdown.classList.add("show"), 10); // Ensure transition runs
        }

        // Add event listener to close dropdown when clicking outside
        document.addEventListener("click", closeDropdownOutside);
    }

    function closeDropdownOutside(event) {
        const dropdown = document.getElementById("myDropdown");
        const hamburger = document.querySelector(".hamburger");
        const cross = document.querySelector(".cross img");

        document.addEventListener("click", (event) => {
            // Check if the click is outside the dropdown and hamburger
            if (!dropdown.contains(event.target) && !hamburger.contains(event.target)) {
                dropdown.classList.remove("show");
                setTimeout(() => dropdown.classList.add("hidden"), 300);
            }

            // Check if the click is on the cross
            if (cross.contains(event.target)) {
                dropdown.classList.remove("show");
                setTimeout(() => dropdown.classList.add("hidden"), 300);
            }
        });
    }
    // Add event listener to the link
    document.getElementById('scroll-top').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior
        window.scrollTo({
            top: 0,         // Scroll to the top of the page
            behavior: 'smooth' // Enable smooth scrolling
        });
    });
    // Event listener for theme change
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('theme-toggle').addEventListener('click', function () {
            const navbar = document.getElementById('nav');
            const body = document.body;

            navbar.classList.toggle('light-theme');
            body.classList.toggle('light-theme');

        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('toggle-2').addEventListener('click', function () {
            const navbar = document.getElementById('nav');
            const body = document.body;

            navbar.classList.toggle('light-theme');
            body.classList.toggle('light-theme');

        });
    });
    // Adding an event listener to theme changing button
    const lightSVG = document.getElementById("lightSVG")
    const themeToggle = document.getElementById("theme-toggle");

    themeToggle.addEventListener("click", () => {
        if (themeToggle.src.includes("Icon-Button.png")) {
            themeToggle.src = "./navbar/day.svg"; // Change to day.svg
        } else {
            themeToggle.src = "./navbar/Icon-Button.png"; // Revert back to the original image
        }
    });
    const theme = document.getElementById("toggle-2");

    theme.addEventListener("click", () => {
        if (theme.src.includes("Icon-Button.png")) {
            theme.src = "./navbar/day.svg"; // Change to day.svg
        } else {
            theme.src = "./navbar/Icon-Button.png"; // Revert back to the original image
        }
    });


</script>