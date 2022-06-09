<?php 

$options = \frontend\models\DebidaDiligenciaListado::find()->all();

 ?>
<div style="background: #e3e1dd !important;height: 100%;width: 100%;">

		<div style="width:35%;display: inline-block;float: left;background: white;text-align: center;padding-top:1rem;padding-bottom: 0.5rem;height: 50px">
			<img src="/frontend/web/images/logo-principal.png" width="150px">
		</div>
		<div style="width:64%;display: inline-block;float: right;padding-top:1.5rem;padding-bottom: 1rem;height: 50px">
			<h5 style="padding-left:1rem;color: #000615">REPORTE DE ESTADO JURÍDICO</h5>
			<br>
			<br>
		</div>
		<div style="background: #000615;height: 40px"></div>
		<br>
		<br>
		<div style="width: 300px;display: inline-block;padding-left: 3rem;padding-top: 2.5rem;float: left;">
			<div style="background: #000615;color:white;text-align: center;padding:0.5rem 0rem;border-top-right-radius: 4px;border-top-left-radius: 4px">
                <p style="font-family: 'Benton-book', Arial, sans-serif;font-size: 12px;margin: 0px"><?= mb_strtoupper($propiedad->titulo_publicacion) ?></p>
            </div>
			<div style="width: 100%;height: 160px;background-image: url('/frontend/web/<?= $propiedad->portada ?>');background-size:cover;background-position:center;"></div>
				<div>
					<div style="background: #000615;color:white;text-align: center;padding:0.5rem 0rem;width:80%;float: left;display: inline-block;border-bottom-left-radius: 4px">
		                <p style="font-family: 'Benton-book', Arial, sans-serif;font-size: 12px;margin: 0px"><?= mb_strtoupper($propiedad->ubicacion->nombre) ?></p>
		            </div>
		            <div style="width:20%;background: #95a1a6;text-align: center;float: right;display: inline-block;padding-top: 5.5px;padding-bottom: 5.5px;border-bottom-right-radius: 4px">
		            	<h4 style="color:white;margin: 0px">A+</h4>
		            </div>
				</div>
				<div class="bg-darkblue" style="background: #000615;color:white;text-align: center;padding:0.5rem 0rem;border-bottom-left-radius: 4px;border-bottom-right-radius: 4px">
	                <p style="font-family: 'Benton-book', Arial, sans-serif;font-size: 12px;margin: 0px"><?= mb_strtoupper($propiedad->ubicacion->nombre) ?></p>
	            </div>
			
		</div>
		<div style="width: 400px;display: inline-block;padding: 2.5rem 0rem 0rem 0.2rem;float: right;">
			<div style="background: white;height: 150px;padding: 1rem;width: 75%;border-radius: 4px;margin-bottom: 1rem ?>">
				
                
                	<div class="detalles" style="color:#585858;margin-top:1rem;font-family: 'Benton-book', Arial, sans-serif">
                		<?php foreach ($options as $op): ?>
			            <?php $check = \frontend\models\DebidaDiligencia::find()->where(['propiedad_id' => $propiedad['id'], 'debida_diligencia_list_id' => $op->id])->one(); ?>
			            <?php $checkDot = $check ? "dot-full-2.png" : 'dot.png' ?>
                        <p class="m-0 small text-gray mb-2"><img src="/frontend/web/images/<?= $checkDot ?>" alt="" width="17px"> <?= $op->name ?></p>
			        <?php endforeach ?>
			            

                       
			        </div>
               
			</div>
		</div>
		<br>
		<br>
		<br>
		<div style="width:630px;background: white;margin-left: 3rem;border-radius:4px;padding:0.5rem;color:#585858">
			<p><?= $dictamen->contenido ?></p>
		</div>
</div>
