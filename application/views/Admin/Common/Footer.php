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
<script src="<?php echo ADMIN_ASSETS ?>js/script.min.js"></script>
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
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/buttons.flash.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/pdfmake.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/vfs_fonts.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/buttons.html5.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/buttons.print.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>js/dataTable/jszip.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>js/bootstrap-select.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>js/bootstrap-tagsinput.min.js"></script>

<!--Datatable.js-->


<script type="text/javascript" src="<?php echo ADMIN_ASSETS  ?>froala-editor/js/froala_editor.pkgd.min.js">
</script>



<script type="text/javascript">
var base_url = "<?php echo base_url() ?>";
</script>

<script src="<?php echo ADMIN_ASSETS ?>js/application/script.js?v=<?php echo VERSION; ?>"></script>

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


<!-- Locscreen Modal -->
<div class="modal fade" id="lockscreenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<form method="POST" id="unlockscreen_form" class="needs-validation" novalidate="">
					<div class="form-group">
						<label for="unlock_password">
							Password
						</label>
						<input id="unlock_password" type="password" class="form-control" name="unlock_password" tabindex="1"  autofocus required="">
					</div>
					<div class="form-group">
						<a class="btn btn-lg btn-block btn-auth-color" tabindex="4" onclick="unlockScreen()">
							Unlock
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<script>
$("form[id='unlockscreen_form']").validate({
    // Specify validation rules
    rules: {
        unlock_password: {
            required: true,
        }
    },
    // Specify validation error messages
    messages: {
        unlock_password: {
            required: "Please enter a password",
        },
    },

    submitHandler: function(form) {
        form.submit();
    }
});


//function for unlock screen
function unlockScreen() {
    if (!$("#unlockscreen_form").valid()) {
        $("#unlockscreen_form").submit(function() {
            return false;
        });
        return false;
    } else {
        var unlockFrm = new FormData($('#unlockscreen_form')[0]);

        $.ajax({
            "url": base_url + "Admin/Lockscreen/submitLockscreen",
            type: 'post',
            dataType: 'json',
            data: unlockFrm,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                if (data.status == "success") {
                    $('#unlockscreen_form')[0].reset();
                    $("#lockscreenModal").modal('hide');
                } else if (data.status == "error") {
                    Swal.fire("Error", data.msg, "error");
                }
            }
        });
    }
}
</script>


<?php
	if(isset($this->session->userdata['lockscreen_session']))
	{
	?>
<script type="text/javascript">
$(document).ready(function() {
    $("#lockscreenModal").modal('show');
});
</script>
<?php
	}
	?>
</body>

</html>