<style>
    /* Main Section Styles */
.about {
    background: rgba(55, 65, 81, 0.4);
    box-shadow: 2px 2px 10px rgba(211, 211, 211, 1);
    opacity: 1;
    margin-top: 2rem;
    padding: 2rem; /* Add padding for better spacing */
    color: white; /* Set text color to white for better contrast */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow for visual depth */
}
.about::after{
    background: rgba(55, 65, 81, 0.1);
}

.about-container {
    opacity: 1;
}

.about-container .about-span {
    display: flex;
    justify-content: center;
}

.about-container .about-span .btn {
    width: auto;
    padding: 0.5rem 0.8rem;
    border-radius: 1.1rem;
    background-color: darkslategray;
}

.about-container .about-span .btn:hover {
    transition: background 0.3s;
    background-color: yellowgreen;
}

/* Flex-based List Items */
.about-content-div {
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin-top: 2rem;
    padding: 1rem;
}

.about-content-div img {
    box-shadow: -30px 35px gray;
    margin: auto 0 4rem 3rem;
    height: 30rem;
}

.about-content-div .about-content h2 {
    font-size: 2rem;
}

.about-content-div .about-content p,
ul {
    margin-top: 1rem;
}

/* Basic List Layout */
.about-content-div .about-content ul {
    display: flex;
    flex-wrap: wrap;
    list-style-type: disc;
}

.about-content-div .about-content ul li {
    margin-bottom: 10px; /* Spacing between items */
    flex: 0 0 50%; /* Each item takes up 50% of the width (2 items per row) */
}

/* Tablet/ Mobile Styles (Start Testing) */
/* Media query for views under laptop view */
@media (max-width: 1025px) {
    .about-content-div {
        /* Set grid to one column */
        display: block;
    }
    /* Set the image div margin */
    .about-content-div img {
        margin: 1rem auto 3rem auto;
    }

    /* Remove all grid/flex centering */
    .about-content-div .about-content {
        text-align: center;
        padding: 0;
        margin: 0;
        width: 100%;
        overflow: visible;
    }
    /* For the additional properties in ul and some of the li items */
    .about-content-div .about-content ul{
        display:flex;
        list-style-type:disc !important;;
        list-style-position: inside;
        padding-left:1rem;
        margin-left: 1rem;
    }
    /* Li items properties */
    .about-content-div .about-content ul li{
        display: flex;
    }

    /* Reset any complex list styles */
    ul {
        margin-top: 0;
        border-style: none;
        margin-bottom: 20px;
        font-size: 0.9rem;
    }
    /* Same styles that are for li */
    li {
        margin-bottom: 10px;
    }
}
/* Media query for large and small mobiles */
@media (max-width:530px){
    .about-content-div img {
        height: 20rem;
        width: auto;
    }
}


</style>


<section id="about" class="about w-full bg-gray-500">
    <div class="about-container w-11/12 mx-auto">
        <div class="about-span"><a href="#about" aria-label="Go To About"><button class="btn">About me</button></a></div>
        <div class="about-content-div">
            <div class="about-img left-0">
                <img src="./about/about-pic.png" alt="this is an image">
            </div>
            <div class="about-content">
                <h2>Curious About Me? Here you have it:</h2>
                <p>I'm a passionate, self-proclaimed designer who specializes in full stack development (React.js & Node.js). I am very enthusiastic about bringing the technical and visual aspects of digital products to life. User experience, pixel perfect design, and writing clear, readable, highly performant code matters to me.</p>
                <p>I began my journey as a web developer in 2015, and since then, I've continued to grow and evolve as a developer, taking on new challenges and learning the latest technologies along the way. Now, in my early thirties, 7 years after starting my web development journey, I'm building cutting-edge web applications using modern technologies such as Next.js, TypeScript, Nestjs, Tailwindcss, Supabase and much more.</p>
                <p>I am very much a progressive thinker and enjoy working on products end to end, from ideation all the way to development.</p>
                <p>When I'm not in full-on developer mode, you can find me hovering around on twitter or on indie hacker, witnessing the journey of early startups or enjoying some free time. You can follow me on Twitter where I share tech-related bites and build in public, or you can follow me on GitHub.</p>
                <p>Finally, some quick bits about me.</p>
                <ul>
                    <li>B.E. in Computer Engineering</li>
                    <li>Avid learner</li>
                    <li>Full time freelancer</li>
                    <li>Aspiring indie hacker</li>
                </ul>
                <p>One last thing, I'm available for freelance work, so feel free to reach out and say hello! I promise I don't bite 😉</p>
            </div>
        </div>
    </div>
</section>