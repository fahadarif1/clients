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
   
        /* --- SECTION 1: HERO SECTION --- */
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

        .breadcrumb {
            font-size: 14px;
            color: #dddddd;
            font-family: sans-serif;
            letter-spacing: 0.5px;
        }

        /* --- SECTION 2: PRACTICE AREAS & CONTENT --- */
        .main-container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .content-area img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 30px;
        }

        .content-area p {
            font-size: 15px;
            color: #ffffff;
            margin-bottom: 20px;
            font-family: sans-serif;
            line-height: 1.8;
        }

       
        /* --- SECTION 3: OUR PROCESS --- */
        .process-section {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .process-section > h2 {
       
            margin-bottom: 15px;
            color: #ffffff;
            font-size: var(--text-7xl);
        line-height: var(--tw-leading, var(--text-7xl--line-height));
        }

        .process-section > p {
            font-family: sans-serif;
            font-size: 15px;
            color: #ffffff;
            margin-bottom: 40px;
            max-width: 900px;
            line-height: 1.8;
        }

        .process-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .process-steps {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .step-item {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .check-icon {
            background-color: #DBB144;
            color: white;
            min-width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-top: 3px;
        }

        .step-text h4 {
            font-size: 18px;
            margin-bottom: 8px;
            color: #ffffff;
        }

        .step-text p {
            font-family: sans-serif;
            font-size: 14px;
            color: #fdfdfd;
            line-height: 1.6;
        }

        .process-image img {
            width: 100%;
            border-radius: 4px;
        }

        /* --- SECTION 4: 3 CARDS FEATURE SECTION --- */
        .features-section {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .feature-card {
            border: 1px solid #DBB144;
            padding: 40px 30px;
            text-align: center;
            border-radius: 20PX;
          
            transition: box-shadow 0.3s ease;
        }

        .feature-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .feature-icon {
            font-size: 36px;
            margin-bottom: 25px;
        }

        .feature-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .feature-card p {
            font-family: sans-serif;
            font-size: 14px;
            color: #ffffff;
            line-height: 1.7;
        }

        /* Responsive design for mobile */
        @keyframes placeholder {
            from { opacity: 1; } to { opacity: 1; }
        }
        @media(max-width: 768px) {
            .main-container, .process-grid, .features-section {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- SECTION 1: Insurance Law Header Banner -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Tax Law</h1>
            <div class="breadcrumb">Home &nbsp;|&nbsp; Practices &nbsp;|&nbsp; Insurance Law</div>
        </div>
    </section>

    <!-- SECTION 2: Main Content with Practice Areas Sidebar -->
    <div class="main-container">
         <div class="content-area">
            <img 
    data-aos="fade-right"
    data-aos-duration="2000"
    src="assets/photo-1521791136064-7986c2920216.avif"
    alt="Lawyers working">


               <h2 class="font-display uppercase leading-[0.95] text-5xl md:text-7xl"
                        data-tsd-source="/src/routes/index.tsx:56:10">Latest <span class="text-primary"
                            data-tsd-source="/src/routes/index.tsx:264:27">Insights</span></h2>
            <p>Grursus mal suada faci lisis Lorem ipsum dolarorit and more a ametioni consectetur elit. Vesti at bulum nec is odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadoloriti to the consectetur elit. All the Lorem Ipsum generators the Internet to repeats predefined chunks as necessary, making this the first true generatori on the Internet. It uses of the...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>


        </div>

    <div class="sidebar">
    
            <ul class="practice-list">
                
                <li><a href="Constitutional-Law.php">Constitutional Law</a></li>
                <li><a href="Corporate-Law.php">Corporate Law</a></li>
                <li><a href="Criminal-Law.php">Criminal Law</a></li>
                <li><a href="Family-Law.php">Family Law</a></li>
                <li><a href="Tax-Law.php">Tax Law</a></li>
                <li><a href="Property-Law.php">Property Law</a></li>
             
            </ul>
        </div>
    </div>


        <section class="features-section">
        <div class="">
      
            <h3>Discuss Your Legal Issue</h3>
            <p>Grursus mal suada faci lisis Lorem ipsum is a of dolarorit more a ametion consectetur The Vesti the at bulum words.</p>
        </div>
        <div class="">
          
            <h3>Recommended Lawyers</h3>
            <p>Grursus mal suada faci lisis Lorem ipsum is a of dolarorit more a ametion consectetur The Vesti the at bulum words.</p>
        </div>
     
    </section>


      <div class="overflow-hidden border-y border-border py-6" data-tsd-source="/src/routes/index.tsx:114:7">
            <div class="flex w-max animate-marquee gap-16" data-tsd-source="/src/routes/index.tsx:115:9"><span
                    class="text-2xl font-bold text-muted-foreground" data-tsd-source="/src/routes/index.tsx:116:67">45
                    Degrees°</span><span class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Acme Corp</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Codecraft_</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Convergence</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Lightspeed</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Luminary</span><span
                    class="text-2xl font-bold text-muted-foreground" data-tsd-source="/src/routes/index.tsx:116:67">45
                    Degrees°</span><span class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Acme Corp</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Codecraft_</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Convergence</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Lightspeed</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Luminary</span><span
                    class="text-2xl font-bold text-muted-foreground" data-tsd-source="/src/routes/index.tsx:116:67">45
                    Degrees°</span><span class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Acme Corp</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Codecraft_</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Convergence</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Lightspeed</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Luminary</span><span
                    class="text-2xl font-bold text-muted-foreground" data-tsd-source="/src/routes/index.tsx:116:67">45
                    Degrees°</span><span class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Acme Corp</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Codecraft_</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Convergence</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Lightspeed</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Luminary</span></div>
        </div>

    <!-- SECTION 3: Our Process -->
    <section class="process-section">
        <h2 class="font-display uppercase leading-[0.95] text-5xl md:text-7xl"
                        data-tsd-source="/src/routes/index.tsx:56:10">Latest <span class="text-primary"
                            data-tsd-source="/src/routes/index.tsx:264:27">Insights</span></h2>
        <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametioni consectetur elit. Vesti at bulum nec is odio aea a the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorits to the consectetur elit. All the Lorem Ipsum is necessary making true generator on the Internet.</p>
        
        <div class="process-grid">
            <div class="process-steps">
                <div class="step-item">
                    <div class="check-icon">✓</div>
                    <div class="step-text">
                        <h4>Planning The Case</h4>
                        <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametioni consectetur elit. Vesti at dumm.</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="check-icon">✓</div>
                    <div class="step-text">
                        <h4>Evaluate Situation</h4>
                        <p>All the Lorem Ipsumi generators on the Internet tends to repeat the necessary, All of the Loremi the Internet tend predefined chunks.</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="check-icon">✓</div>
                    <div class="step-text">
                        <h4>File The Case To The Court</h4>
                        <p>All the Lorem Ipsum generators on the Internet a tend to repeat All the Lorem Ipsum on the Internet.</p>
                    </div>
                </div>
                <div class="step-item">
                    <div class="check-icon">✓</div>
                    <div class="step-text">
                        <h4>Gather More Information</h4>
                        <p>Grursus mal suada faci lisis the Lorem ipsums dolarorit more dummy ametioni consectetur elit. Vesti the more dumm ipsumm ipsum that at consectetur elit.</p>
                    </div>
                </div>
            </div>
            
            <div class="process-image">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80" alt="Process Analysis">
            </div>
        </div>
    </section>

    <!-- SECTION 4: Three Feature Cards -->
    <section class="features-section">
        <div class="feature-card">
            <div class="feature-icon">📜</div>
            <h3>Discuss Your Legal Issue</h3>
            <p>Grursus mal suada faci lisis Lorem ipsum is a of dolarorit more a ametion consectetur The Vesti the at bulum words.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">⚖️</div>
            <h3>Recommended Lawyers</h3>
            <p>Grursus mal suada faci lisis Lorem ipsum is a of dolarorit more a ametion consectetur The Vesti the at bulum words.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">📖</div>
            <h3>Choose Your Legal Advisor</h3>
            <p>Grursus mal suada faci lisis Lorem ipsum is a of dolarorit more a ametion consectetur The Vesti the at bulum words.</p>
        </div>
    </section>


<?php include "include/footer.php" ?>