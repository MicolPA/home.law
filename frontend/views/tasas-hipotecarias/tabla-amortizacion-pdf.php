<?php 
// echo "$".$datos['cuota'] . '<br>';
        // echo "$".$datos['totalInterest'] . '<br>';
        // echo "$".$datos['totalPay'] . '<br>';

 ?>

 <div style="height: 50%;width: 100%;padding:2rem 3rem;">

       <div style="width:35%;display: inline-block;float: left;background: white;text-align: center;padding-top:1rem;padding-bottom: 4.5rem;height: 50px;text-align: left;">
              <img src="/frontend/web/images/logo-clean.png" width="150px">
       </div>

       <div style="width:54%;display: inline-block;float: right;padding-top:1.5rem;padding-bottom: 1rem;height: 50px;text-align: right;">
              <h4 style="padding-left:1rem;color: #064c70;font-weight: bold;margin-bottom: -5px;">TABLA DE AMORTIZACIÓN</h4>
              <br>
       </div>


       <div style="padding:0px;width: 100%">

              <div style="width: 50%;display: inline-block;float:left;">
                    
                    <div style="color:#004b70">
                           <p style="margin-left:10px;margin-bottom:3px;font-weight: 600 !important"> &nbsp; <b>Monto solicitado</b></p>
                           <div style="border:solid 1.5px #004b70;border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px">
                                  <b><?= $get['monto'] ?></b>
                           </div>
                    </div>

                    <div style="color:#004b70;margin-top: 1rem;">
                           <p style="margin-left:10px;margin-bottom:3px;font-weight: 600 !important"> &nbsp; <b>Meses</b></p>
                           <div style="border:solid 1.5px #004b70;border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px">
                                  <b><?= $get['meses'] ?></b>
                           </div>
                    </div>

                    <div style="color:#004b70;margin-top: 1rem;">
                           <p style="margin-left:10px;margin-bottom:3px;font-weight: 600 !important"> &nbsp; <b>Tasa (%)</b></p>
                           <div style="border:solid 1.5px #004b70;border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px">
                                  <b><?= $get['tasa'] ?></b>
                           </div>
                    </div>
                            
              </div>

              <div style="width: 50%;display: inline-block;float:left;padding-top: 2rem;">
                    
                    <div style="color:#ffffff;background: #004b70;width: 230px;float: right;padding-top: 0.5rem;padding-bottom: 4px;padding-left: 10px;margin-bottom: 1.2rem;">
                           <p style="margin-left:10px;margin-bottom:0px;font-weight: 400 !important;font-size: 12px"> &nbsp; <b>PAGO MENSUAL:</b></p>
                           <div style="border:solid 1.5px #004b70;border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;margin-top: -1px;">
                                  <h4 style="color:white;font-weight:bold;margin-top: -4px;margin-bottom: 0px;">$<?= number_format($datos['cuota'], 3) ?></h4>
                           </div>
                    </div>

                    <div style="color:#ffffff;background: #004b70;width: 230px;float: right;padding-top: 0.5rem;padding-bottom: 4px;padding-left: 10px;margin-bottom: 1.2rem;">
                           <p style="margin-left:10px;margin-bottom:0px;font-weight: 400 !important;font-size: 12px"> &nbsp; <b>INTERÉS TOTAL:</b></p>
                           <div style="border:solid 1.5px #004b70;border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;margin-top: -1px;">
                                  <h4 style="color:white;font-weight:bold;margin-top: -4px;margin-bottom: 0px;">$<?= number_format($datos['totalInterest'], 3) ?></h4>
                           </div>
                    </div>

                    <div style="color:#ffffff;background: #d51921;width: 230px;float: right;padding-top: 0.5rem;padding-bottom: 4px;padding-left: 10px;margin-bottom: 1.2rem;">
                           <p style="margin-left:10px;margin-bottom:0px;font-weight: 400 !important;font-size: 12px"> &nbsp; <b>PAGO TOTAL:</b></p>
                           <div style="border-radius:20px;;font-weight:bold;width: 200px;padding:5px 14px 0px 15px;margin-top: -1px;">
                                  <h4 style="color:white;font-weight:bold;margin-top: -4px;margin-bottom: 0px;">$<?= number_format($datos['totalPay'], 3) ?></h4>
                           </div>
                    </div>

                            
              </div>
       </div>

       <div style="width:100%;margin-top: 3rem;">
              <table class="table table-striped table-hover" id="tablaAmortizacion">
                 <thead class="bg-primary text-white" style="background:#004b70;color:white">
                   <tr style="background:#004b70;color:white">
                     <td class="cuota" style="background:#004b70;color:white">Cuota</td>
                     <td class="fecha" style="background:#004b70;color:white">Fecha</td>
                     <td class="pago" style="background:#004b70;color:white">Pago</td>
                     <td class="interes" style="background:#004b70;color:white">Interés</td>
                     <td class="balance" style="background:#004b70;color:white">Balance</td>
                   </tr>
                 </thead>
               
                 <tbody class="tBody">
                     <?php for ($i = 1; $i < $get['meses'] + 1; $i++): ?>

                            <?php 
                            $monto = $initialData['monto'];
                            $tasa = $initialData['tasa'];
                            $date = date('m/d/Y');
                            $newDate = date('m/d/Y', strtotime("+$i month", strtotime($date)));
                            // $newDate = date('m',strtotime('first day of +1 month'));


                            if ($i == 1) {
                                   $saldo = $monto;
                                   $datos = $servicios->calcularCuota($saldo, $get['meses'], $tasa);
                                   // cuota = formatNumber(datos.cuota);
                                   $cuota =  $datos['cuota'];
                                   $montoc = $monto - $cuota;

                                   // console.log(datos);

                            }else{
                                   $saldo = $balance;
                                   $montoc = $montoc - $cuota + $datosMes['totalInterest'];

                            }
                            $datosMes = $servicios->calcularCuota($saldo, 1, $tasa);
                            // console.log(datosMes);
                           
                            $totalInterest = $datosMes['totalInterest'];
                            $totalPay = $datosMes['totalPay'];

                            $balance = $montoc + $totalInterest;


                            // $('tbody').append($('thead').html());
                              // $("tbody tr:last-child .cuota").html(i);
                              // $("tbody tr:last-child .fecha").html(newDate.toLocaleDateString());
                              // $("tbody tr:last-child .pago").html("$"+formatNumber(cuota));
                              // $("tbody tr:last-child .interes").html("$"+formatNumber(totalInterest));
                              
                              // if (i < meses) {
                                      // $("tbody tr:last-child .balance").html("$"+formatNumber(balance));
                              // }else{
                                      // $("tbody tr:last-child .balance").html('-');
                              // }

                            ?>

                            <tr>
                                   <td><?= $i ?></td>
                                   <td><?= $newDate ?></td>
                                   <td>$<?= number_format($cuota, 3) ?></td>
                                   <td>$<?= number_format($totalInterest, 3) ?></td>

                                   <td><?= $i < $get['meses'] ? "$". number_format($balance, 3) : '-' ?></td>

                            </tr>

                     <?php endFor ?>
                 </tbody>
               </table>
       </div>
</div>