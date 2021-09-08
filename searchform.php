<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package bulmascores
 */

?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="hds-search-input">
        <label for="example" class="hds-search-input__label"></label>
        <div class="hds-search-input__input-wrapper">
            <input
            id="s"
            class="hds-search-input__input"
            type="text"
            name="s"
            />
            <div class="hds-search-input__buttons">
              <button
              type="button"
              aria-label="Search"
              class="hds-search-input__button"
              >
              <i class="hds-icon hds-icon--search hds-icon--size-s" aria-hidden="true"></i>
          </div>
      </div>
  </div>
</form>


<!--     <div class="field has-addons">
        <div class="control">
            <input class="input" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;' ); ?>" id="s" name="s" >
        </div>
        <div class="control">
            <button type="submit" class="button is-info" name="submit">
                Search
            </button>
        </div>
    </div> -->