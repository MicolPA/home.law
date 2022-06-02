<div class="container-fluid p-0">
	<div class="bg-img" style="background-image:url('/frontend/web/images/ejemplo-360.jpg');min-height:400px">
	</div>

	<div class="container">
		<div class="row w-100 mx-0">
			<div class="col-md-1"></div>
			<div class="col-md-4 c-view">
				<div class="card py-3 rounded-2">
					<div class=" avatar-sm fs-4 rounded-circle m-auto" style="width: 150px; height: 150px;background-image: url('<?= Yii::getAlias("@web") . "/". $user->photo_url ?>');background-position: center;background-size: cover;">
            		</div>

            		<div class="pl-2 mt-2 pb-5 mx-2 mx-md-5 h6 text-center">
	                    <a href=""><i class="text-warning  fa-solid fa-star"></i></a>
	                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
	                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
	                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
	                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
	                </div>
	                <div class="h5 w-fit-content m-auto">

	                	<p class="fw-bold text-color mb-0"><?= "$user->first_name $user->last_name" ?></p>
	                	<p class="text-muted small">Agente Inmobiliario</p>
	                    <a href="<?= $user->facebook ? $user->facebook : '#' ?>"><i class="text-color mx-2 fa-brands fa-facebook-f"></i></a>
	                    <a href="<?= $user->whatsapp ? $user->whatsapp : '#' ?>"><i class="text-color mx-2 fa-brands fa-whatsapp"></i></a>
	                    <a href="<?= $user->twitter ? $user->twitter : '#' ?>"><i class="text-color mx-2 fa-brands fa-twitter"></i></a>
	                    <a href="<?= $user->instagram ? $user->instagram : '#' ?>"><i class="text-color mx-2 fa-brands fa-instagram"></i></a>

	                    <div class="">
		                	<p class="small text-color mt-5 mb-0 p-0">Contactos</p>
		                	<p class="fw-bold h6 text-color"> <?= $user->phone ?></p>

		                	<p class="small text-color mt-4 mb-0 p-0 ">Correo Electrónico:</p>
	                		<p class="fw-bold h6 text-color mb-"> <?= $user->email ?></p>

	                		<div class="mt-5 mb-2">
			                    <a href="#" class="text-decoration-none fw-bold text-color font-12">
				                       <span class="btn btn-icon btn-sm btn-round text-white bg-danger mr-2" style="font-size:17px !important"><i class="fa-solid fa-comment-dots"></i></span> 
				                       CONTACTAR AGENTE
				                   </a>

			                </div>
		                </div>
	                </div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="p-5">
					<p class="text-primary fs-5  mt-0 mb-5 mt-md-5 mt-sm-5">
		                <span class="fw-bold">Reseña </span> Personal
		            </p>

		            <p class="small text-light-gray mb-2">
		                <?= $user->descripcion ?>
		            </p>

				</div>
			</div>
		</div>
	</div>

	<div class="row w-100" style="margin-top:-50px">
		<div class="col-md-6 py-5" style="background: <?= $plantilla['color_1'] ?>">
			
		</div>
		<div class="col-md-6 py-5" style="background: <?= $plantilla['color_2'] ?>">
			<div class="row">
				<div class="col-md-6">
					<p class="text-center mb-1">
						<img src="/frontend/web/images/icons/youtube.png" width="60px">
					</p>
					<p class="text-white text-center fw-light">
						<span class="fw-bold">Video</span> Presentación
					</p>
				</div>
			</div>
		</div>
	</div>
</div>