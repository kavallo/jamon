@include('backend.template.header') 
 @include('backend..template.menu')


 <!-- /. NAV SIDE  -->
 <div id="page-wrapper">
            <div id="page-inner">
                            <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-10">
                                            
                                            <div class="input-group"> 
                                                <input type="text" class="form-control" name="search" id="search"  > 
                                                <div class="input-group-addon"><li class="fa fa-search "></li></div> 
                                            </div> 
                                        </div>
                                        
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary" id="btn_nuevo"><li class="fa fa-plus  "></li> Nuevo</button>
                                        </div>
                                    </div>
                                </div>
                                    <hr />        
                                <div class="row">
                                    <div class="col-sm-12">
                                <table id="tabla_prestamos" class="table table-striped table-bordered table-hover" > 
                                    <thead>
                                        <tr> 
                                                <th>Prestamo No.</th>
                                                <th>Monto</th>
                                                <th>Intereses</th>
                                                <th>Periodo</th>
                                                <th>Tiempo Restante</th>
                                                <th>Cliente</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table> 
                                <nav aria-label="Page navigation ">
                                            <ul class="pager">
                                                <li class="previous  " id="client_prev" ><a href="#">← Anterior</a></li> 
                                                <li id="info_pag"> </li> 
                                                <li class="next" id="client_next" ><a href="#">Siguiente →</a></li>
                                            </ul> 
                                            <div class="col-sm-6"><span></span></div>
                                        </nav>      
                            </div>
                            <style>
                            td:hover { 
                                cursor:pointer;
                            }
                            </style>
                            <!-- /. col-sm-12 -->
                            </div>
                            <!-- /. Row -->      

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
 
        @include('backend.template.footer') 
        @include('backend.modals.prestamos.add') 
        @include('backend.modals.prestamos.index') 
        @include('backend.modals.prestamos.transacction') 
        <script src="{{asset('js/prestamos/index.js')}}"></script>
        <script src="{{asset('js/prestamos/list.js')}}"></script>
        <script src="{{asset('js/prestamos/transaccion.js')}}"></script>