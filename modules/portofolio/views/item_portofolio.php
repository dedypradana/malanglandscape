<ul class="breadcrumb">
    <li><a href="<?php echo base_url('dashboard');?>">Malang Landscape</a></li>
    <li><a href="<?php echo base_url('portofolio');?>">Portofolio</a></li>
    <li class="active">Portfolio Detail</li>
</ul>
<!-- BEGIN SIDEBAR & CONTENT -->
<div class="row margin-bottom-40">
    <!-- BEGIN CONTENT -->
    <div class="col-md-12 col-sm-12">
        <h1>Detail Portofolio</h1>
        <div class="content-page">
            <div class="row margin-bottom-30">
                <!-- BEGIN CAROUSEL -->            
                <div class="col-md-5 front-carousel">
                    <div class="carousel slide" id="myCarousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img alt="" src="<?php echo base_url('assets/uploads/img/portofolio/'.$res->path);?>">
                                <div class="carousel-caption">
                                    <p><?php echo @$res->nama;?></p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!-- END CAROUSEL -->                             

                <!-- BEGIN PORTFOLIO DESCRIPTION -->            
                <div class="col-md-7">
                    <h2><?php echo @$res->nama;?></h2>
                    <?php if(@$res->deskripsi){ ?>
                        <p><?php echo @$res->deskripsi;?></p>
                    <?php }else{ ?>
                        <div class="note note-info">
                            Deskripsi belum ditambahkan administrator..
                        </div>
                    <?php } ?>
                    <br>
                    <a class="btn btn-primary" href="<?php echo base_url('portofolio');?>" style="color: #fff;"> Lihat Portofolio</a>
                </div>
                <!-- END PORTFOLIO DESCRIPTION -->            
            </div>
        </div>
    </div>
</div>