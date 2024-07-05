<div class="container-xxl py-5" style="min-height: 500px;">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase"></h6>
            <h1 class="mb-5">Contact Whatsapp <span class="text-primary text-uppercase"></span></h1>
            <p>Silakan klik tombol di bawah ini untuk menghubungi kami melalui WhatsApp:</p>
    
    <?php
    // Nomor WhatsApp yang ingin dihubungi
    $whatsapp_number = "085864376641";
    
    // Membentuk link untuk menuju ke obrolan langsung di WhatsApp
    $whatsapp_link = "https://wa.me/$whatsapp_number";
    ?>
    
    <a href="<?php echo $whatsapp_link; ?>" class="btn btn-success">Hubungi via WhatsApp</a>
        </div>
        <div class="row g-5">
        </div>
    </div>
</div>
