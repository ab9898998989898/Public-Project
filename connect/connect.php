<style>
    .contact {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contact-section {
        text-align: center;
        padding: 2rem;
        border-radius: 1rem;
        width: 90%;
        max-width: 600px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .contact-section button {
        background-color: #4A5568;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 1rem;
        font-size: 1rem;
        cursor: pointer;
        margin-bottom: 1rem;
    }

    .contact-section button:hover {
        background-color: #718096;
    }

    .contact-section .info {
        margin: 1rem 0;
        font-size: 1rem;
    }

    .contact-section .info span {
        display: block;
        margin: 0.5rem 0;
        font-size: 2rem;
    }

    .contact-section .platforms {
        margin-top: 1.5rem;
        display: flex;
        justify-content: center;
    }

    .contact-section .platforms a {
        color: white;
        font-size: 1.5rem;
        margin: 0 0.5rem;
        text-decoration: none;
    }

    .contact-section .platforms a:hover {
        color: #4A90E2;
    }

    @media (max-width: 600px) {
        .contact-section {
            padding: 1.5rem;
        }

        .contact-section button {
            font-size: 0.9rem;
            padding: 0.5rem 0.8rem;
        }

        .contact-section .info {
            font-size: 0.9rem;
        }

        .contact-section .info span {
            font-size: 1.5rem;
        }

        .contact-section .platforms a {
            font-size: 1.2rem;
        }
    }
</style>

<div id="connect" class="contact w-full">
    <div class="contact-section">
        <a href="#connect" aria-label="Go to connect"><button>Get in touch</button></a>
            <p>What’s next? Feel free to reach out to me if you’re looking for a developer, have a query, or simply want to connect.</p>
        <div class="info">
            <span><strong>&#9993; reachsagarshah@gmail.com</strong></span>
            <a href="tel:+923161404891"><span><strong>&#9743; +92 3161404891</strong></span></a>
        </div>
        <p>You may also find me on these platforms!</p>
        <div class="platforms">
            <a href="#" aria-label="GitHub"><img src="./connect/git.svg" alt=""></a>
            <a href="#" aria-label="Twitter"><img src="./connect/x.svg" alt=""></a>
            <a href="#" aria-label="Dribbble"><img src="./connect/figma.svg" alt=""></a>
        </div>
    </div>
</div>
