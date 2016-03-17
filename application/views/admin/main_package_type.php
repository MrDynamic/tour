<div class="rows">
  <div class="col-lg-12">
    <section class="panel">
        <?php 
          (isset($master) && !empty($master))? print $master:'';
        ?>
    </section>
    <section class="panel">
        <?php 
          (isset($detail) && !empty($detail))? print $detail:'';
        ?>
    </section>
  </div>
</div>