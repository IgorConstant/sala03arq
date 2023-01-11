<!-- JS -->
<script src="<?php echo base_url('assets/dashboard/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/dashboard/js/button.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/js/upload/jquery.fileuploader.min.js') ?>"></script>
<script src="<?php echo base_url('assets/dashboard/js/upload/custom.js') ?>"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="<?php echo base_url('assets/dashboard/js/darkmode.js') ?>"></script>
<script>
    // Plugin Initialization
    var options = {
        light: '<?php echo base_url('assets/dashboard/css/light.css') ?>',
        dark: '<?php echo base_url('assets/dashboard/css/dark.css') ?>',
    }
    var DarkMode = new DarkMode(options)

    // Remove mode from LocalStorage if button clicked
    var ModeRemover = document.getElementById('mode-remover')
    ModeRemover.onclick = function() {
        DarkMode.clearSavedMode()
        changeTogglerText()
        getModeRemoverState()
    }

    // Detects mode on LocalStorage, if `true` – display a button
    getModeRemoverState()

    function getModeRemoverState() {
        if (DarkMode.isModeSaved())
            ModeRemover.classList.remove('hidden')
        else
            ModeRemover.classList.add('hidden')
    }

    // Function for `mode-toggler` button
    var ModeToggler = document.getElementById('mode-toggler')
    changeTogglerText()
    ModeToggler.onclick = function() {
        DarkMode.toggleMode()
        changeTogglerText()
    }

    // Changes `mode-toggler` text on mode changing
    function changeTogglerText() {
        getModeRemoverState()
        var currentMode = DarkMode.getMode()
        ModeToggler.textContent = currentMode === 'light' ? 'Apagar as luzes 🌚' : 'Ligar as Luzes 🌝'
    }
</script>

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

<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>
</body>