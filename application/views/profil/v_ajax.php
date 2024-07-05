
    <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/i18next/i18next.min.js"></script>
   <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
   <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
   <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

   <script src="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>
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
               window.location = "<?= base_url() ?>ijin/delete/"+id;
            } else {
               swal("Cancelled", "Batal :)", "error");
            }
         });
      });

   </script>