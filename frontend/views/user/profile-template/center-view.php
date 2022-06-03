<style>
	#parent {
  margin: 50px auto;
  /*min-width: 50px;*/
  height: 170px;
  /*background: rgba(0,0,0,.2);*/
  overflow: hidden;
  display: table;
  width: 40px;
  margin-left: -15px;
}

#child-1 {
  text-align: center;
  margin: 0 auto;
  display: table-cell;
  vertical-align: middle;
  transform: rotate(270deg);
  overflow: hidden;
  color: white;
}
</style>

<div class="container-fluid p-0">
	<div class="row bg-img py-5 align-items-center w-100" style="background-image:url('/frontend/web/images/ejemplo-360.jpg');min-height:400px">

		<div class="col-md-1"></div>
		<div class="col-md-3 cardbody p-0">
			<div class="card py-5 rounded-2">
				<div class="row">
					<div class="col-md-12 card-primary">
						<div class=" avatar-sm fs-4 rounded-circle m-auto" style="width: 150px; height: 150px;background-image: url('<?= Yii::getAlias("@web") . "/". $user->photo_url ?>');background-position: center;background-size: cover;">
		        		</div>

		        		<div class="pl-2 mt-2 pb-5 mx-2 mx-md-5 h6 text-center">
		                    <a href=""><i class="text-warning  fa-solid fa-star"></i></a>
		                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
		                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
		                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
		                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
		                </div>
		                <div class="h5 w-fit-content m-auto text-center">

		                	<p class="fw-bold text-color mb-0"><?= "$user->first_name $user->last_name" ?></p>
		                	<p class="text-muted small mb-4">Agente Inmobiliario</p>
		                    <a href="<?= $user->facebook ? $user->facebook : '#' ?>"><i class="text-color mx-2 fa-brands fa-facebook-f"></i></a>
		                    <a href="<?= $user->whatsapp ? $user->whatsapp : '#' ?>"><i class="text-color mx-2 fa-brands fa-whatsapp"></i></a>
		                    <a href="<?= $user->twitter ? $user->twitter : '#' ?>"><i class="text-color mx-2 fa-brands fa-twitter"></i></a>
		                    <a href="<?= $user->instagram ? $user->instagram : '#' ?>"><i class="text-color mx-2 fa-brands fa-instagram"></i></a>

		                </div>

		                <p class="text-primary text-center fw-light mt-5 mb-5">
							<span class="fw-bold">Video</span> Presentación
						</p>
					</div>
					<div class="col-md-6 card-secondary" style="display:none">
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
		</div>
		<div class="col-md-1 p-0">
			<div class="p-0 w-fit-content bg-primary text-white rounded-end" style="width: 40px;">
				<div id="parent">
  					<div id="child-1" class="text-nowrap fw-bold read-more">
  						VER MÁS
  					</div>
  				</div>
			</div>
		</div>
	</div>	
	<div class="row w-100">
		<div class="col-md-6 py-3" style="background: <?= $plantilla['color_1'] ?>">
			
		</div>
		<div class="col-md-6 py-3" style="background: <?= $plantilla['color_2'] ?>">
		</div>
	</div>
</div>