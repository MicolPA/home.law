<?php 

$options = \frontend\models\DebidaDiligenciaListado::find()->all();

 ?>
<div style="height: 50%;width: 100%;padding:2rem 3rem;">

		<div style="width:35%;display: inline-block;float: left;background: white;text-align: center;padding-top:1rem;padding-bottom: 0.5rem;height: 50px">
			<img src="/frontend/web/images/logo-bestlinting.png" width="150px">
		</div>
		<div style="width:64%;display: inline-block;float: right;padding-top:1.5rem;padding-bottom: 1rem;height: 50px;text-align: right;">
			<h5 style="padding-left:1rem;color: #064c70;font-weight: bold;margin-bottom: -5px;">REPORTE DEBIDA DILIGENCIA</h5>
			<h5 style="padding-left:1rem;color: #a8aebf;margin-top: 2px;font-weight: bold;"><?= "PROPIEDAD NO.$propiedad->codigo" ?></h5>
			<br>
			<br>
		</div>
		<br>
		<div style="background:#f2f3f4;padding:0px;width: 100%">
			<div style="width: 50%;display: inline-block;float:left;">
				<div style="width: 100%;height: 200px;background-image: url('/frontend/web/<?= $propiedad->portada ?>');background-size:cover;background-position:center;background-repeat: no-repeat;margin-left: -10px;"></div>
					
			</div>
			<div style="width:49%;display: inline-block;padding: 2.5rem 0rem 0rem 0.2rem;float: right;">
				<div style="background: #f2f3f4;padding: 1rem;width: 75%;border-radius: 4px;margin-bottom: 1rem ?>;color:#b7b0b5;margin:auto">

					<div style="width: fit-content;margin:auto;text-align:center;padding-left:1rem; padding-right: 1rem;margin-bottom: 3.5rem;">
						<p style="font-weight:bold;font-size: 16px;">PRECIO DE VENTA</p>

						<p style="font-size: 22px;margin: auto;background:#d72027; border-radius:20px;width:160px;color:white;font-weight:bold">USD$<?= number_format($propiedad->precio) ?></p>
					</div>
					
                        <div style="width:24%;display:inline-block;float: left;">
                            <div>
                                <img src="/frontend/web/images/icons/bath.svg" width="20px">
                                <span class="text-gray"><?= $propiedad->baños ?></span>
                            </div>
                        </div>
                        <div style="width:24%;display:inline-block;float: left;">
                            <div>
                                <img src="/frontend/web/images/icons/habitacion.svg" width="20px">
                                <span class="text-gray"><?= $propiedad->habitaciones ?></span>
                            </div>
                        </div>
                        <div style="width:24%;display:inline-block;float: left;">
                            <div>
                                <img src="/frontend/web/images/icons/habitacion.svg" width="20px">
                                <span class="text-gray"><?= $propiedad->habitaciones ?></span>
                            </div>
                        </div>
                        <div style="width:24%;display:inline-block;float: left;">
                            <div>
                                <img src="/frontend/web/images/icons/Terreno.svg" width="20px">
                                <small class="text-gray" style="font-size: 10px;"><?= $propiedad->metros ?>M<sup>2</sup></small>
                            </div>
                        </div>
	               
				</div>
			</div>
		</div>

		<div style="padding: 4rem 2rem">

			<div style="margin-bottom:2rem">
				<h4 style="color:#064c70;font-weight: bold;"><?= mb_strtoupper($propiedad->titulo_publicacion) ?></h4>
				<h4 style="color:#a395ba;font-weight: 100;"><?= $propiedad->ubicacion->nombre ?></h4>
			</div>

			<div class="detalles" style="color:#585858;margin-top:1rem">
        		<?php foreach ($options as $op): ?>
		            <?php $check = \frontend\models\DebidaDiligencia::find()->where(['propiedad_id' => $propiedad['id'], 'debida_diligencia_list_id' => $op->id])->one(); ?>
		            <?php $checkDot = $check ? "dot-full.png" : 'dot.png' ?> 
	                	
	                	<h5 style="color:#064c70;display: inline-block;">
	                		<img src="/frontend/web/images/icons/<?= $checkDot ?>" alt="" width="14px" style="margin-right: 1rem;margin-top: -5px;">  <?= $op->name ?>
	                	</h5>
		        <?php endforeach ?>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>
		
</div>

<div style="width:100%;background: #eeeeef;padding: 3rem 4rem;color:#9b9c9e;text-align: justify;margin-top: 1rem;">
	<p><?= $dictamen->contenido ?></p>
</div>
