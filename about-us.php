<?php
ob_start();
include('include/header.php');
$pg = ob_get_contents();
$pageTitle = '';
$description = '';
$author = '';
$keywords = "";
$canonical = "";
//delete old desc and author
$pg = str_replace('content=""', '', $pg);
//add anew desc and author
$pg = str_replace('name="description"', 'name="description" content="' . $description . '" ', $pg);
$pg = str_replace('name="author"', 'name="author" content="' . $author . '" ', $pg);
$pg = str_replace('name="keywords"', 'name="keywords" content="' . $keywords . '" ', $pg);
$pg = str_replace('rel="canonical"', 'rel="canonical" href="' . $canonical . '" ', $pg);
ob_end_clean();
ob_end_clean();
echo str_replace('%TITLE%', $pageTitle, $pg);
?>
<style>
        .hero-section {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            color: #ffffff;
            padding: 100px 50px;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero-section h1 {
            font-size: 42px;
            font-weight: normal;
            margin-bottom: 10px;
            font-family: 'Georgia', serif;
        }
</style>
   <section class="hero-section">
        <div class="hero-content">
            <h1>About Us</h1>
            <div class="breadcrumb">Home &nbsp;|&nbsp; Practices &nbsp;|&nbsp; Insurance Law</div>
        </div>
    </section>




<section class="about-lawyer">
    <div class="about-container">

        <!-- Left Image -->
        <div class="lawyer-image">
            <img src="assets/Gemini_Generated_Image_5yd4kw5yd4kw5yd4.jpg" alt="Advocate Wajahat Ali">
           
        </div>

        <!-- Center About -->
        <div class="about-content">
            <span class="small-heading">About me</span>

            <h2>
                WELCOME TO THE OFFICE OF  
                <em>WAJAHAT ALI</em>
            </h2>

            <p>
                I am a High Court and District Court advocate in Karachi.
                Since 2019 I have worked on civil, labour, tax and
                corporate matters, and I appear in court almost every
                working day.
            </p>

            <p>
                I prepare each case from the first meeting to the final
                hearing: client conferences, research into statutes and
                precedents, drafting, and appearance before the court.
            </p>

            <div class="lawyer-signature">
                <h3>Wajahat Ali</h3>
                <span>Advocate High Court, Karachi</span>
            </div>
        </div>

        <!-- Right Practice Areas -->
        <div class="practice-content">
            <h3>Where I practise</h3>

            <p class="practice-intro">
                Courts and tribunals where I appear, and the matters
                I handle there.
            </p>

            <div class="practice-item">
                <h4>Litigation</h4>
                <p>District Courts and High Court</p>
                <div class="practice-line"></div>
            </div>

            <div class="practice-item">
                <h4>Labour & industrial relations</h4>
                <p>Labour Court and NIRC</p>
                <div class="practice-line"></div>
            </div>

            <div class="practice-item">
                <h4>Tax & company registration</h4>
                <p>Appeals, SMC and AOP registration, Sales Tax, NTN</p>
                <div class="practice-line"></div>
            </div>

            <div class="practice-item">
                <h4>Dispute resolution</h4>
                <p>Certified in alternate dispute resolution</p>
                <div class="practice-line"></div>
            </div>

        </div>

    </div>
</section>



<section class="why-choose-section">

    <div class="why-container">

        <div class="why-heading">
            <h2>WHY CHOOSE ATTORG FOR YOUR<br> LEGAL SUPPORT</h2>

            <p>
                Grursus mal suada faci lis Lorem ipsum dolorit more a ametion
                consectetur elit. Vesti at bulum nec<br>
                odio aea the dumm ipsumm ipsum that dolocons consectetur elit.
            </p>
        </div>

        <div class="why-cards">

            <!-- Card 1 -->
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>

                <div class="why-text">
                    <h3>Legal Attorneys</h3>
                    <p>Grursus mal and suada faci lis Lorem ipsum dolororit...</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-landmark"></i>
                </div>

                <div class="why-text">
                    <h3>Years Experience</h3>
                    <p>Grursus mal and suada faci lis Lorem ipsum dolororit...</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-award"></i>
                </div>

                <div class="why-text">
                    <h3>Law Certificate</h3>
                    <p>Grursus mal and suada faci lis Lorem ipsum dolororit...</p>
                </div>
            </div>

        </div>

    </div>

</section>


<section class="blogs-section" id="blogs">

    <div class="blogs-container">

        <div class="blogs-heading">
            <div>
                <h2>Latest <span>Insights</span></h2>
                <p>Practical legal insights, expert advice, and resources to help you navigate life's legal challenges.</p>
            </div>

            <div class="blog-arrows">
                <button class="blog-prev">&#8592;</button>
                <button class="blog-next">&#8594;</button>
            </div>
        </div>

        <div class="blog-slider">
            <div class="blog-track">

                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=1000&auto=format&fit=crop" alt="Legal lawsuit">
                    <p class="blog-date">Sep 18, 2026</p>
                    <h3>What to Do When You're Served with a Lawsuit</h3>
                    <a href="#">Read More <span>↗</span></a>
                </article>

                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b?q=80&w=1000&auto=format&fit=crop" alt="Business law">
                    <p class="blog-date">Sep 12, 2026</p>
                    <h3>5 Legal Steps Every Small Business Should Take</h3>
                    <a href="#">Read More <span>↗</span></a>
                </article>

                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=1000&auto=format&fit=crop" alt="Criminal law">
                    <p class="blog-date">Sep 9, 2026</p>
                    <h3>Understanding Your Rights During a Criminal Investigation</h3>
                    <a href="#">Read More <span>↗</span></a>
                </article>

                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=1000&auto=format&fit=crop" alt="Court documents">
                    <p class="blog-date">Sep 5, 2026</p>
                    <h3>Understanding Your Legal Rights in Court</h3>
                    <a href="#">Read More <span>↗</span></a>
                </article>

                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b?q=80&w=1000&auto=format&fit=crop" alt="Corporate law">
                    <p class="blog-date">Sep 2, 2026</p>
                    <h3>Important Legal Advice for Business Owners</h3>
                    <a href="#">Read More <span>↗</span></a>
                </article>

            </div>
        </div>

        <div class="blog-dots"></div>

    </div>
</section>


<STYle>

.blogs-section {
    padding: 100px 6%;
    background: #000000;
    overflow: hidden;
}

.blogs-container {
    max-width: 1400px;
    margin: auto;
}

.blogs-heading {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 25px;
    margin-bottom: 50px;
}

.blogs-heading h2 {
    font-size: 55px;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 1;
    color: #ffffff;
    margin: 0;
        font-family: Anton, sans-serif;
}

.blogs-heading h2 span {
    color: #e9a64f;
}

.blogs-heading p {
    max-width: 550px;
    color: #ffffff;
    font-size: 15px;
    line-height: 1.8;
    margin-top: 18px;
}

.blog-arrows {
    display: flex;
    gap: 12px;
}

.blog-arrows button {
    width: 45px;
    height: 45px;
    border: 1px solid #e9a64f;
    border-radius: 50%;
    background: transparent;
    color: #e9a64f;
    font-size: 23px;
    cursor: pointer;
    transition: 0.3s;
}

.blog-arrows button:hover {
    background: #e9a64f;
    color: #fff;
}

/* Slider */

.blog-slider {
    overflow: hidden;
    width: 100%;
}

.blog-track {
    display: flex;
    gap: 30px;
    transition: transform 0.6s ease;
}

.blog-card {
    flex: 0 0 calc((100% - 60px) / 3);
    min-width: 0;
}

.blog-card img {
    width: 100%;
    aspect-ratio: 4 / 3;
    object-fit: cover;
    border-radius: 8px;
    display: block;
    transition: transform 0.5s ease;
}

.blog-card:hover img {
    transform: scale(1.03);
}

.blog-date {
    color: #ffffff;
    font-size: 14px;
    margin: 18px 0 10px;
}

.blog-card h3 {
    font-size: 23px;
    line-height: 1.4;
    font-weight: 600;
    text-transform: uppercase;
    color: #ffffff;
    margin: 0 0 15px;
    transition: 0.3s;
}

.blog-card h3:hover {
    color: #e9a64f;
}

.blog-card a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #e9a64f;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
}

.blog-card a span {
    font-size: 19px;
}

/* Dots */

.blog-dots {
    display: flex;
    justify-content: center;
    gap: 9px;
    margin-top: 35px;
}

.blog-dot {
    width: 9px;
    height: 9px;
    background: #ddd;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    padding: 0;
}

.blog-dot.active {
    background: #e9a64f;
    width: 25px;
    border-radius: 10px;
}

/* Tablet */

@media (max-width: 991px) {
    .blog-card {
        flex: 0 0 calc((100% - 30px) / 2);
    }

    .blogs-heading h2 {
        font-size: 42px;
    }
}

/* Mobile */

@media (max-width: 600px) {
    .blogs-section {
        padding: 60px 20px;
    }

    .blogs-heading {
        align-items: start;
        flex-direction: column;
        margin-bottom: 30px;
    }

    .blogs-heading h2 {
        font-size: 36px;
    }

    .blog-card {
        flex: 0 0 100%;
    }

    .blog-card h3 {
        font-size: 21px;
    }
}

</STYle>


<SCRipt>

const track = document.querySelector(".blog-track");
const cards = document.querySelectorAll(".blog-card");
const nextBtn = document.querySelector(".blog-next");
const prevBtn = document.querySelector(".blog-prev");
const dotsContainer = document.querySelector(".blog-dots");

let currentIndex = 0;
let autoSlide;

function getVisibleCards() {
    if (window.innerWidth <= 600) return 1;
    if (window.innerWidth <= 991) return 2;
    return 3;
}

function getMaxIndex() {
    return Math.max(0, cards.length - getVisibleCards());
}

function updateSlider() {
    const gap = 30;
    const cardWidth = cards[0].getBoundingClientRect().width;

    track.style.transform =
        `translateX(-${currentIndex * (cardWidth + gap)}px)`;

    document.querySelectorAll(".blog-dot").forEach((dot, i) => {
        dot.classList.toggle("active", i === currentIndex);
    });
}

function createDots() {
    dotsContainer.innerHTML = "";

    for (let i = 0; i <= getMaxIndex(); i++) {
        const dot = document.createElement("button");
        dot.className = "blog-dot";
        dot.setAttribute("aria-label", "Go to slide " + (i + 1));

        dot.addEventListener("click", () => {
            currentIndex = i;
            updateSlider();
        });

        dotsContainer.appendChild(dot);
    }

    updateSlider();
}

function nextSlide() {
    currentIndex++;

    if (currentIndex > getMaxIndex()) {
        currentIndex = 0;
    }

    updateSlider();
}

function prevSlide() {
    currentIndex--;

    if (currentIndex < 0) {
        currentIndex = getMaxIndex();
    }

    updateSlider();
}

nextBtn.addEventListener("click", nextSlide);
prevBtn.addEventListener("click", prevSlide);

function startAutoSlide() {
    clearInterval(autoSlide);
    autoSlide = setInterval(nextSlide, 3500);
}

window.addEventListener("resize", () => {
    currentIndex = Math.min(currentIndex, getMaxIndex());
    createDots();
});

createDots();
startAutoSlide();

track.parentElement.addEventListener("mouseenter", () => {
    clearInterval(autoSlide);
});

track.parentElement.addEventListener("mouseleave", startAutoSlide);

</SCRipt>







    




<?php include "include/footer.php" ?>