<?php 
$servicios = new \common\models\Servicios();

 ?>

<div class="modal fade" id="ofertasRechazadas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content container">
      <div class="modal-header border-bottom-0 text-end">
        <a class="text-danger"></a>
        <button type="button" class="text-end text-danger fw-bold float-end bg-white border-0" data-bs-dismiss="modal">CERRAR</button>
      </div>
      <div class="modal-body px-5">
        <h5 class="text-center text-primary mb-5">OFERTAS RECHAZADAS</h5>
        <hr>
        <?php foreach ($ofertasRechazadas as $oferta): ?>
          <div class="row">
            <div class="col-6 text-center pt-3">
              <p style="font-size:18px">USD$<?= number_format($oferta->monto) ?></p>
            </div>
            <div class="col-6 pt-3">
              <p style="font-size:18px"><?= $servicios->formatDate($oferta->status_updated_date) ?></p>
            </div>
          </div>
          <hr>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>