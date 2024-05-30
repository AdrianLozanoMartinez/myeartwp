<div class="misc-pub-section misc-pub-section-last"><span id="timestamp">


<?php 
$post_id = get_the_ID();
$post_status = get_post_status( $post_id );

if ( $post_status == 'publish' || $post_status == 'draft' || $post_status == 'pending' ) {
    ?>

<div id="app" class="mobilook-container">

<?php 
    //free only
    ?>

    <div class="mobilook-alert mobilook-success">
        <span class="closebtn">&times;</span> 
        <strong><?php 
    echo  sprintf( wp_kses( __( 'Check <a href="%s" target="_blank">HERE</a> why responsive Web design will change with foldable phones (flexible/dual screens) and why you should get your website prepared to it. Will your website support and look good on these new screens?', 'mobilook' ), array(
        'a' => array(
        'href'   => array(),
        'target' => array(),
    ),
    ) ), esc_url( 'https://crossbrowsertesting.com/blog/development/future-responsive-design-2019/' ) ) ;
    ?></strong>
    </div>

<?php 
    ?>
    
    <div class="mobilook-options">
        <div class="option" style="text-align: right">
            <label class="mobilook-select">
                <select class="field" @change="changeModel" v-model="device">

                    <?php 
    ?>
                        <option value="" disabled>Responsive</option>
                    <?php 
    ?>

                    <option value="galaxys9">Samsung Galaxy S9</option>
                    <option value="iphone678">iPhone 6/7/8</option>
                    <option value="pixel2">Google Pixel 2</option>
                    
                    <?php 
    ?>

                        <option value="" disabled>Galaxy FOLD (Dualscreen)</option>
                        <option value="" disabled>iPhone 6/7/8 plus</option>
                        <option value="" disabled>Samsung Galaxy S8 Plus</option>
                        <option value="" disabled>iPhone XS Max</option>
                        <option value="" disabled>Google Pixel 3 XL</option>
                        <option value="" disabled>Samsung Galaxy S8</option>
                        <option value="" disabled>Samsung Galaxy Note 9</option>
                        <option value="" disabled>iPhone X</option>
                        <option value="" disabled>iPad</option>
                        <option value="" disabled>iPad PRO</option>
                        <option value="" disabled>iPhone 5/SE</option>
                        <option value="" disabled>Samsung Galaxy S5</option>

                    <?php 
    ?>
                    
                </select>
            </label>
        </div>
        <div class="option">
            <div v-if="rotate">
                <input type="number" v-model="dims.width" :disabled="disabled == 1" :class="[disabled ? 'mobilook-disabled' : '', 'field']">
                <span>x</span>
                <input type="number" v-model="dims.height" :disabled="disabled == 1" :class="[disabled ? 'mobilook-disabled' : '', 'field']">
            </div>
            <div v-else>
                <input type="number" v-model="dims.height" :disabled="disabled == 1" :class="[disabled ? 'mobilook-disabled' : '', 'field']">
                <span>x</span>
                <input type="number" v-model="dims.width" :disabled="disabled == 1" :class="[disabled ? 'mobilook-disabled' : '', 'field']">
            </div>
        </div>
        <div class="option">
            <label class="mobilook-select">
                <select class="field" v-model="zoom">
                    <option value="50">50%</option>
                    <option value="75">75%</option>
                    <option value="100">100%</option>
                    <option value="125">125%</option>
                    <option value="150">150%</option>
                </select>
            </label>
        </div>
        <div class="option">
            <button class="field" @click.prevent="rotate = !rotate">Rotate</button>
        </div>
    </div>

    <div ref='main' :class="[ disabled ? '' : 'mobilook-resize']" :style="(rotate ? {width: dims.width + 'px', height: dims.height + 'px', margin: 'auto', zoom: zoom + '%'} : {width: dims.height + 'px', height: dims.width + 'px', margin: 'auto', zoom: zoom + '%'})">
        <iframe id="mobilook-iframe" src="<?php 
    echo  $post_link ;
    ?>" class="mobilook-iframe" scrolling="auto" frameborder="0" width="100%" height="100%"></iframe>
    </div>

    <div class="mobilook-test">

        <?php 
    ?>

            <a href="https://developers.facebook.com/tools/debug/sharing/?q=<?php 
    echo  urlencode( $post_link ) ;
    ?>" class="mobilook-test-btn" target="_blank">Facebook Debugger</a>

            <a class="mobilook-test-btn mobilook-disabled">Linkedin Debugger</a>

            <a class="mobilook-test-btn mobilook-disabled">Google Mobile Friendly Tool</a>

            <a class="mobilook-test-btn mobilook-disabled">Viewport Opt. (Mobile SEO)</a>

        <?php 
    ?>
    
    </div>
        
    <?php 
    //free only
    ?>
        <div class="mobilook-alert mobilook-info">
            <span class="closebtn">&times;</span> 
            <?php 
    echo  $get_pro . " " . __( 'debugger tools, 12 additional device formats and activate Mobilook on Woocommerce pages (products).', 'mobilook' ) ;
    ?>
        </div>
    <?php 
    ?>

</div>

<?php 
} else {
    ?>

<div class="mobilook-alert mobilook-danger" style="text-align: center"><strong><?php 
    echo  esc_html__( 'Please Save or Publish your post first to see the mobilook preview and other options', 'mobilook' ) ;
    ?></strong></div>

<?php 
}

?>

</div>