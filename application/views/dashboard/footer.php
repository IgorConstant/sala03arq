<!-- Js -->
<script src="<?php echo base_url('assets/dashboard/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/dashboard/js/button.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/js/darkMode.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/js/upload.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/fileupload/js/vendor/jquery.ui.widget.js') ?>"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="<?php echo base_url('assets/dashboard/fileupload/js/jquery.iframe-transport.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/fileupload/js/jquery.fileupload.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/fileupload/js/jquery.fileupload-process.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/fileupload/js/jquery.fileupload-image.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/fileupload/js/jquery.fileupload-validate.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/fileupload/js/jquery.fileupload-ui.js') ?>"></script>





<!-- Datatables Claim -->
<script>
    $(document).ready(function() {
        $('.table').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.11.4/i18n/pt_br.json'
            }
        });
    });
</script>
</body>