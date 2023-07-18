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
                'default'       =>  'Heading Title',
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