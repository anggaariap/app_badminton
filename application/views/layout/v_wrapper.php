
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $title ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="#">
        <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="#">

        <link rel="icon" href="<?= base_url() ?>public/image/logobadminton.jpg" type="image/x-icon">

        <link href="<?= base_url() ?>public/adminty-html/css?family=Open+Sans:400,600,800" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/bower_components/bootstrap/dist/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/assets/icon/themify-icons/themify-icons.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/assets/icon/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/assets/icon/icofont/css/icofont.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/assets/icon/feather/css/feather.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/adminty-html/files/assets/css/jquery.mCustomScrollbar.css">
    </head>
    <body>

        <div class="theme-loader">
            <div class="ball-scale">
                <div class='contain'>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <?php  
                    include 'v_nav.php';
                ?>

                <div id="sidebar" class="users p-chat-user showChat">
                    <div class="had-container">
                        <div class="card card_main p-fixed users-main">
                            <div class="user-box">
                                <div class="chat-inner-header">
                                    <div class="back_chatBox">
                                        <div class="right-icon-control">
                                            <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                                <div class="form-icon">
                                                    <i class="icofont icofont-search"></i>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-friend-list">
                                    <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius img-radius" src="<?= base_url() ?>public/adminty-html/files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Josephin Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="<?= base_url() ?>public/adminty-html/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Lary Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="<?= base_url() ?>public/adminty-html/files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alice</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="<?= base_url() ?>public/adminty-html/files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alia</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-radius" src="<?= base_url() ?>public/adminty-html/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Suzen</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="showChat_inner">
                    <div class="media chat-inner-header">
                        <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                        </a>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="<?= base_url() ?>public/adminty-html/files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                        <div class="media-right photo-table">
                            <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="<?= base_url() ?>public/adminty-html/files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                            </a>
                        </div>
                    </div>
                    <div class="chat-reply-box p-b-20">
                        <div class="right-icon-control">
                            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                            <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <?php  
                            include 'v_sidebar.php';
                        ?>

                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <?php include 'v_content.php'; ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

        <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>public/adminty-html/files/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>



        <script type="text/javascript">
		    $(".alert-dismissible").alert().delay(3000).slideUp('slow');
        </script>

        <script>
            function presensitidaklengkap(){
                swal({
                    title: "Warning!",
                    text: "Tanggal dan Keterangan Wajib Diisi",
                    type: "warning",
                    confirmButtonClass: 'btn btn-primary',
                    buttonsStyling: false,
                });
            }

            function detailtidaklengkap(){
                swal({
                    title: "Warning!",
                    text: "Detail Presensi Tidak Lengkap",
                    type: "warning",
                    confirmButtonClass: 'btn btn-primary',
                    buttonsStyling: false,
                });
            }

            function tidakditemukan(){
                Swal({
                    title: "Danger!",
                    text: "Data Tidak Ditemukan!",
                    type: "warning",
                    confirmButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                });
            }
        </script>

        <script>
            const flashData = $('.flash-data').data('flashdata');
            console.log(flashData);
            if(flashData == 'Insert Berhasil'){
                toastr.success('Data berhasil ditambahkan');
            }

            if(flashData == 'Update Berhasil'){
                toastr.success('Data berhasil dirubah');
            }

            if(flashData == 'Hapus Berhasil'){
                toastr.success('Data berhasil dihapus');
            }
            if(flashData == 'Eror Tidak ada'){
                    var content = {};
                    content.message = 'Data tidak ditemukan';
                    content.title = 'Peringatan';
                    content.icon = 'fa fa-times-circle';

                    $.notify(content,{
                        type: 'warning',
                        placement: {
                            from: 'top',
                            align: 'center'
                        },
                        time: 1000,
                        delay: 1000,
                    });
            }

            if(flashData == 'Detail Tidak ada'){
                    var content = {};
                    content.message = 'Detail Kelas Wajib Diisi';
                    content.title = 'Peringatan';
                    content.icon = 'fa fa-times-circle';

                    $.notify(content,{
                        type: 'warning',
                        placement: {
                            from: 'top',
                            align: 'center'
                        },
                        time: 1000,
                        delay: 1000,
                    });
            }

            if(flashData == 'Data Tidak Lengkap'){
                    var content = {};
                    content.message = 'Perhatian, Data belum lengkap';
                    content.title = 'Peringatan';
                    content.icon = 'fa fa-times-circle';

                    $.notify(content,{
                        type: 'warning',
                        placement: {
                            from: 'top',
                            align: 'center'
                        },
                        time: 1000,
                        delay: 1000,
                    });
            }
        
        </script>

        <?php include 'v_ajax.php'; ?>
    </body>
</html>