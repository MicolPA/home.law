<?php 
    
    $this->title = "Inicio";
 ?>

<div class="container-fluid px-0 py-4">
    <div class="row w-100 m-0">
        <div class="col-md-7 col-xs-12">
            <div class="container">
                <p class="text-center mb-0 lh-1">
                    <span class="fw-bold fs-3 text-primary -ml-3 mb-0">Find the best property</span>
                    <p class="text-center fs-3 pl-5 lh-1 text-primary fw-light">for your investment</p>
                </p>


                <div class="card w-60 m-auto rounded-2 p-5">
                    <div class="mb-3 mt-5">
                        <label for="tagInput" class="form-label">¿Qué buscas?</label>
                        <input type="text" class="form-control" id="tagInput" placeholder="Apartamento, casa. terreno...">
                    </div>
                    <div class="mb-3">
                        <label for="locationInput" class="form-label">¿Donde?</label>
                        <input type="text" class="form-control" id="locationInput" placeholder="Apartamento, casa. terreno...">
                    </div>
                    <div class="mt-3 mb-5 text-center">
                        <button type="submit" class="btn btn-lg btn-danger rounded-3 pl-4 pr-4">Buscar <i class='fa-solid fa-magnifying-glass ml-2'></i> </button>
                    </div>
                    <p class="text-secondary small text-center fw-bold-2">BÚSQUEDA AVANZADA</p>
                </div>      
            </div>
        </div>
        <div class="col-5 p-0 mobile-hidden">
            <div class="home-banner">
                
            </div>
        </div>
        <div class="col-6"></div>
    </div>
</div>