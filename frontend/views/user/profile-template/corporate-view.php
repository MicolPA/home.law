
<div class="container-fluid p-0">
	<div class="bg-img" style="background-image:url('/frontend/web/images/ejemplo-360.jpg');min-height:600px">
	</div>	
	<div class="row c-view w-100 mx-0">
		
		<div class="col-md-5 c-view-left" style="background: <?= $plantilla['color_1'] ?>;min-height:540px">
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-4 h-100">
					<div class=" avatar-sm fs-4 rounded-circle" style="width: 150px; height: 150px;background-image: url('<?= Yii::getAlias("@web") . "/". $user->photo_url ?>');background-position: center;background-size: cover;">
            		</div>

            		<div class="pl-2 mt-2 pb-5 mx-2 mx-md-5 h6">
	                    <a href=""><i class="text-warning  fa-solid fa-star"></i></a>
	                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
	                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
	                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
	                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
	                </div>
	                <div class="h5">

	                    <a href="<?= $user->facebook ? $user->facebook : '#' ?>"><i class="text-color mx-2 fa-brands fa-facebook-f"></i></a>
	                    <a href="<?= $user->whatsapp ? $user->whatsapp : '#' ?>"><i class="text-color mx-2 fa-brands fa-whatsapp"></i></a>
	                    <a href="<?= $user->twitter ? $user->twitter : '#' ?>"><i class="text-color mx-2 fa-brands fa-twitter"></i></a>
	                    <a href="<?= $user->instagram ? $user->instagram : '#' ?>"><i class="text-color mx-2 fa-brands fa-instagram"></i></a>
	                </div>

	                <p class="small text-color mt-5 mb-0 p-0">Contactos</p>
	                <p class="fw-bold h6 text-color"> <?= $user->phone ?></p>

	                <p class="small text-color mt-4 mb-0 p-0 ">Correo Electrónico:</p>
	                <p class="fw-bold h6 text-color mb-"> <?= $user->email ?></p>

	                <div class="my-5 pb-5">
	                    <a href="#" class="text-decoration-none fw-bold text-color font-12" data-bs-toggle="modal" data-bs-target="#contactAgente">
	                       <span class="btn btn-icon btn-sm btn-round text-white bg-danger mr-2" style="font-size:17px !important"><i class="fa-solid fa-comment-dots"></i></span> 
	                       CONTACTAR AGENTE
	                   </a>

	                </div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<div class="col-md-7 c-view-right pl-5 pr-0">
			<div class="py-4 px-5 w-100" style="background: <?= $plantilla['color_2'] ?>">
				<p class="text-white h2 mb-0"><?= $user->first_name ?> <span class="fw-normal"><?= $user->last_name ?></span></p>
				<span class="text-white">Agente Inmobiliario</span>
			</div>

			<div class="p-5">
				<p class="text-primary fs-5  mt-0 mb-5 mt-md-5 mt-sm-5">
	                <span class="fw-bold">Reseña </span> Personal
	            </p>

	            <p class="small text-light-gray mb-2">
	                <?= $user->descripcion ?>
	            </p>

	            
	            <?php if ($user->video_url): ?>
	            <div class="w-fit-content">
	            	<a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#youtubeModal">
		            	<p class="text-primary fs-5 mt-5 mb-5 mt-md-5 mt-sm-5">
			                <span class="fw-bold">Video </span> presentación
			            </p>
						<p class="text-center mb-1">
							<img src="/frontend/web/images/icons/youtube-blue.png" width="70px">
						</p>
					</a>
	            </div>
	            <?php endif ?>

	            <!-- <i class="fa-brands fa-youtube"></i> -->
			</div>
		</div>

	</div>


</div>
