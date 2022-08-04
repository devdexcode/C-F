<?php /* Template Name: Contact*/ global $options;?>
<?php get_header();?> 
<style>input[type='email'] {  width: 100%;  padding: 12px;  border: 1px solid #ccc;  margin-top: 0px;  margin-bottom: 16px;  resize: vertical;}input[type='submit']{float:right;}textarea{height:190px;}.screen-reader-response { display: none;}span.wpcf7-not-valid-tip, .wpcf7-response-output {color: #D00;}</style>
<section id="section25" style="background-color: #221E15;">
        <div class="container">
            <div class="event">
                <?php the_field('subheading');?>
            </div>

            <?php the_content();?>
        </div>
        <section id="iner-frame-sec">
            <div class="container">
                <div class="inquiry">
                <dvi class="event-title">
                    Inquiry Form
                </dvi>
            </div>
          <?php $form_id = get_field('form');
          echo do_shortcode('[contact-form-7 id="'.$form_id.'"]');
          ?>
            </div>
            <div class="row roooow">
                <div class="col-md-6"></div>

                <div class="col-md-6">
                    <hr class="hr-tag">
                    <div class="least-title">
                        MEDIA INQUIRIES
                    </div>
                    <div class="mail-section">
                        <?php echo $options['site_email'];?>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php $img = get_template_directory_uri().'/images/edit.png'; $edit = "<img title='Edit this page' src='".$img."'>"; edit_post_link($edit, '');?>
    <?php get_footer();?> 