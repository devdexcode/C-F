<?php $heading = get_sub_field('heading');?>
<?php $text = get_sub_field('text');?>
<?php $the_form = get_sub_field('the_form');?>
<?php if (!empty($heading) || !empty($text) || !empty($the_form)): ?>
<style>#text-farm input[type="email"]{  width: 100%;  padding: 12px;  border: 1px solid #ccc;  border-radius: 0px;  box-sizing: border-box;  margin-top: 6px;  margin-bottom: 16px;  resize: vertical;}
#text-farm .wpcf7-form-control.has-spinner.wpcf7-submit {  background: transparent;  color: #CDCDCD;  padding: 12px 20px;  border: none;  float: right;  cursor: pointer;position: relative;right: 13px;}
#text-farm textarea { max-height: 200px;resize: none;}.screen-reader-response, .wpcf7-response-output {  display: none;}
.wpcf7-form.init {  position: relative;}
.arrow_img{position: absolute;  top: 101.4%;  right: 15%;}
.wpcf7-not-valid-tip {  color: #D00;float: left;} 
</style>
<section id="text-farm" data-id="contact_form_section_1" class="contact_form_section_1">
            <div class="container" style="background-color: white; padding: 0px;">
                <div class="row">
                    <div class="col-md-6" style="background-color: #F4F7F4;">
                        <h1><?php echo $heading; ?></h1>
                        <p><?php echo $text; ?></p>
                    </div>
                    <div class="col-md-6" style="padding:25px 30px;">
                        <div class="form">

                            <div class="container">
 <?php echo do_shortcode('[contact-form-7 id="'.$the_form.'"]');?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<script>
    (function ($) {
 $(document).ready(function() {	
	$('#text-farm .wpcf7-form-control.has-spinner.wpcf7-submit').after('<img class="arrow_img" src="<?=get_template_directory_uri()?>/images/arrow.svg">');
 });
})(jQuery);
</script>        
        <?php endif;?>