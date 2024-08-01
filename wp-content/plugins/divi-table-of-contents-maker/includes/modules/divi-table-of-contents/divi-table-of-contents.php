<?php
#[AllowDynamicProperties]
class PAC_DTOC extends ET_Builder_Module {

	public $slug       = 'pac_divi_table_of_contents';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://www.peeayecreative.com/product/divi-table-of-contents-maker/',
		'author'     => 'Pee-Aye Creative',
        'author_uri' => 'https://www.peeayecreative.com',
	);

	public function init() {
        $this->td = 'pac-divi-table-of-contents'; // Text domain
		$this->name = esc_html__( 'Table Of Contents Maker', $this->td );
        $this->icon = '3';
        $this->main_css_element = '%%order_class%%';

        // Create Toggles
        $this->settings_modal_toggles = array(
            'general'    => array(
                'toggles' => array(
                    'pac_dtoc_content'      => __('Header Settings', $this->td),
                    'pac_dtoc_body'         => __('Content Settings', $this->td),
                    'pac_dtoc_markers'         => [
                        'title'             => __('Heading Level Settings', $this->td),
                        'tabbed_subtoggles' => true,
                        'sub_toggles'       => [
                            'h1' => [
                                'name' => __('H1', $this->td)
                            ],
                            'h2' => [
                                'name' => __('H2', $this->td)
                            ],
                            'h3' => [
                                'name' => __('H3', $this->td)
                            ],
                            'h4' => [
                                'name' => __('H4', $this->td)
                            ],
                            'h5' => [
                                'name' => __('H5', $this->td)
                            ],
                            'h6' => [
                                'name' => __('H6', $this->td)
                            ],
                        ],
                    ],
                ),
            ),
            'advanced'  => array(
                'toggles' => array(
                    'pac_dtoc_title_container'      => __('Header', $this->td),
                    'pac_dtoc_title_text'           => __('Header Title Text', $this->td),
                    'pac_dtoc_title_icon'           => __('Header Icons', $this->td),
                    'pac_dtoc_keyword_highlight'           => __('Keyword Highlight', $this->td),
                    'pac_dtoc_body_area'            => __('Content', $this->td),
                    'pac_dtoc_heading_text'         => [
                        'title'             => __('Content Heading Links', $this->td),
                        'tabbed_subtoggles' => true,
                        'sub_toggles'       => [
                            'all' => [
                                'name'      => __('All', $this->td)
                            ],
                            'h1' => [
                                'name'      => __('H1', $this->td)
                            ],
                            'h2' => [
                                'name' => __('H2', $this->td)
                            ],
                            'h3' => [
                                'name' => __('H3', $this->td)
                            ],
                            'h4' => [
                                'name' => __('H4', $this->td)
                            ],
                            'h5' => [
                                'name' => __('H5', $this->td)
                            ],
                            'h6' => [
                                'name' => __('H6', $this->td)
                            ],
                        ],
                    ],
                    'pac_dtoc_heading_text_active'            => __('Content Heading Active Link', $this->td),
                    'pac_dtoc_marker_style'         => [
                        'title'             => __('Content Heading Markers', $this->td),
                        'tabbed_subtoggles' => true,
                        'sub_toggles'       => [
                            'all' => [
                                'name'      => __('All', $this->td)
                            ],
                            'L1' => [
                                'name'      => __('H1', $this->td)
                            ],
                            'L2' => [
                                'name' => __('H2', $this->td)
                            ],
                            'L3' => [
                                'name' => __('H3', $this->td)
                            ],
                            'L4' => [
                                'name' => __('H4', $this->td)
                            ],
                            'L5' => [
                                'name' => __('H5', $this->td)
                            ],
                            'L6' => [
                                'name' => __('H6', $this->td)
                            ],
                        ],
                    ],
                )
            )
        );

        // Advanced Fields
        $this->advanced_fields = array(
            'text'         => false,
            'fonts'                 => array(
                'title_font' => array(
                    'label'          => __('Header Title Text', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_title",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_title",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_title",
                    ),
                    'hide_font_size' => true,
                    'hide_letter_spacing' => true,
                    'hide_line_height' => true,
                    'hide_text_color' => true,
                    'hide_text_shadow' => true,
                    'hide_text_align'   => true,
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_title_text',
                ),
                'title' => array(
                    'label'          => __('Header Title', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_title",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_title",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_title",
                    ),
                    'hide_font' => true,
                    'line_height'    => array(
                        'default' => '28px',
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font_size' => array(
                        'default' => '24px',
                    ),
                    'text_color' => array(
                        'default' => '#ffffff',
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_title_text',
                ),
                'heading_all' => array(
                    'label'          => __('Content Heading', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .divi_table_of_contents ul li a",
                        'limited_main' => "{$this->main_css_element} .divi_table_of_contents ul li a",
                        'line_height'  => "{$this->main_css_element} .divi_table_of_contents ul li",
                    ),
                    'hide_text_color' => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'default' => '26px',
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font_size' => array(
                        'default' => '15px',
                    ), 
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'all',
                ),
                'heading1' => array(
                    'label'          => __('Content Heading 1', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_1 > li > div > a",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_1 > li > div > a",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_1 > li ",
                    ),
                    'hide_text_color' => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'h1',
                ),
                'heading2' => array(
                    'label'          => __('Content Heading 2', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_2 > li > div > a",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_2 > li > div > a",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_2 > li",
                    ),
                    'hide_text_color' => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'h2',
                ),
                'heading3' => array(
                    'label'          => __('Content Heading 3', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_3 > li > div > a",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_3 > li > div > a",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_3 > li",
                    ),
                    'hide_text_color' => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'h3',
                ),
                'heading4' => array(
                    'label'          => __('Content Heading 4', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_4 > li > div > a",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_4 > li > div > a",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_4 > li",
                    ),
                    'hide_text_color' => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'h4',
                ),
                'heading5' => array(
                    'label'          => __('Content Heading 5', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_5 > li > div > a",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_5 > li > div > a",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_5 > li",
                    ),
                    'hide_text_color' => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'h5',
                ),
                'heading6' => array(
                    'label'          => __('Content Heading 6', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_6 > li > div > a",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_6 > li > div > a",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_6 > li",
                    ),
                    'hide_text_color' => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'h6',
                ),
                'heading_all_active' => array(
                    'label'          => __('Active Content Heading', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .divi_table_of_contents ul li.active a, {$this->main_css_element} .divi_table_of_contents ul li.active_jsx a",
                        'limited_main' => "{$this->main_css_element} .divi_table_of_contents ul li.active a, {$this->main_css_element} .divi_table_of_contents ul li.active_jsx a",
                        'line_height'  => "{$this->main_css_element} .divi_table_of_contents ul li.active, {$this->main_css_element} .divi_table_of_contents ul li.active_jsx",
                    ),
                    'hide_text_color' => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'default' => '26px',
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font_size' => array(
                        'default' => '15px',
                    ), 
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_heading_text_active',
                ),
                'keyword_highlight' => array(
                    'label'          => __('Field', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_search_input::placeholder, {$this->main_css_element} .pac_dtoc_search_input",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_search_input::placeholder, {$this->main_css_element} .pac_dtoc_search_input",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_search_input::placeholder, {$this->main_css_element} .pac_dtoc_search_input",
                    ),
                    'hide_text_color' => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_keyword_highlight',
                ),
                'marker_all' => array(
                    'label'          => __('Content Header All Marker', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} ul > li:before, {$this->main_css_element} ul > li::marker",
                        'limited_main' => "{$this->main_css_element} ul > li:before, {$this->main_css_element} ul > li::marker",
                        'line_height'  => "{$this->main_css_element} ul > li:before, {$this->main_css_element} ul > li::marker",
                    ),
                    'hide_letter_spacing'   => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'default' => '18px',
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font_size' => array(
                        'default' => '15px',
                    ),
                    'text_color' => array(
                        'default' => '#000000',
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_marker_style',
                    'sub_toggle'        => 'all',
                ),
                'marker1' => array(
                    'label'          => __('Content Header 1 Marker', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_1 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_1 > li::marker",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_1 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_1 > li::marker",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_1 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_1 > li::marker",
                    ),
                    'hide_letter_spacing'   => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font' => array(
                        'show_if'	        =>	[
                            'level_markers_1' => ['none', 'decimal', 'decimal-leading-zero', 'whole', 'upper-alpha', 'lower-alpha', 'upper-roman', 'lower-roman'],
                        ],
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_marker_style',
                    'sub_toggle'        => 'L1',
                ),
                'marker2' => array(
                    'label'          => __('Content Header 2 Marker', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_2 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_2 > li::marker",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_2 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_2 > li::marker",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_2 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_2 > li::marker",
                    ),
                    'hide_letter_spacing'   => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font' => array(
                        'show_if'	        =>	[
                            'level_markers_2' => ['none', 'decimal', 'decimal-leading-zero', 'whole', 'upper-alpha', 'lower-alpha', 'upper-roman', 'lower-roman'],
                        ],
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_marker_style',
                    'sub_toggle'        => 'L2',
                ),
                'marker3' => array(
                    'label'          => __('Content Header 3 Marker', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_3 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_3 > li::marker",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_3 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_3 > li::marker",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_3 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_3 > li::marker",
                    ),
                    'hide_letter_spacing'   => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font' => array(
                        'show_if'	        =>	[
                            'level_markers_3' => ['none', 'decimal', 'decimal-leading-zero', 'whole', 'upper-alpha', 'lower-alpha', 'upper-roman', 'lower-roman'],
                        ],
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_marker_style',
                    'sub_toggle'        => 'L3',
                ),
                'marker4' => array(
                    'label'          => __('Content Header 4 Marker', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_4 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_4 > li::marker",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_4 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_4 > li::marker",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_4 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_4 > li::marker",
                    ),
                    'hide_letter_spacing'   => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font' => array(
                        'show_if'	        =>	[
                            'level_markers_4' => ['none', 'decimal', 'decimal-leading-zero', 'whole', 'upper-alpha', 'lower-alpha', 'upper-roman', 'lower-roman'],
                        ],
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_marker_style',
                    'sub_toggle'        => 'L4',
                ),
                'marker5' => array(
                    'label'          => __('Content Header 5 Marker', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_5 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_5 > li::marker",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_5 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_5 > li::marker",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_5 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_5 > li::marker",
                    ),
                    // 'hide_font'   => true,
                    'hide_letter_spacing'   => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font' => array(
                        'show_if'	        =>	[
                            'level_markers_5' => ['none', 'decimal', 'decimal-leading-zero', 'whole', 'upper-alpha', 'lower-alpha', 'upper-roman', 'lower-roman'],
                        ],
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_marker_style',
                    'sub_toggle'        => 'L5',
                ),
                'marker6' => array(
                    'label'          => __('Content Header 6 Marker', $this->td),
                    'css'            => array(
                        'main'         => "{$this->main_css_element} .pac_dtoc_heading_level_6 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_6 > li::marker",
                        'limited_main' => "{$this->main_css_element} .pac_dtoc_heading_level_6 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_6 > li::marker",
                        'line_height'  => "{$this->main_css_element} .pac_dtoc_heading_level_6 > li:before, {$this->main_css_element} .pac_dtoc_heading_level_6 > li::marker",
                    ),
                    // 'hide_font'   => true,
                    'hide_letter_spacing'   => true,
                    'hide_text_align'   => true,
                    'line_height'    => array(
                        'range_settings' => array(
                            'min'  => '1',
                            'max'  => '100',
                            'step' => '1',
                        ),
                    ),
                    'font' => array(
                        'show_if'	        =>	[
                            'level_markers_6' => ['none', 'decimal', 'decimal-leading-zero', 'whole', 'upper-alpha', 'lower-alpha', 'upper-roman', 'lower-roman'],
                        ],
                    ),
                    'tab_slug'     => 'advanced',
                    'toggle_slug' => 'pac_dtoc_marker_style',
                    'sub_toggle'        => 'L6',
                ),
            ),
            'borders' => array(
                'default' => array(
                    'css'      => array(
                        'main' => array(
                            'border_radii' => "{$this->main_css_element}.pac_divi_table_of_contents",
                            'border_styles' => "{$this->main_css_element}.pac_divi_table_of_contents",
                        ),
                    ),
                    'defaults' => array(
                        'border_radii' => 'on|3px|3px|3px|3px',
                        'border_styles' => array(
                            'width' => '0px',
                            'color' => '#000000',
                            'style' => 'solid',
                        ),
                    ),
                ),
                'title_container'   => array(
                    'css'           => array(
                        'main' => array(
                            'border_radii'  => '%%order_class%%  .pac_dtoc_title_area',
                            'border_styles' => '%%order_class%%  .pac_dtoc_title_area',
                        ),
                    ),
                    'defaults'      => array(
                        'border_radii'      => 'on|0px|0px|0px|0px',
                        'border_styles'     => array(
                            'width'         => '0px',
                            'color'         => '#000000',
                            'style'         => 'solid',
                        ),
                    ),
                    'label_prefix' => __('Header', $this->td),
                    'tab_slug'     => 'advanced',
                    'toggle_slug'  => 'pac_dtoc_title_container',
                ),
                'keyword_highlight'   => array(
                    'css'           => array(
                        'main' => array(
                            'border_radii'  => '%%order_class%%  .pac_dtoc_search_input',
                            'border_styles' => '%%order_class%%  .pac_dtoc_search_input',
                        ),
                    ),
                    'defaults'      => array(
                        'border_radii'      => 'on|3px|3px|3px|3px',
                        'border_styles'     => array(
                            'width'         => '2px',
                            'color'         => '#666666',
                            'style'         => 'solid',
                        ),
                    ),
                    'label_prefix' => __('Field', $this->td),
                    'tab_slug'     => 'advanced',
                    'toggle_slug'  => 'pac_dtoc_keyword_highlight',
                ),
                'body_area'   => array(
                    'css'           => array(
                        'main'      => array(
                            'border_radii'  => '%%order_class%%  .pac_dtoc_body_area',
                            'border_styles' => '%%order_class%%  .pac_dtoc_body_area',
                        ),
                    ),
                    'defaults'      => array(
                        'border_radii'      => 'on|0px|0px|0px|0px',
                        'border_styles'     => array(
                            'width'         => '0px',
                            'color'         => '#000000',
                            'style'         => 'solid',
                        ),
                    ),
                    'label_prefix' => __('Content Area', $this->td),
                    'tab_slug'     => 'advanced',
                    'toggle_slug'  => 'pac_dtoc_body_area',
                ),
                'body_area_heading_text'   => array(
                    'css'           => array(
                        'main'      => array(
                            'border_radii'  => '%%order_class%%  li',
                            'border_styles' => '%%order_class%%  li',
                        ),
                    ),
                    'defaults'      => array(
                        'border_radii'      => 'on|0px|0px|0px|0px',
                        'border_styles'     => array(
                            'width'         => '0px',
                            'color'         => '#000000',
                            'style'         => 'solid',
                        ),
                    ),
                    'label_prefix' => __('Content Heading Link', $this->td),
                    'tab_slug'     => 'advanced',
                    'toggle_slug'  => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'all',
                ),
                'body_area_heading_text_active'   => array(
                    'css'           => array(
                        'main'      => array(
                            'border_radii'  => '%%order_class%%  li.active, %%order_class%%  li.active_jsx',
                            'border_styles' => '%%order_class%%  li.active, %%order_class%%  li.active_jsx',
                        ),
                    ),
                    'defaults'      => array(
                        'border_radii'      => 'on|0px|0px|0px|0px',
                        'border_styles'     => array(
                            'width'         => '0px',
                            'color'         => '#000000',
                            'style'         => 'solid',
                        ),
                    ),
                    'label_prefix' => __('Content Heading Active Link', $this->td),
                    'tab_slug'     => 'advanced',
                    'toggle_slug'  => 'pac_dtoc_heading_text_active',
                ),
            ),
            'box_shadow' => array(
                'default' => array(
                    'css' => array(
                        'main'    => "{$this->main_css_element}.pac_divi_table_of_contents",
                    ),
                ),
                'title_container'   => array(
                    'label'           => __('Header Box Shadow Settings', $this->td),
                    'option_category' => 'layout',
                    'tab_slug'        => 'advanced',
                    'toggle_slug'     => 'pac_dtoc_title_container',
                    'css'             => array(
                        'main' => "{$this->main_css_element} .pac_dtoc_title_area",
                    ),
                ),
                'keyword_highlight'   => array(
                    'label'           => __('Field Box Shadow Settings', $this->td),
                    'option_category' => 'layout',
                    'tab_slug'        => 'advanced',
                    'toggle_slug'     => 'pac_dtoc_keyword_highlight',
                    'css'             => array(
                        'main' => "{$this->main_css_element} .pac_dtoc_search_input",
                    ),
                ),
                'body_area'   => array(
                    'label'           => __('Content Area Box Shadow Settings', $this->td),
                    'option_category' => 'layout',
                    'tab_slug'        => 'advanced',
                    'toggle_slug'     => 'pac_dtoc_body_area',
                    'css'             => array(
                        'main' => "{$this->main_css_element} .pac_dtoc_body_area",
                    ),
                ),
                'body_area_heading_text'   => array(
                    'label'           => __('Content Heading Link Box Shadow Settings', $this->td),
                    'option_category' => 'layout',
                    'tab_slug'        => 'advanced',
                    'toggle_slug'     => 'pac_dtoc_heading_text',
                    'sub_toggle'        => 'all',
                    'css'             => array(
                        'main' => "{$this->main_css_element} li",
                    ),
                ),
                'body_area_heading_text_active'   => array(
                    'label'           => __('Content Heading Active Link Box Shadow Settings', $this->td),
                    'option_category' => 'layout',
                    'tab_slug'        => 'advanced',
                    'toggle_slug'     => 'pac_dtoc_heading_text_active',
                    'css'             => array(
                        'main' => "{$this->main_css_element} li.active, %%order_class%%  li.active_jsx",
                    ),
                ),
            ),
            'link_options' => false,
            'background' => false,
        );
	}
	public function get_fields() {
        // Content Tabs Settings
        // Content Fields
        $fields['hide_show_header'] = [
            'label'             => __('Show Header', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show and hide the header of the table of contents.', $this->td),
            'toggle_slug'       => 'pac_dtoc_content',
            'mobile_options'    => true,
            'affects' => array(
                'title',
                'allow_collapse_minimize',
                'show_icon_in_toc_header',
            ),
        ];
        $fields['title'] = [
            'label'             => __('Title', $this->td),
            'type'              => 'text',
            'default'           => __( 'Table of Contents', $this->td ),
            'default_on_front'  => __( 'Table of Contents', $this->td ),
            'option_category' => 'basic_option',
            'description' => __('Enter custom text for the table of contents header title.', $this->td),
            'toggle_slug' => 'pac_dtoc_content',
            'depends_show_if'   => 'on'
        ];
        $fields['allow_collapse_minimize'] = [
            'label'             => __('Allow Collapse/Expand', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose whether viewers have the option to collapse and expand the table of contents.', $this->td),
            'toggle_slug'       => 'pac_dtoc_content',
            'mobile_options'    => true,
            'depends_show_if'   => 'on',
            'affects' => array(
                'default_state',
                'collapse_when_sticky',
                'minimize_toc_as_icon',
            ),
        ];
        $fields['default_state'] = [
            'label'             => __('Default State', $this->td),
            'type'              => 'select',
            'options'           => [
                'closed'    => __('Collapsed', $this->td),
                'open'      => __('Expanded', $this->td),
            ],
            'default'           => __( 'open', $this->td ),
            'default_on_front'  => __( 'open', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Set the default state of the table of contents as collapsed or expanded.', $this->td),
            'toggle_slug'       => 'pac_dtoc_content',
            'mobile_options'    => true,
            'depends_show_if'   => 'on',
        ];
        $fields['collapse_when_sticky'] = [
            'label'             => __('Collapse When Sticky', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'off', $this->td ),
            'default_on_front'  => __( 'off', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Set the table of contents as collapsed when sticky.', $this->td),
            'toggle_slug'       => 'pac_dtoc_content',
            'mobile_options'    => true,
            'depends_show_if'   => 'on'
        ];
        $fields['minimize_toc_as_icon'] = [
            'label'             => __('Collapse To Icon Only', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'off', $this->td ),
            'default_on_front'  => __( 'off', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to collapse the table of contents to only an icon.', $this->td),
            'toggle_slug'       => 'pac_dtoc_content',
            'mobile_options'    => true,
            'depends_show_if'   => 'on'
        ];
        $fields['show_icon_in_toc_header'] = [
            'label'             => __('Show Icon', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show an icon in the table of contents header.', $this->td),
            'toggle_slug'       => 'pac_dtoc_content',
            'depends_show_if'   => 'on',
            'affects' => array(
                'icon_position',
                'opened_icon',
                'closed_icon',
            ),
        ];
        $fields['icon_position'] = [
            'label'             => __('Icon Position', $this->td),
            'type'              => 'select',
            'options'           => [
                'left'    => __('Left', $this->td),
                'right'      => __('Right', $this->td),
            ],
            'default'           => __( 'right', $this->td ),
            'default_on_front'  => __( 'right', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to align the icon to the left or right side.', $this->td),
            'toggle_slug'       => 'pac_dtoc_content',
            'depends_show_if'   => 'on',
        ];
        $fields['opened_icon'] = [
            'label'             => __('Expanded Icon', $this->td),
            'type'              => 'select_icon',
            'class'             => array('et-pb-font-icon'),
            'default'           => '2||divi||400',   // Set default to up caret icon
            'default_on_front'  => '2||divi||400',
            'option_category'   => 'basic_option',
            'description'       => __('Choose an icon to collapse the table of contents when it is expanded.', $this->td),
            'depends_show_if'   => 'on',
            'toggle_slug'       => 'pac_dtoc_content',
        ];
        $fields['closed_icon'] = [
            'label'             => __('Collapsed Icon', $this->td),
            'type'              => 'select_icon',
            'class'             => array('et-pb-font-icon'),
            'default'           => '3||divi||400',   // Set default to down caret icon
            'default_on_front'  => '3||divi||400',
            'option_category'   => 'basic_option',
            'description'       => __('Choose an icon to expand the table of contents when it is collapsed.', $this->td),
            'toggle_slug'       => 'pac_dtoc_content',
            'depends_show_if'   => 'on'
        ];

        // Body Fields
        $fields['exclude_headings_by_class'] = [
            'label'             => __('Include Or Exclude Headings', $this->td),
            'type'              => 'select',
            'options'           => [
                'off'  =>   __('Include All Headings', $this->td),
                'on'   =>   __('Exclude Specific Headings By Class', $this->td),
                'include'  =>   __('Include Specific Headings By Class', $this->td),
            ],
            'default'           => __( 'off', $this->td ),
            'default_on_front'  => __( 'off', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose which headings to include in the table of contents by either automatically including all headings except those that are manually excluded by a CSS class or by only including those that are manually included by a CSS class. You can add the class “pac-dtocm-exclude” to exclude or “pac-dtocm-include” to include to any section, row, or module in your Divi layout.', $this->td),
            'toggle_slug'       => 'pac_dtoc_body',
        ];
        $fields['included_headings'] = [
            'label'				=> __('Included Heading Levels', $this->td ),
            'type'				=> 'multiple_checkboxes',
            'option_category'	=> 'configuration',
            'description'		=> __( 'Choose which heading levels should be included in the table of contents.', $this->td ),
            'options'			=> [
                'h1' => 'H1 Headings',
                'h2' => 'H2 Headings',
                'h3' => 'H3 Headings',
                'h4' => 'H4 Headings',
                'h5' => 'H5 Headings',
                'h6' => 'H6 Headings'
            ],
            'default'           => 'on|on|off|off|off|off',
            'default_on_front'  => 'on|on|off|off|off|off',
            'return_slugs'		=> true,
            'toggle_slug'       => 'pac_dtoc_body',
        ];
        $fields['minimum_number_of_headings'] = [
            'label'             => __('Hide Entire Module If', $this->td),
            'type'              => 'select',
            'options'           => [
                '2'       => __('Less Than 2 Headings Found In Content', $this->td),
                '3'       => __('Less Than 3 Headings Found In Content', $this->td),
                '4'       => __('Less Than 4 Headings Found In Content', $this->td),
                '5'       => __('Less Than 5 Headings Found In Content', $this->td),
                '6'       => __('Less Than 6 Headings Found In Content', $this->td),
            ],
            'default'           => __( '2', $this->td ),
            'default_on_front'  => __( '2', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Select the minimum number of headings on the current post to determine whether the table of contents should be visible or not. If the number of headings that match the included criteria is lower than the selected number, then the entire module will hide.', $this->td),
            'toggle_slug'       => 'pac_dtoc_body',
        ];
        $fields['pac_dtoc_show_alternative_content'] = [
            'label'             => __('Show Alternative Content If Module Hidden', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'off', $this->td ),
            'default_on_front'  => __( 'off', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show some alternative content by placing the CSS class "dtocm-show-alternative-content" in any Divi module, row, or section if the table of contents module is hidden based on the minimum heading requirements.', $this->td),
            'toggle_slug'       => 'pac_dtoc_body',
        ];
        $fields['scroll_speed'] = [
            'label'             => __('Scroll Speed', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => 100,
                'max'  => 10000,
                'step' => 500,
                'min_limit' => 100,
                'max_limit' => 10000,
            ],
            'fixed_range'      => true,
            'validate_unit'    => true,
			'fixed_unit'       => 'ms',
            'default'           => '2000',
            'default_on_front'  => '2000',
            'option_category'   => 'basic_option',
            'description'       => __('Adjust the speed of the page scroll when clicking links in the table of contents.', $this->td),
            'toggle_slug'       => 'pac_dtoc_body',
        ];
        $fields['spacing_above_heading'] = [
            'label'             => __('Top Offset', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => 0,
                'max'  => 500,
                'step' => 5,
                'min_limit' => 0,
                'max_limit' => 500,
            ],
            'fixed_range'      => true,
            'validate_unit'    => true,
			'fixed_unit'       => 'px',
            'default'           => '100',
            'default_on_front'  => '100',
            'option_category'   => 'basic_option',
            'description'       => __('Define the vertical distance from the top edge of the browser window to the heading when scrolling to a linked content heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_body',
        ];
        $fields['show_keyword_highlight'] = [
            'label'             => __('Show Keyword Highlight', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'off', $this->td ),
            'default_on_front'  => __( 'off', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to enable a keyword search bar feature to highlight words in the post content.', $this->td),
            'toggle_slug'       => 'pac_dtoc_body',
        ];
        $fields['show_keyword_highlight_placeholder'] = [
            'label'             => __('Keyword Highlight Custom Text', $this->td),
            'type'              => 'text',
            'default'           => __( 'Keyword Highlight...', $this->td ),
            'default_on_front'  => __( 'Keyword Highlight...', $this->td ),
            'option_category' => 'basic_option',
            'description' => __('Enter custom text for the keyword highlight input placeholder.', $this->td),
            'toggle_slug' => 'pac_dtoc_body',
        ];
        $fields['active_link_highlight'] = [
            'label'             => __('Highlight Active Link', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'off', $this->td ),
            'default_on_front'  => __( 'off', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to enable the active link in the table of contents that matches the current visible heading in the viewport.', $this->td),
            'toggle_slug'       => 'pac_dtoc_body',
        ];
        $fields['marker_position'] = [
            'label'             => __('Marker Position', $this->td),
            'type'              => 'select',
            'options'           => [
                'inside'        => __('Inside', $this->td),
                'outside'       => __('Outside', $this->td),
            ],
            'default'           => __( 'inside', $this->td ),
            'default_on_front'  => __( 'inside', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show the heading level markers inside or outside the heading level text design settings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_body',
        ];

        // Markers Fields
        $fields['level_markers_1'] = [
            'label'             => __('Heading Level 1 Markers', $this->td),
            'type'              => 'select',
            'options'           => [
                'none'                  => __('None', $this->td),
                'icons'                 => __('Icons', $this->td),
                'decimal'               => __('Whole Numbers (1, 2, 3)', $this->td),
                'decimal-leading-zero'  => __('Whole Numbers With Leading Zeros (01, 02, 03)', $this->td),
                'whole'                 => __('Decimal Numbers Of Parent Level (1.1, 1.2, 1.3)', $this->td),
                'decimal-number'        => __('Decimal Numbers (1.0, 2.0, 3.0)', $this->td),
                'upper-alpha'           => __('Uppercase Letters (A, B, C)', $this->td),
                'lower-alpha'           => __('Lowercase Letters (a, b, c)', $this->td),
                'upper-roman'           => __('Uppercase Roman Numerals (I, V, X, L)', $this->td),
                'lower-roman'           => __('Lowercase Roman Numerals (i, v, x, l)', $this->td),
            ],
            'default'           => __( 'decimal-leading-zero', $this->td ),
            'default_on_front'  => __( 'decimal-leading-zero', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Select the markers for level 1 headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h1',
        ];
        $fields['icon_marker_1'] = [
            'label'             => __('Icon Picker', $this->td),
            'type'              => 'select_icon',
            'class'             => array('et-pb-font-icon'),
            'default'           => '^||divi||400',   // Set default to up caret icon
            'default_on_front'  => '^||divi||400',
            'option_category'   => 'basic_option',
            'description'       => __('Choose an icon as a marker for level one headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h1',
            'show_if'	        =>	[
                'level_markers_1'           => 'icons',
            ],
        ];
        $fields['level_markers_2'] = [
            'label'             => __('Heading Level 2 Markers', $this->td),
            'type'              => 'select',
            'options'           => [
                'none'                  => __('None', $this->td),
                'icons'                 => __('Icons', $this->td),
                'decimal'               => __('Whole Numbers (1, 2, 3)', $this->td),
                'decimal-leading-zero'  => __('Whole Numbers With Leading Zeros (01, 02, 03)', $this->td),
                'whole'                 => __('Decimal Numbers Of Parent Level (1.1, 1.2, 1.3)', $this->td),
                'decimal-number'        => __('Decimal Numbers (1.0, 2.0, 3.0)', $this->td),
                'upper-alpha'           => __('Uppercase Letters (A, B, C)', $this->td),
                'lower-alpha'           => __('Lowercase Letters (a, b, c)', $this->td),
                'upper-roman'           => __('Uppercase Roman Numerals (I, V, X, L)', $this->td),
                'lower-roman'           => __('Lowercase Roman Numerals (i, v, x, l)', $this->td),
            ],
            'default'           => __( 'decimal-leading-zero', $this->td ),
            'default_on_front'  => __( 'decimal-leading-zero', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Select the markers for level 2 headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h2',
        ];
        $fields['icon_marker_2'] = [
            'label'             => __('Icon Picker', $this->td),
            'type'              => 'select_icon',
            'class'             => array('et-pb-font-icon'),
            'default'           => '^||divi||400',   // Set default to up caret icon
            'default_on_front'  => '^||divi||400',
            'option_category'   => 'basic_option',
            'description'       => __('Choose an icon as a marker for level two headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h2',
            'show_if'	        =>	[
                'level_markers_2'           => 'icons',
            ],
        ];
        $fields['level_markers_3'] = [
            'label'             => __('Heading Level 3 Markers', $this->td),
            'type'              => 'select',
            'options'           => [
                'none'                  => __('None', $this->td),
                'icons'                 => __('Icons', $this->td),
                'decimal'               => __('Whole Numbers (1, 2, 3)', $this->td),
                'decimal-leading-zero'  => __('Whole Numbers With Leading Zeros (01, 02, 03)', $this->td),
                'whole'                 => __('Decimal Numbers Of Parent Level (1.1, 1.2, 1.3)', $this->td),
                'decimal-number'        => __('Decimal Numbers (1.0, 2.0, 3.0)', $this->td),
                'upper-alpha'           => __('Uppercase Letters (A, B, C)', $this->td),
                'lower-alpha'           => __('Lowercase Letters (a, b, c)', $this->td),
                'upper-roman'           => __('Uppercase Roman Numerals (I, V, X, L)', $this->td),
                'lower-roman'           => __('Lowercase Roman Numerals (i, v, x, l)', $this->td),
            ],
            'default'           => __( 'decimal-leading-zero', $this->td ),
            'default_on_front'  => __( 'decimal-leading-zero', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Select the markers for level 3 headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h3',
        ];
        $fields['icon_marker_3'] = [
            'label'             => __('Icon Picker', $this->td),
            'type'              => 'select_icon',
            'class'             => array('et-pb-font-icon'),
            'default'           => '^||divi||400',   // Set default to up caret icon
            'default_on_front'  => '^||divi||400',
            'option_category'   => 'basic_option',
            'description'       => __('Choose an icon as a marker for level three headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h3',
            'show_if'	        =>	[
                'level_markers_3'           => 'icons',
            ],
        ];
        $fields['level_markers_4'] = [
            'label'             => __('Heading Level 4 Markers', $this->td),
            'type'              => 'select',
            'options'           => [
                'none'                  => __('None', $this->td),
                'icons'                 => __('Icons', $this->td),
                'decimal'               => __('Whole Numbers (1, 2, 3)', $this->td),
                'decimal-leading-zero'  => __('Whole Numbers With Leading Zeros (01, 02, 03)', $this->td),
                'whole'                 => __('Decimal Numbers Of Parent Level (1.1, 1.2, 1.3)', $this->td),
                'decimal-number'        => __('Decimal Numbers (1.0, 2.0, 3.0)', $this->td),
                'upper-alpha'           => __('Uppercase Letters (A, B, C)', $this->td),
                'lower-alpha'           => __('Lowercase Letters (a, b, c)', $this->td),
                'upper-roman'           => __('Uppercase Roman Numerals (I, V, X, L)', $this->td),
                'lower-roman'           => __('Lowercase Roman Numerals (i, v, x, l)', $this->td),
            ],
            'default'           => __( 'decimal-leading-zero', $this->td ),
            'default_on_front'  => __( 'decimal-leading-zero', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Select the markers for level 4 headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h4',
        ];
        $fields['icon_marker_4'] = [
            'label'             => __('Icon Picker', $this->td),
            'type'              => 'select_icon',
            'class'             => array('et-pb-font-icon'),
            'default'           => '^||divi||400',   // Set default to up caret icon
            'default_on_front'  => '^||divi||400',
            'option_category'   => 'basic_option',
            'description'       => __('Choose an icon as a marker for level four headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h4',
            'show_if'	        =>	[
                'level_markers_4'           => 'icons',
            ],
        ];
        $fields['level_markers_5'] = [
            'label'             => __('Heading Level 5 Markers', $this->td),
            'type'              => 'select',
            'options'           => [
                'none'                  => __('None', $this->td),
                'icons'                 => __('Icons', $this->td),
                'decimal'               => __('Whole Numbers (1, 2, 3)', $this->td),
                'decimal-leading-zero'  => __('Whole Numbers With Leading Zeros (01, 02, 03)', $this->td),
                'whole'                 => __('Decimal Numbers Of Parent Level (1.1, 1.2, 1.3)', $this->td),
                'decimal-number'        => __('Decimal Numbers (1.0, 2.0, 3.0)', $this->td),
                'upper-alpha'           => __('Uppercase Letters (A, B, C)', $this->td),
                'lower-alpha'           => __('Lowercase Letters (a, b, c)', $this->td),
                'upper-roman'           => __('Uppercase Roman Numerals (I, V, X, L)', $this->td),
                'lower-roman'           => __('Lowercase Roman Numerals (i, v, x, l)', $this->td),
            ],
            'default'           => __( 'decimal-leading-zero', $this->td ),
            'default_on_front'  => __( 'decimal-leading-zero', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Select the markers for level 5 headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h5',
        ];
        $fields['icon_marker_5'] = [
            'label'             => __('Icon Picker', $this->td),
            'type'              => 'select_icon',
            'class'             => array('et-pb-font-icon'),
            'default'           => '^||divi||400',   // Set default to up caret icon
            'default_on_front'  => '^||divi||400',
            'option_category'   => 'basic_option',
            'description'       => __('Choose an icon as a marker for level five headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h5',
            'show_if'	        =>	[
                'level_markers_5'           => 'icons',
            ],
        ];
        $fields['level_markers_6'] = [
            'label'             => __('Heading Level 6 Markers', $this->td),
            'type'              => 'select',
            'options'           => [
                'none'                  => __('None', $this->td),
                'icons'                 => __('Icons', $this->td),
                'decimal'               => __('Whole Numbers (1, 2, 3)', $this->td),
                'decimal-leading-zero'  => __('Whole Numbers With Leading Zeros (01, 02, 03)', $this->td),
                'whole'                 => __('Decimal Numbers Of Parent Level (1.1, 1.2, 1.3)', $this->td),
                'decimal-number'        => __('Decimal Numbers (1.0, 2.0, 3.0)', $this->td),
                'upper-alpha'           => __('Uppercase Letters (A, B, C)', $this->td),
                'lower-alpha'           => __('Lowercase Letters (a, b, c)', $this->td),
                'upper-roman'           => __('Uppercase Roman Numerals (I, V, X, L)', $this->td),
                'lower-roman'           => __('Lowercase Roman Numerals (i, v, x, l)', $this->td),
            ],
            'default'           => __( 'decimal-leading-zero', $this->td ),
            'default_on_front'  => __( 'decimal-leading-zero', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Select the markers for level 6 headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h6',
        ];
        $fields['icon_marker_6'] = [
            'label'             => __('Icon Picker', $this->td),
            'type'              => 'select_icon',
            'class'             => array('et-pb-font-icon'),
            'default'           => '^||divi||400',   // Set default to up caret icon
            'default_on_front'  => '^||divi||400',
            'option_category'   => 'basic_option',
            'description'       => __('Choose an icon as a marker for level six headings.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h6',
            'show_if'	        =>	[
                'level_markers_6'           => 'icons',
            ],
        ];
        

        // Hierarchy Fields
        // Level 1 
        $fields['headings_overflow_1'] = [
            'label'             => __('Heading Level 1 Overflow', $this->td),
            'type'              => 'select',
            'options'           => [
                'wrap'      => __('Wrap To New Line', $this->td),
                'ellipsis'  => __('Hidden with Ellipsis (...)', $this->td),
            ],
            'default'           => __( 'wrap', $this->td ),
            'default_on_front'  => __( 'wrap', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose how to handle heading level 1 text that that is longer than the available width of the module.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h1',
        ];
        // level 2
        $fields['use_hierarchical_indents_2'] = [
            'label'             => __('Indent Heading Level 2', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show heading level 2 indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h2',
        ];
        $fields['indent_amount_2'] = [
            'label'             => __('Heading Level 2 Indent Amount', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => '0',
                'max'  => '100',
                'step' => '1',
            ],
            'validate_unit'    => true,
            'default_unit'      => 'px',
            'default'           => '20px',
            'default_on_front'  => '20px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the amount of distance heading level 2 is indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h2',
            'show_if'	        =>	[
                'use_hierarchical_indents_2'  => 'on',
            ],
        ];
        $fields['headings_overflow_2'] = [
            'label'             => __('Heading Level 2 Overflow', $this->td),
            'type'              => 'select',
            'options'           => [
                'wrap'      => __('Wrap To New Line', $this->td),
                'ellipsis'  => __('Hidden with Ellipsis (...)', $this->td),
            ],
            'default'           => __( 'wrap', $this->td ),
            'default_on_front'  => __( 'wrap', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose how to handle heading level 2 text that that is longer than the available width of the module.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h2',
        ];
        // level 3
        $fields['use_hierarchical_indents_3'] = [
            'label'             => __('Indent Heading Level 3', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show heading level 3 indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h3',
        ];
        $fields['indent_amount_3'] = [
            'label'             => __('Heading Level 3 Indent Amount', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => '0',
                'max'  => '100',
                'step' => '1',
            ],
            'validate_unit'    => true,
            'default_unit'      => 'px',
            'default'           => '20px',
            'default_on_front'  => '20px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the amount of distance heading level 3 is indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h3',
            'show_if'	        =>	[
                'use_hierarchical_indents_3'  => 'on',
            ],
        ];
        $fields['headings_overflow_3'] = [
            'label'             => __('Heading Level 3 Overflow', $this->td),
            'type'              => 'select',
            'options'           => [
                'wrap'      => __('Wrap To New Line', $this->td),
                'ellipsis'  => __('Hidden with Ellipsis (...)', $this->td),
            ],
            'default'           => __( 'wrap', $this->td ),
            'default_on_front'  => __( 'wrap', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose how to handle heading level 3 text that that is longer than the available width of the module.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h3',
        ];
        // level 4
        $fields['use_hierarchical_indents_4'] = [
            'label'             => __('Indent Heading Level 4', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show heading level 4 indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h4',
        ];
        $fields['indent_amount_4'] = [
            'label'             => __('Heading Level 4 Indent Amount', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => '0',
                'max'  => '100',
                'step' => '1',
            ],
            'validate_unit'    => true,
            'default_unit'      => 'px',
            'default'           => '20px',
            'default_on_front'  => '20px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the amount of distance heading level 4 is indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h4',
            'show_if'	        =>	[
                'use_hierarchical_indents_4'  => 'on',
            ],
        ];
        $fields['headings_overflow_4'] = [
            'label'             => __('Heading Level 4 Overflow', $this->td),
            'type'              => 'select',
            'options'           => [
                'wrap'      => __('Wrap To New Line', $this->td),
                'ellipsis'  => __('Hidden with Ellipsis (...)', $this->td),
            ],
            'default'           => __( 'wrap', $this->td ),
            'default_on_front'  => __( 'wrap', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose how to handle heading level 4 text that that is longer than the available width of the module.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h4',
        ];
        // level 5
        $fields['use_hierarchical_indents_5'] = [
            'label'             => __('Indent Heading Level 5', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show heading level 5 indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h5',
        ];
        $fields['indent_amount_5'] = [
            'label'             => __('Heading Level 5 Indent Amount', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => '0',
                'max'  => '100',
                'step' => '1',
            ],
            'validate_unit'    => true,
            'default_unit'      => 'px',
            'default'           => '20px',
            'default_on_front'  => '20px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the amount of distance heading level 5 is indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h5',
            'show_if'	        =>	[
                'use_hierarchical_indents_5'  => 'on',
            ],
        ];
        $fields['headings_overflow_5'] = [
            'label'             => __('Heading Level 5 Overflow', $this->td),
            'type'              => 'select',
            'options'           => [
                'wrap'      => __('Wrap To New Line', $this->td),
                'ellipsis'  => __('Hidden with Ellipsis (...)', $this->td),
            ],
            'default'           => __( 'wrap', $this->td ),
            'default_on_front'  => __( 'wrap', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose how to handle heading level 5 text that that is longer than the available width of the module.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h5',
        ];
        // level 6
        $fields['use_hierarchical_indents_6'] = [
            'label'             => __('Indent Heading Level 6', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to show heading level 6 indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h6',
        ];
        $fields['indent_amount_6'] = [
            'label'             => __('Heading Level 6 Indent Amount', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => '0',
                'max'  => '100',
                'step' => '1',
            ],
            'validate_unit'    => true,
            'default_unit'      => 'px',
            'default'           => '20px',
            'default_on_front'  => '20px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the amount of distance heading level 6 is indented underneath the parent heading.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h6',
            'show_if'	        =>	[
                'use_hierarchical_indents_6'  => 'on',
            ],
        ];
        $fields['headings_overflow_6'] = [
            'label'             => __('Heading Level 6 Overflow', $this->td),
            'type'              => 'select',
            'options'           => [
                'wrap'      => __('Wrap To New Line', $this->td),
                'ellipsis'  => __('Hidden with Ellipsis (...)', $this->td),
            ],
            'default'           => __( 'wrap', $this->td ),
            'default_on_front'  => __( 'wrap', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose how to handle heading level 6 text that that is longer than the available width of the module.', $this->td),
            'toggle_slug'       => 'pac_dtoc_markers',
            'sub_toggle'        => 'h6',
        ];
        

        // Design Tab Settings
        // Title Container
        $fields['title_container_margin'] = [
            'label'             => __('Header Margin', $this->td),
            'type'              => 'custom_margin',
            'default'           => '0px|0px|0px|0px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the outside of the header.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_title_container',
        ];
        $fields['title_container_padding'] = [
            'label'             => __('Header Padding', $this->td),
            'type'              => 'custom_padding',
            'default'           => '15px|23px|15px|23px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the inside of the header.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_title_container',
        ];
        $fields['title_container_bg_color'] = [
            'label'             => __('Header Background Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#6c2eb9',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the header background.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_title_container',
        ];

        // Icon Fields
        $fields['open_icon_color'] = [
            'label'             => __('Header Open Icon Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#ffffff',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the open icon.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_title_icon',
        ];
        $fields['open_icon_size'] = [
            'label'             => __('Header Open Icon Size', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => '0',
                'max'  => '100',
                'step' => '1',
            ],
            'validate_unit'    => true,
            'default_unit'      => 'px',
            'default'           => '30px',
            'default_on_front'  => '30px',
            'option_category'   => 'basic_option',
            'description'       => __('Here you can set the size of open icon.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_title_icon',
        ];
        $fields['close_icon_color'] = [
            'label'             => __('Header Closed Icon Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#ffffff',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the close icon.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_title_icon',
        ];
        $fields['close_icon_size'] = [
            'label'             => __('Header Closed Icon Size', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => '0',
                'max'  => '100',
                'step' => '1',
            ],
            'validate_unit'    => true,
            'default_unit'      => 'px',
            'default'           => '30px',
            'default_on_front'  => '30px',
            'option_category'   => 'basic_option',
            'description'       => __('Here you can set the size of close icon.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_title_icon',
        ];

        // Keyword Highlight
        $fields['mark_color'] = [
            'label'             => __('Highlighted Keyword Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#000000',
            'hover'             => 'tabs',
            'description'       => __('Set the color of the highlighted keywords in the content.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_bg_color'] = [
            'label'             => __('Highlighted Keyword Background Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#edf000',
            'hover'             => 'tabs',
            'description'       => __('Set the background color of the highlighted keywords in the content.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_field_placeholder_color'] = [
            'label'             => __('Field Placeholder Text Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#666666',
            'hover'             => 'tabs',
            'description'       => __('Set the color of the placeholder text in the keyword search field.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_field_bg_color'] = [
            'label'             => __('Field Background Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#ffffff',
            'hover'             => 'tabs',
            'description'       => __('Set the color of the background of the keyword search field.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_field_text_color'] = [
            'label'             => __('Field Text Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#666666',
            'hover'             => 'tabs',
            'description'       => __('Set the color of the text in the keyword search field.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_field_focus_text_color'] = [
            'label'             => __('Field Focus Text Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#666666',
            'hover'             => 'tabs',
            'description'       => __('Set the focus color of the text when typing in the keyword search field.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_field_focus_bg_color'] = [
            'label'             => __('Field Focus Background Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#ffffff',
            'hover'             => 'tabs',
            'description'       => __('Set the focus background color when typing of the keyword search field.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_field_focus_border_color'] = [
            'label'             => __('Field Focus Border Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#666666',
            'hover'             => 'tabs',
            'description'       => __('Set the focus border color when typing of the keyword search field.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_field_margin'] = [
            'label'             => __('Field Margin', $this->td),
            'type'              => 'custom_margin',
            'default'           => '0px|0px|10px|0px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the outside of the keyword search field.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];
        $fields['mark_field_padding'] = [
            'label'             => __('Field Padding', $this->td),
            'type'              => 'custom_padding',
            'default'           => '10px|10px|10px|10px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the inside of the keyword search field.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_keyword_highlight',
            'show_if'	        =>	[
                'show_keyword_highlight'  => 'on',
            ],
        ];

        // Body Area
        $fields['limit_content_height'] = [
            'label'             => __('Limit Content Height', $this->td),
            'type'              => 'yes_no_button',
            'options'           => [
                'on'  => __('Yes', $this->td),
                'off'  => __('No', $this->td),
            ],
            'default'           => __( 'on', $this->td ),
            'default_on_front'  => __( 'on', $this->td ),
            'option_category'   => 'basic_option',
            'description'       => __('Choose to limit the height of the content area and show a scrollbar. If this is disabled, the content will always expand to full height.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_body_area',
        ];
        $fields['body_area_height'] = [
            'label'             => __('Content Max Height', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => 0,
                'max'  => 5000,
                'step' => 10,
                'min_limit' => 0,
                'max_limit' => 5000,
            ],
            'fixed_range'      => true,
            'validate_unit'    => true,
			'fixed_unit'       => 'px',
            'default'           => '400px',
            'default_on_front'  => '400px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the maximum height of the content area.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_body_area',
            'show_if'	        =>	[
                'limit_content_height'  => 'on',
            ],
        ];
        $fields['body_area_scroll_color'] = [
            'label'             => __('Scrollbar Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#4c5866',
            'hover'             => 'tabs',
            'description'       => __('Set the color of the content area scrollbar.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_body_area',
            'show_if'	        =>	[
                'limit_content_height'  => 'on',
            ],
        ];
        $fields['body_area_scroll_width'] = [
            'label'             => __('Scrollbar Width', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => 0,
                'max'  => 20,
                'step' => 1,
                'min_limit' => 0,
                'max_limit' => 50,
            ],
            'fixed_range'      => true,
            'validate_unit'    => true,
			'fixed_unit'       => 'px',
            'default'           => '4px',
            'default_on_front'  => '4px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the width of the content area scrollbar.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_body_area',
            'show_if'	        =>	[
                'limit_content_height'  => 'on',
            ],
        ];
        $fields['body_area_margin'] = [
            'label'             => __('Content Area Margin', $this->td),
            'type'              => 'custom_margin',
            'default'           => '0px|0px|0px|0px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the outside of the content area.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_body_area',
        ];
        $fields['body_area_padding'] = [
            'label'             => __('Content Area Padding', $this->td),
            'type'              => 'custom_padding',
            'default'           => '15px|23px|15px|23px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the inside of the content area.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_body_area',
        ];
        $fields['body_area_bg_color'] = [
            'label'             => __('Content Area Background Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#f9f9f9',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content area background.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_body_area',
        ];

        // Content Heading Links
        // All
        $fields['body_area_text_link_color'] = [
            'label'             => __('Content Heading Link Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#000000',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'all',
        ];
        $fields['body_area_text_link_underline'] = [
            'label'             => __('Content Heading Link Underline Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading links underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'all'
        ];
        $fields['body_area_text_link_underline_thickness'] = [
            'label'             => __('Content Heading Link Underline Thickness', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => 0,
                'max'  => 20,
                'step' => 1,
                'min_limit' => 0,
                'max_limit' => 20,
            ],
            'fixed_range'      => true,
            'validate_unit'    => true,
			'fixed_unit'       => 'px',
            'default'           => '1px',
            'default_on_front'  => '1px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the width of the content heading link underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'all'
        ];
        $fields['body_area_text_link_bg'] = [
            'label'             => __('Content Heading Link Background Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading links background.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'all',
        ];
        $fields['body_area_text_link_margin'] = [
            'label'             => __('Content Heading Link Margin', $this->td),
            'type'              => 'custom_margin',
            'default'           => '0px|0px|0px|0px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the outside of the content heading links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'all',
        ];
        $fields['body_area_text_link_padding'] = [
            'label'             => __('Content Heading Link Padding', $this->td),
            'type'              => 'custom_padding',
            'default'           => '0px|0px|0px|0px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the inside of the content heading links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'all',
        ];

        // H1
        $fields['body_area_text_link_color_h1'] = [
            'label'             => __('Content Heading 1 Link Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#000000',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 1 links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h1',
        ];
        $fields['body_area_text_link_underline_h1'] = [
            'label'             => __('Content Heading 1 Link Underline Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 1 links underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h1',
        ];

        // H2
        $fields['body_area_text_link_color_h2'] = [
            'label'             => __('Content Heading 2 Link Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#000000',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 2 links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h2',
        ];
        $fields['body_area_text_link_underline_h2'] = [
            'label'             => __('Content Heading 2 Link Underline Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 2 links underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h2',
        ];

        // H3
        $fields['body_area_text_link_color_h3'] = [
            'label'             => __('Content Heading 3 Link Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#000000',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 3 links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h3',
        ];
        $fields['body_area_text_link_underline_h3'] = [
            'label'             => __('Content Heading 3 Link Underline Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 3 links underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h3',
        ];

        // H4
        $fields['body_area_text_link_color_h4'] = [
            'label'             => __('Content Heading 4 Link Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#000000',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 4 links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h4',
        ];
        $fields['body_area_text_link_underline_h4'] = [
            'label'             => __('Content Heading 4 Link Underline Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 4 links underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h4',
        ];

        // H5
        $fields['body_area_text_link_color_h5'] = [
            'label'             => __('Content Heading 5 Link Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#000000',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 5 links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h5',
        ];
        $fields['body_area_text_link_underline_h5'] = [
            'label'             => __('Content Heading 5 Link Underline Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 5 links underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h5',
        ];

        // H6
        $fields['body_area_text_link_color_h6'] = [
            'label'             => __('Content Heading 6 Link Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#000000',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 6 links.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h6',
        ];
        $fields['body_area_text_link_underline_h6'] = [
            'label'             => __('Content Heading 6 Link Underline Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            // 'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the content heading 6 links underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text',
            'sub_toggle'        => 'h6',
        ];

        // Content Heading Active Link Settings
        $fields['body_area_text_link_color_active'] = [
            'label'             => __('Active Content Heading Text Link Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the active links color.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text_active'
        ];
        $fields['body_area_text_link_underline_active'] = [
            'label'             => __('Active Content Heading Text Link Underline Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '#2ea3f2',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the active links underline color.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text_active'
        ];
        $fields['body_area_text_link_active_underline_thickness'] = [
            'label'             => __('Active Content Heading Link Underline Thickness', $this->td),
            'type'              => 'range',
            'range_settings'    => [
                'min'  => 0,
                'max'  => 20,
                'step' => 1,
                'min_limit' => 0,
                'max_limit' => 20,
            ],
            'fixed_range'      => true,
            'validate_unit'    => true,
			'fixed_unit'       => 'px',
            'default'           => '1px',
            'default_on_front'  => '1px',
            'option_category'   => 'basic_option',
            'description'       => __('Set the width of the active content heading link underline.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_heading_text_active'
        ];
        $fields['body_area_text_link_bg_active'] = [
            'label'             => __('Active Content Heading Text Link Background Color', $this->td),
            'type'              => 'color-alpha',
            'custom_color'      => true,
            'default'           => '',
            'hover'             => 'tabs',
            'description'       => __('Pick a color to be used for the active links background color.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug' => 'pac_dtoc_heading_text_active'
        ];
        $fields['body_area_text_link_margin_active'] = [
            'label'             => __('Active Content Heading Text Link Margin', $this->td),
            'type'              => 'custom_margin',
            'default'           => '0px|0px|0px|0px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the outside of the active content heading text link area.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_heading_text_active',
        ];
        $fields['body_area_text_link_padding_active'] = [
            'label'             => __('Active Content Heading Text Link Padding', $this->td),
            'type'              => 'custom_padding',
            'default'           => '0px|0px|0px|0px',
            'option_category'   => 'configuration',
            'description'       => __('Adjust the spacing around the inside of the active content heading text link area.', $this->td),
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'pac_dtoc_heading_text_active',
        ];
        
		return $fields;
	}

    protected function get_toc($content) {
        // get headlines
        $headings = $this->get_headings($content);
        if(!empty($headings)){
            if($headings[0]["tag"] > 1){
                $headings = $this->set_headings($headings);
            }
            $headings = $this->set_ids($headings);
        }
      
        // parse toc
        ob_start();
        echo "<div class='divi_table_of_contents' role=\"tree\" >";
        $this->parse_toc($headings, 0, 0);
        echo "</div>";
        return ob_get_clean();
    }
    protected function set_headings($headings) {
        $new_headings[0] = Array ( 'tag' => '1', 'id' => 'pac_remove_first_heading', 'name' => 'FirstHeading' );
        foreach($headings as $index => $value) {
            $new_headings[$index + 1] = $headings[$index];
        }
        return $new_headings;
    }
    protected function set_ids($headings) {
        foreach($headings as $index => $value) {
            if($value["name"] !== "" & $value["id"] === "NO"){
                $id = explode(" ",$value["name"]);
                $id = implode("_",$id);
                $id = str_replace("4x4", "44", $id);
                $id = html_entity_decode($id);
                $id = preg_replace('/[^\p{L}\p{N}]/u', '', $id);
            }
            else{
                $id = $value["id"];
            }
            $headings[$index]["id"] = $id;
        }
        return $headings;
    }
    protected function parse_toc($headings, $index, $recursive_counter) {
        // prevent errors
        if($recursive_counter > 300 || !count($headings)) return;
      
        // get all needed elements
        $last_element = $index > 0 ? $headings[$index - 1] : NULL;
        $current_element = $headings[$index];
        $next_element = NULL;
        if($index < count($headings) && isset($headings[$index + 1])) {
          $next_element = $headings[$index + 1];
        }

        // end recursive calls
        if($current_element == NULL) return;
      
        // get all needed variables
        $tag = intval($headings[$index]["tag"]);
        $id = $headings[$index]["id"];
        $name = $headings[$index]["name"];

        // parse toc begin or toc subpart begin
        
        if($last_element == NULL){
            $ul_class = "pac_dtoc_heading_level_". $tag;
            echo "<ul class=\"".$ul_class."\" role=\"group\" >";    // phpcs:ignore
        }
        if($last_element != NULL && $last_element["tag"] < $tag) {
            for($i = $last_element["tag"]; $i < $tag ; $i++) {
                $int_i = (int)$i;
                $int_i = $int_i + 1;
                $int_i = (string)$int_i;
                $ul_class = "pac_dtoc_heading_level_". $int_i;
                echo "<ul class=\"".$ul_class."\" role=\"group\" >";    // phpcs:ignore
            }
        }

        // build li class
        $li_classes = "pac_dtoc_li_heading_level_". $tag;
        // parse line begin
        echo "<li class=\"".$li_classes."\" role=\"treeitem\" >"."<div role=\"presentation\" ><span data-href='#" . $id . "' data-hl='" . $tag . "'></span><a href='#" . $id . "' id='" . $id . "_toc_headding'>" . $name . "</a></div></li>"; // phpcs:ignore

        if($next_element && intval($next_element["tag"]) > $tag) {
            $this->parse_toc($headings, $index + 1, $recursive_counter + 1);
        }

        // parse next line
        if($next_element && intval($next_element["tag"]) == $tag) {
            $this->parse_toc($headings, $index + 1, $recursive_counter + 1);
        }

        if ($next_element == NULL || ($next_element && $next_element["tag"] < $tag)) {
          echo "</ul>";
          if ($next_element && $tag - intval($next_element["tag"]) >= 2) {
            for($i = 1; $i < $tag - intval($next_element["tag"]); $i++) {
              echo "</ul>";
            }
          }
        }
      
        // parse top subpart
        if($next_element != NULL && $next_element["tag"] < $tag) {
            $this->parse_toc($headings, $index + 1, $recursive_counter + 1);
        }
    }
    protected function get_headings($content) {
        $headings = array();
        preg_match_all("/<h([1-6])(.*)>(.*)<\/h[1-6]>/", $content, $matches);
        
        for($i = 0; $i < count($matches[1]); $i++) {
            $headings[$i]["tag"] = $matches[1][$i];
      
            // get id
            $att_string = $matches[2][$i];
            preg_match('/id="(.*)"/i', $att_string , $id_matches);
            if(!empty($id_matches[1]) && substr_count($id_matches[1],'"') > 2) {
                $id_matches[1] = substr($id_matches[1], 0, stripos($id_matches[1], '"'));
            }
            if(!empty($id_matches[1])){
                $id_matches[1] = explode('"',$id_matches[1])[0];
                $headings[$i]["id"] = $id_matches[1];
            }
            else{
                $headings[$i]["id"] = "NO";
            }

            // get classes
            $att_string = $matches[2][$i];
            preg_match_all("/class=\"([^\"]*)\"/", $att_string , $class_matches);
            for($j = 0; $j < count($class_matches[1]); $j++) {
                $headings[$i]["classes"] = explode(" ", $class_matches[1][$j]);
            }

            $sup_exist = stripos($matches[0][$i], "<sup>");
            if($sup_exist >= 0 && $sup_exist !== "" && $sup_exist !== false){
                $sup_end = stripos($matches[0][$i], "</sup>") + strlen('</sup>');
                $new_match = substr($matches[0][$i], 0, $sup_exist);
                $new_match .= substr($matches[0][$i], $sup_end, strlen($matches[0][$i]));
                $matches[0][$i] = $new_match;
            }

            $headings[$i]["name"] = strip_tags($matches[0][$i]);
        }
        return $headings;
    }
    protected function shortcode_to_html($content) {
        $pattern = '/\[ess_grid alias="grid-\d+"\]\[\/ess_grid\]/';
        $content = preg_replace($pattern, '', $content);

        if ( has_shortcode($content, 'et_pb_wc_checkout_payment_info') | has_shortcode($content, 'woocommerce_checkout') ) {
            return $content;
        }

        $content = preg_replace('/ global_module="[^"]*"/', '', $content);
        $content_html = "";

        $pattern = '/\[pac_divi_table_of_contents(.*?)\[\/pac_divi_table_of_contents\]/i';
        $content = preg_replace($pattern, '', $content);

        $find = "[/et_pb_section]";
        $end = substr_count($content,"[et_pb_section");

        if($end === 0){
            $find = "[/et_pb_row]";
            $end = substr_count($content,"[et_pb_row");
            if($end === 0){
                $find = "[/et_pb_column]";
                $end = substr_count($content,"[et_pb_column");
                if($end === 0){
                    $et_pb_blog_extras = stripos($content_process, "[et_pb_blog_extras");
                    $dpdfg_filtergrid = stripos($content_process, "[dpdfg_filtergrid");
                    if($et_pb_blog_extras >= 0 && $et_pb_blog_extras !== "" && $et_pb_blog_extras !== false){
                        $pattern = '/\[et_pb_blog_extras(.*?)\]\[\/et_pb_blog_extras\]/i';
                        $content_process = preg_replace($pattern, '', $content_process);
                    }
                    if($dpdfg_filtergrid >= 0 && $dpdfg_filtergrid !== "" && $dpdfg_filtergrid !== false){
                        $pattern = '/\[dpdfg_filtergrid(.*?)\]\[\/dpdfg_filtergrid\]/i';
                        $content_process = preg_replace($pattern, '', $content_process);
                    }
                    $et_pb_blog_extras = stripos($content, "[et_pb_blog_extras");
                    $dpdfg_filtergrid = stripos($content, "[dpdfg_filtergrid");
                    if(!($et_pb_blog_extras >= 0 && $et_pb_blog_extras !== "" && $et_pb_blog_extras !== false) && !($dpdfg_filtergrid >= 0 && $dpdfg_filtergrid !== "" && $dpdfg_filtergrid !== false)){
                        $content_html .= do_shortcode($content,false);
                    }
                }
            }
        }

        $find_sc = array("[/et_pb_accordion][","[/et_pb_audio][","[/et_pb_counters][","[/et_pb_blog][","[/et_pb_blurb][","[/et_pb_button][","[/et_pb_cta]["
                 ,"[/et_pb_circle_counter][","[/et_pb_code][","[/et_pb_comments][","[/et_pb_contact_form][","[/et_pb_countdown_timer][","[/et_pb_divider][","[/et_pb_signup]["
                 ,"[/et_pb_filterable_portfolio][","[/et_pb_gallery][","[/et_pb_icon][","[/et_pb_image][","[/et_pb_login][","[/et_pb_map][","[/et_pb_menu]["
                 ,"[/et_pb_number_counter][","[/et_pb_team_member][","[/et_pb_portfolio][","[/et_pb_post_nav][","[/et_pb_post_slider][","[/et_pb_post_title][","[/et_pb_pricing_tables]["
                 ,"[/et_pb_search][","[/et_pb_sidebar][","[/et_pb_slider][","[/et_pb_social_media_follow][","[/et_pb_tabs][","[/et_pb_testimonial][","[/et_pb_text]["
                 ,"[/et_pb_toggle][","[/et_pb_video][","[/et_pb_video_slider][");
        $replace_sc = array("[/et_pb_accordion]'.'[","[/et_pb_audio]'.'[","[/et_pb_counters]'.'[","[/et_pb_blog]'.'[","[/et_pb_blurb]'.'[","[/et_pb_button]'.'[","[/et_pb_cta]'.'["
                 ,"[/et_pb_circle_counter]'.'[","[/et_pb_code]'.'[","[/et_pb_comments]'.'[","[/et_pb_contact_form]'.'[","[/et_pb_countdown_timer]'.'[","[/et_pb_divider]'.'[","[/et_pb_signup]'.'["
                 ,"[/et_pb_filterable_portfolio]'.'[","[/et_pb_gallery]'.'[","[/et_pb_icon]'.'[","[/et_pb_image]'.'[","[/et_pb_login]'.'[","[/et_pb_map]'.'[","[/et_pb_menu]'.'["
                 ,"[/et_pb_number_counter]'.'[","[/et_pb_team_member]'.'[","[/et_pb_portfolio]'.'[","[/et_pb_post_nav]'.'[","[/et_pb_post_slider]'.'[","[/et_pb_post_title]'.'[","[/et_pb_pricing_tables]'.'["
                 ,"[/et_pb_search]'.'[","[/et_pb_sidebar]'.'[","[/et_pb_slider]'.'[","[/et_pb_social_media_follow]'.'[","[/et_pb_tabs]'.'[","[/et_pb_testimonial]'.'[","[/et_pb_text]'.'["
                 ,"[/et_pb_toggle]'.'[","[/et_pb_video]'.'[","[/et_pb_video_slider]'.'[");

                 
        for($j = 0; $j < $end; $j++) {
            if($j+1 < $end){
                $content_process = substr($content, 0, stripos($content, $find)+strlen($find));
                $content = substr($content, stripos($content, $find)+strlen($find),strlen($content));
            }
            else{
                $content_process = $content;
            }

            $special_section = strpos($content_process, 'specialty="on"');
            if($special_section >= 0 && $special_section !== "" && $special_section !== false){
                $shortcode_pattern = '/\[(\w+)\s[^\]]+\]([^[]*)\[\/\1\]/';
                preg_match_all($shortcode_pattern, $content_process, $matches);
                foreach ($matches[0] as $shortcode) {
                    $et_pb_blog_extras = stripos($content_process, "[et_pb_blog_extras");
                    $dpdfg_filtergrid = stripos($content_process, "[dpdfg_filtergrid");
                    if($et_pb_blog_extras >= 0 && $et_pb_blog_extras !== "" && $et_pb_blog_extras !== false){
                        $pattern = '/\[et_pb_blog_extras(.*?)\]\[\/et_pb_blog_extras\]/i';
                        $content_process = preg_replace($pattern, '', $content_process);
                    }
                    if($dpdfg_filtergrid >= 0 && $dpdfg_filtergrid !== "" && $dpdfg_filtergrid !== false){
                        $pattern = '/\[dpdfg_filtergrid(.*?)\]\[\/dpdfg_filtergrid\]/i';
                        $content_process = preg_replace($pattern, '', $content_process);
                    }
                    $et_pb_blog_extras = stripos($content_process, "[et_pb_blog_extras");
                    $dpdfg_filtergrid = stripos($content_process, "[dpdfg_filtergrid");
                    if(!($et_pb_blog_extras >= 0 && $et_pb_blog_extras !== "" && $et_pb_blog_extras !== false) && !($dpdfg_filtergrid >= 0 && $dpdfg_filtergrid !== "" && $dpdfg_filtergrid !== false)){
                        $content_html .= do_shortcode($shortcode,false);
                    }
                }
            }else{
                for($k = 0; $k < count($find_sc); $k++) {
                    $content_process = str_replace($find_sc[$k],$replace_sc[$k],$content_process);
                }
                $col_find = "]'.'[/et_pb_column]";
                $col_replace = "][/et_pb_column]";
                $content_process = str_replace($col_find,$col_replace,$content_process);
                
                $remove_section = strpos($content_process, 'et_pb_section');
                if($remove_section >= 0 && $remove_section !== "" && $remove_section !== false){
                    $content_process = substr($content_process, stripos($content_process, '[et_pb_row'), strlen($content_process));
                    $content_process = str_replace('[/et_pb_section]','',$content_process);
                }
                $et_pb_blog_extras = stripos($content_process, "[et_pb_blog_extras");
                $dpdfg_filtergrid = stripos($content_process, "[dpdfg_filtergrid");
                if($et_pb_blog_extras >= 0 && $et_pb_blog_extras !== "" && $et_pb_blog_extras !== false){
                    $pattern = '/\[et_pb_blog_extras(.*?)\]\[\/et_pb_blog_extras\]/i';
                    $content_process = preg_replace($pattern, '', $content_process);
                }
                if($dpdfg_filtergrid >= 0 && $dpdfg_filtergrid !== "" && $dpdfg_filtergrid !== false){
                    $pattern = '/\[dpdfg_filtergrid(.*?)\]\[\/dpdfg_filtergrid\]/i';
                    $content_process = preg_replace($pattern, '', $content_process);
                }
                $et_pb_blog_extras = stripos($content_process, "[et_pb_blog_extras");
                $dpdfg_filtergrid = stripos($content_process, "[dpdfg_filtergrid");
                if(!($et_pb_blog_extras >= 0 && $et_pb_blog_extras !== "" && $et_pb_blog_extras !== false) && !($dpdfg_filtergrid >= 0 && $dpdfg_filtergrid !== "" && $dpdfg_filtergrid !== false)){
                    if($j === 0){
                        $content_html = do_shortcode($content_process,false);
                    }
                    else{
                        $content_html .= do_shortcode($content_process,false);
                    }
                }

            }
        }
        return $content_html;
    }
    protected function exclude_shortcode($content) {
        $count = substr_count($content,"pac-dtocm-exclude");
        while ($count > 0) {
            $index = strpos($content,"pac-dtocm-exclude");
            $start = substr($content, 0, $index);
            $end = substr($content, $index, strlen($content));
            $tag = strrpos($start,'[');
            $New_content = substr($start, 0, $tag);
            $tag = substr($start, $tag+1, strlen($start));
            $tag = explode(" ",$tag)[0];
            $tag = "[/" . $tag . "]";
            $index = strpos($end,$tag);
            $New_content .= substr($end, $index + strlen($tag), strlen($end));
            $content = $New_content;
            $count = substr_count($content,"pac-dtocm-exclude");
        }
        return $content;
    }
    protected function include_shortcode($content) {
        $count = substr_count($content,"pac-dtocm-include");
        $returnContent = '';
        while ($count > 0) {
            $index = strpos($content,"pac-dtocm-include");
            $start = substr($content, 0, $index);
            $end = substr($content, $index, strlen($content));
            $tag = strrpos($start,'[');
            $newContent = substr($start, $tag, strlen($start));
            $New_content = substr($start, 0, $tag);
            $tag = substr($start, $tag+1, strlen($start));
            $tag = explode(" ",$tag)[0];
            $tag = "[/" . $tag . "]";
            $index = strpos($end,$tag);
            $newContent .= substr($end, 0, $index + strlen($tag));
            $returnContent .= $this->shortcode_to_html($newContent);
            $New_content .= substr($end, $index + strlen($tag), strlen($end));
            $content = $New_content;
            $count = substr_count($content,"pac-dtocm-include");
        }
        return $returnContent;
    }
    protected function heading_count($content) {
        // get headlines
        $headings = $this->get_headings($content);

        foreach($headings as $ind => $val) {
            if($headings[$ind]["name"] === ""){
                unset($headings[$ind]);
            }
        }      
        
        return count($headings);
    }
    protected function get_color_value( $color ) {
		if ( $color !== null && false === strpos( $color, 'gcid-' ) ) {
			return $color;
		}

		$global_colors = et_builder_get_all_global_colors();

		// If there are no matching Global Colors, return null.
		if ( ! is_array( $global_colors ) ) {
			return null;
		}

		foreach ( $global_colors as $gcid => $details ) {
			if ( false !== strpos( $color, $gcid ) ) {
				// Match substring (needed for attrs like gradient stops).
				$color = str_replace( $gcid, $details['color'], $color );
			}
		}

		return $color;
	}

    public function render( $attrs, $content, $render_slug ) {
        if (!function_exists('et_pb_is_pagebuilder_used') | !function_exists('et_fb_is_theme_builder_used_on_page') | !function_exists('et_pb_get_icon_font_family') | !method_exists($this, 'get_color_value')) {
            return sprintf('<div class="pac_dtoc_notice">Notice: Please update your Divi Version as it is outdated.</div>');
        }
        $page_content = null;
        // Get Page Content to get headings
        $page_id = get_the_ID();
        $page = get_post($page_id);
        $wordpress_builder = et_pb_is_pagebuilder_used($page_id);
        if(gettype($page) === 'object'){
            $page_content = $page->post_content;
        }

        if($wordpress_builder !== 1){
            $pattern = '/<!--\s*wp:block\s*{\s*"ref"\s*:\s*(\d+)\s*}\s*\/-->/';
            $page_content = preg_replace_callback($pattern, function($matches) {
                $number = $matches[1];
                $wpBlockContent = get_post($number);
                if ($wpBlockContent) {
                    return $wpBlockContent->post_content;
                } else {
                    return '';
                }
            }, $page_content);
        }
        
        // Check if theme builder template applied
        $content_template_val = et_fb_is_theme_builder_used_on_page();

        if($content_template_val == 1 && $content_template_val !== "" && $content_template_val !== false){
            // if theme builder template applied then get template body content
            $request            = ET_Theme_Builder_Request::from_current();
            $templates          = et_theme_builder_get_theme_builder_templates( true );
            $settings           = et_theme_builder_get_flat_template_settings_options();
            if($templates !== null & $settings !== null){
                $tb_template        = $request->get_template( $templates, $settings );
                $layout_id          = et_()->array_get( $tb_template, 'layouts.body.id', 0 );
            }
            $content_template_val = ($layout_id > 0) ? 1 : 0;
        }

        if($content_template_val == 1 && $content_template_val !== "" && $content_template_val !== false && $layout_id !== null && $layout_id !== 0){
            $content_post = get_post($layout_id)->post_content;
            $postContent = stripos($content_post, "[et_pb_post_content ");
            $postContentFull = stripos($content_post, "[et_pb_fullwidth_post_content ");
            if($postContent){
                $pattern = '/\[et_pb_post_content(.*?)\]\[\/et_pb_post_content\]/i';
                $content_post = preg_replace($pattern, $page_content, $content_post);
            }else{
                if($postContentFull){
                    $pattern = '/\[et_pb_fullwidth_post_content(.*?)\]\[\/et_pb_fullwidth_post_content\]/i';
                    $content_post = preg_replace($pattern, $page_content, $content_post);
                }
            }
            if($this->props['exclude_headings_by_class'] === 'on'){
                $content_post = $this->exclude_shortcode($content_post);
                $content_html = $wordpress_builder == 1 ? $this->shortcode_to_html($content_post) : $content_post;
            }elseif($this->props['exclude_headings_by_class'] === 'include'){
                $content_html = $this->include_shortcode($content_post);
            }else{
                $content_html = $wordpress_builder == 1 ? $this->shortcode_to_html($content_post) : $content_post;
            }
        }else{
            // Exclude by class
            if($this->props['exclude_headings_by_class'] === 'on'){
                $page_content = $this->exclude_shortcode($page_content);
                $content_html = $wordpress_builder == 1 ? $this->shortcode_to_html($page_content) : $page_content;
            }elseif($this->props['exclude_headings_by_class'] === 'include'){
                $content_html = $this->include_shortcode($page_content);
            }else{
                $content_html = $wordpress_builder == 1 ? $this->shortcode_to_html($page_content) : $page_content;
            }
        }

        // Enable and disable option based on other options
        $hide_show_header = isset($this->props['hide_show_header']) ? $this->props['hide_show_header'] : 'on';
        $hide_show_header_tablet = isset($this->props['hide_show_header_tablet']) && strpos($this->props['hide_show_header_last_edited'], 'on') !== false ? $this->props['hide_show_header_tablet'] : $hide_show_header;
        $hide_show_header_phone = isset($this->props['hide_show_header_phone']) && strpos($this->props['hide_show_header_last_edited'], 'on') !== false ? $this->props['hide_show_header_phone'] : $hide_show_header_tablet;

        $this->props['allow_collapse_minimize'] = isset($this->props['allow_collapse_minimize']) && $hide_show_header === 'on' ? $this->props['allow_collapse_minimize'] : 'off';
        $this->props['allow_collapse_minimize_tablet'] = isset($this->props['allow_collapse_minimize_tablet']) && strpos($this->props['allow_collapse_minimize_last_edited'], 'on') !== false ? ($hide_show_header_tablet === 'on' ? $this->props['allow_collapse_minimize_tablet'] : 'off')  : $this->props['allow_collapse_minimize'];
        $this->props['allow_collapse_minimize_phone']  = isset($this->props['allow_collapse_minimize_phone']) && strpos($this->props['allow_collapse_minimize_last_edited'], 'on') !== false ? ($hide_show_header_phone === 'on' ? $this->props['allow_collapse_minimize_phone'] : 'off' ) : $this->props['allow_collapse_minimize_tablet'];

        $this->props['default_state'] = isset($this->props['default_state']) && $this->props['allow_collapse_minimize'] === 'on' ? $this->props['default_state'] : 'open';
        $this->props['default_state_tablet'] = isset($this->props['default_state_tablet']) && strpos($this->props['default_state_last_edited'], 'on') !== false ? ($this->props['allow_collapse_minimize_tablet'] === 'on' ? $this->props['default_state_tablet'] : 'open')  : $this->props['default_state'];
        $this->props['default_state_phone']  = isset($this->props['default_state_phone']) && strpos($this->props['default_state_last_edited'], 'on') !== false ? ($this->props['allow_collapse_minimize_phone'] === 'on' ? $this->props['default_state_phone'] : 'open' ) : $this->props['default_state_tablet'];

        $this->props['collapse_when_sticky']  = $this->props['sticky_position']  !== "none" ? $this->props['collapse_when_sticky'] : 'off';
        $this->props['collapse_when_sticky_tablet']  = isset($this->props['collapse_when_sticky_tablet']) && strpos($this->props['collapse_when_sticky_last_edited'], 'on') !== false ? $this->props['collapse_when_sticky_tablet'] : $this->props['collapse_when_sticky'];
        $this->props['collapse_when_sticky_tablet']  = $this->props['sticky_position']  !== "none" ? $this->props['collapse_when_sticky_tablet'] : 'off';
        $this->props['collapse_when_sticky_phone']  = isset($this->props['collapse_when_sticky_phone']) && strpos($this->props['collapse_when_sticky_last_edited'], 'on') !== false ? $this->props['collapse_when_sticky_phone'] : $this->props['collapse_when_sticky'];
        $this->props['collapse_when_sticky_phone']  = $this->props['sticky_position']  !== "none" ? $this->props['collapse_when_sticky_phone'] : 'off';

        $this->props['minimize_toc_as_icon']  = isset($this->props['minimize_toc_as_icon']) && $this->props['allow_collapse_minimize'] === 'on'  && $this->props['show_icon_in_toc_header'] === 'on'  ? $this->props['minimize_toc_as_icon'] : 'off';
        $this->props['minimize_toc_as_icon_tablet']  = isset($this->props['minimize_toc_as_icon_tablet']) && strpos($this->props['minimize_toc_as_icon_last_edited'], 'on') !== false ? $this->props['minimize_toc_as_icon_tablet'] : $this->props['minimize_toc_as_icon'];
        $this->props['minimize_toc_as_icon_phone']  = isset($this->props['minimize_toc_as_icon_phone']) && strpos($this->props['minimize_toc_as_icon_last_edited'], 'on') !== false ? $this->props['minimize_toc_as_icon_phone'] : $this->props['minimize_toc_as_icon'];

        
        if($this->props['icon_position'] === 'left'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_title_area',
                'declaration' => sprintf('flex-direction:row-reverse;'),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_title_area .pac_dtoc_icon_responsive',
                'declaration' => sprintf('margin-right:12px;'),
            ));
        }
        // Show and hide header
        if($hide_show_header === 'off'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_title_area',
                'declaration' => sprintf('display:none !important;'),
                'media_query' => ET_Builder_Element::get_media_query('min_width_981'),
            ));
        }
        if($hide_show_header_tablet === 'off'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_title_area',
                'declaration' => sprintf('display:none !important;'),
                'media_query' => ET_Builder_Element::get_media_query('768_980'),
            ));
        }
        if($hide_show_header_phone === 'off'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_title_area',
                'declaration' => sprintf('display:none !important;'),
                'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
            ));
        }

        // Function to apply Margin & Padding
        $dtoc_custom_margin_padding = function ($selector, $spacings, $property) use ($render_slug) {
            if (empty($this->props[$spacings])) {
                return;
            }
            $spacings_desktop = isset($this->props[$spacings]) ? esc_html($this->props[$spacings]) : null;
            
            $explode_desktop = explode("|", $spacings_desktop);
            foreach ($explode_desktop as &$element) {
				if (empty($element)) {
					$element = '0px';
				}
			}
            $spacings_desktop = implode(" ",array_splice($explode_desktop, 0, 4));
            
            if (!empty($spacings_desktop)) {
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => $selector,
                    'declaration' => "{$property}: {$spacings_desktop};",
                ));
            }
            $spacings_tablet = isset($this->props[$spacings."_tablet"]) ? esc_html($this->props[$spacings."_tablet"]) : $spacings_desktop;

            $explode_tablet = explode("|", $spacings_tablet);
            foreach ($explode_tablet as &$element) {
				if (empty($element)) {
					$element = '0px';
				}
			}
            $spacings_tablet = implode(" ",array_splice($explode_tablet, 0, 4));

            if (!empty($spacings_tablet)) {
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => $selector,
                    'declaration' => "{$property}: {$spacings_tablet};",
                    'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
                ));
            }
            $spacings_phone = isset($this->props[$spacings."_phone"]) ? esc_html($this->props[$spacings."_phone"]) : $spacings_tablet;

            $explode_phone = explode("|", $spacings_phone);
            foreach ($explode_phone as &$element) {
				if (empty($element)) {
					$element = '0px';
				}
			}
            $spacings_phone = implode(" ",array_splice($explode_phone, 0, 4));

            if (!empty($spacings_phone)) {
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => $selector,
                    'declaration' => "{$property}: {$spacings_phone};",
                    'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
                ));
            }
        };

        // Apply Title Containers CSS
        if (isset($this->props['title_container_margin'])) {
            $selector =  "%%order_class%% .pac_dtoc_title_area";
            $dtoc_custom_margin_padding($selector, 'title_container_margin', 'margin');
        }
        if (isset($this->props['title_container_padding'])) {
            $selector =  "%%order_class%% .pac_dtoc_title_area";
            $dtoc_custom_margin_padding($selector, 'title_container_padding', 'padding');
        }
        if (isset($this->props['title_container_bg_color'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_title_area',
                'declaration' => sprintf('background-color: %1$s;', $this->get_color_value($this->props['title_container_bg_color'])),
            ));
        }
        $is_title_container_bg_color_hover = et_pb_hover_options()->is_enabled('title_container_bg_color',$this->props);
        if($is_title_container_bg_color_hover){
            $title_container_bg_color_hover = et_pb_hover_options()->get_value('title_container_bg_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_title_area:hover',
                'declaration' => sprintf('background-color: %1$s ;', $this->get_color_value($title_container_bg_color_hover)),
            ));
        }

        // Open Icon design settings
        if (isset($this->props['open_icon_color'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_opened_icon',
                'declaration' => sprintf('color: %1$s;', $this->get_color_value($this->props['open_icon_color'])),
            ));
        }
        $is_icon_color_hover = et_pb_hover_options()->is_enabled('open_icon_color',$this->props);
        if($is_icon_color_hover){
            $icon_color_hover = et_pb_hover_options()->get_value('open_icon_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_opened_icon:hover',
                'declaration' => sprintf('color: %1$s ;', $this->get_color_value($icon_color_hover)),
            ));
        }
        if (isset($this->props['open_icon_size'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_opened_icon',
                'declaration' => sprintf('font-size: %1$s;', esc_attr($this->props['open_icon_size'])),
            ));
        }
        // Close Icon design settings
        if (isset($this->props['close_icon_color'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_closed_icon',
                'declaration' => sprintf('color: %1$s;', $this->get_color_value($this->props['close_icon_color'])),
            ));
        }
        $is_icon_color_hover = et_pb_hover_options()->is_enabled('close_icon_color',$this->props);
        if($is_icon_color_hover){
            $icon_color_hover = et_pb_hover_options()->get_value('close_icon_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_closed_icon:hover',
                'declaration' => sprintf('color: %1$s ;', $this->get_color_value($icon_color_hover)),
            ));
        }
        if (isset($this->props['close_icon_size'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_closed_icon',
                'declaration' => sprintf('font-size: %1$s;', esc_attr($this->props['close_icon_size'])),
            ));
        }

        // Apply Body Area CSS
        if($this->props['limit_content_height'] === 'on'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area',
                'declaration' => sprintf('max-height: %1$s;overflow-y:auto !important;', esc_attr($this->props['body_area_height'])),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area::-webkit-scrollbar',
                'declaration' => sprintf('width:%1$s;', $this->props['body_area_scroll_width']),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area::-webkit-scrollbar-thumb',
                'declaration' => sprintf('background-color:%1$s;', $this->get_color_value($this->props['body_area_scroll_color'])),
            ));
            $is_body_area_scroll_color_hover = et_pb_hover_options()->is_enabled('body_area_scroll_color',$this->props);
            if($is_body_area_scroll_color_hover){
                $body_area_scroll_color_hover = et_pb_hover_options()->get_value('body_area_scroll_color',$this->props);
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .pac_dtoc_body_area::-webkit-scrollbar-thumb:hover',
                    'declaration' => sprintf('background-color: %1$s;', $this->get_color_value($body_area_scroll_color_hover)),
                ));
            }
        }
        // Highlighted Keyword Color settings
        ET_Builder_Module::set_style($render_slug, array(
            'selector' => 'mark',
            'declaration' => sprintf('color:%1$s;background-color:%2$s;', $this->get_color_value($this->props['mark_color']),$this->get_color_value($this->props['mark_bg_color'])),
        ));
        $is_mark_color_hover = et_pb_hover_options()->is_enabled('mark_color',$this->props);
        if($is_mark_color_hover){
            $mark_color_hover = et_pb_hover_options()->get_value('mark_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => 'mark:hover',
                'declaration' => sprintf('color: %1$s;', $this->get_color_value($mark_color_hover)),
            ));
        }
        $is_mark_bg_color_hover = et_pb_hover_options()->is_enabled('mark_bg_color',$this->props);
        if($is_mark_bg_color_hover){
            $mark_bg_color_hover = et_pb_hover_options()->get_value('mark_bg_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => 'mark:hover',
                'declaration' => sprintf('background-color: %1$s;', $this->get_color_value($mark_bg_color_hover)),
            ));
        }
        ET_Builder_Module::set_style($render_slug, array(
            'selector' => '%%order_class%% .pac_dtoc_search_input::placeholder',
            'declaration' => sprintf('color:%1$s;', $this->get_color_value($this->props['mark_field_placeholder_color'])),
        ));
        $is_mark_field_placeholder_color_hover = et_pb_hover_options()->is_enabled('mark_field_placeholder_color',$this->props);
        if($is_mark_field_placeholder_color_hover){
            $mark_field_placeholder_color_hover = et_pb_hover_options()->get_value('mark_field_placeholder_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_search_input:hover::placeholder',
                'declaration' => sprintf('color: %1$s;', $this->get_color_value($mark_field_placeholder_color_hover)),
            ));
        }
        ET_Builder_Module::set_style($render_slug, array(
            'selector' => '%%order_class%% .pac_dtoc_search_input',
            'declaration' => sprintf('background-color:%1$s !important;color:%2$s;', $this->get_color_value($this->props['mark_field_bg_color']),$this->get_color_value($this->props['mark_field_text_color'])),
        ));
        $is_mark_field_bg_color_hover = et_pb_hover_options()->is_enabled('mark_field_bg_color',$this->props);
        if($is_mark_field_bg_color_hover){
            $mark_field_bg_color_hover = et_pb_hover_options()->get_value('mark_field_bg_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_search_input:hover',
                'declaration' => sprintf('background-color: %1$s !important;', $this->get_color_value($mark_field_bg_color_hover)),
            ));
        }
        $is_mark_field_text_color_hover = et_pb_hover_options()->is_enabled('mark_field_text_color',$this->props);
        if($is_mark_field_text_color_hover){
            $mark_field_text_color_hover = et_pb_hover_options()->get_value('mark_field_text_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_search_input:hover',
                'declaration' => sprintf('color: %1$s;', $this->get_color_value($mark_field_text_color_hover)),
            ));
        }
        ET_Builder_Module::set_style($render_slug, array(
            'selector' => '%%order_class%% .pac_dtoc_search_input:focus',
            'declaration' => sprintf('background-color:%1$s !important;color:%2$s;border-color:%3$s;', $this->get_color_value($this->props['mark_field_focus_bg_color']),$this->get_color_value($this->props['mark_field_focus_text_color']),$this->get_color_value($this->props['mark_field_focus_border_color'])),
        ));
        $is_mark_field_focus_bg_color_hover = et_pb_hover_options()->is_enabled('mark_field_focus_bg_color',$this->props);
        if($is_mark_field_focus_bg_color_hover){
            $mark_field_focus_bg_color_hover = et_pb_hover_options()->get_value('mark_field_focus_bg_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_search_input:focus:hover',
                'declaration' => sprintf('background-color: %1$s !important;', $this->get_color_value($mark_field_focus_bg_color_hover)),
            ));
        }
        $is_mark_field_focus_text_color_hover = et_pb_hover_options()->is_enabled('mark_field_focus_text_color',$this->props);
        if($is_mark_field_focus_text_color_hover){
            $mark_field_focus_text_color_hover = et_pb_hover_options()->get_value('mark_field_focus_text_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_search_input:focus:hover',
                'declaration' => sprintf('color: %1$s;', $this->get_color_value($mark_field_focus_text_color_hover)),
            ));
        }
        $is_mark_field_focus_border_color_hover = et_pb_hover_options()->is_enabled('mark_field_focus_border_color',$this->props);
        if($is_mark_field_focus_border_color_hover){
            $mark_field_focus_border_color_hover = et_pb_hover_options()->get_value('mark_field_focus_border_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_search_input:focus:hover',
                'declaration' => sprintf('border-color: %1$s;', $this->get_color_value($mark_field_focus_border_color_hover)),
            ));
        }
        if (isset($this->props['mark_field_margin'])) {
            $selector =  "%%order_class%% .pac_dtoc_search_keyword";
            $dtoc_custom_margin_padding($selector, 'mark_field_margin', 'margin');
        }
        if (isset($this->props['mark_field_padding'])) {
            $selector =  "%%order_class%% .pac_dtoc_search_input";
            $dtoc_custom_margin_padding($selector, 'mark_field_padding', 'padding');
        }

        if (isset($this->props['body_area_margin'])) {
            $selector =  "%%order_class%% .pac_dtoc_body_area";
            $dtoc_custom_margin_padding($selector, 'body_area_margin', 'margin');
        }
        if (isset($this->props['body_area_padding'])) {
            $selector =  "%%order_class%% .pac_dtoc_body_area";
            $dtoc_custom_margin_padding($selector, 'body_area_padding', 'padding');
        }
        if (isset($this->props['body_area_bg_color'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area',
                'declaration' => sprintf('background-color: %1$s;', $this->get_color_value($this->props['body_area_bg_color'])),
            ));
        }
        $is_body_area_bg_color_hover = et_pb_hover_options()->is_enabled('body_area_bg_color',$this->props);
        if($is_body_area_bg_color_hover){
            $body_area_bg_color_hover = et_pb_hover_options()->get_value('body_area_bg_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area:hover',
                'declaration' => sprintf('background-color: %1$s ;', $this->get_color_value($body_area_bg_color_hover)),
            ));
        }

        // Content Heading Text Link Color
        if (isset($this->props['body_area_text_link_color'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li div a,%%order_class%% li div',
                'declaration' => sprintf('color: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_color'])),
            ));
        }
        $is_body_area_text_link_color_hover = et_pb_hover_options()->is_enabled('body_area_text_link_color',$this->props);
        if($is_body_area_text_link_color_hover){
            $body_area_text_link_color_hover = et_pb_hover_options()->get_value('body_area_text_link_color',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li div span:hover + a,%%order_class%% li div:hover',
                'declaration' => sprintf('color: %1$s !important;', $this->get_color_value($body_area_text_link_color_hover)),
            ));
        }
        if (isset($this->props['body_area_text_link_underline'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li div a:after',
                'declaration' => sprintf('background-color: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_underline'])),
            ));
        }
        $is_body_area_text_link_underline_hover = et_pb_hover_options()->is_enabled('body_area_text_link_underline',$this->props);
        if($is_body_area_text_link_underline_hover){
            $body_area_text_link_underline_hover = et_pb_hover_options()->get_value('body_area_text_link_underline',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li div span:hover + a:after',
                'declaration' => sprintf('background-color: %1$s !important;', $this->get_color_value($body_area_text_link_underline_hover) ),
            ));
        }
        if (isset($this->props['body_area_text_link_underline_thickness'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li:not(.active) div a:after',
                'declaration' => sprintf('height: %1$s !important;', $this->props['body_area_text_link_underline_thickness']),
            ));
        }
        if (isset($this->props['body_area_text_link_active_underline_thickness'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li.active div a:after',
                'declaration' => sprintf('height: %1$s !important;', $this->props['body_area_text_link_active_underline_thickness']),
            ));
        }
        if (isset($this->props['body_area_text_link_bg'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li',
                'declaration' => sprintf('background: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_bg'])),
            ));
        }
        $is_body_area_text_link_bg_hover = et_pb_hover_options()->is_enabled('body_area_text_link_bg',$this->props);
        if($is_body_area_text_link_bg_hover){
            $body_area_text_link_bg_hover = et_pb_hover_options()->get_value('body_area_text_link_bg',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li:hover',
                'declaration' => sprintf('background: %1$s !important;', $this->get_color_value($body_area_text_link_bg_hover)),
            ));
        }
        if (isset($this->props['body_area_text_link_margin'])) {
            $selector =  "%%order_class%% li";
            $dtoc_custom_margin_padding($selector, 'body_area_text_link_margin', 'margin');
        }
        if (isset($this->props['body_area_text_link_padding_active'])) {
            $selector =  "%%order_class%% li";
            $dtoc_custom_margin_padding($selector, 'body_area_text_link_padding', 'padding');
        }
        // active
        if (isset($this->props['body_area_text_link_color_active'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li.active div a, %%order_class%% li.active div',
                'declaration' => sprintf('color: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_color_active'])),
            ));
        }
        $is_body_area_text_link_color_active_hover = et_pb_hover_options()->is_enabled('body_area_text_link_color_active',$this->props);
        if($is_body_area_text_link_color_active_hover){
            $body_area_text_link_color_active_hover = et_pb_hover_options()->get_value('body_area_text_link_color_active',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li.active div span:hover + a, %%order_class%% li.active div:hover',
                'declaration' => sprintf('color: %1$s !important;', $this->get_color_value($body_area_text_link_color_active_hover)),
            ));
        }
        if (isset($this->props['body_area_text_link_underline_active'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li.active div a:after',
                'declaration' => sprintf('background-color: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_underline_active'])),
            ));
        }
        $is_body_area_text_link_underline_active_hover = et_pb_hover_options()->is_enabled('body_area_text_link_underline_active',$this->props);
        if($is_body_area_text_link_underline_active_hover){
            $body_area_text_link_underline_active_hover = et_pb_hover_options()->get_value('body_area_text_link_underline_active',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li.active div span:hover + a:after',
                'declaration' => sprintf('background-color: %1$s !important;', $this->get_color_value($body_area_text_link_underline_active_hover)),
            ));
        }
        if (isset($this->props['body_area_text_link_bg_active'])) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li.active',
                'declaration' => sprintf('background: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_bg_active'])),
            ));
        }
        $is_body_area_text_link_bg_active_hover = et_pb_hover_options()->is_enabled('body_area_text_link_bg_active',$this->props);
        if($is_body_area_text_link_bg_active_hover){
            $body_area_text_link_bg_active_hover = et_pb_hover_options()->get_value('body_area_text_link_bg_active',$this->props);
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% li.active:hover',
                'declaration' => sprintf('background: %1$s !important;', $this->get_color_value($body_area_text_link_bg_active_hover)),
            ));
        }
        if (isset($this->props['body_area_text_link_margin_active'])) {
            $selector =  "%%order_class%% li.active";
            $dtoc_custom_margin_padding($selector, 'body_area_text_link_margin_active', 'margin');
        }
        if (isset($this->props['body_area_text_link_padding_active'])) {
            $selector =  "%%order_class%% li.active";
            $dtoc_custom_margin_padding($selector, 'body_area_text_link_padding_active', 'padding');
        }

        // function to apply css to link text color and underline color
        $dtoc_set_text_underline_color = function ($level) use ($render_slug) {
            if (isset($this->props['body_area_text_link_color_h'.$level])) {
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% li.pac_dtoc_li_heading_level_'.$level.' div a, %%order_class%% li.pac_dtoc_li_heading_level_'.$level.' div',
                    'declaration' => sprintf('color: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_color_h'.$level])),
                ));
            }
            $is_body_area_text_link_color_hover = et_pb_hover_options()->is_enabled('body_area_text_link_color_h'.$level,$this->props);
            if($is_body_area_text_link_color_hover){
                $body_area_text_link_color_hover = et_pb_hover_options()->get_value('body_area_text_link_color_h'.$level,$this->props);
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% li.pac_dtoc_li_heading_level_'.$level.' div span:hover + a, %%order_class%% li.pac_dtoc_li_heading_level_'.$level.' div:hover',
                    'declaration' => sprintf('color: %1$s !important;', $this->get_color_value($body_area_text_link_color_hover)),
                ));
            }
            if (isset($this->props['body_area_text_link_underline_h'.$level])) {
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% li.pac_dtoc_li_heading_level_'.$level.' div a:after',
                    'declaration' => sprintf('background: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_underline_h'.$level])),
                ));
            }
            $is_body_area_text_link_underline_hover = et_pb_hover_options()->is_enabled('body_area_text_link_underline_h'.$level,$this->props);
            if($is_body_area_text_link_underline_hover){
                $body_area_text_link_underline_hover = et_pb_hover_options()->get_value('body_area_text_link_underline_h'.$level,$this->props);
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% li.pac_dtoc_li_heading_level_'.$level.' div span:hover + a:after',
                    'declaration' => sprintf('background: %1$s !important;', $this->get_color_value($body_area_text_link_underline_hover)),
                ));
            }
            // active
            if (isset($this->props['body_area_text_link_color_active_h'.$level])) {
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% li.active.pac_dtoc_li_heading_level_'.$level.' div a, %%order_class%% li.active.pac_dtoc_li_heading_level_'.$level.' div',
                    'declaration' => sprintf('color: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_color_active_h'.$level])),
                ));
            }
            $is_body_area_text_link_color_active_hover = et_pb_hover_options()->is_enabled('body_area_text_link_color_active_h'.$level,$this->props);
            if($is_body_area_text_link_color_active_hover){
                $body_area_text_link_color_active_hover = et_pb_hover_options()->get_value('body_area_text_link_color_active_h'.$level,$this->props);
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% li.active.pac_dtoc_li_heading_level_'.$level.' div span:hover + a, %%order_class%% li.active.pac_dtoc_li_heading_level_'.$level.' div:hover',
                    'declaration' => sprintf('color: %1$s !important;', $this->get_color_value($body_area_text_link_color_active_hover)),
                ));
            }
            if (isset($this->props['body_area_text_link_underline_active_h'.$level])) {
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% li.active.pac_dtoc_li_heading_level_'.$level.' div a:after',
                    'declaration' => sprintf('background: %1$s !important;', $this->get_color_value($this->props['body_area_text_link_underline_active_h'.$level])),
                ));
            }
            $is_body_area_text_link_underline_active_hover = et_pb_hover_options()->is_enabled('body_area_text_link_underline_active_h'.$level,$this->props);
            if($is_body_area_text_link_underline_active_hover){
                $body_area_text_link_underline_active_hover = et_pb_hover_options()->get_value('body_area_text_link_underline_active_h'.$level,$this->props);
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% li.active.pac_dtoc_li_heading_level_'.$level.' div span:hover + a:after',
                    'declaration' => sprintf('background: %1$s !important;', $this->get_color_value($body_area_text_link_underline_active_hover)),
                ));
            }
        };
        $dtoc_set_text_underline_color('1');
        $dtoc_set_text_underline_color('2');
        $dtoc_set_text_underline_color('3');
        $dtoc_set_text_underline_color('4');
        $dtoc_set_text_underline_color('5');
        $dtoc_set_text_underline_color('6');


        // Apply Hierarchy CSS
        // function to apply indent settings
        $dtoc_set_indent = function ($level) use ($render_slug) {
            if($this->props['use_hierarchical_indents_'.$level] === "on"){
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .divi_table_of_contents ul.pac_dtoc_heading_level_'.$level,
                    'declaration' => sprintf('padding-left: %1$s', $this->props['indent_amount_'.$level]),
                ));
            }
            else{
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .divi_table_of_contents ul.pac_dtoc_heading_level_'.$level,
                    'declaration' => sprintf('padding-left: 0px'),
                ));
            }
            if($this->props['headings_overflow_'.$level] === "ellipsis"){
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .pac_dtoc_body_area.outside li.pac_dtoc_li_heading_level_'.$level.'>div,%%order_class%% .pac_dtoc_body_area.inside li.pac_dtoc_li_heading_level_'.$level.'>div>a',
                    'declaration' => sprintf('white-space: nowrap;overflow: hidden;text-overflow: ellipsis;'),
                ));

                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .pac_dtoc_body_area.outside li.pac_dtoc_li_heading_level_'.$level.'>div,%%order_class%% .pac_dtoc_body_area.inside li.pac_dtoc_li_heading_level_'.$level.'>div>a',
                    'declaration' => sprintf('white-space: nowrap;overflow: hidden;text-overflow: ellipsis;'),
                ));
            }
        };

        if($this->props['headings_overflow_1'] === "ellipsis"){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area.outside li.pac_dtoc_li_heading_level_1>div,%%order_class%% .pac_dtoc_body_area.inside li.pac_dtoc_li_heading_level_1>div>a',
                'declaration' => sprintf('white-space: nowrap;overflow: hidden;text-overflow: ellipsis;'),
            ));
        }
        $dtoc_set_indent('2');
        $dtoc_set_indent('3');
        $dtoc_set_indent('4');
        $dtoc_set_indent('5');
        $dtoc_set_indent('6');
        

        // Apply Markers CSS
        // Function to apply CSS for Markers
        $dtoc_set_markers = function ($selector, $icon, $level) use ($render_slug) {
            if($this->props[$selector] !== "icons" & $this->props[$selector] !== "whole" && $this->props[$selector] !== "decimal-number"){
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .pac_dtoc_heading_level_' .$level.' > li',
                    'declaration' => sprintf('list-style-type: %1$s;', $this->props[$selector]),
                ));
            }
            elseif($this->props[$selector] === "icons"){
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% ul.pac_dtoc_heading_level_'.$level,
                    'declaration' => sprintf('list-style: none;'),
                ));
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .pac_dtoc_heading_level_' .$level. ' > li',
                    'declaration' => sprintf('position: relative;display: flex;align-items: center;'),
                ));
                $get_icon = html_entity_decode(et_pb_process_font_icon($this->props[$icon]));
                if($get_icon === "\\"){
                    $get_icon = "\\\\";
                }
                ET_Builder_Element::set_style($render_slug, [
                    'selector' => '%%order_class%% .pac_dtoc_heading_level_' .$level. ' > li:before',
                    'declaration' => sprintf('content: "%1$s";font-family: %2$s;font-weight: %3$s;',
                    $get_icon,
                    et_pb_get_icon_font_family($this->props[$icon]),
                    et_pb_get_icon_font_weight($this->props[$icon])),
                ]);
                if($this->props['marker_position'] === 'outside'){
                    ET_Builder_Element::set_style($render_slug, [
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_' .$level. ' > li:before',
                        'declaration' => sprintf('transform: translate(-5px);position: absolute;top: 0;right: 100%%;'),
                    ]);
                }
            }
            elseif($this->props[$selector] === "whole"){
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .pac_dtoc_heading_level_' .$level. ' > li',
                    'declaration' => sprintf('position: relative;list-style-type: none;display: flex;align-items: center;'),
                ));
                if($this->props['marker_position'] === 'outside'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_' .$level.' > li:before',
                        'declaration' => sprintf('transform: translate(-5px);position: absolute;top: 0;right: 100%%;'),
                    ));
                }
                if($level === '1'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_1 > li',
                        'declaration' => sprintf('counter-increment: counter_level_1;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_1 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_1);'),
                    ));
                }
                elseif($level === '2'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_1 > li',
                        'declaration' => sprintf('counter-increment: counter_level_1;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_2 > li',
                        'declaration' => sprintf('counter-increment: counter_level_2;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_2 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_1) "." counter(counter_level_2);'),
                    ));
                }
                elseif($level === '3'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_2 > li',
                        'declaration' => sprintf('counter-increment: counter_level_2;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_3 > li',
                        'declaration' => sprintf('counter-increment: counter_level_3;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_3 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_2) "." counter(counter_level_3);'),
                    ));
                }
                elseif($level === '4'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_3 > li',
                        'declaration' => sprintf('counter-increment: counter_level_3;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_4 > li',
                        'declaration' => sprintf('counter-increment: counter_level_4;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_4 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_3) "." counter(counter_level_4);'),
                    ));
                }
                elseif($level === '5'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_4 > li',
                        'declaration' => sprintf('counter-increment: counter_level_4;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_5 > li',
                        'declaration' => sprintf('counter-increment: counter_level_5;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_5 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_4) "." counter(counter_level_5);'),
                    ));
                }
                elseif($level === '6'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_5 > li',
                        'declaration' => sprintf('counter-increment: counter_level_5;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_6 > li',
                        'declaration' => sprintf('counter-increment: counter_level_5;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_6 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_5) "." counter(counter_level_6);'),
                    ));
                }
            }
            elseif($this->props[$selector] === "decimal-number"){
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '%%order_class%% .pac_dtoc_heading_level_' .$level. ' > li',
                    'declaration' => sprintf('position: relative;list-style-type: none;display: flex;align-items: center;'),
                ));
                if($this->props['marker_position'] === 'outside'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_' .$level.' > li:before',
                        'declaration' => sprintf('transform: translate(-5px);position: absolute;top: 0;right: 100%%;'),
                    ));
                }
                if($level === '1'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_1 > li',
                        'declaration' => sprintf('counter-increment: counter_level_1;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_1 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_1) ".0";'),
                    ));
                }
                elseif($level === '2'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_1 > li',
                        'declaration' => sprintf('counter-increment: counter_level_1;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_2 > li',
                        'declaration' => sprintf('counter-increment: counter_level_2;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_2 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_2) ".0";'),
                    ));
                }
                elseif($level === '3'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_2 > li',
                        'declaration' => sprintf('counter-increment: counter_level_2;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_3 > li',
                        'declaration' => sprintf('counter-increment: counter_level_3;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_3 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_3) ".0";'),
                    ));
                }
                elseif($level === '4'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_3 > li',
                        'declaration' => sprintf('counter-increment: counter_level_3;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_4 > li',
                        'declaration' => sprintf('counter-increment: counter_level_4;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_4 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_4) ".0";'),
                    ));
                }
                elseif($level === '5'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_4 > li',
                        'declaration' => sprintf('counter-increment: counter_level_4;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_5 > li',
                        'declaration' => sprintf('counter-increment: counter_level_5;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_5 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_5) ".0";'),
                    ));
                }
                elseif($level === '6'){
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_5 > li',
                        'declaration' => sprintf('counter-increment: counter_level_5;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_6 > li',
                        'declaration' => sprintf('counter-increment: counter_level_5;'),
                    ));
                    ET_Builder_Module::set_style($render_slug, array(
                        'selector' => '%%order_class%% .pac_dtoc_heading_level_6 > li:before',
                        'declaration' => sprintf('content: counter(counter_level_6) ".0";'),
                    ));
                }
            }
        };
        // Level One Marker CSS
        $dtoc_set_markers('level_markers_1','icon_marker_1','1');
        // Level Two Marker CSS
        $dtoc_set_markers('level_markers_2','icon_marker_2','2');
        // Level Three Marker CSS
        $dtoc_set_markers('level_markers_3','icon_marker_3','3');
        // Level Four Marker CSS
        $dtoc_set_markers('level_markers_4','icon_marker_4','4');
        // Level Five Marker CSS
        $dtoc_set_markers('level_markers_5','icon_marker_5','5');
        // Level Six Marker CSS
        $dtoc_set_markers('level_markers_6','icon_marker_6','6');
        

        // Body CSS
        $dtoc_included_headings_on = function ($level) use ($render_slug) {
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% ul.pac_dtoc_heading_level_' .$level.' > li',
                'declaration' => sprintf('display: none;'),
            ));
        };
        $included_headings = explode("|",$this->props['included_headings']);
        if($included_headings[0] === "off"){$dtoc_included_headings_on('1');}
        if($included_headings[1] === "off"){$dtoc_included_headings_on('2');}
        if($included_headings[2] === "off"){$dtoc_included_headings_on('3');}
        if($included_headings[3] === "off"){$dtoc_included_headings_on('4');}
        if($included_headings[4] === "off"){$dtoc_included_headings_on('5');}
        if($included_headings[5] === "off"){$dtoc_included_headings_on('6');}

        ET_Builder_Module::set_style($render_slug, array(
            'selector' => '%%order_class%% ul',
            'declaration' => sprintf('padding-top:0px;'),
        ));

        // Body Fields
        // Minimum Number of headings
        $headings_count = $this->heading_count($content_html);

        $min_heading = (int)$this->props['minimum_number_of_headings'];
        if($min_heading > $headings_count){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%%.pac_divi_table_of_contents',
                'declaration' => sprintf('display:none'),
            ));
        }
        
        if($this->props['pac_dtoc_show_alternative_content'] === 'on'){
            if(($min_heading > $headings_count)){
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '.dtocm-show-alternative-content',
                    'declaration' => sprintf('display:block'),
                ));
            }
            else {
                ET_Builder_Module::set_style($render_slug, array(
                    'selector' => '.dtocm-show-alternative-content',
                    'declaration' => sprintf('display:none'),
                ));
            }
        }

        // Content

        
        if(isset($this->props['show_icon_in_toc_header']) && $this->props['show_icon_in_toc_header'] === 'on'){
            ET_Builder_Element::set_style($render_slug, [
                'selector' => '%%order_class%% .pac_dtoc_opened_icon',
                'declaration' => sprintf('font-family: %1$s;font-weight: %2$s;',
                et_pb_get_icon_font_family($this->props['opened_icon']),
                et_pb_get_icon_font_weight($this->props['opened_icon'])),
            ]);
            ET_Builder_Element::set_style($render_slug, [
                'selector' => '%%order_class%% .pac_dtoc_closed_icon',
                'declaration' => sprintf('font-family: %1$s;font-weight: %2$s;',
                et_pb_get_icon_font_family($this->props['closed_icon']),
                et_pb_get_icon_font_weight($this->props['closed_icon'])),
            ]);
        }

        if($this->props['default_state'] === 'open'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area',
                'declaration' => sprintf('display: block;'),
                'media_query' => ET_Builder_Element::get_media_query('min_width_981'),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_closed_icon',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('min_width_981'),
            ));
        }
        elseif($this->props['default_state'] === 'closed'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('min_width_981'),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_opened_icon',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('min_width_981'),
            ));
            
        }
        // tablet
        if($this->props['default_state_tablet'] === 'open'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area',
                'declaration' => sprintf('display: block;'),
                'media_query' => ET_Builder_Element::get_media_query('768_980'),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_closed_icon',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('768_980'),
            ));
        }
        elseif($this->props['default_state_tablet'] === 'closed'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('768_980'),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_opened_icon',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('768_980'),
            ));
        }
        // phone
        if($this->props['default_state_phone'] === 'open'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area',
                'declaration' => sprintf('display: block;'),
                'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_closed_icon',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
            ));
        }
        elseif($this->props['default_state_phone'] === 'closed'){
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_body_area',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
            ));
            ET_Builder_Module::set_style($render_slug, array(
                'selector' => '%%order_class%% .pac_dtoc_opened_icon',
                'declaration' => sprintf('display: none;'),
                'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
            ));
        }
        if(isset($this->props['show_icon_in_toc_header']) && $this->props['show_icon_in_toc_header'] === 'on'){
            $open_close_icons = sprintf( '
                <div class="pac_dtoc_icon_responsive">
                    <div class="pac_dtoc_opened_icon">%1$s</div>
                    <div class="pac_dtoc_closed_icon">%2$s</div>
                </div>
                ',
                html_entity_decode(et_pb_process_font_icon($this->props['opened_icon'])),
                html_entity_decode(et_pb_process_font_icon($this->props['closed_icon']))
            );
        }else{
            $open_close_icons = '';
        }

        $show_keyword_highlight = '';
        if($this->props['show_keyword_highlight'] === 'on'){
            $show_keyword_highlight = '<div class="pac_dtoc_search_keyword" ><input type="text" autocomplete="off" name="keyword" class="pac_dtoc_search_input" placeholder="'. $this->props['show_keyword_highlight_placeholder'] .'"><div class="pac_dtoc_clear_keyword_input" style="display: none;">&times;</div></div>';
        }

        return sprintf('
        <div class="pac_dtoc_main_container"
        data-allow_collapse_minimize="%3$s"
        data-allow_collapse_minimize_tablet="%6$s"
        data-allow_collapse_minimize_phone="%7$s"
        data-ss="%5$s"
        data-sah="%17$s"
        data-collapse_when_sticky="%8$s"
        data-collapse_when_sticky_tablet="%12$s"
        data-collapse_when_sticky_phone="%13$s"
        data-skh="%10$s"
        data-mtocai="%11$s"
        data-mtocai_tablet="%14$s"
        data-mtocai_phone="%15$s"
        data-alh="%16$s"
        data-ds="%19$s"
        data-dst="%20$s"
        data-dsp="%21$s">
            <div class="pac_dtoc_title_area click_%3$s click_tablet_%6$s click_phone_%7$s">
                <div class="pac_dtoc_title">%1$s</div>
                %4$s
            </div>
            <div class="pac_dtoc_body_area %18$s">
                %9$s
                %2$s
            </div>
        </div>
        ',
        $this->props['title'],                                  // 1
        $this->get_toc($content_html),                          // 2
        $this->props['allow_collapse_minimize'],                // 3
        $open_close_icons,                                      // 4
        intval($this->props['scroll_speed']),                   // 5
        $this->props['allow_collapse_minimize_tablet'],         // 6
        $this->props['allow_collapse_minimize_phone'],          // 7
        $this->props['collapse_when_sticky'],                   // 8
        $show_keyword_highlight,                                // 9
        $this->props['show_keyword_highlight'],                 // 10
        $this->props['minimize_toc_as_icon'],                   // 11
        $this->props['collapse_when_sticky_tablet'],            // 12
        $this->props['collapse_when_sticky_phone'],             // 13
        $this->props['minimize_toc_as_icon_tablet'],            // 14
        $this->props['minimize_toc_as_icon_phone'],             // 15
        $this->props['active_link_highlight'],                  // 16
        intval($this->props['spacing_above_heading']),          // 17
        esc_attr($this->props['marker_position']),              // 18
        esc_attr($this->props['default_state']),                // 19
        esc_attr($this->props['default_state_tablet']),         // 20
        esc_attr($this->props['default_state_phone'])           // 21
        );
	}
}
new PAC_DTOC;

function get_headings($content) {
    $headings = array();
    preg_match_all("/<h([1-6])(.*)>(.*)<\/h[1-6]>/", $content, $matches);
    
    for($i = 0; $i < count($matches[1]); $i++) {
        $headings[$i]["tag"] = $matches[1][$i];
        // get id
        if(!empty($matches[2][$i])){
            $find_id = strpos($matches[2][$i], ' id');
            if($find_id >= 0 && $find_id !== "" && $find_id !== false){
                $headings[$i]["id"] = "YES";
            }
            else{
                $headings[$i]["id"] = "NO";
            }
        }
        else {
            $headings[$i]["id"] = "NO";
        }

        // get classes
        $att_string = $matches[2][$i];
        preg_match_all("/class=\"([^\"]*)\"/", $att_string , $class_matches);
        for($j = 0; $j < count($class_matches[1]); $j++) {
            $headings[$i]["classes"] = explode(" ", $class_matches[1][$j]);
        }
        $headings[$i]["search"] = $matches[0][$i];
        $sup_exist = stripos($matches[0][$i], "<sup>");
        if($sup_exist >= 0 && $sup_exist !== "" && $sup_exist !== false){
            $sup_end = stripos($matches[0][$i], "</sup>") + strlen('</sup>');
            $new_match = substr($matches[0][$i], 0, $sup_exist);
            $new_match .= substr($matches[0][$i], $sup_end, strlen($matches[0][$i]));
            $matches[0][$i] = $new_match;
        }

        $headings[$i]["name"] = strip_tags($matches[0][$i]);
    }
    return $headings;
}
function set_ids($headings) {
    foreach($headings as $index => $value) {
        if($value["name"] !== "" & $value["id"] === "NO"){
            $id = explode(" ",$value["name"]);
            $id = implode("_",$id);
            $id = str_replace("4x4", "44", $id);
            $id = html_entity_decode($id);
            $id = preg_replace('/[^\p{L}\p{N}]/u', '', $id);
        }
        elseif($value["id"] === "YES"){
            $id = "";
        }
        if(isset($id)){
			$headings[$index]["id"] = $id;
		}
    }    
    return $headings;
}
function assign_ids($content) {
    
    $headings = get_headings($content);
    if(empty($headings)){
        return $content;
    }
    $headings = set_ids($headings);
    
    for($i = 0; $i < count($headings); $i++) {
        $id = " id = \"". $headings[$i]['id'] ."\"";
        if(!empty($headings[$i]['id'])){
            $count = 0;

            for($j = 0; $j <= $i; $j++) {
                if($headings[$i]['name'] === $headings[$j]['name']){
                    $count++;
                }
            }
            $search_index = 0;
            for($j = 0; $j < $count; $j++) {
                if(!empty($headings[$i]['name'])){
                    $heading_strlen = $j == 0 ? $search_index : $search_index + strlen($headings[$i]['search']);
                    $search_index = strpos($content, $headings[$i]['search'], $heading_strlen);
                    $search_index = strpos($content, '>', $search_index);
                }
            }
            $position = $search_index + 1;
            while($content[$position-1] !== '>') {
                $position--;
            }
            $start = substr($content, 0, $position-1);
            $end = substr($content, $position-1, strlen($content));
            $content = $start . $id . $end;
        }
    }
    
    return $content;
}
function pac_dtocm_get_output($output, $render_slug, $module){
    if (function_exists('et_fb_is_enabled') && et_fb_is_enabled()) {
        return $output;
    }
    if (function_exists('et_builder_bfb_enabled') && et_builder_bfb_enabled()) {
        return $output;
    }
    if (is_admin() || wp_doing_ajax() || is_array($output)) {
        return $output;
    }
    if ('et_pb_section' === $render_slug | 'et_pb_row' === $render_slug | 'et_pb_column' === $render_slug) {
        return $output;
    }
    if($output !== null){
		$output = assign_ids($output);
	}
    return $output;
}
add_filter('et_module_shortcode_output', 'pac_dtocm_get_output', 10, 3);