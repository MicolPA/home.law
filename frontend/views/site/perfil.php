<div class="bg-blue-profile">
    <div class="container position-relative position-relative-example">


        <div class="h-100">
        
    <img class="rounded-circle position-absolute top-100 start-0 translate-middle photo-profile  " src="../../web/images/avatar.jpg" alt="">
    
        </div>
    </div>

</div>


<div class="bg-white">
    <div class="container">

  
        <div class="row px-5 mx-5">
            <div class="col-lg-5 mt-4 ">
                <div class="mt-5 py-5 px-5 mx-4 fs-4">
                    <a href=""><i class="text-warning  fa-solid fa-star"></i></a>
                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
                </div>


                <p class="fw-bold fs-3 text-primary pt-1 mb-0"> Carlos Andres Avila</p>
                <p class="small text-light-gray mb-2 ">Agente Inmobilario</p>

                <div class="px-5 py-3 fs-3">

                    <a href=""><i class=" text-primary mx-2 fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class=" text-primary mx-2 fa-brands fa-whatsapp"></i></a>
                    <a href=""><i class=" text-primary mx-2 fa-brands fa-twitter"></i></a>
                    <a href=""><i class=" text-primary mx-2 fa-brands fa-instagram"></i></a>
                </div>

                <p class="small text-light-gray mt-5 mb-0 p-0 ">Contactos</p>
                <p class="fw-bold fs-5 text-primary mb-"> (829) 571-0277</p>



                <p class="small text-light-gray mt-4 mb-0 p-0 ">Correo Electrónico:</p>
                <p class="fw-bold fs-5 text-primary mb-"> jconfidente@bestlisting.com</p>

                <div class="my-5 pb-5">
                    <a href=""><i class=" fs-3 text-danger fa-solid fa-comment-dots mx-2"></i></a>
                    <a class="text-decoration-none text-primary   small text-center fw-bold-2" href=""> CONTACTAR AGENTE </a>

                </div>
            </div>

            <div class="col-lg-7 py-5 my-5 ">


                <p class="text-primary fs-5 mt-5 mb-4">
                    <span class="fw-bold">Reseña </span> Personal
                </p>

                <p class="small text-light-gray mb-2">Excelente apartamentos ubicado en el sector más exclusivo de Distrito, justo en en el centro
                    de la ciudad; cerca de restaurantes, supermercados, facil acceso a las principales avenidas. </p>
                <p class="small text-light-gray mb-2">Ubicado en el 4to nivel, el apartamento consta de 2 habitaciones cada una con su baño y
                    principal con walking closet, 2 parqueos techados, baño de visita, persianas anti ruido, pisos
                    en marmol.</p>
                <p class="small text-light-gray mb-2">Área social con piscina y salon de eventos, gym y juegos para niños.
                </p>


                <p class="text-primary fs-5 my-5">
                    <span class="fw-bold">Video </span> presentación
                </p>


                <iframe class="rounded pb-0" width="360" height="215" src="https://www.youtube.com/embed/CyEMjlxbiik" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>


        </div>

    </div>



    <div class="bg-blue-profile  py-5">



        <div class="container">
            <p class="text-white fs-5 my-5 text-center">
                <span class="fw-bold">My </span> property
            </p>

            <div class="row">
                <?php foreach ($propiedades as $propiedad) : ?>
                    <?= $this->render('/propiedades/_grid_propiedades', ['propiedad' => $propiedad, 'count' => 1]) ?>
                <?php endforeach ?>


            </div>
            <p class="text-center text-transparent fs-2 mt-5">Cargando...</p>
            <p class="text-center text-transparent fs-2 "><i class="fa-solid fa-spinner"></i></p>
        </div>
    </div>