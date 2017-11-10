<form role="search" class="search-form" action="<?php echo esc_url(home_url('/'));?>">
  <div>
    <label class="sr-only"><?php _e("Search for","alchem");?>:</label>
      <input type="text" name="s" id="s" value="" placeholder="<?php _e("Search...","alchem");?>">
        <button type="submit">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      <!-- <input type="submit" value=""> -->
    </div>
  </form>
