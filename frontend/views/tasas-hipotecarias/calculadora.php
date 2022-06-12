

<div class="w-100 mb-5" id="calculadora">
    <p class="text-center text-primary p-2 m-0 fw-bold h4 mb-1 mt-5">TABLA AMORTIZACIÓN</p>
</div>
<form>
    <div class="row">
        <div class="col-lg-12 my-3">
            <label class="text-primary fw-bold mb-1">Monto solicitado</label>
            <input type="text" class="form-control rounded-2 placeholder-blue number-mask" id="monto">
        </div>
        <div class="col-lg-6 my-3">
            <label class="text-primary fw-bold mb-1">Meses</label>
            <input type="number" class="form-control rounded-2 placeholder-blue" id="meses">
        </div>

        <div class="col-lg-6 my-3">
            <label class="text-primary fw-bold mb-1">Tasa (%)</label>
            <input type="text" class="form-control rounded-2 placeholder-blue number-mask" id="tasa">
        </div>
    </div>

    <div class="row resultados" style="display:none">
        <div class="form-group row border-bottom py-3 my-3">
            <label for="monthlypay" class="col-sm-6 col-form-label col-form-label-sm text-primary fw-bold font-16">PAGO MENSUAL:</label>
            <div class="col-sm-6">        
                <p  class="text-dark h4 fw-light" id="monthlypay"></p>
            </div>
        </div>
        
        <div class="form-group row border-bottom py-3 mb-2">
            <label for="totalinterest" class="col-sm-6 col-form-label col-form-label-sm text-primary fw-bold font-16">INTERÉS TOTAL:</label>
            <div class="col-sm-6">
                <p  class="text-dark h4 fw-light" id="totalinterest"></p>
            </div>
        </div>

        <div class="form-group row py-3 mb-2">
            <label for="totalpay" class="col-sm-6 col-form-label col-form-label-sm text-primary fw-bold font-16">PAGO TOTAL:</label>
            <div class="col-sm-6">        
                <p  class="text-dark h4 fw-light" id="totalpay"></p>
            </div>
        </div>

        <div class="form-group row py-3 mb-2">
            <label for="totalpay" class="col-sm-6 col-form-label col-form-label-sm text-primary fw-bold font-16">EXPORTAR PDF:</label>
            <div class="col-sm-6">        
                <a href="#" class="btn btn-xs btn-primary bg-primary rounded-3 px-4 mb-5 font-12 calculadoraPDF" target="_blank">EXPORTAR PDF <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i></a>
            </div>
        </div>

        <table class="table table-striped table-hover" id="tablaAmortizacion">
          <thead class="bg-primary text-white">
            <tr>
              <td class="cuota">Cuota</td>
              <td class="fecha">Fecha</td>
              <td class="pago">Pago</td>
              <td class="interes">Interés</td>
              <td class="balance">Balance</td>
            </tr>
          </thead>
        
          <tbody class="tBody">
            
          </tbody>
        </table>
    </div>

    <div class="row mt-3">
        <div class="text-center m-3">
            <button type="button" id="calcular" class="btn btn-primary rounded-2 px-5 mr-3">Calcular</button>
            <button type="reset" id="reset" class="btn btn-secondary rounded-2 px-5">Limpiar</button>
        </div>
    </div>
</form>