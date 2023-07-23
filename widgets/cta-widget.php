<?php
/**
 * Widget CTA
 *
 * @package Miscapu
 * @since 1.0.0
 * @author Miscapu
 */

class Elementor_Cta_Widget extends \Elementor\Widget_Base
{

    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);

        wp_register_style( 'bootstrap-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/bootstrap.min.css', [], '5.2' );
        wp_register_style( 'animate-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/animate.min.css', [], '5.2' );
        wp_register_style( 'fontawesome-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/fontawesome.min.css', [], '5.2' );
        wp_register_style( 'awesome-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/line-awesome.min.css', [], '5.2' );
        wp_register_style( 'redias-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/redias-icons.css', [], '5.2' );
        wp_register_style( 'odometer-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/odometer.min.css', [], '5.2' );
        wp_register_style( 'venobox-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/venobox.min.css', [], '5.2' );
        wp_register_style( 'keyframe-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/keyframe-animation.css', [], '5.2' );
        wp_register_style( 'swiper-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/swiper.min.css', [], '5.2' );
        wp_register_style( 'main-miscapu-css', plugin_dir_url( __DIR__ ).'/assets/css/main.css', [], '5.2' );

        wp_register_script( 'jquary-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/jquary-3.6.0.min.js', [ 'jquery' ], '3.6', true );
        wp_register_script( 'respond-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', [ 'jquery' ], '3.6', true );
        wp_register_script( 'modernizr-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', [ 'jquery' ], '2.8.3', true );
        wp_register_script( 'jquery-ajax-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/jquery.ajaxchimp.min.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'bootstrap-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/bootstrap.min.js', [ 'jquery' ], '5.2', true );
        wp_register_script( 'popper-bootstrap-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/popper.min.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'odometer-bootstrap-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/odometer.min.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'waypoints-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/waypoints.min.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'venobox-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/venobox.min.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'swiper-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/swiper.min.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'smoth-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/smooth-scroll.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'chart-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/chart.min.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'wow-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/vendor/wow.min.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'quote-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/quote.js', [ 'jquery' ], '1.0', true );
        wp_register_script( 'main-miscapu-js', plugin_dir_url( __DIR__ ). '/assets/js/main.js', [ 'jquery' ], '1.0', true );

    }

    public function get_script_depends()
    {
        return [
            'jquary-miscapu-js',
            'respond-miscapu-js',
            'modernizr-miscapu-js',
            'jquery-ajax-miscapu-js',
            'bootstrap-miscapu-js',
            'popper-bootstrap-miscapu-js',
            'odometer-bootstrap-miscapu-js',
            'waypoints-miscapu-js',
            'venobox-miscapu-js',
            'swiper-miscapu-js',
            'smoth-miscapu-js',
            'chart-miscapu-js',
            'wow-miscapu-js',
            'quote-miscapu-js',
            'main-miscapu-js',
        ];
    }


    public function get_style_depends()
    {
        return [
                'bootstrap-miscapu-css', 'animate-miscapu-css',
                'fontawesome-miscapu-css',
                'awesome-miscapu-css',
                'redias-miscapu-css',
                'odometer-miscapu-css',
                'venobox-miscapu-css',
                'keyframe-miscapu-css',
                'swiper-miscapu-css',
                'main-miscapu-css'
        ];
    }



    public function get_name()
    {
        return 'cta_widget';
    }

    public function get_title()
    {
        return esc_html__( 'CTA', 'miscapu' );
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return [ 'basic' ];
    }

    public function get_keywords()
    {
        return [ 'cta', 'call to action' ];
    }


    protected function register_controls()
    {
        /**
         * Start content Tab
         */
        $this->start_controls_section(
            'section_title',
            [
                'label'         =>  'Title & Description',
                'tab'           =>  \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        /**
         * First Control
         * **** Sub Title
         */
        $this->add_control(
            'sub_title',
            [
                'label'         =>  __( 'Sub Title', 'miscapu' ),
                'label_block'   =>  true,
                'type'          =>  \Elementor\Controls_Manager::TEXT,
                'default'       =>  'Heading Sub Title',
                'placeholder'   =>  __( 'Heading Sub Text', 'miscapu' ),
                'dynamic'       =>  [
                    'active'    =>  true
                ],
            ]
        );

        /**
         * Second Control
         * **** Title
         */
        $this->add_control(
            'title',
            [
                'label'         =>  __( 'Title', 'miscapu' ),
                'label_block'   =>  true,
                'type'          =>  \Elementor\Controls_Manager::TEXTAREA,
//                'default'       =>  plugin_dir_path( __DIR__ ).'plugins/elementor/assets/images/placeholder.png',
                'default'       =>  'Title Text',
                'placeholder'   =>  __( 'Heading Title', 'miscapu' ),
                'dynamic'       =>  [
                    'active'    =>  true
                ],
            ]
        );


        /**
         * Third Control
         * **** Description
         */
        $this->add_control(
            'description',
            [
                'label'         =>  __( 'Description', 'miscapu' ),
                'type'          =>  \Elementor\Controls_Manager::TEXTAREA,
                'placeholder'   =>  __( 'Header Description Text', 'miscapu' ),
                'dynamic'       =>  [
                    'active'    =>  true
                ]
            ]
        );


        /**
         * Fourth Control
         * **** Title tag
         */
        $this->add_control(
            'title_tag',
            [
                'label'         =>  __( 'Title HTML tag', 'miscapu' ),
                'type'          =>  \Elementor\Controls_Manager::SELECT,
                'options'       =>  [
                    'h1'        =>  [
                        'title'     =>  __( 'H1', 'miscapu' ),
                        'icon'      =>  'eicon-editor-h1'
                    ],
                    'h2'        =>  [
                        'title'     =>  __( 'H2', 'miscapu' ),
                        'icon'      =>  'eicon-editor-h2'
                    ],
                    'h3'        =>  [
                        'title'     =>  __( 'H3', 'miscapu' ),
                        'icon'      =>  'eicon-editor-h3'
                    ],
                    'h4'        =>  [
                        'title'     =>  __( 'H4', 'miscapu' ),
                        'icon'      =>  'eicon-editor-h4'
                    ],
                    'h5'        =>  [
                        'title'     =>  __( 'H5', 'miscapu' ),
                        'icon'      =>  'eicon-editor-h5'
                    ],
                    'h6'        =>  [
                        'title'     =>  __( 'H6', 'miscapu' ),
                        'icon'      =>  'eicon-editor-h6'
                    ],
                ],

                'default'       =>  'h1',
                'toggle'        =>  false
            ]
        );

        $this->add_responsive_control(
            'align',
            [
                'label'         =>  __( 'Alignment', 'miscapu' ),
                'type'          =>  \Elementor\Controls_Manager::CHOOSE,
                'options'       =>  [
                    'left'      =>  [
                        'title'     =>  __( 'left', 'miscapu' ),
                        'icon'      =>  'eicon-text-align-left'
                    ],

                    'center'      =>  [
                        'title'     =>  __( 'center', 'miscapu' ),
                        'icon'      =>  'eicon-text-align-center'
                    ],

                    'right'      =>  [
                        'title'     =>  __( 'right', 'miscapu' ),
                        'icon'      =>  'eicon-text-align-right'
                    ],

                    'justify'      =>  [
                        'title'     =>  __( 'justify', 'miscapu' ),
                        'icon'      =>  'eicon-text-align-justify'
                    ],
                ],

                'toggle'    =>  true,
                'selectors' =>  [
                    '{{WRAPPER}}'   =>  'text-align:{{VALUE}}'
                ]
            ]
        );

        $this->end_controls_section();
    }



    protected function render()
    {
        $settings   =   $this->get_settings_for_display();

        $this->add_inline_editing_attributes( 'title', 'basic' );
        $this->add_render_attribute( 'title', 'class', 'white-color' );

        ?>

        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading text-center text-lg-left">
                    <?php
                        if ( $settings[ 'sub_title' ] ){
                            ?>
                            <h4 class="sub_title">
                                <?= $settings[ 'sub_title' ];?>
                            </h4>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
<?php
    }
}