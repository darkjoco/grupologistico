        
    <legend><h3><center>Mantención Depósitos</center></h3></legend> 
          <div class="row">
              <div class="span6">
                  <div style="margin-left: 10px"><?php echo validation_errors(); ?></div> 
                  <form class="form-horizontal" method="post" style="margin-left: 10px">
           <fieldset>  
            <div class="control-group">
                <label class="control-label" for="codigo_deposito"><strong>Código Depósito</strong></label>
                <div class="controls">
                    <?php
                        echo "<input type='text' class='span2' name='codigo_deposito' id='codigo_deposito' placeholder=".$form['cod_deposito'].">";
                        
                    ?>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="descripcion"><strong>Descripción</strong></label>
                <div class="controls">
                 <input type="text" class="input-xlarge" id="descripcion" name="descripcion" >
                </div>
            </div>

            <div class="form-actions">
                 
                 <input type="submit" class="btn btn-success" onclick = "this.form.action = '<?php echo base_url();?>index.php/mantencion/depositos/guarda_deposito'" value="Guardar" />
                 <input type="submit" class="btn btn-danger" onclick = "this.form.action = '<?php echo base_url();?>index.php/mantencion/depositos/borrar_deposito'" value="Borrar" />
 
             </div>
           </fieldset>
          </form>
              
              </div>
                <div class="span8" style="margin-left: 50px">
                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                      <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
			</tr>
                      </thead>
                      <tbody>
                              <?php
                              foreach ($tablas as $tabla){
                                  echo "<tr>";
                                  echo "<td>".$tabla['codigo_deposito']."</td>";
                                  echo "<td>".strtoupper($tabla['descripcion'])."</td>";
                              }
                              ?>
                       </tbody>
                  </table>    
              </div>
          </div>
         
