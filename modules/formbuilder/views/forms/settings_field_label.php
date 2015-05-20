<?php
/**
 * Intranet
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Rocket_form
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2015 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://www.rocket-form.com
 */
if (!defined('ABSPATH')) {exit('No direct script access allowed');}
?>
<div class="uiform-set-field-wrap" id="uiform-set-field-lbl-panel">
        
    <div class="uifm-set-section-label">
    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="uifm_fld_lbl_txt"><?php echo __('Label text','FRocket_admin'); ?></label>
                    <div class="input-group">
                        <input type="text"
                               data-field-store="label-text"
                               id="uifm_fld_lbl_txt"
                               name="uifm_fld_lbl_txt"
                               class="form-control uifm-f-setoption">
                        
                        <div class="input-group-btn">
                            <select data-field-store="label-size"
                                    id="uifm_fld_lbl_size"
                                    name="uifm_fld_lbl_size"
                                    data-live-search="true" 
                                    data-style="btn-primary" 
                                    class="selectpicker">
                                <optgroup label="Font size" data-max-options="2">
                                    <?php 
                                for ($i = 8; $i <= 48; $i++) {
                                ?>
                                <option value="<?php echo $i;?>"><?php echo $i.' px';?></option>
                                <?php    
                                }
                                ?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="input-group-btn">
                            <button data-field-store="label-bold"
                                    class="btn btn-warning uifm-f-setoption-btn"
                                    type="button">
                                <i class="fa fa-bold"></i>
                                <input type="hidden" id="uifm_fld_lbl_bold"
                                       name="uifm_fld_lbl_bold" value="0">
                            </button>
                            <button data-field-store="label-italic"
                                    class="btn btn-warning uifm-f-setoption-btn"
                                    type="button"><i class="fa fa-italic"></i>
                                <input type="hidden" id="uifm_fld_lbl_italic" name="uifm_fld_lbl_italic"  value="0">
                            </button>
                            <button  data-field-store="label-underline"
                                     class="btn btn-warning uifm-f-setoption-btn"
                                     type="button"><i class="fa fa-underline"></i>
                                <input type="hidden" id="uifm_fld_lbl_u" name="uifm_fld_lbl_u" value="0">
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                    <label ><?php echo __('Text Color','FRocket_admin'); ?> </label>
                    <div data-field-store="label-color" class="input-group uifm-custom-color">
                        <input 
                            type="text" 
                            value="" 
                            id="uifm_fld_lbl_color" 
                            name="uifm_fld_lbl_color" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
         <div class="col-sm-8">
                <div class="form-group">
                    <label ><?php echo __('Text Font','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="input-group uifm-custom-font">
                        <!--<input type="hidden"
                               value=""
                               id="uifm_fld_lbl_font"
                               name="uifm_fld_lbl_font">-->
                        <?php 
                        $attributes = array(
                            'name' => 'uifm_fld_lbl_font',
                            'id' => 'uifm_fld_lbl_font',
                            'data-field-store'=>'label-font'
                            );
                        $default_value = '{"family":"Arial, Helvetica, sans-serif","name":"Arial","classname":"arial"}';
                        ?>
                        <?php do_action( 'styles_font_menu',$attributes,$default_value); ?>
                        <span class="input-group-addon">
                        <input 
                            data-field-store="label-font_st"
                            id="uifm_fld_lbl_font_st"
                            name="uifm_fld_lbl_font_st"
                            class="uifm-f-setoption-st"
                            value="1"
                            type="checkbox">
                        </span>
                    </div>

                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Text Shadow','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="">
                        <div class="col-md-3">
                            <input class="switch-field"
                                   data-field-store="label-shadow_st"
                                   id="uifm_fld_lbl_sha_st"
                                   name="uifm_fld_lbl_sha_st"
                                   disabled="disabled"
                                   type="checkbox"/>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                   <label ><?php echo __('Color','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div  data-field-store="label-shadow_color"  class="input-group uifm-custom-color">
                                                <span class="input-group-addon"><i></i></span>
                                                <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>"
                                                        type="text"
                                                        value=""
                                                        id="uifm_fld_lbl_sha_co"
                                                        name="uifm_fld_lbl_sha_co"
                                                        class="form-control" />
                                            </div>
                                            
                                        </div>
                                    </div>
                            </div>
                            <div class="space20"></div>
                           <div class="row">
                                <div class="col-md-4">
                                   <label ><?php echo __('horizontal','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-8">
                                      <input type="text"
                                             data-field-store="label-shadow_x"
                                        id="uifm_fld_lbl_sha_x"
                                       name="uifm_fld_lbl_sha_x"      
                                        data-slider-step="1"
                                        data-slider-max="30"
                                        data-slider-min="0"
                                        data-slider-id="" class="uiform-opt-slider">
                                    </div>
                            </div>
                          <div class="space20"></div>
                            <div class="row">
                                <div class="col-md-4">
                                   <label ><?php echo __('vertical','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-8">
                                      <input type="text"
                                           data-field-store="label-shadow_y"  
                                             style="width:100%;"
                                        id="uifm_fld_lbl_sha_y"
                                        name="uifm_fld_lbl_sha_y"
                                        
                                        data-slider-step="1"
                                        data-slider-max="30"
                                        data-slider-min="0" data-slider-id="" class="uiform-opt-slider">
                                    </div>
                            </div>
                            <div class="space20"></div>
                            <div class="row">
                                <div class="col-md-4">
                                   <label ><?php echo __('blur','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-8">
                                      <input type="text"
                                        data-field-store="label-shadow_blur"     
                                             style="width:100%;"
                                        id="uifm_fld_lbl_sha_blur"
                                        name="uifm_fld_lbl_sha_blur"
                                        
                                        data-slider-step="1"
                                        data-slider-max="30"
                                        data-slider-min="0" data-slider-id="" class="uiform-opt-slider">
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
    </div>
    
    <div class="uifm-set-section-sublabel">
    <div class="space20"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Sub label','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="uifm_fld_lbl_txt"><?php echo __('Sublabel text','FRocket_admin'); ?></label>
                    <div class="input-group">
                        <input type="text"
                               data-field-store="sublabel-text"
                               id="uifm_fld_sublbl_txt"
                               name="uifm_fld_sublbl_txt"
                               class="form-control uifm-f-setoption">
                        <div class="input-group-btn">
                            <select 
                                data-field-store="sublabel-size"
                                id="uifm_fld_sublbl_size"
                                name="uifm_fld_sublbl_size"
                                data-live-search="true" data-style="btn-primary"
                                class="selectpicker uifm-f-setoption">
                                <optgroup label="Font size" data-max-options="2">
                                    <?php 
                                for ($i = 8; $i <= 48; $i++) {
                                ?>
                                <option value="<?php echo $i;?>"><?php echo $i.' px';?></option>
                                <?php    
                                }
                                ?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="input-group-btn">
                            <button 
                                    data-field-store="sublabel-bold"
                                    class="btn btn-warning uifm-f-setoption-btn"
                                    type="button">
                                <i class="fa fa-bold"></i>
                                <input type="hidden" 
                                       id="uifm_fld_sublbl_bold" 
                                       name="uifm_fld_sublbl_bold" value="0">
                            </button>
                            <button 
                                data-field-store="sublabel-italic"
                                class="btn btn-warning uifm-f-setoption-btn" 
                                type="button"><i class="fa fa-italic"></i>
                                <input type="hidden"
                                       id="uifm_fld_sublbl_italic" 
                                       name="uifm_fld_sublbl_italic"  value="0">
                            </button>
                            <button 
                                data-field-store="sublabel-underline"
                                class="btn btn-warning uifm-f-setoption-btn" 
                                type="button"><i class="fa fa-underline"></i>
                                <input type="hidden"
                                       id="uifm_fld_sublbl_u"
                                       name="uifm_fld_sublbl_u" value="0">
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                    <label ><?php echo __('Text Color','FRocket_admin'); ?> </label>
                    <div data-field-store="sublabel-color" 
                         class="input-group uifm-custom-color">
                        <input type="text" 
                               value="" 
                               id="uifm_fld_sublbl_color"
                               name="uifm_fld_sublbl_color" class="form-control" />
                        <span class="input-group-addon"><i></i></span>
                    </div>

                </div>
            </div>
         <div class="col-sm-8">
                <div class="form-group">
                    <label ><?php echo __('Text font','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="input-group uifm-custom-font">
                        <?php 
                        $attributes = array(
                            'name' => 'uifm_fld_sublbl_font',
                            'id' => 'uifm_fld_sublbl_font',
                            'data-field-store'=>'sublabel-font'
                            );
                        $default_value = '{"family":"Arial, Helvetica, sans-serif","name":"Arial","classname":"arial"}';
                        ?>
                        <?php do_action( 'styles_font_menu',$attributes,$default_value); ?>
                        <span class="input-group-addon">
                        <input 
                            data-field-store="sublabel-font_st"
                            id="uifm_fld_sublbl_font_st"
                            name="uifm_fld_sublbl_font_st"
                            class="uifm-f-setoption-st"
                            value="1"
                            type="checkbox">
                        </span>
                    </div>

                </div>
            </div>
        </div>
   <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                    <label ><?php echo __('Text shadow','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                    <div class="">
                        <div class="col-md-3">
                            <input class="switch-field"
                                   data-field-store="sublabel-shadow_st"
                                   id="uifm_fld_sublbl_sha_st"
                                   disabled="disabled"
                                   name="uifm_fld_sublbl_sha_st"
                                   type="checkbox"/>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                   <label ><?php echo __('Color','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <div  data-field-store="sublabel-shadow_color"  class="input-group uifm-custom-color">
                                                <span class="input-group-addon"><i></i></span>
                                                <input  placeholder="<?php echo __('Pick the color','FRocket_admin'); ?>"
                                                        type="text"
                                                        value=""
                                                        id="uifm_fld_sublbl_sha_co"
                                                        name="uifm_fld_sublbl_sha_co"
                                                        class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                           <div class="row">
                                <div class="col-md-4">
                                   <label ><?php echo __('x','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-8">
                                      <input type="text"
                                             data-field-store="sublabel-shadow_x"
                                        id="uifm_fld_sublbl_sha_x"
                                       name="uifm_fld_sublbl_sha_x"      
                                        
                                        data-slider-step="1"
                                        data-slider-max="30"
                                        data-slider-min="0"
                                        data-slider-id="" class="uiform-opt-slider">
                                    </div>
                            </div>
                            <div class="space20"></div>
                            <div class="row">
                                <div class="col-md-4">
                                   <label ><?php echo __('y','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-8">
                                      <input type="text"
                                           data-field-store="sublabel-shadow_y"  
                                             style="width:100%;"
                                        id="uifm_fld_sublbl_sha_y"
                                        name="uifm_fld_sublbl_sha_y"
                                        
                                        data-slider-step="1"
                                        data-slider-max="30"
                                        data-slider-min="0" data-slider-id="" class="uiform-opt-slider">
                                    </div>
                            </div>
                            <div class="space20"></div>
                            <div class="row">
                                <div class="col-md-4">
                                   <label ><?php echo __('blur','FRocket_admin'); ?> <span class="rkfm-express-lock-wrap"
                       data-toggle="tooltip" data-placement="right" 
                       data-original-title="<?php echo __('feature locked','FRocket_admin'); ?>"
                       ><i class="fa fa-lock"></i></span></label>
                                </div>
                                <div class="col-sm-8">
                                      <input type="text"
                                        data-field-store="sublabel-shadow_blur"     
                                             style="width:100%;"
                                        id="uifm_fld_sublbl_sha_blur"
                                        name="uifm_fld_sublbl_sha_blur"
                                        
                                        data-slider-step="1"
                                        data-slider-max="30"
                                        data-slider-min="0" data-slider-id="" class="uiform-opt-slider">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
    </div>
    
    <div class="uifm-set-section-blocktxt">
    <div class="row">
        <div class="col-md-12">
            <div class="divider2">
            <div class="mask"></div>
            <span><i><?php echo __('Text Block','FRocket_admin'); ?></i></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label ><?php echo __('Block position','FRocket_admin'); ?></label>
            <div class="controls form-group">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <label 
                        data-field-store="txt_block-block_pos"
                        data-toggle-enable="btn-primary"
                        data-toggle-disable="btn-primary"
                        data-settings-option="group-radiobutton"
                        class="btn btn-primary uifm-f-setoption-btn" >
                    <input type="radio"  
                           id="uifm_fld_lbl_blo_pos_1" 
                           name="uifm_fld_lbl_blo_pos"   
                           value="0"> <i class="fa fa-hand-o-left"></i><?php echo __('Left','FRocket_admin'); ?>
                    </label>
                    <label
                        data-field-store="txt_block-block_pos"
                        data-toggle-enable="btn-primary"
                        data-toggle-disable="btn-primary"
                        data-settings-option="group-radiobutton"
                        class="btn btn-primary uifm-f-setoption-btn" >
                    <input type="radio"  
                           id="uifm_fld_lbl_blo_pos_2" 
                           name="uifm_fld_lbl_blo_pos" 
                           value="1"> <i class="fa fa-hand-o-up"></i><?php echo __('Top','FRocket_admin'); ?>
                    </label>
                    <label 
                        data-field-store="txt_block-block_pos"
                        data-toggle-enable="btn-primary"
                        data-toggle-disable="btn-primary"
                        data-settings-option="group-radiobutton"
                        class="btn btn-primary uifm-f-setoption-btn" >
                    <input type="radio"  
                           id="uifm_fld_lbl_blo_pos_3" 
                           name="uifm_fld_lbl_blo_pos"  
                           value="2"> <i class="fa fa-hand-o-right"></i><?php echo __('Right','FRocket_admin'); ?>
                    </label>
                    <label 
                        data-field-store="txt_block-block_pos"
                        data-toggle-enable="btn-primary"
                        data-toggle-disable="btn-primary"
                        data-settings-option="group-radiobutton"
                        class="btn btn-primary uifm-f-setoption-btn" >
                    <input type="radio"  
                           id="uifm_fld_lbl_blo_pos_4" 
                           name="uifm_fld_lbl_blo_pos"  
                           value="3"> <i class="fa fa-hand-o-down"></i><?php echo __('Bottom','FRocket_admin'); ?>
                    </label>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label ><?php echo __('Show Block','FRocket_admin'); ?></label>
            <div class="controls form-group">
                <input class="switch-field"
                       data-field-store="txt_block-block_st"
                       name="uifm_fld_lbl_block_st"
                       id="uifm_fld_lbl_block_st"
                       type="checkbox" checked/>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label ><?php echo __('Block alignment','FRocket_admin'); ?></label>
            <div class="controls form-group">
                <div class="btn-group btn-group-justified" data-toggle="buttons">
                    <label 
                        data-field-store="txt_block-block_align"
                        data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success uifm-f-setoption-btn" >
                    <input type="radio"  id="uifm_fld_lbl_blo_align_1" name="uifm_fld_lbl_blo_align" value="0"> <i class="fa fa-align-left"></i> <?php echo __('Left','FRocket_admin'); ?>
                    </label>
                    <label 
                        data-field-store="txt_block-block_align"
                        data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success uifm-f-setoption-btn" >
                    <input type="radio"  id="uifm_fld_lbl_blo_align_2" name="uifm_fld_lbl_blo_align" value="1"> <i class="fa fa-align-center"></i> <?php echo __('Center','FRocket_admin'); ?>
                    </label>
                    <label 
                        data-field-store="txt_block-block_align"
                        data-toggle-enable="btn-success"
                        data-toggle-disable="btn-success"
                        data-settings-option="group-radiobutton"
                        class="btn btn-success uifm-f-setoption-btn" >
                    <input type="radio"  id="uifm_fld_lbl_blo_align_3" name="uifm_fld_lbl_blo_align" value="2"> <i class="fa fa-align-right"></i> <?php echo __('Right','FRocket_admin'); ?>
                    </label>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</div>