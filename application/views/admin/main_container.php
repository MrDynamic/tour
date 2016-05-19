<div class="rows">
    <?php
      (isset($form) && !empty($form))? print $form:'';
    ?>
  </div>
    <div class="col-lg-11">
        <section class="panel" id="detail">
            <?php
            (isset($detail) && !empty($detail))? print $detail:'';
            ?>
        </section>
    </div>
</div>