<div class="modal fade" tabindex="-1" role="dialog" id="ClientModal">
  <div class="modal-dialog" role="document" style="width:70%" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body"> 
                    <input class="form-control" type="hidden" value="0" id="id_client" name="id_client">
                    {{ csrf_field() }} 
                <div class="row"> 
                <div class="col-sm-5"> 
                        <div class="form-group">
                            <label>Nombre</label>
                            <input class="form-control" type="text" id="client_name" name="client_name">
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>  
                            <input class="form-control" type="text" id="client_last_name" name="client_last_name">
                        </div>
                </div>
                <div class="col-sm-5"> 
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" id="email" name="email">
                        </div> 
                        <div class="form-group">
                            <label>Telefono</label>
                            <input class="form-control" type="text" id="telephone" name="telephone">
                        </div>
                </div>
                <div class="col-sm-5"> 
                        <div class="form-group">
                            <label>Celular</label>
                            <input class="form-control" type="text" id="cellphone" name="cellphone">
                        </div>  
                </div>

                </div> 
                <div class="row"> 
                <div class="col-sm-12"  > 
                    <h3>Prestamos   </h3> 
                    
                    <table id="header_loans" class="table table-striped table-bordered table-hover" >
                    <thead>
                            <tr>
                            <th>Numero Cuotas</th> 
                            <th>Dia de pago</th> 
                            <th>Porciento</th>
                            <th>Cuotas</th>
                            <th>Capital Solicitado</th> 
                            <th>Total Restante</th> 
                        </tr>
                    </thead>
                    <tbody></tbody>
                    </table>
                    <nav aria-label="Page navigation ">
                            <ul class="pager">
                                <li class="previous  " id="loans_prev" ><a href="#">← Anterior</a></li> 
                                <li id="info_pag_loans"> </li> 
                                <li class="next" id="loans_next" ><a href="#">Siguiente →</a></li>
                            </ul> 
                            <div class="col-sm-6"><span></span></div>
                        </nav>  
                </div>
                </div>
                <br>
                                
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary" id="save_client">Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->