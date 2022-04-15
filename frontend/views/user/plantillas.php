<?php 

	$this->title = "Diseño del perfil";

?>

<style>
	embed{
		height: 50vh;
	}

	.main-menu{
		display: none;
	}
</style>

<div class="row">
	<div class="col-md-2">
		<div class="form-group">
				<?php foreach ($plantillas as $p): ?>
				<label class="form-label"><?= "Plantilla $p->nombre" ?></label>
				<div class="">
					<label class="colorinput">
						<input name="color" type="checkbox" value="primary" class="colorinput-input">
						<span class="colorinput-color" style="background: <?= $p->banner_background ?> "></span>
						<span class="colorinput-color" style="background: <?= $p->banner_background ?> "></span>
					</label>
				</div>
				<?php endforeach ?>
			</div>
		</div>


	<div class="col-md-8">
		 <embed class="w-100" src="/frontend/web/user/perfil?id=<?= Yii::$app->user->identity->id ?>">
	</div>
</div>

