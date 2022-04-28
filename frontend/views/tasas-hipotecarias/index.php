<?php

$this->title = "Tasas Hipotecarias";

?>
<div class="container">
    <div class="container pt-5">
        <div class="row pt-5 mt-5 m-auto" style="max-width: 800px">
            <div class="w-100 mb-5">
                <p class="text-center text-primary p-2 m-0 fw-bold h4 mb-3">TASAS HIPOTECARIAS</p>
            </div>

            <div class="col-md-12 mb-5">
                <div class="accordion" id="accordionExample">
                    <?php foreach ($dataProvider->query->all() as $m) : ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header tasas" id="headingTwo<?= $m->id ?>">
                                <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?= $m->id ?>" aria-expanded="false" aria-controls="collapseTwo<?= $m->id ?>">
                                    <div class="row w-100 align-items-center">
                                        <div class="col-md-6">
                                            <p class="m-0"><img src="/frontend/web/<?= $m->photo_url ?>" width="150px"></p>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <div>
                                                <p class="m-0 fw-bold font-14">TASA FIJA</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo<?= $m->id ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo<?= $m->id ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-light">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-8 text-gotham">
                                            <div class="row pl-5 pr-5 pb-2">
                                                <div class="col-md-6">
                                                    <p class="m-0 pt-2 fw-bold font-14 mt-1">TASA FIJA</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="m-0 pt-2 fw-bold font-14 mt-1"><?= $m->duracion_1 ?></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="m-0 pt-2 fw-bold font-14 mt-1"><?= $m->tasa_1 ?></p>
                                                </div>
                                            </div>
                                            <?php if ($m->tasa_2) : ?>
                                                <div class="row pl-5 pr-5 border-top pb-2">
                                                    <div class="col-md-6">
                                                        <p class="m-0 pt-2 fw-bold font-14 mt-1">TASA FIJA</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="m-0 pt-2 fw-bold font-14 mt-1"><?= $m->duracion_2 ?></p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="m-0 pt-2 fw-bold font-14 mt-1"><?= $m->tasa_2 ?></p>
                                                    </div>
                                                </div>
                                            <?php endif ?>
                                            <?php if ($m->tasa_3) : ?>
                                                <div class="row pl-5 pr-5 border-top pb-2">
                                                    <div class="col-md-6">
                                                        <p class="m-0 pt-2 fw-bold font-14 mt-1">TASA FIJA</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="m-0 pt-2 fw-bold font-14 mt-1"><?= $m->duracion_3 ?></p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="m-0 pt-2 fw-bold font-14 mt-1"><?= $m->tasa_3 ?></p>
                                                    </div>
                                                </div>
                                            <?php endif ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>





            <div class="col-dm-12 mt-2">
                <p class="text-muted font-14">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>

            <div class="w-100 mb-5" id="calculadora">
                <p class="text-center text-primary p-2 m-0 fw-bold h4 mb-1 mt-5">TABLA AMORTIZACIÓN</p>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="number" class="form-control rounded-2 my-3 placeholder-blue" id="monto" placeholder="Monto solicitado">
                    </div>
                    <div class="col-lg-6">
                        <input type="number" class="form-control rounded-2 my-3 placeholder-blue" id="meses" placeholder="Meses">
                    </div>

                    <div class="col-lg-6">
                        <input type="text" class="form-control rounded-2 my-3 placeholder-blue" id="tasa" placeholder="Tasa (%):">
                    </div>
                </div>

                <div class="row resultados" style="display:none">
                    <div class="form-group row border-bottom py-3 my-3">
                        <label for="monthlypay" class="col-sm-6 col-form-label col-form-label-sm text-primary fw-bold font-16">PAGO MENSUAL:</label>
                        <div class="col-sm-6">        
                            <p  class="text-dark h4 fw-light" id="monthlypay"></p>
                        </div>
                    </div>

                    <div class="form-group row border-bottom py-3 mb-2">
                        <label for="totalpay" class="col-sm-6 col-form-label col-form-label-sm text-primary fw-bold font-16">PAGO TOTAL:</label>
                        <div class="col-sm-6">        
                            <p  class="text-dark h4 fw-light" id="totalpay"></p>
                        </div>
                    </div>
                    <div class="form-group row border-bottom py-3 mb-2">
                        <label for="totalinterest" class="col-sm-6 col-form-label col-form-label-sm text-primary fw-bold font-16">INTERÉS TOTAL:</label>
                        <div class="col-sm-6">
                            <p  class="text-dark h4 fw-light" id="totalinterest"></p>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="text-center m-3">
                        <button type="button" id="calcular" class="btn btn-primary rounded-2 px-5 mr-3">Calcular</button>
                        <button type="reset" id="reset" class="btn btn-secondary rounded-2 px-5">Limpiar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>