<?php
/**
 * Widget Bout
 *
 * @package MiSCapu
 * @since 1.0
 * @author MiSCapu
 */
class Elementor_About_Widget extends \Elementor\Widget_Base
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
        return 'about_widget';
    }

    public function get_title()
    {
        return esc_html__( 'About', 'miscapu' );
    }

    public function get_icon()
    {
        return 'eicon-t-letter';
    }

    public function get_categories()
    {
        return [ 'basic' ];
    }

    public function get_keywords()
    {
        return [
            'about', 'about site'
        ];
    }

    protected function register_controls()
    {
        /**
         * Stsrt content tab
         */
        $this->start_controls_section(
            'section_title',
            [
                'label'     =>  'Title',
            ]
        );

        /**
         * First Control
         * *******sub title
         */
        $this->add_control(
            'sub_title',
            [
                'label'         =>  __( 'Sub Title', 'miscapu' ),
                'type'          =>  \Elementor\Controls_Manager::TEXT,
                'ai'            =>  [
                        'type'      =>  'text'
                ],
                'dynamic'       =>  [
                        'active'    =>  true
                ],
                'placeholder'   =>  esc_html__( 'Enter your title', 'miscapu' ),
                'default'       =>  esc_html__( 'Add Your Heading Text Here', 'miscapu' )
            ]
        );




        /**
         * Second Control
         *
         * ********* Title
         */
        $this->add_control(
            'title',
            [
                'label'         =>  __( 'Title', 'miscapu' ),
                'label_block'   =>  true,
                'type'          =>  \Elementor\Controls_Manager::TEXTAREA,
                'default'       =>  'Unlock the potential of your business
with creative design',
                'placeholder'   =>  __( 'Heading Title Text', 'miscapu' ),
                'dynamic'       =>  [
                    'active'    =>  true
                ]
            ]
        );

	    $this->add_control( 'link',
		    [
			    'label'     =>  esc_html__( 'Link', 'miscapu' ),
			    'type'      =>  \Elementor\Controls_Manager::URL,
			    'dynamic'   =>  [
				    'active'   =>  true
			    ],
			    'default'   =>  [
				    'url'   =>  ''
			    ],
			    'separator' =>  'before'
		    ]
	    );

	    $this->add_control(
		    'size',
		    [
			    'label'     =>  esc_html__( 'Size', 'miscapu' ),
			    'type'      =>  \Elementor\Controls_Manager::SELECT,
			    'default'   =>  'default',
			    'options'   =>  [
				    'default'   =>  esc_html__( 'Default', 'miscapu' ),
				    'small'     =>  esc_html__( 'Small', 'miscapu' ),
				    'medium'    =>  esc_html__( 'Medium', 'miscapu' ),
				    'large'     =>  esc_html__( 'Large', 'miscapu' ),
				    'xl'     =>  esc_html__( 'XL', 'miscapu' ),
				    'xxl'     =>  esc_html__( 'XXL', 'miscapu' ),
			    ],
		    ],
	    );

        $this->add_control(
                'title_tag',
                [
                    'label'         =>  __( 'Title HTML Tag', 'miscapu' ),
                    'type'          =>  \Elementor\Controls_Manager::SELECT,
                    'options'       =>  [
                        'h1'    =>  'H1',
                        'h2'    =>  'H2',
                        'h3'    =>  'H3',
                        'h4'    =>  'H4',
                        'h5'    =>  'H5',
                        'h6'    =>  'H6',
                        'div'   =>  'div',
                        'span'  =>  'span',
                        'p'     =>  'p',
                    ],
                    'default'   =>  'h2',
                ]
        );

	    $this->add_responsive_control(
		    'align',
		    [
			    'label' => esc_html__( 'Alignment', 'elementor' ),
			    'type' => \Elementor\Controls_Manager::CHOOSE,
			    'options' => [
				    'left' => [
					    'title' => esc_html__( 'Left', 'elementor' ),
					    'icon' => 'eicon-text-align-left',
				    ],
				    'center' => [
					    'title' => esc_html__( 'Center', 'elementor' ),
					    'icon' => 'eicon-text-align-center',
				    ],
				    'right' => [
					    'title' => esc_html__( 'Right', 'elementor' ),
					    'icon' => 'eicon-text-align-right',
				    ],
				    'justify' => [
					    'title' => esc_html__( 'Justified', 'elementor' ),
					    'icon' => 'eicon-text-align-justify',
				    ],
			    ],
			    'selectors' => [
				    '{{WRAPPER}}' => 'text-align: {{VALUE}};',
			    ],
		    ]
	    );

	    $this->add_control(
	            'view',
            [
                'label'     =>  esc_html__( 'View', 'miscapu' ),
                'type'      =>  \Elementor\Controls_Manager::HIDDEN,
                'default'   =>  'traditional'
            ]
        );


    $this->end_controls_section();



        $this->start_controls_section(
            'style_section',
            [
                'label'         =>  esc_html__( 'Style Section', 'miscapu' ),
                'tab'           =>  \Elementor\Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     =>  esc_html__( 'Text Color', 'miscapu' ),
                'type'      =>  \Elementor\Controls_Manager::COLOR,
                'global'    =>  [
                        'default'   =>  \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_PRIMARY
                ],
                'selectors' =>  [
                        '{{WRAPPER}} .elementor-heading-title'  =>  'color: {{VALUE}}'
                ]
            ]
        );

        $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
            [
                'name'      =>  'typography',
                'global'    =>  [
                        'default'   =>  \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_PRIMARY
                ],
                'selector'  =>  '{{WRAPPER}} .elementor-heading-title'
            ]
        );

        $this->add_group_control(
                \Elementor\Group_Control_Text_Stroke::get_type(),
            [
                'name'      =>  'text stroke',
                'selector'  =>  '{{WRAPPER}} .elementor-heading-title',
            ]
        );

	    $this->add_group_control(
		    \Elementor\Group_Control_Text_Shadow::get_type(),
		    [
			    'name' => 'text_shadow',
			    'selector' => '{{WRAPPER}} .elementor-heading-title',
		    ]
	    );

	    $this->add_control(
		    'blend_mode',
		    [
			    'label' => esc_html__( 'Blend Mode', 'elementor' ),
			    'type' => \Elementor\Controls_Manager::SELECT,
			    'options' => [
				    '' => esc_html__( 'Normal', 'elementor' ),
				    'multiply' => 'Multiply',
				    'screen' => 'Screen',
				    'overlay' => 'Overlay',
				    'darken' => 'Darken',
				    'lighten' => 'Lighten',
				    'color-dodge' => 'Color Dodge',
				    'saturation' => 'Saturation',
				    'color' => 'Color',
				    'difference' => 'Difference',
				    'exclusion' => 'Exclusion',
				    'hue' => 'Hue',
				    'luminosity' => 'Luminosity',
			    ],
			    'selectors' => [
				    '{{WRAPPER}} .elementor-heading-title' => 'mix-blend-mode: {{VALUE}}',
			    ],
			    'separator' => 'none',
		    ]
	    );




        $this->end_controls_section();

    }


    protected function render()
    {
        $settings   =   $this->get_settings_for_display();

        if ( '' === $settings[ 'title' ] ):
            return;
            endif;

        /**
         * Add class in title element
         * */
        //$this->add_render_attribute( 'title', 'class', 'elementor-heading-title' );

        if ( !empty( $settings[ 'size' ] ) ):
            $this->add_render_attribute( 'title', 'class', 'raizen-'.$settings[ 'size' ] );
        endif;

        $this->add_inline_editing_attributes( 'title' );

        $title  =   $settings[ 'title' ];

        if ( ! empty( $settings[ 'link' ][ 'url' ] ) ):

            $this->add_link_attributes( 'url', $settings[ 'link' ] );

            printf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $title );
       endif;

            printf( '<%1$s %2$s>%3$s</%1$s>', \Elementor\Utils::validate_html_tag( $settings[ 'title_tag' ] ), $this->get_render_attribute_string( 'title' ), $title );



    }
}