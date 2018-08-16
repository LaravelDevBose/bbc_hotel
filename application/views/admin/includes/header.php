<style>
    .logo-text{
        font-size: 18px;
        font-weight: 800;
        padding: 10px 0;
        font-style: italic;
    }
</style>

<header class="header-1" id="header">
    <div class="vd_top-menu-wrapper">
        <div class="container ">
            <div class="vd_top-nav vd_nav-width  ">
                <div class="vd_panel-header">
                    <div class="logo">
                        <a href="<?= base_url();?>dashboard" style="margin-top: 12px;">
                            <?php 
                                $logo_info = $this->db->where('field_name', 'logo')->get('template')->row();

                                if($logo_info):
                                    $logo = base_url().$logo_info->value; 
                                    if(@getimagesize($logo)): 
                            ?>
                                <img alt="Macca Degital" src="<?= $logo; ?>" style="width: 100%; height: 40px;">
                            <?php 
                                else: echo '<h3 class="logo-text">Macca Digital</h3>'; endif; else:  echo '<h3 class="logo-text">Macca Digital</h3>'; endif; 
                            ?>
                        </a>
                    </div>
                    <!-- logo -->
                    <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
                        <span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
                            <i class="fa fa-bars"></i>
                        </span>

                        <span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
                            <i class="fa fa-ellipsis-v"></i>
                        </span> 

                    </div>
                    <div class="vd_panel-menu left-pos visible-sm visible-xs">

                        <span class="menu" data-action="toggle-navbar-left">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>  


                    </div>
                    <div class="vd_panel-menu visible-sm visible-xs">
                        <span class="menu visible-xs" data-action="submenu">
                            <i class="fa fa-bars"></i>
                        </span>        

                        <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                            <i class="fa fa-comments"></i>
                        </span>                   

                    </div>                                     
                    <!-- vd_panel-menu -->
                </div>
                <!-- vd_panel-header -->

            </div>    
            <div class="vd_container">
                <div class="row">
                    <div class="col-sm-5 col-xs-12">
                        

                        <div class="vd_menu-search" style="display: none;">
                            <form id="search-box" method="post" action="#">
                                <input type="text" name="search" class="vd_menu-search-text width-60" placeholder="Search">
                                <div class="vd_menu-search-category"> <span data-action="click-trigger"> <span class="separator"></span> <span class="text">Category</span> <span class="icon"> <i class="fa fa-caret-down"></i></span> </span>
                                    <div class="vd_mega-menu-content width-xs-2 center-xs-2 right-sm" data-action="click-target">
                                        <div class="child-menu">
                                            <div class="content-list content-menu content">
                                                <ul class="list-wrapper">
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" value="all-files">
                                                            <span>All Files</span></label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" value="photos">
                                                            <span>Photos</span></label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" value="illustrations">
                                                            <span>Illustrations</span></label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" value="video">
                                                            <span>Video</span></label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" value="audio">
                                                            <span>Audio</span></label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" value="flash">
                                                            <span>Flash</span></label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="vd_menu-search-submit"><i class="fa fa-search"></i> </span>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="vd_mega-menu-wrapper">
                            <div class="vd_mega-menu pull-right">
                                <ul class="mega-ul">
                                    

                                    <li id="top-menu-profile" class="profile mega-li"> 
                                        <a href="#" class="mega-link"  data-action="click-trigger"> 
                                            <span  class="mega-image">
                                                <?php
                                                    $admin_image = $this->db->where('id', $this->session->userData('admin_id'))->get('admins')->row(); 
                                                    $image =base_url().$admin_image->image; 
                                                    if(!@getimagesize($image)){
                                                        $image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ; 
                                                    }
                                                ?>
                                                <img src="<?= $image;?>" alt="example image" />               
                                            </span>
                                            <span class="mega-name">
                                                <?php echo $this->session->userData('admin_name');?> <i class="fa fa-caret-down fa-fw"></i> 
                                            </span>
                                        </a> 
                                        <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
                                            <div class="child-menu"> 
                                                <div class="content-list content-menu">
                                                    <ul class="list-wrapper pd-lr-10">
                                                        
                                                        <li> <a href="<?= base_url(); ?>admin/logout"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>
                                                    </ul>
                                                </div> 
                                            </div> 
                                        </div>     

                                    </li>               
                                </ul>
                                <!-- Head menu search form ends -->                         
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- container --> 
    </div>
    <!-- vd_primary-menu-wrapper --> 

</header>