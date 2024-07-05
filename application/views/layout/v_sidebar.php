<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div style="text-align: center; margin-bottom: 0px;">
            <img src="<?= base_url() ?>public/image/logobadminton_polos.png" alt="logobadminton_polos.png" width="100px;" >
        </div>
        
        <!-- <div class="pcoded-navigatio-lavel" style="text-align: left; padding-top: 0px;">Navigation</div> -->
        <ul class="pcoded-item pcoded-left-item">
   
            <li class="">
                <a href="<?= base_url() ?>dashboard">
                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>


            <!-- <?php if($this->session->userdata('level') == 'Admin'){ ?>
                <li class="">
                    <a href="<?= base_url() ?>manager">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Data Manager</span>
                    </a>
                </li>

            <?php } ?> -->

            <li class="">
                <a href="<?= base_url() ?>pemesanan">
                <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                <span class="pcoded-mtext">Data Booking</span>
                </a>
            </li>
            
            <li class="">
                <a href="<?= base_url() ?>lapangan">
                    <span class="pcoded-micon"><i class="feather icon-flag"></i></span>
                    <span class="pcoded-mtext">Data Lapangan</span>
                </a>
            </li>
            
            <li class="">
                <a href="<?= base_url() ?>member">
                <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                <span class="pcoded-mtext">Data Member</span>
                </a>
            </li>
            
            <li class="">
                <a href="<?= base_url() ?>pengumuman">
                <span class="pcoded-micon"><i class="feather icon-volume-2"></i></span>
                <span class="pcoded-mtext">Data Pengumuman</span>
                </a>
            </li>

            <li class="">
                <a href="<?= base_url() ?>jadwal">
                <span class="pcoded-micon"><i class="fa fa-calendar"></i></span>
                <span class="pcoded-mtext">Data Jadwal</span>
                </a>
            </li>

            
            <li class="">
                <a href="<?= base_url() ?>login/logout">
                <span class="pcoded-micon"><i class="icofont icofont-sign-out"></i></span>
                <span class="pcoded-mtext">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>