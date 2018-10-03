<div class="vd_content-section clearfix">
    <div class="row">
        <div class="col-md-12">
            <div class="panel widget">
                <div class="panel-heading vd_bg-green">
                    <h3 class="panel-title"> 
                        <span class="menu-icon"> 
                            <i class="fa fa-dot-circle-o"></i> 
                        </span> Booking information list 
                        <a href="" class="btn btn-danger btn-sm pull-right" onclick="printContent('print_body')" style="margin-top: -3px;">Print</a>
                    </h3>
                </div>
                <div class="panel-body table-responsive" id="print_body">
                    <div style="width:12%; float: left;">
                        <?php 
                            $no_img = base_url().'libs/upload_pic/no_image_small.jpg'; 
                            if($logo && isset($logo)): 
                                $image =base_url().$logo->value; 

                                if(!@getimagesize($image)): 
                                    $image = $no_img ;
                                endif;
                            else:
                                $image = $no_img;
                            endif; ?>
                        <img src="<?php echo $image; ;?>" alt="Logo" style="width:100px;" />
                    </div>
                    <div style="width:82%; text-align: center; float: left;">
                        <strong style="font-size:18px;">Hotel BBC</strong><br/>
                        <p><?php if($address && isset($address)){echo $address->value; }?></p>
                        <p style="text-align: center; display: block; width: 100%">
                            <?php if($email && isset($email)){echo 'Email: '.$email->value; }?> 
                            <?php if($phone && isset($phone)){echo 'Phone No.: '.$phone->value; }?>   
                        </p>

                            
                    </div>
                    <table class="table table-hover" style="border: 1px solid #ddd">
                        
                        <tbody>
                            <tr>
                                <th class="center">Name: </th>
                                <td class="center"><?= ucfirst($data->persone_name); ?></td>
                            </tr>
                            <tr>
                                <th class="center">Company Name: </th>
                                <td class="center"><?= ucfirst($data->cmpy_name); ?></td>
                            </tr>
                            <tr>
                                <th class="center">Email: </th>
                                <td class="center"><?= $data->email; ?></td>
                            </tr>
                            <tr>
                                <th class="center">Phone No: </th>
                                <td class="center"><?= $data->phone_num; ?></td>
                            </tr>
                            <tr>
                                <th class="center">Location: </th>
                                <td class="center"><?= $data->name; ?></td>
                            </tr>
                            <tr>
                                <th class="center">Room Type: </th>
                                <td class="center"><?= $data->title; ?></td>
                            </tr>
                            <tr>
                                <th class="center">Room Qty: </th>
                                <td class="center"><?= $data->room_type; ?></td>
                            </tr>
                            <tr>
                                <th class="center">Check In: </th>
                                <td class="center"><?= date('d M Y', strtotime($data->start_date)); ?></td>
                            </tr>
                            <tr>
                                <th class="center">Check Out: </th>
                                <td class="center"><?= date('d M Y', strtotime($data->end_date)); ?></td>
                            </tr>

                            <tr>
                                <th class="center">Adults: </th>
                                <td class="center"><?= $data->adults; ?></td>
                            </tr>
                            <tr>
                                <th class="center">Children: </th>
                                <td class="center"><?= $data->children; ?></td>
                            </tr>
                            
                           
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <!-- Panel Widget --> 
        </div>
        <!-- col-md-12 --> 
    </div>
</div>
<script>
    function printContent(el){
        // var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        // document.body.innerHTML = restorepage;
    }
</script>