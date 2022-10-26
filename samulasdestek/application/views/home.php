<div class="container">
  <div class="row justify-center-center">
    <div class="col-lg-12 col-md-12 col-12">
      <div class="feature mt-5 mb-5">
        <?php foreach ($contents as $key => $content): ?>
          <div class="feature__item">
            <h3 class="section__title"><?=$content->contents_title?></h3>
            <p>
              <?=$content->contents_description?>
            </p>
            <a href="<?=base_url('detail/'.md5($content->contents_id))?>" class="btn btn-outline-secondary">Dökümantasyon</a>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>