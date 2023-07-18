<?php
/**
 * Widget Hello World
 */
if ( !defined( 'ABSPATH' ) ){
    die();
}

class Elementor_Hello_World_Widget extends \Elementor\Widget_Base{

    public function get_name()
    {
        return 'hello_world_widget';
    }

    public function get_title()
    {
        return esc_html__( 'Hello World', 'miscapu' );
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
        return [ 'hello', 'world' ];
    }

    protected function register_controls()
    {
        // content Tab Start
        $this->start_controls_section(
            'section_title',
            [
                'label'     =>  esc_html__( 'Title', 'miscapu' ),
                'tab'       =>  \Elementor\Controls_Manager::TAB_CONTENT
            ]
        );

        $this->add_control(
            'title',
            [
                'label'     =>  esc_html__( 'Title', 'miscapu' ),
                'type'      =>  \Elementor\Controls_Manager::TEXTAREA,
                'default'   =>  esc_html__( 'Hello World', 'miscapu' )
            ]
        );

        $this->end_controls_section();


        // Content Tab end

        // style Tab start

        $this->start_controls_section(
            'section_title_style',
            [
                'label'     =>  esc_html__( 'Title', 'miscapu' ),
                'tab'       =>  \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     =>  esc_html__( 'Text Color', 'miscapu' ),
                'type'      =>  \Elementor\Controls_Manager::COLOR,
                'selectors' =>  [
                    '{{ WRAPPER }} . hello-world'   =>  'color: {{VALUE}}'
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render()
    {
        $settings   =   $this->get_settings_for_display();
        ?>
        <p class="hello-world">
            <?= $settings[ 'title' ]; ?>
        </p>
<?php
    }
}