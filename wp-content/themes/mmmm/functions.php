<?php

/**
 * Load header template.
 *
 * Includes the header template for a theme or if a name is specified then a
 * specialised header will be included.
 *
 * For the parameter, if the file is called "header-special.php" then specify
 * "special".
 *
 * @since 1.5.0
 *
 * @param string $name The name of the specialised header.
 */
function mmm_get_header( $name = null ) {
    /**
     * Fires before the header template file is loaded.
     *
     * The hook allows a specific header template file to be used in place of the
     * default header template file. If your file is called header-new.php,
     * you would specify the filename in the hook as get_header( 'new' ).
     *
     * @since 2.1.0
     * @since 2.8.0 $name parameter added.
     *
     * @param string|null $name Name of the specific header file to use. null for the default header.
     */
    do_action( 'get_header', $name );

    $templates = array();
    $name = (string) $name;
    if ( '' !== $name ) {
        $templates[] = "/layout/header-{$name}.php";
    }

    $templates[] = '/layout/header.php';

    locate_template( $templates, true );
}

/**
 * Load footer template.
 *
 * Includes the footer template for a theme or if a name is specified then a
 * specialised footer will be included.
 *
 * For the parameter, if the file is called "footer-special.php" then specify
 * "special".
 *
 * @since 1.5.0
 *
 * @param string $name The name of the specialised footer.
 */
function mmm_get_footer( $name = null ) {
    /**
     * Fires before the footer template file is loaded.
     *
     * The hook allows a specific footer template file to be used in place of the
     * default footer template file. If your file is called footer-new.php,
     * you would specify the filename in the hook as get_footer( 'new' ).
     *
     * @since 2.1.0
     * @since 2.8.0 $name parameter added.
     *
     * @param string|null $name Name of the specific footer file to use. null for the default footer.
     */
    do_action( 'get_footer', $name );

    $templates = array();
    $name = (string) $name;
    if ( '' !== $name ) {
        $templates[] = "/layout/footer-{$name}.php";
    }

    $templates[]    = '/layout/footer.php';

    locate_template( $templates, true );
}

/**
 * Load sidebar template.
 *
 * Includes the footer template for a theme or if a name is specified then a
 * specialised footer will be included.
 *
 * For the parameter, if the file is called "sidebar-special.php" then specify
 * "special".
 *
 * @since 1.5.0
 *
 * @param string $name The name of the specialised footer.
 */
function mmm_get_sidebar( $name = null ) {
    /**
     * Fires before the footer template file is loaded.
     *
     * The hook allows a specific footer template file to be used in place of the
     * default footer template file. If your file is called footer-new.php,
     * you would specify the filename in the hook as get_footer( 'new' ).
     *
     * @since 2.1.0
     * @since 2.8.0 $name parameter added.
     *
     * @param string|null $name Name of the specific footer file to use. null for the default footer.
     */
    do_action( 'get_footer', $name );

    $templates = array();
    $name = (string) $name;
    if ( '' !== $name ) {
        $templates[] = "/layout/sidebar-{$name}.php";
    }

    $templates[]    = '/layout/sidebar.php';

    locate_template( $templates, true );
}

?>