<div class="rows">
  <div class="col-lg-7">
    <section class="panel">
        <?php 
          (isset($form) && !empty($form))? print $form:'';
        ?>
    </section>
    <section class="panel">
        <?php 
          (isset($detail) && !empty($detail))? print $detail:'';
        ?>
    </section>
  </div>
</div>