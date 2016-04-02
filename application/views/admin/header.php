<!-- BEGIN TOP NAVIGATION MENU -->
<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img alt="" class="img-circle" src="<?php echo base_url(); ?>assets/admin/layout/img/avatar3_small.jpg"/>
                <span class="username username-hide-on-mobile">
                    <?php echo @$this->user['username'];?> </span>
                <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
                <li>
                    <a href="<?php echo base_url();?>" target="_blank">
                        <i class="icon-user"></i> Visit Site </a>
                </li>
                <li>
                    <a href="page_calendar.html">
                        <i class="icon-calendar"></i> My Calendar </a>
                </li>
                <li>
                    <a href="inbox.html">
                        <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                            3 </span>
                    </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="<?php echo base_url('admin_login/logout');?>">
                        <i class="icon-key"></i> Log Out </a>
                </li>
            </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
    </ul>
</div>
<!-- END TOP NAVIGATION MENU -->