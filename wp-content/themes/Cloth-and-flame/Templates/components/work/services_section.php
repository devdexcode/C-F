<?php $the_service = get_sub_field('the_service');?>
<?php if (!empty($the_service) ): ?>
<section id="brand-action" style="background-color: #F4F7F4; padding-bottom:0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="parent">
                        <div class="small-title1">SERVICES</div>
                        <div class="link"><?php $x = 1;?>  
                            <?php foreach($the_service as $single):?>
        <a class="tab-target" data-target="<?=str_replace(' ', '-', $single['heading']);?>" href="JavaScript:void(0);"><?=$single['heading'];?><svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32" fill="none" class="svv"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.875 16C1.875 15.7347 1.97377 15.4804 2.14959 15.2929C2.3254 15.1053 2.56386 15 2.8125 15L24.9244 15L19.0238 8.70796C18.8477 8.52018 18.7488 8.26551 18.7488 7.99996C18.7488 7.73441 18.8477 7.47973 19.0238 7.29196C19.1998 7.10418 19.4385 6.99869 19.6875 6.99869C19.9365 6.99869 20.1752 7.10418 20.3513 7.29196L27.8513 15.292C27.9386 15.3848 28.0078 15.4952 28.0551 15.6167C28.1024 15.7382 28.1267 15.8684 28.1267 16C28.1267 16.1315 28.1024 16.2617 28.0551 16.3832C28.0078 16.5047 27.9386 16.6151 27.8513 16.708L20.3513 24.708C20.1752 24.8957 19.9365 25.0012 19.6875 25.0012C19.4385 25.0012 19.1998 24.8957 19.0238 24.708C18.8477 24.5202 18.7488 24.2655 18.7488 24C18.7488 23.7344 18.8477 23.4797 19.0238 23.292L24.9244 17L2.8125 17C2.56386 17 2.3254 16.8946 2.14959 16.7071C1.97377 16.5195 1.875 16.2652 1.875 16V16Z" fill="#AF663F"/></svg></a><br>
            <?php $n++;?><?php endforeach;?>    
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                <?php $n = 1;?>    
         <?php foreach($the_service as $single):?>
         <div class="tab-content" id="<?=str_replace(' ', '-', $single['heading']);?>" data-pos="<?=$n;?>" <?=($n != 1)?'style="display:none;"':'';?>><?=$single['description']; ?></div>
         <?php $n++;?>
                <?php endforeach;?> 
                </div>
            </div>
            <!-- <div class="imalast">
                <center><img src="images/Rectangle 116.png" class="imglast" alt="..."></center>
            </div> -->
        </div>
    </section>
    <script>
    (function ($) {
        $(document).ready(function() {	

            $('.tab-target').on('click',function(){
                let target= $(this).data('target');
                $('.tab-content').hide();
                $('#'+target).show();
            });

        });
    })(jQuery);
    </script>   
    <?php endif;?>