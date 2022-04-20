<style>
  
@media (min-width: 992px){
  .modal-xl {
    max-width: 1300px !important;
  }
}

</style>
<!-- Modal -->
<div class="modal fade" id="slideModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background: rgb(255,255,255, 0.5);">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
            <?php $count = 1 ?>
            <?php foreach ($fotos as $f): ?>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $count ?>" aria-label="Slide <?= $count ?>"></button>
              <?php $count++ ?>
            <?php endforeach ?>
          </div>
          <div class="carousel-inner">
            <div class="position-absolute bottom-0 top-0 px-3 py-3 text-center" style="z-index:1;right: 0;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="carousel-item active">
              <img src="/frontend/web/<?= $model->portada ?>" class="d-block w-100" alt="...">
            </div>
            <?php $count = 0 ?>
            <?php foreach ($fotos as $f): ?>
              <?php $count++ ?>
              <div class="carousel-item">
                <img src="/frontend/web/<?= $f ?>" class="d-block w-100" alt="...">
              </div>
            <?php endforeach ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content py-3">
      <div class="modal-body text-center">
        <!-- AddToAny BEGIN -->
        <div class="py-4">
            <p class="h4 fw-bold text-primary">Compartir Propiedad</p>
        </div>
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a> -->
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_email"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_button_facebook_messenger"></a>
            <a class="a2a_button_telegram"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->
      </div>
    </div>
  </div>
</div>