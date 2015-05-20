<?php
if (!defined('ABSPATH')) {exit('No direct script access allowed');}
?>
<!-- Modal -->
<div class="modal fade" id="uifm_modal_msg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title"></h4>

            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" 
                        class="btn btn-default"
                        data-dismiss="modal"><?php echo __('Accept','FRocket_admin'); ?></button>
                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div style="display:none;" class="uifm_modal_caption">
    <input type="hidden" value="<?php echo __('Tour guide info','FRocket_admin'); ?>" id="uifm_guidetour_popup_title">
    <input type="hidden" value="<?php echo __('there is not tour guide for this page. press the accept button','FRocket_admin'); ?>" id="uifm_guidetour_popup_notfound">
    <input type="hidden" value="<?php echo __('Success! Updated successfully','FRocket_admin'); ?>" id="uifm_globalopt_success">
    <input type="hidden" value="<?php echo __('Form was created','FRocket_admin'); ?>" id="uifm_newform_popup_success">
    <input type="hidden" value="<?php echo __('Success! The form was created. Now just copy and paste the shortcode to your content','FRocket_admin'); ?>" id="uifm_newform_popup_success_cont">
</div>
