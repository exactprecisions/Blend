<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 4/15/2017
 * Time: 10:30 PM
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div>
        <label class="" for="s"><?php esc_html_e( 'Search', '_blend' ); ?></label>
        <input id="s" name="s" type="text"
               placeholder="<?php esc_attr_e( 'Search &hellip;', '_blend' ); ?>">
    </div>

	<input class="submit button" id="searchsubmit" name="submit" type="submit"
                   value="<?php esc_attr_e( 'Search', '_blend' ); ?>">
</form>