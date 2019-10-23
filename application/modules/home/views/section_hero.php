<style type="text/css" media="screen">
/* ==========================================================
! Section: Hero
========================================================== */
.section-mini-hero {
    min-height: 480px;
    background: #eee;
    color: #ffffff;
    position: relative;
    text-align: center;
    padding-top: 130px;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
}

.mini-hero-subtitle {
    font-size: 14px;
    font-weight: 200;
    margin-top: 0;
    text-transform: uppercase;
    color: #ffffff;
}

.mini-hero-title {
    font-size: 42px;
    font-weight: normal;
    letter-spacing: -2px;
    margin-bottom: 5px;
    margin-top: 10px;
    color: #ffffff;
}

.profile-pic img {
    border-radius: 100%;
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
    border: 6px solid rgba(255, 255, 255, 0.8);
    max-width: 220px;
    width: 100%;
}
</style>
<div class="section-mini-hero" id="hero1" style="background-image: url('<?php echo base_url(); ?>assets/img/bg2.jpg');">
    <div class="container">
        <div class="profile-pic">
            <img src="<?php echo base_url(); ?>assets/img/profile-me.jpg" alt="" />
        </div>
        <h1 class="title1 mini-hero-title">Hi, i'm <strong>
                <?php echo $name ?></strong></h1>
        <div id="typed-strings">
            <h2>
                <?php echo $jobs ?>
            </h2>
            <!-- <h2>Drimo Android Template</h2> -->
            <!-- <h2>Drimo Apple iso</h2> -->
        </div>
        <h2 class="title2 mini-hero-subtitle"><span id="typed"></span></h2>
    </div>
</div>