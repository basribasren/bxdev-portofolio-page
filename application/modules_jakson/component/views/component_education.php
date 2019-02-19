<?php foreach ($educations as $education):?>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="<?php echo $education->id_panel;?>">
            <h4 class="panel-title">
                <a class="collapsed"
                    data-toggle="collapse" 
                    data-parent="#accordion" 
                    href="#<?php echo $education->id_collapse;?>" 
                    aria-expanded="false" 
                    aria-controls="<?php echo $education->id_collapse;?>">
                    <?php echo $education->title;?>
                </a>
            </h4>
        </div>
        <div class="panel-collapse collapse" 
            id="<?php echo $education->id_collapse;?>"
            role="tabpanel" 
            aria-labelledby="<?php echo $education->id_panel;?>">
             <div class="panel-body">
                <p><?php echo $education->description;?></p> 
            </div>
        </div>
    </div>
<?php endforeach;?>