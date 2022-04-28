<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <br><br><br>
                </div>
            </div>
        </div>
    <!--== SlideshowBg Area End ==-->

    <!--== Mobile App Area Start ==-->
    <br><br>
    <div id="mobileapp-video-bg"></div>
    <section id="mobile-app-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center">
                    <div class="mobile-app-content">
                                <?php if($this->session->userdata('lo')) { ?>
                                    <h2>Unit Pelaporan</h2>
                                    <p>Laporkan Keluhan Anda</p>
                                    <div class="app-btns">
                                        <a href="<?php echo base_url('customer/unit_pelaporan')?>"><i class=""></i>MULAI MELAPOR</a>
                                        
                                    </div>

                                <?php } else { ?>
                                    <h3>Unit Pelaporan</h3>
                                    <p>Laporkan Keluhan Anda</p>
                                    <div class="app-btns">
                                        <a href="<?php echo base_url('Auth/login')?>"><i class=""></i> LOGIN</a>
                                        <a href="<?php echo base_url('Register')?>"><i class=""></i> REGISTER</a>
                                    </div>
                                <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
