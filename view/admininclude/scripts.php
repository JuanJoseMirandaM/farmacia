<script src="<?php asset('js/core/jquery.min.js')?>"></script>
<script src="<?php asset('js/core/popper.min.js')?>"></script>
<script src="<?php asset('js/core/bootstrap.min.js')?>"></script>
<script src="<?php asset('js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
<!-- Chart JS -->
<script src="<?php asset('js/jquery-confirm.min.js')?>"></script>
<script src="<?php asset('js/plugins/chartjs.min.js')?>"></script>
<script src="<?php asset('js/angular.min.js')?>"></script>
<script src="<?php asset('js/controladores/VentaController.js')?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php asset('js/plugins/bootstrap-notify.js')?>"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php asset('js/now-ui-dashboard.min.js?v=1.1.0')?>" type="text/javascript"></script>

<script>
    function confirmar(url) {
        $.confirm({
            title: 'Eliminar Usuario',
            content: 'Estas apunto de eliminar el siguiente usuario',
            buttons: {
                /*confirm: function () {
                    $.alert('Confirmar');
                    window.location.href=url;
                },*/
                cancelar: {
                    text: 'Cancelar',
                    cancel: function () {
                        $.alert('Cancelado');
                    }
                },
                confirmar: {
                    text: 'Confirmar',
                    btnClass: 'btn-red',
                    keys: ['enter', 'shift'],
                    action: function(){
                        $.alert('Eliminado Correctamente');
                        window.location.href=url;
                    }
                }
            }
        });
    }

    function confirmarProd(url) {
        $.confirm({
            title: 'Eliminar Producto',
            content: 'Estas apunto de eliminar el siguiente producto',
            buttons: {
                /*confirm: function () {
                    $.alert('Confirmar');
                    window.location.href=url;
                },*/
                cancelar: {
                    text: 'Cancelar',
                    cancel: function () {
                        $.alert('Cancelado');
                    }
                },
                confirmar: {
                    text: 'Confirmar',
                    btnClass: 'btn-red',
                    keys: ['enter', 'shift'],
                    action: function(){
                        $.alert('Eliminado Correctamente');
                        window.location.href=url;
                    }
                }
            }
        });
    }
</script>


<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php asset('demo/demo.js')?>" > </script>
<script>
  $(document).ready(function() {
  // Javascript method's body can be found in assets/js/demos.js
  demo.initDashboardPageCharts();

});
</script>

