

<section id="<?php print $css_id ?>" class="<?php print $css_classes; ?>">
  <div class="<?php print $container_mode ?>">
    <?php if($content['heading']): ?>
    <div class="row section-header">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading section-themeable"><?php print $content['heading'] ?></h2>
      </div>
    </div>
    <?php endif; ?>
    <?php if($content['introduction']): ?>
    <div class="row">
      <div class="col-sm-12 col-lg-12 text-center">
        <div class="introduction section-introduction section-themeable">
          <?php print $content['introduction'] ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="row multi-columns-row">


        <?php

        if(isset($content['items']))
        {
          print render($content['items']);
        }

        ?>

    </div>

    <?php if($content['closing']) : ?>
    <div class="row section-footer">
      <div class="col-sm-12 text-center">
        <div class="closing section-closing section-themeable"><?php print $content['closing'] ?></div>
      </div>
    </div>
    <?php endif; ?>

  </div>
</section>
