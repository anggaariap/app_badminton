        <script src="<?= base_url() ?>public/adminty-html/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/js/jszip.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/js/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/js/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

         <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/wysiwyg-editor/js/tinymce.min.js"></script>

         <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/i18next/i18next.min.js"></script>
         <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
         <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
         <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/jquery-i18next/jquery-i18next.min.js"></script>c

         <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/wysiwyg-editor/wysiwyg-editor.js"></script>
         <script src="https://demo.dashboardpack.com/adminty-html/files/assets/pages/data-table/js/data-table-custom.js"></script>
         <script src="<?= base_url() ?>public/adminty-html/files/assets/js/pcoded.min.js"></script>
         <script src="<?= base_url() ?>public/adminty-html/files/assets/js/vartical-layout.min.js"></script>
         <script src="<?= base_url() ?>public/adminty-html/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
         <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/assets/js/script.js"></script>
        <script src="<?= base_url() ?>public/adminty-html/files/bower_components/sweetalert/sweetalert.min.js"></script>

   <script type="text/javascript">

      $(document).on("click",".btnhapus",function(){
         var id =$(this).attr("data-id");
         swal({
            title: "Peringatan!",
            text: "Apakah anda ingin menghapus data ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         })
            .then((willDelete) => {
            if (willDelete) {
               window.location = "<?= base_url() ?>jadwal/delete/"+id;
            } else {
               swal("Cancelled", "Batal :)", "error");
            }
         });
      });

   </script>