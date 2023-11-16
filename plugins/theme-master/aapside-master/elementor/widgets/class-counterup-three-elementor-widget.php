<?php
/**
 * Elementor Widget
 * @package Appside
 * @since 1.0.0
 */

namespace Elementor;
class Appside_Counterup_Three_Widget extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Elementor widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_name() {
		return 'appside-counterup-three-widget';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Elementor widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title() {
		return esc_html__( 'Counterup: 03', 'aapside-master' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Elementor widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_icon() {
		return 'eicon-counter';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Elementor widget belongs to.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_categories() {
		return [ 'appside_widgets' ];
	}

	/**
	 * Register Elementor widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'settings_section',
			[
				'label' => esc_html__( 'General Settings', 'aapside-master' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control( 'title', [
			'label'       => esc_html__( 'Title', 'aapside-master' ),
			'type'        => Controls_Manager::TEXT,
			'default'     => esc_html__( 'Positive Reviews', 'aapside-master' ),
			'description' => esc_html__( 'enter title', 'aapside-master' )
		] );
		$this->add_control( 'description', [
			'label'       => esc_html__( 'Description', 'aapside-master' ),
			'type'        => Controls_Manager::TEXTAREA,
			'default'     => esc_html__('Messenger communication consectetur adipiscing elit, sed do eiusmod tempor  labore.','aapside-master'),
			'description' => esc_html__( 'enter description', 'aapside-master' )
		] );
		$this->add_control( 'number', [
			'label'       => esc_html__( 'Number', 'aapside-master' ),
			'type'        => Controls_Manager::TEXT,
			'default'     => esc_html__( '14', 'aapside-master' ),
			'description' => esc_html__( 'enter counterup number', 'aapside-master' )
		] );
		$this->add_control( 'sign', [
			'label'       => esc_html__( 'sign', 'aapside-master' ),
			'type'        => Controls_Manager::TEXT,
			'default'     => esc_html__('+','aapside-master'),
			'description' => esc_html__( 'select sign', 'aapside-master' )
		] );

		$this->end_controls_section();

		$this->start_controls_section(
			'styling_section',
			[
				'label' => esc_html__( 'Styling Settings', 'aapside-master' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control('title_color',[
			'label' => esc_html__('Title Color','aapside-master'),
			'type' => Controls_Manager::COLOR,
			'selectors' => [
				"{{WRAPPER}} .single-counterup-style-03 .content .title" => "color: {{VALUE}}"
			]
		]);
		$this->add_control('number_color',[
			'label' => esc_html__('Number Color','aapside-master'),
			'type' => Controls_Manager::COLOR,
			'selectors' => [
				"{{WRAPPER}} .single-counterup-style-03 .count-wrap" => "color: {{VALUE}}"
			]
		]);
		$this->add_control('description_color',[
			'label' => esc_html__('Description Color','aapside-master'),
			'type' => Controls_Manager::COLOR,
			'selectors' => [
				"{{WRAPPER}} .single-counterup-style-03 .content p" => "color: {{VALUE}}"
			]
		]);
		$this->add_control('styling_divider',[
			'type' => Controls_Manager::DIVIDER
		]);
		$this->add_group_control(Group_Control_Typography::get_type(),[
			'label' => esc_html__('Title Typography'),
			'name' => 'title_typography',
			'selector' => "{{WRAPPER}} .single-counterup-style-03 .content .title"
		]);
		$this->add_control('styling_divider_01',[
			'type' => Controls_Manager::DIVIDER
		]);
		$this->add_group_control(Group_Control_Typography::get_type(),[
			'label' => esc_html__('Number Typography'),
			'name' => 'number_typography',
			'selector' => "{{WRAPPER}} .single-counterup-style-03 .count-wrap"
		]);
		$this->add_control('styling_divider_02',[
			'type' => Controls_Manager::DIVIDER
		]);
		$this->add_group_control(Group_Control_Typography::get_type(),[
			'label' => esc_html__('Description Typography'),
			'name' => 'description_typography',
			'selector' => "{{WRAPPER}} .single-counterup-style-03 .content p"
		]);
		$this->end_controls_section();
	}

	/**
	 * Render Elementor widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings  = $this->get_settings_for_display();
        $sign = $settings['sign'];
        $title = $settings['title'];
        $number = $settings['number'];
		?>
        <div class="single-counterup-style-03">
			<div class="count-wrap"><span class="count-num"><?php echo esc_html($number);?></span><?php echo esc_attr($sign);?></div>
            <div class="content">
					<h4 class="title"><?php echo esc_html($title);?></h4>
					<p><?php echo esc_html($settings['description']) ?></p>
            </div>
        </div>
		<?php
	}
}

Plugin::instance()->widgets_manager->register_widget_type( new Appside_Counterup_Three_Widget() );
