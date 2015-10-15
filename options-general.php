<div class="general">
    <form method="post" action="">
        <div class="postbox">
        <h3 class="hndle"><?php _e('Cache Mode','super_static_cache')?></h3>
            <div class="inside">
                <?php _e('<p>Direct Mode Will Save the Cache file directly in your Webserver, it\'s the most resource saving cache mode, but it\'s difficult to management the cache files. </p>','super_static_cache');?>
                <?php _e('<p>PHP Mode Save the Cache file in a Special directory, It\'s more convenient for you to manage the cache, but this mode still need your databases server, if you mysql server down, the mode will not work. </p>','super_static_cache');?>
                <?php _e('<p>Rewrite Mode is the recommended cache mode, like PHP Mode, all cache files are saved into a Special Directory, you need to update a rewrite rule to enable this mode.</p>','super_static_cache');?>
    <input type="radio" name="super_static_cache_mode" value="close" <?php  theselected('super_static_cache_mode','close');?>><label><?php _e('close','super_static_cache');?></label>
                <input type="radio" name="super_static_cache_mode" value="direct" <?php  theselected('super_static_cache_mode','direct');?>><label><?php _e('Direct Mode','super_static_cache');?></label>
                <input type="radio" name="super_static_cache_mode" value="phprewrite" <?php theselected('super_static_cache_mode','phprewrite');?>><label><?php _e('PHP Mode','super_static_cache');?></label>
                <input type="radio" name="super_static_cache_mode" value="serverrewrite" <?php theselected('super_static_cache_mode','serverrewrite');?>><label><?php _e('Rewrite Mode (Recommend)','super_static_cache');?></label>

                <div class="updaterewrite" <?php if(get_option('super_static_cache_mode')=='serverrewrite' && !is_rewrite_ok()){echo 'style="display:block"';}?>>
                    <span><?php _e('Please Add This Rewrite Rules to your webserver:','super_static_cache');?></span>
                    <pre><?php echo showrewriterule();?></pre>
                </div>

            </div>
        </div>
        <div class="postbox">
            <h3 class="hndle"><?php _e('Enable Strict Cache Mode','super_static_cache');?></h3>
            <div class="inside">
                <?php _e('<p>Only for Direct Mode, if your enable this function, url like <em>http://www.example.com/123</em> will be cached, it may be cause some error.</p>','super_static_cache')?>
                <input type="radio" name="super_static_cache_strict" value="true" <?php theselected('super_static_cache_strict',true);?>><label><?php _e('on','super_static_cache');?></label>
                <input type="radio" name="super_static_cache_strict" value="false" <?php theselected('super_static_cache_strict',false);?>><label><?php _e('off','super_static_cache');?></label>
            </div>
        </div>
        <div class="postbox">
            <h3 class="hndle"><?php _e('No Cache Page','super_static_cache');?></h3>
            <div class="inside">
                <?php _e('<p>The following page which is selected will not be cached</p>','super_static_cache');?>
                <div><label><?php _e('Home','super_static_cache');?></label><input type="checkbox" name="super_static_cache_excet[]" value="home" <?php theselected('super_static_cache_excet','home');?>></div>
                <div><label><?php _e('Single','super_static_cache');?></label><input type="checkbox" name="super_static_cache_excet[]" value="single" <?php theselected('super_static_cache_excet','single');?>></div>
                <div><label><?php _e('Page','super_static_cache');?></label><input type="checkbox" name="super_static_cache_excet[]" value="page" <?php theselected('super_static_cache_excet','page');?>></div>
                <div><label><?php _e('Category','super_static_cache');?></label><input type="checkbox" name="super_static_cache_excet[]" value="category" <?php theselected('super_static_cache_excet','category');?>></div>
                <div><label><?php _e('Tag','super_static_cache');?></label><input type="checkbox" name="super_static_cache_excet[]" value="tag" <?php theselected('super_static_cache_excet','tag');?>></div>
                <div><label><?php _e('Author','super_static_cache');?></label><input type="checkbox" name="super_static_cache_excet[]" value="author" <?php theselected('super_static_cache_excet','author');?>></div>
                <div><label><?php _e('Date','super_static_cache');?></label><input type="checkbox" name="super_static_cache_excet[]" value="date" <?php theselected('super_static_cache_excet','date');?>></div>
                <div><label><?php _e('Attachment','super_static_cache');?></label><input type="checkbox" name="super_static_cache_excet[]" value="attachment" <?php theselected('super_static_cache_excet','attachment');?>></div>
            </div>
        </div>
        <input type="submit" class="button-primary" value="<?php _e('Save 禄','super_static_cache')?>"><br/><br/>
    <form>
</div>
