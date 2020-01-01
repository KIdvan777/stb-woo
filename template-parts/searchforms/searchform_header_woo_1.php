<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<div class="searchform_header_woo_1 flex">
    <form role="search" method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="search_container flex">
            <input type="search" id="search_input" class="search_input" name="s"
                   value="<?php the_search_query(); ?>"
                   placeholder="<?php _e( 'Найти', 'stb' ); ?>"/>

            <button type="submit" class="">
                <i class="fas fa-search" aria-hidden="true"></i>
            </button>
        </div>
    </form>

</div>
