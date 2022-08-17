<footer class="footer-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-copyright">
                    <p>
                        2022 @
                        <a href="#">
                            Proactii
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-menu text-right">
                    <ul>
                        <li>
                            <a href="#">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Team
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .Footer Menu -->
            </div>
        </div>
    </div>
</footer>
</main>



<!--<div class="overlay-dark-sidebar">
</div>
<div class="customizer-overlay">
</div>-->

<!-- <script src="<?php echo ADMIN_ASSETS ?>maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY">
</script> -->
<!-- inject:js-->

<script type="text/javascript" src="<?php echo ADMIN_ASSETS ?>js/jquery/jquery.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>js/plugins.min.js">
</script>
<script src="<?php echo ADMIN_ASSETS ?>js/script.min.js">
</script>
<script type="text/javascript" src="<?php echo ADMIN_ASSETS ?>js/jquery/jquery.validate.min.js"></script>
<!-- endinject-->

<!--Datatable.js-->

<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/jquery.dataTables.min.js">
</script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/dataTables.buttons.min.js">
</script>
<script type="text/javascript" src="<?php echo ADMIN_ASSETS ?>js/pnotify/js/jquery.pnotify.min.js">
</script>

<!--Export table buttons-->
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/buttons.flash.min.js">
</script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/pdfmake.min.js">
</script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/vfs_fonts.js">
</script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/buttons.html5.min.js">
</script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/buttons.print.min.js">
</script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/jszip.min.js">
</script>

<!--Datatable.js-->


<script type="text/javascript" src="<?php echo ADMIN_ASSETS  ?>froala-editor/js/froala_editor.pkgd.min.js">
</script>



<script type="text/javascript">
var base_url = "<?php echo base_url() ?>";
</script>

<script src="<?php echo ADMIN_ASSETS ?>js/application/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
	if($this->session->flashdata('success')){?>
<script type="text/javascript">
setTimeout(function() {
    notification("bottomright", "success", "fa fa-check-circle vd_green", "MultiVendor",
        "<?php echo $this->session->flashdata('success') ?> ");
}, 300);
</script>
<?php
	} 
?>
<?php
	if($this->session->flashdata('error')) {?>
<script type="text/javascript">
setTimeout(function() {
    notification("bottomright", "error", "fa fa-exclamation-circle vd_red", "MultiVendor",
        "<?php echo $this->session->flashdata('error') ?> ");
}, 300);
</script>
<?php } 
?>
<?php
if(!empty($pagejs))
{
	foreach($pagejs as $js)
	{
		$jsurl    = $this->config->item('js_url');
		$base_url = base_url();
		print_r("<script src='$base_url$jsurl$js'></script>\n");
	}
}
?>
<div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
</body>

</html>