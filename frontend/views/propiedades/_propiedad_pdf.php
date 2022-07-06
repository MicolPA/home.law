<?php 

$options = \frontend\models\DebidaDiligenciaListado::find()->all();

 ?>
<div style="height: 50%;width: 100%;padding:2rem 3rem;">

		<div style="width:35%;display: inline-block;float: left;background: white;text-align: center;padding-top:1rem;padding-bottom: 0.5rem;height: 50px">
			<img src="/frontend/web/images/logo-bestlinting.png" width="150px">
		</div>
		<div style="width:64%;display: inline-block;float: right;padding-top:1.5rem;padding-bottom: 1rem;height: 50px;text-align: right;">
			<h4 style="padding-left:1rem;color: #064c70;font-weight: bold;margin-bottom: -5px;"><?= $model->titulo_publicacion ?></h4>
			<h5 style="padding-left:1rem;color: #a8aebf;margin-top: 2px;font-weight: bold;"><?= $model->ubicacion->nombre ?></h5>
			<br>
		</div>
		<div style="padding:0px;width: 100%;">
			<div style="margin-bottom: 20px;border-radius: 15px;height:350px;background-repeat: no-repeat;background-size: cover;background-image: url(/frontend/web/<?= $model->portada ?>);">
			</div>
			<div style="width:100%">
				<div style="width:80px;text-align: center;display: inline-block;float: left;color:#646567">
	                <div>
	                    <img style="margin-right: 4px;" src="/frontend/web/images/icons/parqueo.svg" width="28px">
	                    <?= $model->parqueos ?>
	                </div>
	            </div>
	            <div style="width:80px;text-align: center;display: inline-block;float: left;color:#646567">
	                <div style="margin-top:-5px">
	                    <img style="margin-right: 4px;" src="/frontend/web/images/icons/bath.svg" width="28px">
	                    <?= $model->baños ?>
	                </div>
	            </div>
	            <div style="width:80px;text-align: center;display: inline-block;float: left;color:#646567">
	                <div>
	                    <img style="margin-right: 4px;" src="/frontend/web/images/icons/habitacion.svg" width="28px">
	                    <?= $model->habitaciones ?>
	                </div>
	            </div>
	            <div style="width:80px;text-align: center;display: inline-block;float: left;color:#646567">
	                <div style="margin-top:-5px">
	                    <img style="margin-right: 4px;" src="/frontend/web/images/icons/Terreno.svg" width="30px">
	                    <small class="small"><?= $model->metros ?>M<sup>2</sup></small>
	                </div>
	            </div>
	            <div style="width:100px;display: inline-block;float: right;">
	                <div>
	                    <p class="text-danger" style="font-weight: bold;font-size: 16px;">NO.<?= $model->codigo ?></p>
	                </div>
	            </div>
			</div>
		</div>
		<div style="padding-left:5px;padding-right:5px;margin-top: 25px;">
            <div class="col-md-12">
                <h4 style="font-weight:100;color:#004b70;">
                   <span style="font-weight: bold;;color:#004b70;">Detalles</span> de la propiedad
               	</h4>
               <div class="row">
                   <div class="col-md-9">
                       <p style="color:#6c757d">
                            <?= $model->detalles ?>
                        </p>
                   </div>
               </div>
           </div>

       </div>
       <div style="padding-left:5px;padding-right:5px;margin-top: 25px;">
           <div class="col-md-12">
           		<h4 style="font-weight:100;color:#004b70;">
                   <span style="font-weight: bold;;color:#004b70;">Características</span> de la propiedad
               	</h4>
               <div style="padding-left:5px;padding-right:5px;margin-top: 25px;color:#6c757d">
                    <div class="col-md-9">
                        <div class="row">
                            <?php foreach (explode(',', $model->extra_text) as $extra): ?>
                                <div style="width:48%;display:inline-block;float:left">
                                    <p><?= $extra ?></p>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
               </div>
           </div>
		<br>
		<br>
       </div>
		<pagebreak />
			
		<br>
		<?php if ($galeria): ?>
			<?php if ($galeria["foto_2"]): ?>
				<div style="margin-top: 3rem;margin-bottom: 20px;border-radius: 15px;height:400px;background-repeat: no-repeat;background-size: cover;background-image: url(/frontend/web/<?= $galeria["foto_2"] ?>);">
				</div>
			<?php endif ?>
			<?php if ($galeria["foto_3"]): ?>
				<div style="margin-top: 3rem;margin-bottom: 20px;border-radius: 15px;height:400px;background-repeat: no-repeat;background-size: cover;background-image: url(/frontend/web/<?= $galeria["foto_3"] ?>);">
				</div>
			<?php endif ?>
			<pagebreak />
			<?php if ($galeria["foto_4"]): ?>
				<div style="margin-top: 3rem;margin-bottom: 20px;border-radius: 15px;height:400px;background-repeat: no-repeat;background-size: cover;background-image: url(/frontend/web/<?= $galeria["foto_4"] ?>);">
				</div>
			<?php endif ?>
			<?php if ($galeria["foto_5"]): ?>
				<div style="margin-top: 3rem;margin-bottom: 20px;border-radius: 15px;height:400px;background-repeat: no-repeat;background-size: cover;background-image: url(/frontend/web/<?= $galeria["foto_5"] ?>);">
				</div>
			<?php endif ?>
		<?php endif ?>
		<br>
		
</div>

