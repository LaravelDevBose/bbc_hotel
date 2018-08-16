
<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->



<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/js/bootstrap.min.js"></script> 
<script type="text/javascript" src='<?= base_url();?>/libs/backEnd/plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/js/caroufredsel.js"></script> 
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/js/plugins.js"></script>

<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/js/theme.js"></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/custom/custom.js"></script>
<!-- /default js -->

<!-- Data Table Scripts -->
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/dataTables/dataTables.bootstrap.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        "use strict";

        $('#data-tables').dataTable();
    });
</script>


<!-- Input and date time and text editor -->
<script type="text/javascript" src='<?= base_url();?>/libs/backEnd/plugins/daterangepicker/daterangepicker.js'></script>
<script type="text/javascript" src='<?= base_url();?>/libs/backEnd/plugins/ckeditor/ckeditor.js'></script>
<script type="text/javascript" src='<?= base_url();?>/libs/backEnd/plugins/ckeditor/adapters/jquery.js'></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/bootstrap-wysiwyg/js/wysihtml5-0.3.0.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/plugins/bootstrap-wysiwyg/js/bootstrap-wysihtml5-0.0.2.js"></script>

<script>
    $('#wysiwyghtml').wysihtml5();
    // date time piker
    $("#datepicker-icon").datepicker({dateFormat: 'dd M yy'});
    $('[data-datepicker]').click(function (e) {
        var data = $(this).data('datepicker');
        $(data).focus();
    });
</script>


<!-- For Fancy Box -->
<script type="text/javascript" src="<?php echo base_url()?>libs/backEnd/fancyBox/js/jquery.fancybox.js?v=2.1.5"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>libs/backEnd/fancyBox/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">

    $(document).ready(function() {

        $('.fancybox').fancybox({

        padding: 0,

            openEffect : 'elastic',

            openSpeed  : 150,

            closeEffect : 'elastic',

            closeSpeed  : 150,

            maxWidth    : "90%",

            autoSize    : true,

            autoScale   : true,

            fitToView   : true,

            helpers : {

                title : {

                    type : 'inside'

                },

                overlay : {

                    css : {

                        'background' : 'rgba(0,0,0,0.3)'

                    }

                }

            }       

        });

        $('.fancyboxview').fancybox({

        padding: 0,

            openEffect : 'elastic',

            openSpeed  : 150,



            closeEffect : 'elastic',

            closeSpeed  : 150,

            maxWidth    : "95%",

            autoSize    : true,

            autoScale   : true,

            fitToView   : true,



            helpers : {

                title : {

                    type : 'inside'

                },

                overlay : {

                    css : {

                        'background' : 'rgba(0,0,0,0.3)'

                    }

                }

            }       

        });

    });    

</script>



<script>
    $('input[name="old_password"]').on('blur', function(e){
        console.log(e);
        var old_password = $(this).val();
        var id = '<?= $admin->id; ?>';
        $.ajax({
            url:'<?= base_url();?>password/check',
            dataType:'json',
            type:"POST",
            data:{'id':id, 'old_password':old_password},
            success:function(data){
                console.log(data);
                if(data == 1){
                    $('#pass_check').html('Old Password Match.');
                    $('#pass_check').attr('class', 'text-success text-semibold')
                    $('input[name="password"]').removeAttr('disabled');
                    $('input[name="confirm_password"]').removeAttr('disabled');
                }else{
                    $('#pass_check').html('Old Password Not Match.');
                    $('#pass_check').attr('class', 'text-danger text-semibold')
                    $('input[name="password"]').attr('disabled', 'disabled');
                    $('input[name="confirm_password"]').attr('disabled', 'disabled');
                }
            },
            error:function(error){
                console.log(error);
                swal({
                      text: "Some Thing Went Worng. Try again Later.",
                      icon: "error",
                      buttons: false,
                      timer: 10000,
                    });
            },
        });
    }); 
</script>





















