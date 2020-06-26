<style type="text/css" media="screen">
/* ==========================================================
! Section: Skills
========================================================== */
.skills-list {
    padding-left: 0;
    margin-left: 0;
}

.progress {
    position: relative;
    height: 25px;
    margin-bottom: 10px;
}

.progress>.progress-type {
    position: absolute;
    left: 0px;
    font-size: 13px;
    padding: 3px 30px 2px 10px;
    color: #ffffff;
    background-color: rgba(25, 25, 25, 0.2);
}

.progress>.progress-completed {
    position: absolute;
    right: 0px;
    font-weight: 800;
    padding: 3px 10px 2px;
    color: #888;
    font-size: 14px;
}

.skills-list {
    list-style: none;
    margin-bottom: 40px;
}

.progress-bar {
    background: #09afad;
    width: 20%;
}

.progress-bar-2 {
    background: #031634;
}

.progress-bar-3 {
    background: #da222b;
}
</style>


<?php 
$soft_skill = array(
    array(
        'class' => '',
        'complete' =>'70',
        'type' => 'Communication'
    ),
    array(
        'class' => 'progress-bar-2',
        'complete' =>'85',
        'type' => 'Leadership'
    ),
    array(
        'class' => 'progress-bar-3',
        'complete' =>'85',
        'type' => 'Confidence'
    ),
);
?>

<?php 
$app_skill = array(
    array(
        'class' => '',
        'complete' =>'85',
        'type' => 'Codeigniter'
    ),
    array(
        'class' => 'progress-bar-2',
        'complete' =>'40',
        'type' => 'Laravel'
    ),
    array(
        'class' => 'progress-bar-3',
        'complete' =>'75',
        'type' => 'Express.js'
    ),
    array(
        'class' => 'progress-bar-2',
        'complete' =>'80',
        'type' => 'Loopback'
    ),
    array(
        'class' => '',
        'complete' =>'85',
        'type' => 'React.js and Redux.js'
    ),
);
?>
<!-- Section: Skills -->
<div class="section-skills" id="skills">
    <!-- Section Title -->
    <h2 class="title-of-section text-right">Skills</h2>
    <!-- /Section Title -->
    <div class="row">
        <div class="col-md-6">
            <!-- Item Title -->
            <h3 class="title4"><i class="fa fa-users"></i>&nbsp;&nbsp; Professional Skills</h3>
            <!-- /Item Title -->
            <!-- Skils List -->
            <ul class="skills-list">
                <?php 
                    $arrlength = count($soft_skill);
                    for ($i = 0; $i < $arrlength; $i++){
                ?>
                <!-- item-list -->
                <li>
                    <div class="progress">
                        <div class="progress-bar <?php echo $soft_skill[$i]['class'] ?>" role="progressbar" data-percent="<?php echo $soft_skill[$i]['complete'] ?>%" style="width: <?php echo $soft_skill[$i]['complete']; ?>%;">
                            <span class="sr-only">% Complete</span>
                        </div>
                        <span class="progress-type"><?php echo $soft_skill[$i]['type']; ?></span>
                        <span class="progress-completed"><span class="counter"><?php echo $soft_skill[$i]['complete']; ?></span>%</span>
                    </div>
                </li>
                <!-- /item list -->
                <?php } ?>
            </ul>
            <!-- /Skils List -->
        </div>
        <div class="col-md-6">
            <!-- Item Title -->
            <h3 class="title4"><i class="fa fa-laptop"></i>&nbsp;&nbsp; Software Skills</h3>
            <!-- /Item Title -->
            <!-- Skils List -->
            <ul class="skills-list">
                <!-- item-list -->
                <?php 
                    $arrlength = count($app_skill);
                    for ($i = 0; $i < $arrlength; $i++){
                ?>
                <!-- item-list -->
                <li>
                    <div class="progress">
                        <div class="progress-bar <?php echo $app_skill[$i]['class'] ?>" role="progressbar" data-percent="<?php echo $app_skill[$i]['complete'] ?>%" style="width: <?php echo $app_skill[$i]['complete']; ?>%;">
                            <span class="sr-only">% Complete</span>
                        </div>
                        <span class="progress-type"><?php echo $app_skill[$i]['type']; ?></span>
                        <span class="progress-completed"><span class="counter"><?php echo $app_skill[$i]['complete']; ?></span>%</span>
                    </div>
                </li>
                <!-- /item list -->
                <?php } ?>
                <!-- /item list -->
            </ul>
            <!-- /Skils List -->
        </div>
    </div>
</div>
<!-- /Section: Skills -->