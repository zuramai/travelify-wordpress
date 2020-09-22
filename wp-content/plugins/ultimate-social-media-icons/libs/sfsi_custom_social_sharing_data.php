<?php

function sfsi_social_media_metabox( $post ) { ?>
    <style>
    .sfsi_new_prmium_follw p {
        width: 90%;
        color: #1a1d20 !important;
        font-size: 17px !important;
        font-family: helveticaregular !important;
    }    
    .sfsi_new_prmium_follw {
        width: 97%;        
        margin-top: 8px;
        display: inline-block;
        background: #f3faf6;
        border: 1px solid #12a252;
        padding: 0px 25px 0px 15px;
        height: 63px;        
        clear: both;
        position: relative;
    }
    .sfsi_new_prmium_sharing p a {
        color: #12a252 !important;
        border-bottom: 1px solid #12a252;
        text-decoration: none;
    }
    .sfsi_new_prmium_follw p b {
        font-weight: bold;
        color: #1a1d20 !important;
    }
    .sfsi_hidenotice{
        cursor: pointer;
        float: right;
        position: absolute;
        right: 10px;
        top: 21px;
        color: grey;
        font-size: 13px;        
    }        
    </style>

    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('.sfsi_hidenotice').on('click',function(){
                var data = {
                    action:"update_sharing_settings",
                    sfsi_custom_social_hide:"yes"
                };
                jQuery.post(ajaxurl, data, function(response) {
                    if(response){
                        alert('Settings updated');
                        jQuery('#sfsi-social-media').remove();                        
                    }
                });                                
            });
        });
    </script>

    <div class="sfsi_new_prmium_follw"><p><b>New:</b> The Premium Plugin (Ultimate Social Media) allows you to define which picture, snippet text or tweet gets shared. <a href="https://www.ultimatelysocial.com/usm-premium/?utm_source=usmi_post_or_page&utm_campaign=define_pic_and_text&utm_medium=banner"target="_blank">See all features</a></p><a class="sfsi_hidenotice" href="javascript:void(0)">Hide this notice</a></div>

<?php }

 
function sfsi_icons_add_meta_boxes() {
    $screen            = get_current_screen(); 
    $option5           = unserialize(get_option('sfsi_section5_options',false));
    $hideSectionVal    = (isset($option5['sfsi_custom_social_hide'])) ? $option5['sfsi_custom_social_hide']: 'no'; 

    if($hideSectionVal=='no'){
        if(isset($screen->post_type) && ('page'==$screen->post_type || 'post'==$screen->post_type)){
            add_meta_box( 'sfsi-social-media', 'Ultimate Social Media – Sharing text & pictures', 'sfsi_social_media_metabox', $screen->post_type, 'normal', 'low' );
        }        
    }
}
add_action( 'add_meta_boxes', 'sfsi_icons_add_meta_boxes' );
?>