<div class="container p-0">
  <div class="row">
    <div class="col-12">
      <table class="table table-striped table-bordered table-sm">
        <tr>
          <td class="font-weight-bold">ID: </td>
          <td class="font-weight-bold"><?=$contents->contents_id?></td>
        </tr>
        <tr>
          <td class="font-weight-bold">Başlık: </td>
          <td class="font-weight-bold"><?=$contents->contents_title?></td>
        </tr>
        <tr>
          <td class="font-weight-bold">Kategori: </td>
          <td class="font-weight-bold"><?=($contents->contents_parents == '0') ? 'Ana Kategori' : $contents->contents_parents ;?></td>
        </tr>

        <tr>
          <td class="font-weight-bold">Açıklama: </td>
          <td class="font-weight-bold"><?=$contents->contents_description?></td>
        </tr>
        <tr>
          <td class="font-weight-bold">Görsel: </td>
          <td class="font-weight-bold">
            <!-- <img src="" data-fancybox="gallery"  height="70px" alt=""> -->
          </td>
        </tr>

      </table>
    </div>
  </div>
</div>