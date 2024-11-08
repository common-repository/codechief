<?php 

/**
 * @package  codechief
 */

namespace Base\Enqueue;

class LoadFrontendAndAdminScript
{   

    public function __construct() {

    /**
      *--------------------------------------------------------------------
      * Run this hook When the class is instantiate
      *--------------------------------------------------------------------
      */

	 add_action(
	 	'admin_enqueue_scripts',
	 	array( $this,'codechief_backend_register_styles')
	 );

    /**
      *--------------------------------------------------------------------
      * Run this hook When the class is instantiate
      *--------------------------------------------------------------------
      */
    
	 add_action( 
	 	'wp_enqueue_scripts', 
	 	array( $this,'codechief_frontend_register_styles' )
	 );
	 
	}
	
      /** 
        * Loading all plugin assets
        *
        * @return null
        */

	function codechief_backend_register_styles() {

		wp_enqueue_style( 'ccstyle', CODECHIEF_PLUGIN_URL . 'assets/css/mystyle.css' );

		wp_enqueue_script( 'ccscript', CODECHIEF_PLUGIN_URL . 'assets/js/myscript.js', false, true);

		wp_enqueue_script( 'custom', CODECHIEF_PLUGIN_URL . 'assets/js/custom.js', false, true);

		wp_enqueue_style( 'wp-color-picker' );

        wp_enqueue_script( 'wp-color-picker');

		wp_enqueue_script( 'cccolor-picker', CODECHIEF_PLUGIN_URL .'assets/js/color.js', array( 'wp-color-picker' ), false, true );
		
	}

	public function codechief_frontend_register_styles()
	{
		wp_enqueue_style( 'cc-frontend-style', CODECHIEF_PLUGIN_URL . 'assets/css/ccstyle.css', CODECHIEF_VERSION );

		wp_enqueue_style( 'ccfonticon', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        wp_enqueue_script( 'ccfront');

		wp_enqueue_script('ccfront', CODECHIEF_PLUGIN_URL . 'assets/js/front.js', array( 'jquery' ) , CODECHIEF_VERSION, true);

		wp_enqueue_script('cctinymce', CODECHIEF_PLUGIN_URL . 'assets/js/tiny.js', array( 'jquery' ) , CODECHIEF_VERSION, true);

        wp_localize_script('ccfront', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	}
}
