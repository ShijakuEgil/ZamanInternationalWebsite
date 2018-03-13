<?php


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_contact-us-dept-info',
		'title' => 'Contact Us Dept Info',
		'fields' => array (
			array (
				'key' => 'field_5a94b8276bc06',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'instructions' => 'Enter the Email of the Department for the Contact us page',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5a94b8ad6bc07',
				'label' => 'Phone Number',
				'name' => 'phone',
				'type' => 'number',
				'instructions' => 'Enter the Phone Number of the department ',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5a94b98798e7d',
				'label' => 'Fax Number',
				'name' => 'fax',
				'type' => 'number',
				'instructions' => 'Enter the Fax Number of the Department for the Contact Us page',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'contact-us-dpt',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
			'id' => 'acf_calendar-fields',
			'title' => 'Calendar Fields',
			'fields' => array (
				array (
					'key' => 'field_5aa727da1ab12',
					'label' => 'Location',
					'name' => 'location',
					'type' => 'google_map',
					'instructions' => 'Enter the address where the event is being held',
					'required' => 1,
					'center_lat' => '42.294226',
					'center_lng' => '-83.293490',
					'zoom' => 4,
					'height' => 300,
				),
				array (
					'key' => 'field_5aa7286d1ab13',
					'label' => 'Date',
					'name' => 'date',
					'type' => 'date_picker',
					'instructions' => 'Select the date for the event',
					'required' => 1,
					'date_format' => 'yymmdd',
					'display_format' => 'dd/mm/yy',
					'first_day' => 1,
				),
				array (
					'key' => 'field_5aa728bc1ab14',
					'label' => 'Start Time',
					'name' => 'start_time',
					'type' => 'date_time_picker',
					'instructions' => 'Enter the start time of the event ',
					'required' => 1,
					'field_type' => 'time',
					'date_format' => 'yy-mm-dd',
					'time_format' => 'HH:mm',
					'past_dates' => 'yes',
					'time_selector' => 'select',
					'first_day' => 1,
				),
				array (
					'key' => 'field_5aa728f11ab15',
					'label' => 'End Time',
					'name' => 'end_time',
					'type' => 'date_time_picker',
					'instructions' => 'Enter the end time for the event',
					'required' => 1,
					'field_type' => 'time',
					'date_format' => 'yy-mm-dd',
					'time_format' => 'HH:mm',
					'past_dates' => 'yes',
					'time_selector' => 'select',
					'first_day' => 1,
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'event',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));

	register_field_group(array (
		'id' => 'acf_home-slider-fields',
		'title' => 'Home Slider Fields',
		'fields' => array (
			array (
				'key' => 'field_5a67faaf4857c',
				'label' => 'Show Text?',
				'name' => 'radio_button_text',
				'type' => 'radio',
				'instructions' => 'decide whether slide will have text or not.',
				'required' => 1,
				'choices' => array (
					'Show text' => 'Show text',
					'Don\'t show text' => 'Don\'t show text',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'Show text',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5a67fbb34857d',
				'label' => 'Large Heading ',
				'name' => 'large_heading',
				'type' => 'text',
				'instructions' => 'This is the text that will show in the large font Enter',
				'default_value' => '',
				'placeholder' => 'Enter text here...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a67fc344857e',
				'label' => 'Description text',
				'name' => 'description_text',
				'type' => 'wysiwyg',
				'instructions' => 'This is the description text that will show under the large heading.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'home_page_slides',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_member-fields',
		'title' => 'Member Fields',
		'fields' => array (
			array (
				'key' => 'field_5a91b718a7c82',
				'label' => 'Job Title',
				'name' => 'job_title',
				'type' => 'text',
				'instructions' => 'Enter the Job Title of the Team Member',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Job Title',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a91b7dea7c83',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'instructions' => 'Enter the email of the team member',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'team-member',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'board-member',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));


	register_field_group(array (
		'id' => 'acf_text-field',
		'title' => 'Text Field',
		'fields' => array (
			array (
				'key' => 'field_5a6984d53830c',
				'label' => 'Heading Text',
				'name' => 'heading_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'animated-heading',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_timeline-fileds',
		'title' => 'Timeline Fileds',
		'fields' => array (
			array (
				'key' => 'field_5a94ffd2f2635',
				'label' => 'Date',
				'name' => 'date',
				'type' => 'date_picker',
				'instructions' => 'Select the date for the timeline entry',
				'required' => 1,
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_5a950033f2636',
				'label' => '',
				'name' => '',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'timeline',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyBesoH9bG8c55GvG1umLf8W-jzkMD_5KHA';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
