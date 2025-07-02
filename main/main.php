<style>
    .container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        margin-top: 5rem;
        height: auto;
        overflow-x: hidden;
        padding: 1rem;
    }

    .content {
        margin: auto;
    }
    .pointer{
        cursor: pointer;
    }

    .links {
        margin-top: 2rem;
    }
    .links{ 
        cursor: pointer!important;
    }

    .img-div img {
        box-shadow: 30px 35px gray;
        margin: auto 0 2rem 3rem;
    }

    /* Media Query for smaller screens */
    @media (max-width: 1023px) {
        .container {
            /* Apply grid styles to container */
            grid-template-columns: 1fr;
            /* Change to 1 column */
            text-align: center;
        }
        .img-div{
            margin-left:-2rem ;
        }

        .text-div span {
            display: flex;
            align-items: center;
            /* Align items vertically */
            justify-content: center;
            /* Center them horizontally */
            gap: 1rem;
            /* Space between h1 and emoji */
        }

        .text-div>span>h1 {
            margin: 0;
            /* Remove centering via margin */
            width: auto;
            /* Allow intrinsic width */
        }


    }
    @media(max-width:767px){
        .text-div h1{
            font-size:1.7rem;
        }
        .text-div .hand{
            font-size: 2rem;
        }
        .img-div{
            margin-top: 2rem;
            margin-left: -4rem;
        }
        .img-div img{
            width: 15rem;
        }
    }
</style>

<main id="main" class="container  mx-auto w-11/12">
    <div class="content">
        <div class="text-div">
            <span class="flex items-center font-semibold mb-4">
                <h1 class="text-6xl">Hi, I'm Sagar</h1>
                <span class="text-6xl hand">&#128075;</span>
            </span>

            <p>I'm a full stack developer (React.js & Node.js) with a focus on creating (and occasionally designing)
                exceptional digital experiences that are fast, accessible, visually appealing,<br> and responsive. Even
                though I have been creating web applications for over 7 years, <br> I still love it as if it was
                something new.</p>
        </div>
        <div class="flex mt-12 gap-2 pointer">
            <img src="./main/location.png" alt="this is an image">
            <span class="font-mono">Lahore, Pakistan</span>
        </div>
        <div class="flex gap-2 mt-2 mb-2 pointer">
            <img src="./main/point.png" alt="this is an image">
            <span class="font-mono">Available for new projects</span>
        </div>
        <div class="links">
            <img src="./main/Links.png" alt="this is an image">
        </div>
    </div>
    <div class="place-self-center img-div">
        <img src="./main/Main-pic.png" alt="this is an image">
    </div>
</main>