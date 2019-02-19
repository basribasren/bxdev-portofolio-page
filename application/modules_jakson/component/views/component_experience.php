<?php foreach ($experiences as $experience):?>
  <article class="timeline-entry animate-box" data-animate-effect="<?php echo $experience->effect;?>">
      <div class="timeline-entry-inner">

         <div class="timeline-icon <?php echo $experience->color;?>">
            <i class="<?php echo $experience->icon;?>"></i>
         </div>

         <div class="timeline-label">
            <h2>
              <a href="#"><?php echo $experience->title;?></a> 
              <span><?php echo $experience->from;?>-<?php echo $experience->to;?></span>
            </h2>
            <p><?php echo $experience->description;?></p>
         </div>
      </div>
   </article>
<?php endforeach;?>