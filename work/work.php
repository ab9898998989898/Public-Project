<style>
    .work {
        margin-top: 2rem;
    }

    .work-text {
        margin-top: 2rem;
    }

    .work-text p {
        margin-top: 0.5rem;
    }

    .w-card {
        display: flex;
        max-width: 1350px;
        width: 100%;
        padding: 2rem;
        box-sizing: border-box;
    }

    .work-btn {
        width: auto;
        padding: 0.5rem 1.5rem;
        border-radius: 1.1rem;
        background-color: darkslategray;
        color: #fff;
    }

    .work-btn:hover {
        background-color: darkcyan;
    }

    .image-section {
        background: linear-gradient(180deg, #ffffff20, #1a1a1a);
        border-top-left-radius: 16px;
        border-bottom-left-radius: 16px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        width: 50%;
        align-items: center;
        position: relative;
    }

    .image-section img {
        max-width: 100%;
        height: auto;
        filter: brightness(0.8);
        padding: 1rem 0;
    }

    .text-section {
        background-color: #A9A9A9;
        border-top-right-radius: 16px;
        border-bottom-right-radius: 16px;
        flex: 2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 1.5rem;
    }

    .text-section h1 {
        font-size: 2rem;
        margin: 0 3rem;
    }

    .text-section p {
        font-size: 1rem;
        line-height: 1.5;
        margin: 1rem 3rem;
    }

    .tags {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin: 0 3rem;
    }

    .tag {
        background-color: #333;
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 0.875rem;
        cursor: pointer;
    }

    .external-link {
        display: inline-block;
        color: #fff;
        text-decoration: none;
        font-size: 1rem;
        margin-top: 1rem;
        margin: 0.5rem 3rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .external-link svg {
        width: 16px;
        height: 16px;
    }

    .work :nth-child(2) {
        .text-section {
            border-top-left-radius: 16px;
            border-bottom-left-radius: 16px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .image-section {
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
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

    /* Add animation to work cards */
    .work .w-card {
        opacity: 0;
        /* Initial state */
        animation: fadeInUp 9s ease-in-out forwards;
        animation-delay: calc(var(--delay, 0) * 0.3s);
    }

    /* Apply staggered delays to each card */
    .work>.w-card:nth-child(1) {
        --delay: 1;
    }

    .work>.w-card:nth-child(2) {
        --delay: 2;
    }

    .work>.w-card:nth-child(3) {
        --delay: 3;
    }

    @media (max-width: 950px) {
        .w-card {
            flex-direction: column;
            /* Stack the content vertically */
        }

        .image-section {
            width: 100%;
            /* Ensure full width for the image section */
            border-radius: 16px 16px 0 0;
            /* Rounded top corners */
        }

        .text-section {
            width: 100%;
            /* Ensure full width for the text section */
            border-radius: 0 0 16px 16px;
            /* Rounded bottom corners */
        }

        /* Specific styling for the second card */
        .work>.w-card:nth-child(2) {
            flex-direction: column-reverse;
            /* Reverse the order of child elements */
        }

        .work>.w-card:nth-child(2) .image-section {
            border-radius: 0 0 16px 16px;
            /* Rounded bottom corners for the image */
            border-top-right-radius: 16px;
            border-bottom-right-radius: 0;
            border-top-left-radius: 16px;
            border-bottom-left-radius: 0;
        }

        .work>.w-card:nth-child(2) .text-section {
            border-radius: 16px 16px 0 0;
            /* Rounded top corners for the text */
            border-top-left-radius: 0;
            border-bottom-left-radius: 16px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 16px;
        }
    }
</style>

<section id="wk" class="work-section">

    <div class="work-text text-center">
        <a href="#wk" aria-label="Go to work"><button class="work-btn">Work</button></a>
        <p>Some of the noteworthy projects i have built:</p>
    </div>
    <div class="work">
        <div class="w-card mx-auto">
            <!-- Image Section -->
            <div class="image-section">
                <img src="./work/work-pic.svg" alt="Fiskil Preview">
            </div>

            <!-- Text Section -->
            <div class="text-section">
                <h1>Fiskil</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec urna ac tellus volutpat
                    viverra.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>

                <div class="tags">
                    <span class="tag work-btn">React</span>
                    <span class="tag work-btn">Next.js</span>
                    <span class="tag work-btn">Typescript</span>
                    <span class="tag work-btn">Nest.js</span>
                    <span class="tag work-btn">PostgreSQL</span>
                    <span class="tag work-btn">TailwindCSS</span>
                    <span class="tag work-btn">Figma</span>
                    <span class="tag work-btn">Cypress</span>
                    <span class="tag work-btn">Storybook</span>
                    <span class="tag work-btn">Git</span>
                </div>

                <a href="#" class="external-link">
                    <span>Learn More</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="w-card mx-auto">
            <!-- Text Section -->
            <div class="text-section">
                <h1>Fiskil</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec urna ac tellus volutpat
                    viverra.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>

                <div class="tags">
                    <span class="tag work-btn">React</span>
                    <span class="tag work-btn">Next.js</span>
                    <span class="tag work-btn">Typescript</span>
                    <span class="tag work-btn">Nest.js</span>
                    <span class="tag work-btn">PostgreSQL</span>
                    <span class="tag work-btn">TailwindCSS</span>
                    <span class="tag work-btn">Figma</span>
                    <span class="tag work-btn">Cypress</span>
                    <span class="tag work-btn">Storybook</span>
                    <span class="tag work-btn">Git</span>
                </div>

                <a href="#" class="external-link">
                    <span>Learn More</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <!-- Image Section -->
            <div class="image-section">
                <img src="./work/work-pic.svg" alt="Fiskil Preview">
            </div>
        </div>
        <div class="w-card mx-auto">
            <!-- Image Section -->
            <div class="image-section">
                <img src="./work/work-pic.svg" alt="Fiskil Preview">
            </div>

            <!-- Text Section -->
            <div class="text-section">
                <h1>Fiskil</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec urna ac tellus volutpat
                    viverra.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>

                <div class="tags">
                    <span class="tag work-btn">React</span>
                    <span class="tag work-btn">Next.js</span>
                    <span class="tag work-btn">Typescript</span>
                    <span class="tag work-btn">Nest.js</span>
                    <span class="tag work-btn">PostgreSQL</span>
                    <span class="tag work-btn">TailwindCSS</span>
                    <span class="tag work-btn">Figma</span>
                    <span class="tag work-btn">Cypress</span>
                    <span class="tag work-btn">Storybook</span>
                    <span class="tag work-btn">Git</span>
                </div>

                <a href="#" class="external-link">
                    <span>Learn More</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>