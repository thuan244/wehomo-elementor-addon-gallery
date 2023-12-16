<?php
class Wehomo_Elementor_Gallery extends \Elementor\Widget_Base {

	public function get_name() {
		return 'wehomo_elementor_gallery';
	}

	public function get_title() {
		return esc_html__( 'Wehomo Elementor Gallery', 'elementor' );
	}

	public function get_icon() {
		return 'eicon-slides';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'gallery' ];
	}

    public function get_script_depends() {
		return [ 'wehomo-flexslider-js', 'wehomo-gallery-js' ];
	}

	public function get_style_depends() {
		return [ 'wehomo-flexslider-css', 'wehomo-gallery-css' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Elementor Addon Gallery', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'gallery',
			[
				'label' => esc_html__( 'Add Images', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'show_label' => false,
				'default' => [],
			]
		);

		$this->end_controls_section();

		// Content Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
        <div class="wehomo-elementor-gallery">
            <div class="flexslider">
                <ul class="slides">
                <?php
                    foreach ( $settings['gallery'] as $image ) {
                        echo '<li data-thumb='.esc_url( $image['url'] ).'>';
                        echo '<img src="' . esc_attr( $image['url'] ) . '">';
                        echo '</li>';
                    }
                ?>
                </ul>
            </div>
        </div>

		<?php
	}
}