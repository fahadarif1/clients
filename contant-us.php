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
            <h1>Constitutional Law</h1>
            <div class="breadcrumb">Home &nbsp;|&nbsp; Practices &nbsp;|&nbsp; Insurance Law</div>
        </div>
    </section>



<?php include "include/footer.php" ?>