
<div class="container">
    <div class="container pt-5">
        <div class="row pt-5 m-auto" style="max-width: 800px">
            <div class="w-100">
                <p class="text-center text-primary p-2 m-0 fw-bold h4 mb-2">TASAS HIPOTECARIAS</p>
            </div>

            <div class="col-md-12 mb-5">
                <div class="accordion" id="accordionExample">
                    <?php foreach ($dataProvider->query->all() as $m): ?>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo<?= $m->id ?>">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?= $m->id ?>" aria-expanded="false" aria-controls="collapseTwo<?= $m->id ?>">
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
                          <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-8">
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
                                    <?php if ($m->tasa_2): ?>
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
                                    <?php if ($m->tasa_3): ?>
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

        </div>
    </div>
</div>  