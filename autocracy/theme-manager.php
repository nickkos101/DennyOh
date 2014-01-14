<?php
/* Creates the Theme Options Page */

function main_theme_options_do_page() {
    wp_enqueue_style( 'style-name', get_template_directory_uri().'/autocracy/admin.css' );
    wp_enqueue_style( 'style-font', 'http://fonts.googleapis.com/css?family=Rokkitt' );
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Theme Manager', 'sampletheme') . "</h2>";
        ?>
        <?php if (false !== $_REQUEST['settings-updated']) : ?>
        <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?>

    <form method="post" action="options.php">
        <?php
        settings_fields('main_options');
        $optionname= 'main_theme_options';
        $mainoptions = get_option($options);
        ?>
        <div class="module-fullwidth">
            <h2>Homepage Content</h2>
            <label>Icon Label Left</label>
            <?php autoc_def_textfield($optionname, 'icon1label'); ?>
            Link:
            <?php autoc_def_textfield($optionname, 'icon1labelnk'); ?>
            <label>Icon Label Middle</label>
            <?php autoc_def_textfield($optionname, 'icon2label'); ?>
            Link:
            <?php autoc_def_textfield($optionname, 'icon2labelnk'); ?>
            <label>Icon Label Right</label>
            <?php autoc_def_textfield($optionname, 'icon3label'); ?>
            Link:
            <?php autoc_def_textfield($optionname, 'icon3labelnk'); ?>
        </div>
        <h2>Contact Information</h2>
        <label>Address</label>
        <?php autoc_def_textfield($optionname, 'address'); ?>
        <label>Phone</label>
        <?php autoc_def_textfield($optionname, 'phone'); ?>
        <label>Mobile</label>
        <?php autoc_def_textfield($optionname, 'mobile'); ?>
        <label>Contact Email</label>
        <?php autoc_def_textfield($optionname, 'email'); ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
        </p>
    </form>

</div>
<?php
}

function main_theme_options_validate($input) {
    global $select_options, $radio_options;
    // Our checkbox value is either 0 or 1
    if (!isset($input['option1']))
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses($input['sometext']);
    // Our select option must actually be in our array of select options
    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses($input['sometextarea']);
    return $input;
}
?>