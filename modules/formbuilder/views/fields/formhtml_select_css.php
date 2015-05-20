<?php
ob_start();
?>
    #rockfm_<?php echo $id;?> .rockfm-input2-wrap .rockfm-inp2-opt-label{
        <?php 
        //input
        ?>
        <?php if($input2['size']){?>
            font-size:<?php echo $input2['size'];?>px;
        <?php } ?>
        <?php if(intval($input2['bold'])===1){?>
            font-weight: bold;
        <?php } ?>
        <?php if(intval($input2['italic'])===1){?>
            font-style:italic;
        <?php } ?>
        <?php if(intval($input2['underline'])===1){?>
            text-decoration:underline;
        <?php } ?>
        <?php if(!empty($input2['color'])){?>
            color:<?php echo $input2['color'];?>;
        <?php } ?>
        <?php if(isset($input2['font_st']) && intval($input2['font_st'])===1){?>
        <?php 
            $font_temp=json_decode($input2['font'],true);
            if(isset($font_temp['family'])){
        ?>    
            font-family:<?php echo $font_temp['family'];?>;
            <?php } ?>
        <?php } ?>
       
         
    }
   
   #rockfm_<?php echo $id;?> .rockfm-label{
    <?php
    //label
    ?>
   display:block;
   <?php if($label['size']){?>
            font-size:<?php echo $label['size'];?>px;
        <?php } ?>
        <?php if(intval($label['bold'])===1){?>
            font-weight: bold;
        <?php }else{ ?>
            font-weight: normal;
        <?php }?>    
        <?php if(intval($label['italic'])===1){?>
            font-style:italic;
        <?php } ?>
        <?php if(intval($label['underline'])===1){?>
            text-decoration:underline;
        <?php } ?>
        <?php if(!empty($label['color'])){?>
            color:<?php echo $label['color'];?>;
        <?php } ?>
        <?php if(isset($label['font_st']) && intval($label['font_st'])===1){?>
        <?php 
            $font_temp=json_decode($label['font'],true);
            if(isset($font_temp['family'])){
        ?>    
            font-family:<?php echo $font_temp['family'];?>;
           <?php } ?> 
        <?php } ?>
        <?php 
         //shadow
         if(isset($label['shadow_st']) 
                 && intval($label['shadow_st'])===1
                 && !empty($label['shadow_color'])
                 ){
                $x_tmp=$label['shadow_x'].'px';
                $y_tmp=$label['shadow_y'].'px';
                $blur_tmp=$label['shadow_blur'].'px';
                $color_tmp=$label['shadow_color'];
             ?>
                text-shadow: <?php echo $x_tmp.' '.$y_tmp.' '.$blur_tmp.' '.$color_tmp;?>;
            <?php
            
         }
         ?>    
   }
   
   #rockfm_<?php echo $id;?> .rockfm-sublabel{
    <?php
    //sublabel
    ?>
   <?php if($sublabel['size']){?>
            font-size:<?php echo $sublabel['size'];?>px;
        <?php } ?>
        <?php if(intval($sublabel['bold'])===1){?>
            font-weight: bold;
        <?php } ?>
        <?php if(intval($sublabel['italic'])===1){?>
            font-style:italic;
        <?php } ?>
        <?php if(intval($sublabel['underline'])===1){?>
            text-decoration:underline;
        <?php } ?>
        <?php if(!empty($sublabel['color'])){?>
            color:<?php echo $sublabel['color'];?>;
        <?php } ?>
        <?php if(isset($sublabel['font_st']) && intval($sublabel['font_st'])===1){?>
        <?php 
            $font_temp=json_decode($sublabel['font'],true);
            if(isset($font_temp['family'])){
        ?>    
            font-family:<?php echo $font_temp['family'];?>;
           <?php } ?> 
        <?php } ?>
        <?php 
         //shadow
         if(isset($sublabel['shadow_st']) 
                 && intval($sublabel['shadow_st'])===1
                 && !empty($sublabel['shadow_color'])
                 ){
                $x_tmp=$sublabel['shadow_x'].'px';
                $y_tmp=$sublabel['shadow_y'].'px';
                $blur_tmp=$sublabel['shadow_blur'].'px';
                $color_tmp=$sublabel['shadow_color'];
             ?>
                text-shadow: <?php echo $x_tmp.' '.$y_tmp.' '.$blur_tmp.' '.$color_tmp;?>;
            <?php
            
         }
         ?>    
   }
   #rockfm_<?php echo $id;?> .rockfm-control-label{
    <?php
    if(isset($txt_block['block_st']) && intval($txt_block['block_st'])===1){
             switch (intval($txt_block['block_align'])) {
                        case 1:
                            //center
                           ?>
                            text-align: center;
                           <?php
                            break;
                        case 2:
                            //right
                            ?>
                            text-align: right;
                           <?php
                            break;
                        case 0:
                        default:
                            //left
                            ?>
                            text-align: left;
                           <?php
                            break;
                    }
         ?>
         <?php } ?>
   }
   #rockfm_<?php echo $id;?> .rockfm-wrap-label{
        <?php
        if(intval($txt_block['block_st'])===0){
           ?>
            display:none;
           <?php 
        }
           ?>
   }
   #rockfm_<?php echo $id;?> .rockfm-help-block{
   <?php if(isset($help_block['font_st']) && intval($help_block['font_st'])===1){?>
        <?php 
            $font_temp=json_decode($help_block['font'],true);
            if(isset($font_temp['family'])){
        ?>    
            font-family:<?php echo $font_temp['family'];?>;
           <?php } ?> 
        <?php } ?>
   }
   /*popover custom*/
   .popover_<?php echo $id;?> { 
        <?php if(!empty($validate['tip_bg'])){?>
            background:<?php echo $validate['tip_bg'];?>!important;
        <?php } ?>
        <?php if(!empty($validate['tip_col'])){?>
            color:<?php echo $validate['tip_col'];?>;
        <?php } ?>
        
   } 
   .popover_<?php echo $id;?> .popover-arrow:after{
        <?php if(!empty($validate['tip_bg'])){?>
            border-top-color:<?php echo $validate['tip_bg'];?>!important;
        <?php } ?>
   }
<?php
$cntACmp = ob_get_contents();
$cntACmp = str_replace("\n", '', $cntACmp);
$cntACmp = str_replace("\t", '', $cntACmp);
$cntACmp = str_replace("\r", '', $cntACmp);
$cntACmp = str_replace("//-->", ' ', $cntACmp);
$cntACmp = str_replace("//<!--", ' ', $cntACmp);
@$cntACmp = eregi_replace("[[:space:]]+", " ", $cntACmp);
ob_end_clean();
echo $cntACmp;
?>