<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <hr style="border-color: #364150;">
            <li class="start <?php if($this->s1=='admin_dashboard'){echo 'active open';}?>">
                <a href="<?php echo base_url('admin_dashboard');?>">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="<?php if($this->s1=='admin_dashboard'){echo 'selected';}?>"></span>
                </a>
            </li>
            <li class="<?php if($this->s1=='admin_master'){echo 'active open';}?>">
                <a href="javascript:;">
                    <i class="icon-briefcase"></i>
                    <span class="title">Master Data</span>
                    <span class="<?php if($this->s1=='admin_master'){echo 'selected';}?>"></span>
                    <span class="arrow <?php if($this->s1=='admin_master'){echo 'open';}?>"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?php if($this->s1=='admin_master' && $this->s2=='master_user'){echo 'active';}?>">
                        <a href="<?php echo base_url('admin_master/master_user');?>">
                            <i class="icon-user"></i>
                            Data User</a>
                    </li>
                    <li class="<?php if($this->s1=='admin_master' && $this->s2=='master_subs'){echo 'active';}?>">
                        <a href="<?php echo base_url('admin_master/master_subs');?>">
                            <i class="icon-envelope"></i>
                            Data Subscriber</a>
                    </li>
                    <li class="<?php if($this->s1=='admin_master' && $this->s2=='master_cat'){echo 'active';}?>">
                        <a href="<?php echo base_url('admin_master/master_cat');?>">
                            <i class="icon-list"></i>
                            Data Kategori</a>
                    </li>
                </ul>
            </li>
            <li class="last <?php if($this->s1=='admin_content'){echo 'active open';}?>">
                <a href="javascript:;">
                    <i class="icon-folder"></i>
                    <span class="title">Content Web</span>
                    <span class="<?php if($this->s1=='admin_content'){echo 'selected';}?>"></span>
                    <span class="arrow <?php if($this->s1=='admin_content'){echo 'open';}?>"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?php if($this->s1=='admin_content' && $this->s2=='gallery'){echo 'active';}?>">
                        <a href="<?php echo base_url('admin_content/gallery');?>">
                            <i class="icon-bulb"></i>
                            Manage Gallery</a>
                    </li>
                    <li class="<?php if($this->s1=='admin_content' && $this->s2=='portofolio'){echo 'active';}?>">
                        <a href="<?php echo base_url('admin_content/portofolio');?>">
                            <i class="icon-credit-card"></i>
                            Manage Portofolio</a>
                    </li>
                    <li>
                        <a href="ecommerce_index.html">
                            <i class="icon-rocket"></i>
                            Social Media</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->