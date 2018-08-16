<!DOCTYPE html>
<html>


<?php $this->load->view('admin/includes/header_css_js');?>

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="dashboard "  data-smooth-scrolling="1">     
    <div class="vd_body">

        <?php $this->load->view('admin/includes/header');?>

        <div class="content">
            <div class="container">

                <?php $this->load->view('admin/includes/left_side_bar'); ?>    
                <?php $this->load->view('admin/includes/right_sideBar'); ?>    
                   
                <div class="vd_content-wrapper">
                    <div class="vd_container">
                        <div class="vd_content clearfix">
                            
                            <?php $this->load->view('admin/includes/message'); ?>

                            <div class="vd_content-section clearfix">

                                <?php if(isset($page_path)){ $this->load->view($page_path); } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <footer class="footer-1"  id="footer">      
            <div class="vd_bottom ">
                <div class="container">
                    <div class="row">
                        <div class=" col-xs-12">
                            <div class="copyright">
                                Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    </div>

<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>


<?php $this->load->view('admin/includes/footer_css_js');?>

</body>
</html>
