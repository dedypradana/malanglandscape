<ul class="breadcrumb">
    <li><a href="<?php echo base_url('dashboard');?>">Malang Landscape</a></li>
    <li class="active">My Gallery</li>
</ul>
<!-- BEGIN SIDEBAR & CONTENT -->
<div class="row margin-bottom-40">
    <!-- BEGIN CONTENT -->
    <div class="col-md-12 col-sm-12">
        <h1>Malang Landscape Gallery</h1>
        <div class="content-page">
            <div class="filter-v1">
                <ul class="mix-filter">
                    <li data-filter="all" class="filter active">Semua Kategori</li>
                    <?php if($res_kategori){
                        foreach($res_kategori as $rec){?>
                    <li data-filter="category_<?php echo $rec->id;?>" class="filter"><?php echo $rec->nama_kategori;?></li>
                    <?php }} ?>
                    <li data-filter="category_" class="filter">Lainnya</li>
                </ul>
                <div class="row mix-grid thumbnails">
                    <?php if($res_gallery){
                        foreach($res_gallery as $gal){ ?>
                            <div class="col-md-3 col-sm-4 mix category_<?php echo @$gal->kategori?> mix_all" style="display: block; opacity: 1; ">
                                <div class="mix-inner">
                                    <img alt="" src="<?php echo base_url('assets/uploads/img/thumb__'.$gal->path);?>" class="img-responsive">
                                    <div class="mix-details" style="">
                                        <h4><?php echo @$gal->nama?></h4>
                                        <a data-rel="fancybox-button" style="margin-left: -20px;" title="<?php echo @$gal->nama?>" href="<?php echo base_url('assets/uploads/img/'.$gal->path);?>" class="mix-preview fancybox-button"><i class="fa fa-search-plus"></i></a>
                                    </div>           
                                </div>                       
                            </div>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
</div>