<div class="wrapper">
  <aside class="doc__nav">
    <ul>
      <li class="js-btn selected"><?=$content->contents_title?></li>
      <?php foreach ($contents as $key => $value): ?>
        <li class="js-btn">
          <?=$value->contents_title?>
          <?php
            $childs = $this->db->where('contents_parents', $value->contents_id)->count_all_results('contents');
           ?>
          <?php if ($childs > 0): ?>
            <br>
            <a href="<?=base_url('detail/').md5($value->contents_id)?>"><span class="lnr lnr-arrow-right"></span> Genişlet</a>
          <?php endif; ?>
        </li>

      <?php endforeach; ?>
    </ul>
  </aside>
  <article class="doc__content">
    <section class="js-section">
      <h3 class="section__title"><?=$content->contents_title?></h3>
      <div class="w-100 text-right">
        <a href="<?=base_url('admin/contents/tree/').md5($content->contents_id)?>" target="_blank" class="btn btn-outline-secondary btn-sm">Diagram</a>
      </div>
      <p><?=$content->contents_description?></p>
      <?php if ($content->contents_image !== NULL): ?>
        <img src="<?=base_url('uploads/'.$content->contents_image)?>" height="200px" alt="">
      <?php endif; ?>
      <?php if ($content->contents_code !== NULL): ?>
        <div class="code__block code__block--notabs">
          <pre class="code code--block">
            <code>
              <?=$content->contents_code?>
            </code>
          </pre>
        </div>
      <?php endif; ?>
    </section>


    <?php foreach ($contents as $key => $content): ?>
      <section class="js-section">
        <h3 class="section__title"><?=$content->contents_title?></h3>
        <p><?=$content->contents_description?></p>
        <?php if ($content->contents_image !== NULL): ?>
          <img src="<?=base_url('uploads/'.$content->contents_image)?>" height="200px" alt="">
        <?php endif; ?>
        <?php if ($content->contents_code !== NULL): ?>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                <?=$content->contents_code?>
              </code>
            </pre>
          </div>
        <?php endif; ?>
      </section>
    <?php endforeach; ?>

  </article>
</div>