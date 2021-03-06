 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <!-- Anything you want -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">ZTE Colombia</a>.</strong> All rights reserved.
  </footer>


  <!--******************************* SIDEBAR DE LA DERECHA******************************* -->
  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark">
    Create the tabs
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    Tab panes
    <div class="tab-content">
      Home tab content
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>
  
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
  
                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        /.control-sidebar-menu
  
        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>
  
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        /.control-sidebar-menu
  
      </div>
      /.tab-pane
      Stats tab content
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      /.tab-pane
      Settings tab content
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>
  
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
  
            <p>
              Some information about this general settings option
            </p>
          </div>
          /.form-group
        </form>
      </div>
      /.tab-pane
    </div>
  </aside> -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- jQuery 3 -->
<script src="<?= base_url('assets2/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets2/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets2/dist/js/adminlte.min.js'); ?>"></script>



<!-- **********************************************datatables *********************************************-->
<script src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>

<script src="<?= base_url("assets/plugins/sweetalert2/sweetalert2.all.js") ?>"></script>
<!-- ********************************************** HELPER FUNCVIONES GLOBALES *********************************************-->
<script src="<?= base_url("assets/js/utils/helper.js?v=" . validarEnProduccion()) ?>"></script>


<!-- js para lider -->
<?php if ($this->uri->segment(1) == 'User' && $this->uri->segment(2) == 'principal' && $this->session->userdata('role') == 'lider'): ?>
        <script src="<?= base_url("assets/js/modules/lider.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<!-- js para ingeniero -->
<?php if ($this->uri->segment(1) == 'User' && $this->uri->segment(2) == 'principal' && $this->session->userdata('role') == 'ingeniero'): ?>
        <script src="<?= base_url("assets/js/modules/ingeniero.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>

<!-- js para cambios en perfil del usuario -->
<?php if ($this->uri->segment(1) == 'User' && $this->uri->segment(2) == 'perfil'): ?>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js'></script>
        <script src="<?= base_url("assets/js/utils/knockout-file-bindings.js") ?>"></script>
        <script src="<?= base_url("assets/js/modules/perfil_usuario.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>



<!-- **********************************************datatables plus (excel ... ) *********************************************-->
<?php if ($this->uri->segment(1) == 'User' && $this->uri->segment(2) == 'principal'): ?>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/jszip.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/pdfmake.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/vfs_fonts.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.html5.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.print.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<?php endif ?>

<!-- js para lider -->
<?php if ($this->uri->segment(1) == 'Crq' && $this->uri->segment(2) == 'crear' && $this->session->userdata('role') == 'lider'): ?>
        <script src="<?= base_url("assets/js/modules/crear_crq.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>




<script type="text/javascript"> 
  // para ponerle active al li seleccionado 
  $('#<?= $active ?>').addClass('active');
  const base_url = "<?php echo base_url(); ?>";
  const formato_fecha = new Date();
  const fecha_actual = formato_fecha.getDate() + "-" + formato_fecha.getMonth() + "-" + formato_fecha.getFullYear();
</script>

</body>
</html>