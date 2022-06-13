<style>
	.font-10{
		font-size: 10px;
	}

	.pagination li{
		/*border-radius: 5px;*/

	}



	li .page{
		border-radius: 100px!important;
	    margin: 0 2px;
	    color: #004b70;
	    border-color: #ddd;
	    text-decoration: none;
	    padding: .5rem 1rem;
	    border-radius: 100px!important;
	    background: white;
	    font-weight: bold;
	}

	.active .page{
		background: #004b70 !important;
		color: #fff;
	}
	

</style>

<div class="container py-5">
    <div class="row w-100 p-md-5 m-auto">
		<div class="col-md-12">
			<div id="name-list" data-toggle="lists" data-lists-values='["name"]'>

				<div class="form-group w-50 m-auto px-md-5">
				<p class="text-center text-primary p-2 m-0 fw-normal h4 fw-bold mb-2">AGENTES</p>
					<div class="input-group">
						<input class="form-control search mb-2 rounded-2" type="search">
						<!-- <input type="text" class="form-control" aria-label="Text input with dropdown button"> -->
						<div class="input-group-append pl-2">
							<button class="btn btn-lg bg-white text-primary rounded-3 fw-bold px-4 font-12" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ORDERNAR <i class="fa-solid fa-angle-down ml-2"></i></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="mt-4">
					<div>

						<ul class="list-group list-group-bordered list">
							<?php foreach ($dataProvider->query->all() as $user): ?>
					            <div class="bg-white mb-3 pt-2 rounded-3 row w-100 align-items-center user-profile">
									<div class="col-md-3">
										<div class="avatar-sm fs-4 rounded-circle m-auto" style="width: 80px; height: 80px;background-image: url('<?= Yii::getAlias("@web") . "/". $user->photo_url ?>');background-position: center;background-size: cover;"></div>

										<div class="pl-0 mb-1 mx-2 mx-md-5 h6 text-center mb-0 pb-0">
							              <a href=""><i class="text-warning  fa-solid fa-star font-10"></i></a>
							              <a href=""><i class="text-warning fa-solid fa-star font-10"></i></a>
							              <a href=""><i class="text-warning fa-solid fa-star font-10"></i></a>
							              <a href=""><i class="text-secondary fa-solid fa-star font-10"></i></a>
							              <a href=""><i class="text-secondary fa-solid fa-star font-10"></i></a>
							          	</div>
									</div>

									<div class="col-md-6">
										<li class="list-group-item border-0">
											<p class="name text-primary fw-bold mb-0"><?= "$user->first_name $user->last_name" ?></p>
											<span class="fw-bold-2 font-14" style="color:#b3b8bc">Agente Inmobiliario</span>
										</li>
									</div>

									<div class="col-md-3">
										<a href="/frontend/web/user/perfil/<?= $user->id ?>" class="btn btn-xs btn-primary bg-primary rounded-3 px-5 py-2 font-12 fw-bold">VER PERFIL</a>
									</div>
								</div>
					        <?php endforeach ?>
						</ul>

						<ul class="pagination w-fit-content m-auto mt-4"></ul>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	setTimeout(function(){
		var options = {
			valueNames: ['name'],
			page: 16,
			pagination: true
		};
		var nameList = new List('name-list', options);
	},500)
</script>