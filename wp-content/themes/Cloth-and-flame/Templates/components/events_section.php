<?php $enable = get_sub_field('enable');?>
<?php $the_link = get_sub_field('additional_link');?>
<?php if (!empty($enable)): ?>
<style>.card-header a{font-family: 'Canela';font-style: normal;font-weight: 400;font-size: 23px;line-height: 23px;letter-spacing: 0.02em;color: #221E15;}.feat_img_cont{max-height: 160px !important;overflow: hidden;display: block;}.hidden{display:none !important;}</style>
<section id="sec-heading" style="background-color: #EEE8E0;" data-id="events_section" class="events_section">
        <div class="container" id="events_section">
            <h1><span>Upcoming Events</span></h1>
            <div class="row for-line">

                <div class="col-lg-4 col-md-2 col-12"></div>
                <div class="col-lg-4 col-md-5 col-5">
                    <div class="d-flex justify-content-center">
                        <div class="smtitle1 mr-md-5 mr-2"><a href="?show=past#events_section" class="link-color">PAST</a></div>
                        <div class="smtitle2 ml-md-5 ml-2"><a href="?show=future#events_section" class="link-color">FUTURE</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col">
                    <div class="d-flex justify-content-end align-items: baseline">
                        <div class="smtitle">SORT BY</div>

                         <div class="dropdown d-flex">
                             <?php $dd_filters = array(
                                 'LATEST FIRST'=>'latest',
                                 'ACENDING ORDER'=>'asc',
                                 'DESCENDING ORDER'=>'desc',
                             );?>
                            <a class="button dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                <?php echo (isset($_GET['show']) && in_array($_GET['show'], $dd_filters)) ? ($_GET['show'] == 'asc' ? 'ASCENDING':($_GET['show'] == 'desc'?'DESCENDING':'LATEST')):'FILTER';?>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                             <?php foreach ($dd_filters as $key => $value) {?>
                                 <a class="dropdown-item acending-order" href="?show=<?=$value?>#events_section"> <?=$key?></a>
                             <?php }?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <section id="cards-with-body">
                <div class="">
                    <div class="row div_response" id="div_response">

                        <?php load_events($_GET['show']);?> 

                    </div>

                </div>
            </section>

            <div class="row">
                <?php if($_GET['show'] != 'all'):?><div class="col-md-6 col-sm-6 col">
                    <div class="two-buttons text-right">
                    <a class="button-2" href="?show=all#events_section">
                        LOAD MORE
                    </a>
                    </div>
                </div><?php endif;?>
                <?php if($_GET['show'] == 'all'):?><div class="col-md-4 col-sm-4 col"></div><?php endif;?>
                <div class="<?php echo ($_GET['show'] == 'all')?'col-md-4 col-sm-4 col text-center':'col-md-6 col-sm-6 col';?>">
                    <?php if(!empty($the_link)):?>
                    <div class="two-buttons">
                        <a class="button-1" href="<?php echo esc_url($the_link['url']); ?>" target="<?php echo esc_attr($the_link['target']); ?>">
                            <?php echo $the_link['title']; ?>
                        </a>
                    </div>
                    <?php endif;?>
                </div>
                <?php if($_GET['show'] == 'all'):?><div class="col-md-4 col-sm-4 col"></div><?php endif;?>
            </div>
        </div>

    </section>

    <?php endif;?>