<style>
    .skills-set {
        align-content: center;
        margin: 3rem;
    }


    .skills {
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        padding: 2rem;
        align-items: center;
        row-gap: 3rem;
    }

    .skills .ss {
        place-items: center;
    }

    .skills .ss img {
        margin-bottom: 0.5rem;
    }

    .marquee {
        animation: slideIn 8s forwards;
        /* Apply the animation */
    }

    @keyframes slideIn {
        0% {
            transform: translateX(-100%);
            /* Start off-screen to the right */
        }

        100% {
            transform: translateX(0%);
            /* End at its normal position */
        }
    }

    .skills-set .skills-text .btn {
        width: auto;
        padding: 0.5rem 1.5rem;
        border-radius: 1.1rem;
        background-color: darkslategray;
    }

    .skills-set .skills-text .btn:hover {
        background-color: cadetblue;
    }

    #lightSVG,
    #darkSVG {
        display: none;
    }

    @media (max-width:900px) {
        .skills {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding: 2rem;
            align-items: center;
            row-gap: 3rem;
        }
    }

    @media (max-width:400px) {
        .skills {
            display: grid;
            grid-template-columns: repeat(3, minmax(2rem, 1fr));
            padding: 2rem;
            margin: 0 0;
            row-gap: 3rem;
            column-gap: 2.3rem;
        }
    }

    @media (max-width:360px){
        /* .skills .ss img{
            size: 1rem;
        } */
        .skills .ss{
            font-size: 12px;
        }
    }
</style>




<div id="skill" class="skills-set">
    <div class="skills-text text-center">
        <a href="#skill" aria-label="Go to skills"><button class="btn">Skills</button></a>
        <p class=" mt-4">The skills the tool the technology I am really good at:</p>
    </div>
    <div class="marquee">
        <div class="skills mx-auto">
            <div class="ss">
                <img src="./skills/icon-javscript.svg" alt="this is an image">
                <span>Javascript</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-typescript.svg" alt="this is an image">
                <span>Typescript</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-react.svg" alt="this is an image">
                <span>React</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-nextjs.svg" alt="this is an image">
                <span>Next.js</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-nodejs.svg" alt="this is an image">
                <span>Node.js</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-express.svg" alt="this is an image">
                <span>Express.js</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-nest.svg" alt="this is an image">
                <span>Nest.js</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-socket.svg" alt="this is an image">
                <span>Socket.io</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-postgresql.svg" alt="this is an image">
                <span>PostgreSQL</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-mongodb.svg" alt="this is an image">
                <span>MongoDB</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-sass.svg" alt="this is an image">
                <span>Sass/Scss</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-tailwindcss.svg" alt="this is an image">
                <span>TailwindCss</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-figma.svg" alt="this is an image">
                <span>Figma</span>
            </div>
            <div class="ss">
                <img id="lightSVG" src="./skills/icon-cypress-light.svg" alt="this is an image">
                <img id="#darkSVG" src="./skills/icon-cypress.svg" alt="this is an image">
                <span>Cypress</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-storybook.svg" alt="this is an image">
                <span>Storybook</span>
            </div>
            <div class="ss">
                <img src="./skills/icon-git.svg" alt="this is an image">
                <span>Git</span>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to update SVG based on the theme
    function updateTheme() {
        const isLightMode = window.matchMedia('(prefers-color-scheme: light)').matches;

        // Get SVG elements by ID
        const lightSVG = document.getElementById('lightSVG');
        const darkSVG = document.getElementById('darkSVG');

        // If it's light mode, show the light SVG and hide the dark one
        if (isLightMode) {
            lightSVG.style.visibility = 'visible';
            darkSVG.style.visibility = 'hidden';
        } else {
            darkSVG.style.visibility = 'visible';
            lightSVG.style.visibility = 'hidden';
        }
    }

    // Check for theme changes
    window.matchMedia('(prefers-color-scheme: light)').addEventListener('change', updateTheme);

    // Initial call to update the theme
    updateTheme();
</script>