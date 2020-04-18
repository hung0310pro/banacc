<script src="{{ url('lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/main.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jquery-flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jquery-flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jquery-flot/plugins/jquery.flot.orderBars.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jquery-flot/plugins/curvedLines.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jquery.sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/countup/countUp.min.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
<script src="{{ url('js/app-dashboard.js') }}" type="text/javascript"></script>

<script src="{{ url('lib/datatables/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/datatables/plugins/buttons/js/dataTables.buttons.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/datatables/plugins/buttons/js/buttons.html5.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/datatables/plugins/buttons/js/buttons.flash.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/datatables/plugins/buttons/js/buttons.print.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/datatables/plugins/buttons/js/buttons.colVis.js') }}" type="text/javascript"></script>
<script src="{{ url('lib/datatables/plugins/buttons/js/buttons.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ url('js/app-tables-datatables.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        //initialize the javascript
        App.init();
        App.dashboard();
        App.dataTables();
        $('form').parsley();
    });

</script>
</body>
</html>