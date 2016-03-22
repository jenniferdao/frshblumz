<?php

/*
@package _s
admin page 
*/

function frshblumz_add_submenu() {
		add_submenu_page( 'themes.php', 'Theme Options Page', 'Theme Options', 'manage_options', 'theme_options', 'my_theme_options_page');
	}
add_action( 'admin_menu', 'frshblumz_add_submenu' );
	

function frshblumz_settings_init() { 
	register_setting( 'theme_options', 'frshblumz_options_settings' );
	
	add_settings_section(
		'frshblumz_options_page_section', 
		'Page', 
		'frshblumz_options_page_section_callback', 
		'theme_options'
	);
	
	function frshblumz_options_page_section_callback() { 
		echo 'Add your Text.';
	}

	add_settings_field( 
		'frshblumz_text_field', 
		'Enter your text', 
		'frshblumz_text_field_render', 
		'theme_options', 
		'frshblumz_options_page_section' 
	);

	add_settings_field( 
		'frshblumz_checkbox_field', 
		'Choose preference', 
		'frshblumz_checkbox_field_render', 
		'theme_options', 
		'frshblumz_options_page_section'  
	);

	add_settings_field( 
		'frshblumz_radio_field', 
		'Choose an option', 
		'frshblumz_radio_field_render', 
		'theme_options', 
		'frshblumz_options_page_section'  
	);
	
	add_settings_field( 
		'frshblumz_textarea_field', 
		'Enter content', 
		'frshblumz_textarea_field_render', 
		'theme_options', 
		'frshblumz_options_page_section'  
	);
	
	add_settings_field( 
		'frshblumz_select_field', 
		'Pick an Option', 
		'frshblumz_select_field_render', 
		'theme_options', 
		'frshblumz_options_page_section'  
	);


	function frshblumz_text_field_render() { 
		$options = get_option( 'frshblumz_options_settings' );
		?>
		<input type="text" name="frshblumz_options_settings[frshblumz_text_field]" value="<?php if (isset($options['frshblumz_text_field'])) echo $options['frshblumz_text_field']; ?>" />
		<?php
	}
	
	function frshblumz_checkbox_field_render() { 
		$options = get_option( 'frshblumz_options_settings' );
	?>
		<input type="checkbox" name="frshblumz_options_settings[frshblumz_checkbox_field]" <?php if (isset($options['frshblumz_checkbox_field'])) checked( 'on', ($options['frshblumz_checkbox_field']) ) ; ?> value="on" />
		<label>On</label> 
		<?php	
	}
	
	function frshblumz_radio_field_render() { 
		$options = get_option( 'frshblumz_options_settings' );
		?>
		<input type="radio" name="frshblumz_options_settings[btn_radio_field]" <?php if (isset($options['frshblumz_radio_field'])) checked( $options['frshblumz_radio_field'], 1 ); ?> value="1" /> <label>First Option</label><br />
		<input type="radio" name="frshblumz_options_settings[btn_radio_field]" <?php if (isset($options['frshblumz_radio_field'])) checked( $options['frshblumz_radio_field'], 2 ); ?> value="2" /> <label>Second Option</label><br />
		<input type="radio" name="frshblumz_options_settings[btn_radio_field]" <?php if (isset($options['frshblumz_radio_field'])) checked( $options['frshblumz_radio_field'], 3 ); ?> value="3" /> <label>Third Option</label>
		<?php
	}
	
	function frshblumz_textarea_field_render() { 
		$options = get_option( 'frshblumz_options_settings' );
		?>
		<textarea cols="40" rows="5" name="frshblumz_options_settings[frshblumz_textarea_field]"><?php if (isset($options['frshblumz_textarea_field'])) echo $options['frshblumz_textarea_field']; ?></textarea>
		<?php
	}

	function frshblumz_select_field_render() { 
		$options = get_option( 'frshblumz_options_settings' );
		?>
		<select name="frshblumz_options_settings[btn_select_field]">
			<option value="1" <?php if (isset($options['frshblumz_select_field'])) selected( $options['frshblumz_select_field'], 1 ); ?>> First Option </option>
			<option value="2" <?php if (isset($options['frshblumz_select_field'])) selected( $options['frshblumz_select_field'], 2 ); ?>> Second Option </option>
			<option value="3" <?php if (isset($options['frshblumz_select_field'])) selected( $options['frshblumz_select_field'], 3 ); ?>> Third Option </option>
		</select>
	<?php
	}
	
	function my_theme_options_page(){ 
		?>
		<form action="options.php" method="post">
			<h2>Theme Options Page</h2>
			<?php
			settings_fields( 'theme_options' );
			do_settings_sections( 'theme_options' );
			submit_button();
			?>
		</form>
		<?php
	}

}

add_action( 'admin_init', 'frshblumz_settings_init' );