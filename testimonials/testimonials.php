<style>
    .testimonials{
        background-color: #111827;
        padding: 1rem;
    }
    .testimonials p{
        font-size: 1.1rem;
        font-weight: bold;
    }
    .test-btn{
        width: auto;
        padding: 0.5rem 1.5rem;
        border-radius: 1.1rem;
        background-color: darkslategray;
        color: #fff;
    }
    .t-cards{
        justify-content: space-around;
        margin-top: 2rem;
    }
    .t-text{
        margin-top: 1rem;
    }
    .test-btn:hover{
        background-color: aqua;
    }
    .testi-1{
        padding: 2rem;
        border-radius: 1rem;
        background-color: #1F2937;
    }
    .testi-2{
        padding: 2rem;
        border-radius: 1rem;
        background-color: #1F2937;
    }
    .testi-3{
        padding: 2rem;
        border-radius: 1rem;
        background-color: #1F2937;
    }
    .t1-text{
        max-width: 17rem;
    }
    .info{
        margin-top: 3rem;
    }
    .info h2{
        font-size: 1.4rem;
        font-weight: bold;
    }
    body.light-theme .testimonials{
        color: #fff;
    }

    @media(max-width:1080px) {
    .t-cards {
        flex-wrap: wrap;
        display: flex;
        justify-content: center;
    }
    .testi-1, .testi-2, .testi-3 {
        flex: 1 1 calc(50% - 1rem); /* Two cards per row with consistent width */
        margin: 0.5rem; /* Add margin between cards */
        /* max-width: 24rem; */
    }
    .testi-3 {
        margin-top: 2rem; /* Add spacing above the third card */
        max-width: 30rem;
    }
}
    @media(max-width:700px) {
    .t-cards {
        flex-wrap: wrap;
        display: flex;
        justify-content: center;
    }
    .testi-1, .testi-2, .testi-3 {
        flex: 1 1 calc(50% - 1rem); /* Two cards per row with consistent width */
        margin: 0.5rem; /* Add margin between cards */
        /* max-width: 24rem; */
    }
    .testi-3 {
        margin-top: 2rem; /* Add spacing above the third card */
        max-width: 24rem;
    }
}
    @media(max-width:550px) {
    .t-cards {
        flex-wrap: wrap;
        display: flex;
        justify-content: center;
    }
    .testi-1, .testi-2, .testi-3 {
        flex: 1 1 calc(50% - 1rem); /* Two cards per row with consistent width */
        margin: 0.5rem; /* Add margin between cards */
        /* max-width: 24rem; */
    }
    .testi-3 {
        margin-top: 2rem; /* Add spacing above the third card */
        max-width: 20rem;
    }
}


</style>

<div id="testi" class="testimonials w-full">
    <div class="test mx-auto">
        <div class="t-text text-center">
            <a href="#testi" aria-label="Go to testimonials"><button class="test-btn">Testimonials</button></a>
            <p class=" mt-2">Nice things people have said about me:</p>
        </div>
        <div class="t-cards flex">
            <div class="testi-1 max-w-96">
                <div class="img flex justify-center">
                    <img src="./testimonials/icon-avatar.svg" alt="avatar">
                </div>
                <div class="t1-text text-center place-self-center mt-4">
                    <span>“Job well done! I am really impressed. He is very very good at what he does:) I would recommend Sagar and will rehire in the future for Frontend development.”</span>
                </div>
                <div class="info text-center">
                    <h2>John Dove</h2>
                    <p>Founder - xyz.com</p>
                </div>
            </div>
            <div class="testi-2 max-w-96">
            <div class="img flex justify-center">
                    <img src="./testimonials/icon-avatar.svg" alt="avatar">
                </div>
                <div class="t1-text text-center place-self-center mt-4">
                    <span>“Job well done! I am really impressed. He is very very good at what he does:) I would recommend Sagar and will rehire in the future for Frontend development.”</span>
                </div>
                <div class="info text-center">
                    <h2>John Dove</h2>
                    <p>Founder - xyz.com</p>
                </div>
            </div>
            <div class="testi-3 max-w-96">
            <div class="img flex justify-center">
                    <img src="./testimonials/icon-avatar.svg" alt="avatar">
                </div>
                <div class="t1-text text-center place-self-center mt-4">
                    <span>“Job well done! I am really impressed. He is very very good at what he does:) I would recommend Sagar and will rehire in the future for Frontend development.”</span>
                </div>
                <div class="info text-center">
                    <h2>John Dove</h2>
                    <p>Founder - xyz.com</p>
                </div>
            </div>
        </div>
    </div>
</div>