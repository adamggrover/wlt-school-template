<div class="accordion accordion-flush" id="accordionFlushExample">

<?php

  $accordionItems = $args['accordion_items'];

  if( $accordionItems): 

    $collapseId = 0;

    foreach ($accordionItems as $accordionItem) :  ?>

    

      <div class="accordion-item" id="accordionFlushExample<?php echo $collapseId ?>">
        <h2 class="accordion-header" id="flush-heading<?php echo $collapseId ?>">
          <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $collapseId ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $collapseId ?>">
          <?php echo $accordionItem['accordion_item_title'] ?>
          </button>
        </h2>
        <div id="flush-collapse<?php echo $collapseId ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $collapseId ?>" data-bs-parent="#accordionFlushExample<?php echo $collapseId ?>">
          <div class="accordion-body"><?php echo $accordionItem['accordion_item_body'] ?></div>
        </div>
      </div>


      <?php

      $collapseId++;

    endforeach; 

    endif; ?>

</div>