<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<div class="container search_form_header_1">
    <div class="row">
        <div class="col-md-12  ">
            <div class="search_form_overlay_container">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="input-group">
                        <input type="search" id="search_input" class="search_input form-control" name="s"
                               value="<?php the_search_query(); ?>"
                               placeholder="<?php _e( 'Найти', 'stb' ); ?>"/>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                        <span class="search_form_vissible_close_icon">
                            <i class="fas fa-window-close " aria-hidden="true"></i>
                        </span>
                    </div>
                </form>
                <div class="search_form_overlay__results">

                </div>
            </div>

        </div>
    </div>
</div>
<div class="new_result">

</div>
