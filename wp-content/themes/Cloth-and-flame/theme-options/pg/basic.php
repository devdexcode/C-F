<fieldset>
    <legend>Common Settings</legend>
    
    <?php $field = new FormFields(); ?>
    <?php $field->wp_upl('theme_settings[favicon]', 'Upload favicon', $options['favicon'],'favicon', $desc, $css_class);?>

   <?php $field->text('theme_settings[phone]', 'Phone Number', $options['phone'], $req, $desc, $css_class); ?>  
    <?php $field->text('theme_settings[site_email]', 'Site Email', $options['site_email'], $req, $desc, $css_class); ?>  

    <?php $field->textarea('theme_settings[address]', 'Address', $options['address'], $req, $desc, $css_class); ?> 
    <?php $field->textarea('theme_settings[map]', 'Map', $options['map'], $req, $desc, $css_class); ?> 
    
    <hr/>
    
    <?php $field->textarea('theme_settings[site_desc]', 'Site Description', $options['site_desc'], $req, $desc, $css_class); ?>    
    <?php $field->textarea('theme_settings[author_desc]', 'Website Author Description', $options['author_desc'], $req, $desc, $css_class); ?>
    <hr/>   
    <?php $field->text('theme_settings[venu_link]', 'Venu Link', $options['venu_link'], $req, $desc, $css_class); ?>  
    <?php $field->text('theme_settings[upcoming_event_link]', 'Upcoming Event Link', $options['upcoming_event_link'], $req, $desc, $css_class); ?>  

</fieldset>