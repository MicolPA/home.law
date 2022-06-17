 <?php 

$agente = \frontend\models\User::findOne($propiedad->assigned_to_user_id);
  ?>

 <div style="height: 50%;width: 100%;padding:4rem 6.5rem;">

       <div style="width:35%;display: inline-block;float: left;background: white;text-align: center;padding-top:1rem;padding-bottom: 4.5rem;height: 50px;text-align: left;">
              <img src="/frontend/web/images/logo-clean.png" width="150px">
       </div>

       <div style="width:54%;display: inline-block;float: right;padding-top:1.5rem;padding-bottom: 1rem;height: 50px;text-align: right;">
              <h4 style="padding-left:1rem;color: #064c70;font-weight: bold;margin-bottom: -5px;">OFERTA DE COMPRA</h4>
              <br>
              <div style="text-align: center;color:#ffffff;background: #d51921;width: 220px;float: right;padding-top: 0.5rem;padding-bottom: 7px;padding-left: 10px;margin-bottom: 1.2rem;border-radius: 20px;">
                    <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                           <h4 style="color:white;font-weight:bold;margin-top: -4px;margin-bottom: 0px;">VALOR USD$<?= number_format($propiedad->precio, 2) ?></h4>
                    </div>
              </div>
              <br>
       </div>


       <div style="width:100%">
              <img src="/frontend/web/<?= $propiedad->portada ?>" alt="">

              <div style="margin-bottom:3rem">
                     <h3 style="color:#064c70;font-weight: bold;"><?= mb_strtoupper($propiedad->titulo_publicacion) ?></h3>
                     <h4 style="color:#a395ba;font-weight: 100;"><?= $propiedad->ubicacion->nombre ?></h4>
              </div>

       </div>

       <div style="width:100%">
              <div style="width:50%;display:inline-block;float: left;padding-right: 3rem;">
                     <h4 style="color:#064c70;font-weight: bold;">Monto en dolares</h4>
                     <div style="text-align: left;color:#ffffff;background: #064c70;width: 100%;float: right;padding-top: 0.5rem;padding-bottom: 7px;padding-left: 10px;margin-bottom: 1.2rem;border-radius: 20px;">
                            <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                                   <h5 style="color:white;font-weight:bold;margin-top: -4px;margin-bottom: 0px;">USD$ <?= number_format($data['reservation_amount']) ?></h5>
                            </div>
                    </div>

              </div>
              <div style="width:40%;display:inline-block;float: left;">
                     <h4 style="color:#064c70;font-weight: bold;">Cédula / Pasaporte</h4>
                     <div style="border:#064c70 1px solid;text-align: left;color:#064c70;background: #fff;width: 100%;float: right;padding-top: 0.5rem;padding-bottom: 7px;padding-left: 10px;margin-bottom: 1.2rem;border-radius: 20px;">
                            <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                                   <h5 style="color:#064c70;font-weight:bold;margin-top: -4px;margin-bottom: 0px;"><?= $data['ContactForm']['cedula']?></h5>
                            </div>
                    </div>
              </div>
       </div>

       <div style="width:100%">
              <div style="width:50%;display:inline-block;float: left;padding-right: 3rem;">
                     <h4 style="color:#064c70;font-weight: bold;">Nombre</h4>
                     <div style="border:#064c70 1px solid;text-align: left;color:#064c70;background: #fff;width: 100%;float: right;padding-top: 0.5rem;padding-bottom: 7px;padding-left: 10px;margin-bottom: 1.2rem;border-radius: 20px;">
                            <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                                   <h5 style="color:#064c70;font-weight:bold;margin-top: -4px;margin-bottom: 0px;"><?= $data['ContactForm']['name']?></h5>
                            </div>
                    </div>

              </div>
              <div style="width:40%;display:inline-block;float: left;">
                     <h4 style="color:#064c70;font-weight: bold;">Nacionalidad</h4>
                     <div style="border:#064c70 1px solid;text-align: left;color:#064c70;background: #fff;width: 100%;float: right;padding-top: 0.5rem;padding-bottom: 7px;padding-left: 10px;margin-bottom: 1.2rem;border-radius: 20px;">
                            <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                                   <h5 style="color:#064c70;font-weight:bold;margin-top: -4px;margin-bottom: 0px;"><?= $data['ContactForm']['nacionalidad']?></h5>
                            </div>
                    </div>
              </div>
       </div>

       <div style="width:100%">
              <div style="width:50%;display:inline-block;float: left;padding-right: 3rem;">
                     <h4 style="color:#064c70;font-weight: bold;">Correo</h4>
                     <div style="border:#064c70 1px solid;text-align: left;color:#064c70;background: #fff;width: 100%;float: right;padding-top: 0.5rem;padding-bottom: 7px;padding-left: 10px;margin-bottom: 1.2rem;border-radius: 20px;">
                            <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                                   <h5 style="color:#064c70;font-weight:bold;margin-top: -4px;margin-bottom: 0px;"><?= $data['ContactForm']['email']?></h5>
                            </div>
                    </div>

              </div>
              <div style="width:40%;display:inline-block;float: left;">
                     <h4 style="color:#064c70;font-weight: bold;">Teléfono</h4>
                     <div style="border:#064c70 1px solid;text-align: left;color:#064c70;background: #fff;width: 100%;float: right;padding-top: 0.5rem;padding-bottom: 7px;padding-left: 10px;margin-bottom: 1.2rem;border-radius: 20px;">
                            <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                                   <h5 style="color:#064c70;font-weight:bold;margin-top: -4px;margin-bottom: 0px;"><?= $data['ContactForm']['phone']?></h5>
                            </div>
                    </div>
              </div>
       </div>

       <div style="width:100%;margin-top: 1rem;">
              
              <div style="width:40%;display:inline-block;float: left;padding-right: 3rem;">
                     <div style="width:60%;display:inline-block;float: left;">
                            
                            <div style="display:inline-block;width: 600px;float: left;">
                                   <h5 style="color:#064c70;font-weight: bold;">Reservation Deposit</h5>
                            </div>

                            

                     </div>
                     <div style="width:40%;display:inline-block;float: left">
                            
                            <div style="display:inline-block;width: 500px;float: left;background: transparent;">
                                   <h5 style="color:white;font-weight: bold;">&nbsp; </h5>
                            </div>

                            <div style=";display: inline-block;float: left;width:50px;padding-top: 12px;padding-bottom: 12px;background-image: url('/frontend/web/images/icons/dot-full.png');background-position: center;background-size:cover;background-repeat: no-repeat;text-align: center;font-size:16px;color:white;font-weight:bold;margin-top: -3rem;"><?= $data['reservation_amount'] ?>%</div>
                            <!-- <div style="border:#064c70 1px solid;text-align: center;color:#fff;background: #064c70;width: 50px;float: right;padding:1rem  0.5rem;margin-bottom: 1.2rem;border-radius: 50%;">
                                   <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                                          <h4 style="color:#fff;font-weight:bold;margin-top: -4px;margin-bottom: 0px;">10%</h4>
                                   </div>
                           </div> -->

                     </div>

              </div>
              <div style="width:45%;display:inline-block;float: right;padding-right: 3rem;">
                     <div style="width:50%;display:inline-block;float: left">
                            
                            <div style="display:inline-block;width: 500px;float: left;background: transparent;">
                                   <h5 style="color:#064c70;font-weight: bold;">Closing Date</h5>
                            </div>

                            

                     </div>
                     <?php 

                     $date = strtotime($data['closing_date']);

                     $newDate = date('d', $date) . '/' . date('M', $date) . '/' . date('Y', $date);
                      ?>
                     <div style="width:40%;display:inline-block;float: left">
                            
                            <div style="display:inline-block;width: 300px;float: left;background: transparent;">
                                   <h5 style="color:white;font-weight: bold;">&nbsp; </h5>
                            </div>

                            <div style=";display: inline-block;float: left;width:220px;padding-top: 5px;padding-bottom: 5px;font-size:16px;color:white;font-weight:bold;margin-top: -3rem;background: #064c70;border-radius: 20px;text-align: center;"><?= $newDate ?></div>
                            <!-- <div style="border:#064c70 1px solid;text-align: center;color:#fff;background: #064c70;width: 50px;float: right;padding:1rem  0.5rem;margin-bottom: 1.2rem;border-radius: 50%;">
                                   <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;">
                                          <h4 style="color:#fff;font-weight:bold;margin-top: -4px;margin-bottom: 0px;">10%</h4>
                                   </div>
                           </div> -->

                     </div>

              </div>


              <div style="width:100%;margin-top:15rem">
                     <div style="padding-top:5rem">
                            <h4 style="color:#064c70;font-weight:bold;margin-bottom:3rem">Contigencia: </h4>


                            <?php $checkDot = $data['contingencia'] == 1 ? "dot-full.png" : 'dot.png' ?> 
                            <p style="color:#064c70;font-weight: bold !important;font-family: gotham;">
                                   <img src="/frontend/web/images/icons/<?= $checkDot ?>" alt="" width="17px" style="margin-right: 1rem;"> 
                                   <b>Inmueble se encuentre libre de cargas y gravamenes</b>
                            </p>
                            <?php $checkDot = $data['contingencia'] == 2 ? "dot-full.png" : 'dot.png' ?> 
                            <p style="color:#064c70;font-weight: bold !important;font-family: gotham;">
                                   <img src="/frontend/web/images/icons/<?= $checkDot ?>" alt="" width="17px" style="margin-right: 1rem;"> 
                                   <b>Inmueble se encuentre al día con el pago de impuesto a la propiedad</b>
                            </p>
                            <?php $checkDot = $data['contingencia'] == 3 ? "dot-full.png" : 'dot.png' ?> 
                            <p style="color:#064c70;font-weight: bold !important;font-family: gotham;">
                                   <img src="/frontend/web/images/icons/<?= $checkDot ?>" alt="" width="17px" style="margin-right: 1rem;"> 
                                   <b>Inmueble se encuentre al día con el pago de mantenimiento</b>
                            </p>
                            <?php $checkDot = $data['contingencia'] == 4 ? "dot-full.png" : 'dot.png' ?> 
                            <p style="color:#064c70;font-weight: bold !important;font-family: gotham;">
                                   <img src="/frontend/web/images/icons/<?= $checkDot ?>" alt="" width="17px" style="margin-right: 1rem;"> 
                                   <b> Inmueble se encuentre en el mismo estado según fotos y vídeos</b>
                            </p>
                            <?php $checkDot = $data['contingencia'] == 5 ? "dot-full.png" : 'dot.png' ?> 
                            <p style="color:#064c70;font-weight: bold !important;font-family: gotham;">
                                   <img src="/frontend/web/images/icons/<?= $checkDot ?>" alt="" width="17px" style="margin-right: 1rem;"> 
                                   <b> Que todos los equipos electrodomesticos se encuentren en buen estado y funcionamiento</b>
                            </p>
                            <?php $checkDot = $data['contingencia'] == 6 ? "dot-full.png" : 'dot.png' ?> 
                            <p style="color:#064c70;font-weight: bold !important;font-family: gotham;">
                                   <img src="/frontend/web/images/icons/<?= $checkDot ?>" alt="" width="17px" style="margin-right: 1rem;"> 
                                   <b> Inmueble se presente daños estructurales</b>
                            </p>
                     </div>
              </div>

              <div style="width:100%;background:#064c70;height:2px;margin-top: 3rem; margin-bottom: 4rem; "></div>


              <div style="width:100%;">

                     <div style="width:32%;display:inline-block;float: left;padding: 4px">
                            <div style='width:100% !important;height:180px;background-image: url(/frontend/web/<?= $propiedad->portada ?>);background-position: center;background-repeat: no-repeat;background-size: contain;margin: 0px;'>
                            </div>
                     </div>
                     <?php $foto2 = "/frontend/web/$galeria->foto_2"; ?>
                     <div style="width:32%;display:inline-block;float: left;padding:4px">
                            <div style='height:180px;background-image: url(<?= $foto2 ?>);background-position: center;background-repeat: no-repeat;background-size: contain;'>
                            </div>
                     </div>
                     <?php $foto2 = "/frontend/web/$galeria->foto_2"; ?>
                     <div style="width:32%;display:inline-block;float: left;padding:4px">
                            <div style='height:180px;background-image: url(<?= $foto2 ?>);background-position: center;background-repeat: no-repeat;background-size: contain;'>
                            </div>
                     </div>


                     <div style="margin-top:5rem">
                            <p style="color:#6c757d;font-size: 14px;">
                                   <?= $propiedad->detalles ?>
                            </p>
                     </div>


                     <?php if ($agente): ?>
                            <div style="margin-top:2rem; text-align: center;">
                                   <h3 style="color:#064c70;;"><b><?= "$agente->first_name $agente->last_name" ?></b></h3>
                                   <p style="color:#6c757d">Agente Inmpbiliario</p>
                            </div>
                     <?php endif ?>
              </div>
              
       </div>
</div>