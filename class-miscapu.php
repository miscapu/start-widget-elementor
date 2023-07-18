<?php
if ( !defined( 'ABSPATH' ) ){
    exit();
}

final class Miscapu
{
    const VERSION                       =   '1.0.0';
    const MINIMUM_ELEMENTOR_VERSION     =   '2.0.0';
    const MINIMUM_PHP_VERSION           =   '7.0';

    private static $_instance           =   null;

    public static function instance(){
        if ( is_null( self::$_instance ) ){
            self::$_instance    =    new self();
        }
        return self::$_instance;
    }

    public function __construct()
    {
        add_action( 'init', [ $this, 'i18n' ] );
        add_action( 'plugins_loaded', [ $this, 'init' ] );
        add_action( 'elementor/widgets/register', [ $this, 'register_hello_world_widget' ] );
    }


    public function i18n()
    {
        load_plugin_textdomain( 'miscapu' );
    }

    public function init()
    {
        if ( ! did_action( 'elementor/loaded' ) ){
            add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
            return;
        }

        if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) )
        {
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ]  );
            return;
        }

        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ){
            add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
            return;
        }

    }


    /**
     * Admin notices
     */
    public function admin_notice_missing_main_plugin()
    {
        if ( isset( $_GET[ 'activate' ] ) ){
            deactivate_plugins( plugin_basename( MISCAPU ) );
        }

        $message    =   sprintf(
            esc_html__( 'Plugin "%1$s" requires "%2$s" for worked.', 'miscapu' ),
            '<strong>'.esc_html__( 'MiSCapu', 'miscapu' ).'<strong>',
            '<strong>'.esc_html__( 'Elementor Plugin', 'miscapu' ).'</strong>'
        );

        printf( '<div class="notice notice-error is-dismissible"><p>%1$s</p></div>', $message );
    }


    public function admin_notice_minimum_elementor_version()
    {
        if ( isset( $_GET[ 'activate' ] ) ){
            deactivate_plugins( plugin_basename( MISCAPU ) );
        }

        $message    =   sprintf(
            esc_html__( '"%1$s" requires "%2$s" version %3$s or greater', 'miscapu' ),
            '<strong>'.esc_html__( 'MiSCapu Plugin', 'miscapu' ).'</strong>',
            '<strong>'.esc_html__( 'Elementor', 'miscapu' ).'</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );

        printf( '<div class="notice notice-error is-dismissible"><p>%1$s</p></div>', $message );
    }


    public function admin_notice_minimum_php_version()
    {
        if ( isset( $_GET[ 'activate' ] ) ){
            deactivate_plugins( plugin_basename( MISCAPU ) );
        }

        $message    =   sprintf(
            esc_html__( '"%1$s" requires "%2$s" version %3$s or greater', 'miscapu' ),
            '<strong>'.esc_html__( 'Miscapu Plugin', 'miscapu' ).'</strong>',
            '<strong>'.esc_html__( 'PHP', 'miscapu' ).'</strong>',
            self::MINIMUM_PHP_VERSION
        );
        printf( '<div class="notice notice-error is-dismissible"><p>%1$s</p></div>', $message );
    }


    public function register_hello_world_widget( $widgets_manager ){
        require_once __DIR__.'/widgets/hello-world-widget.php';
        require_once __DIR__.'/widgets/cta-widget.php';

        $widgets_manager->register( new \Elementor_Hello_World_Widget() );
        $widgets_manager->register( new \Elementor_Cta_Widget());
    }
}

Miscapu::instance();