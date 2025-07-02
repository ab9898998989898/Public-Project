<style>
    .experience {
        background: rgba(55, 65, 81, 0.4);
        box-shadow: 2px 2px 10px rgba(211, 211, 211, 1);
        opacity: 1;
        padding: 2rem;
        /* Add padding for better spacing */
        color: white;
        /* Set text color to white for better contrast */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Add shadow for visual depth */
    }

    #exp {
        width: 100%;
    }

    .experience .experience-container {
        align-items: center;
    }

    .experience .experience-container .btn-exp {
        width: auto;
        padding: 0.5rem 1.5rem;
        border-radius: 1.1rem;
        background-color: darkslategray;
    }

    .experience .experience-container .btn-exp:hover {
        background-color: blue;
    }

    .exp-cards {
        margin-top: 2rem;
        place-content: center;
        margin-left: 2.5rem;
        z-index: 1;
    }

    .experience-card {
        display: flex;
        position: relative;
        flex-direction: column;
        /* Logo, content, and date sections */
        align-items: center;
        justify-content: center;
        background-color: #322530;
        /* Card background color */
        border-radius: 8px;
        padding: 2rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
        /* Subtle shadow */
        max-width: 1200px;
        border-radius: 1rem;
        width: 100%;
        /* Ensure card spans full width */
    }

    .experience-logo {
        position: absolute;
        top: 1rem;
        left: 1rem;
    }

    .experience-logo img {
        max-width: 100%;
        max-height: 60px;
        /* Restrict logo height */
    }

    .experience-content {
        color: #d1d1d1;
        /* Subtle text color */
        margin: auto;
        /* Ensures it is centered vertically and horizontally */

    }

    .experience-content h3 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
        color: #fff;
        /* White for the title */
    }

    .experience-content ul {
        list-style-type: disc;
    }

    .experience-content ul li {
        margin-bottom: 0.8rem;
    }

    .experience-dates {
        position: absolute;
        top: 1rem;
        right: 1rem;
        text-align: right;
        font-size: 1rem;
        color: #d1d1d1;
        /* Subtle date color */
    }

    /* Optional: Debugging grid lines for alignment */
    .experience-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* z-index: -1;
        background: repeating-linear-gradient(to right,
                rgba(255, 255, 255, 0.1) 0,
                rgba(255, 255, 255, 0.1) 1px,
                transparent 1px,
                transparent 100px); */
    }

    /* Keyframes for fade-in and slide-up effect */
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Add animation to experience cards */
    .exp-cards .experience-card {
        opacity: 0;
        /* Initial state */
        animation: fadeInUp 0.8s ease-in-out forwards;
        animation-delay: calc(var(--delay, 0) * 1.4s);
    }

    /* Apply delay to each card */
    .exp-cards:nth-child(1) .experience-card {
        --delay: 1;
    }

    .exp-cards:nth-child(2) .experience-card {
        --delay: 2;
    }

    .exp-cards:nth-child(3) .experience-card {
        --delay: 3;
    }


    @media (max-width: 900px) {
        .exp-cards {
            margin-left: 2rem;
        }

        .experience-card {
            flex-direction: column;
            align-items: center;
            /* Center-align items horizontally */
            text-align: center;
            /* Center-align text */
            padding: 1rem;
        }

        .experience-logo {
            order: 1;
            /* Place logo first */
            position: static;
            margin-bottom: 1rem;
            width: auto;
            /* Center the logo */
            display: flex;
            justify-content: center;
        }

        .experience-logo img {
            margin: 0 auto;
            max-height: 50px;
            /* Adjust logo height if needed */
        }

        .experience-dates {
            order: 2;
            /* Place date after the logo */
            position: static;
            margin-bottom: 1rem;
            width: auto;
            /* Let the date adapt to its content */
            text-align: center;
            /* Center-align date text */
        }

        .experience-content {
            order: 3;
            /* Place content last */
            margin: 0;
            width: 100%;
            /* Ensure it spans full width */
        }

        .experience-content ul {
            padding-left: 0;
            /* Remove extra left padding */
            list-style-position: inside;
        }

        .experience-content ul li {
            text-align: center;
            /* Center-align list items */
        }
    }

    @media(max-width:770px) {
        .exp-cards {
            margin-left: 0.7rem;
        }

        .experience-content h3 {
            font-size: 1.3rem;
        }

        .experience-content ul li {
            display: flex;
            justify-content: center;
        }
    }
</style>

<div id="exp" class="experience w-full">
    <div class="experience-container w-11/12 mx-auto">
        <div class="span-exp text-center">
            <a href="#exp" aria-label="Go to experience"><button class="btn-exp">Experince</button></a>
            <p class="mt-4">Here is a quick summary of my most recent experiences:</p>
        </div>
        <div class="exp-cards">
            <div class="experience-card">
                <div class="experience-logo">
                    <img src="./experience/logo-upwork.svg" alt="Upwork Logo">
                </div>
                <div class="experience-content">
                    <h3>Sr. Frontend Developer</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Ut pretium arcu et massa semper, id fringilla leo semper.</li>
                        <li>Sed quis justo ac magna.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
                <div class="experience-dates">
                    <span>Nov 2021 - Present</span>
                </div>
            </div>
        </div>
        <div class="exp-cards">
            <div class="experience-card">
                <div class="experience-logo">
                    <img src="./experience/logo-upwork.svg" alt="Upwork Logo">
                </div>
                <div class="experience-content">
                    <h3>Team Lead</h3>
                    <ul>
                        <li>Sed quis justo ac magna.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Sed quis justo ac magna.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
                <div class="experience-dates">
                    <span>Jul 2017 - Oct 2021</span>
                </div>
            </div>
        </div>
        <div class="exp-cards">
            <div class="experience-card">
                <div class="experience-logo">
                    <img src="./experience/logo-upwork.svg" alt="Upwork Logo">
                </div>
                <div class="experience-content">
                    <h3>Full Stack Developer</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</li>
                    </ul>
                </div>
                <div class="experience-dates">
                    <span>Dec 2015 - May 2017</span>
                </div>
            </div>
        </div>
    </div>
</div>