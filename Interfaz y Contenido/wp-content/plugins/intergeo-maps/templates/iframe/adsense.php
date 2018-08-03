<h3 class="intergeo_tlbr_ul_li_h3"><?php esc_html_e( 'AdSense Integration', 'intergeo-maps' ) ?></h3>
<ul class="intergeo_tlbr_ul_li_ul"><?php
if ( ! intergeo_is_developer() ) {
	?>
	<a  target="_blank" href="<?php echo INTERGEO_PRO_URL; ?>"   class="intergeo-pro-btn button"><?php _e( 'Available in Agency plan', 'intergeo-maps' ) ?></a>
	<?php
} else {
	if ( empty( $publisher_id ) ) :
		?><li class="intergeo_tlbr_ul_li_ul_li">
		<p class="intergeo_tlbr_grp_dsc"><?php
		printf( esc_html__( 'To make AdSense working on your maps, you have to setup your publisher ID. You can do it at the %1$ssettings page%2$s.', 'intergeo-maps' ), '<a href="' . admin_url( 'options-media.php' ) . '" target="_blank">', '</a>' )
		?></p>
		</li><?php
	endif;
	?><li class="intergeo_tlbr_ul_li_ul_li">
	<div class="intergeo_tlbr_cntrl_items" style="display:block">
	<div class="intergeo_tlbr_cntrl_item">
		<label>
			<input type="hidden" name="layer_adsense" value="0">
			<input type="checkbox" name="layer_adsense" value="1" <?php checked( isset( $json['layer']['adsense'] ) ? $json['layer']['adsense'] == '1' : false ) ?>>
			Enabled
		</label>
	</div>
	<table class="intergeo_tlbr_cntrl_tbl" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td class="intergeo_tlbr_cntrl_tbl_clmn">
				<select name="adsense_format" class="intergeo_tlbr_cntrl_slct">
					<option value="">
						<?php esc_html_e( 'default format', 'intergeo-maps' ) ?>
					</option>
					<option value="LEADERBOARD" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'LEADERBOARD' : false ) ?>>
						<?php esc_html_e( 'Leaderboard', 'intergeo-maps' ) ?>
					</option>
					<option value="BANNER" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'BANNER' : false ) ?>>
						<?php esc_html_e( 'Banner', 'intergeo-maps' ) ?>
					</option>
					<option value="HALF_BANNER" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'HALF_BANNER' : false ) ?>>
						<?php esc_html_e( 'Half Banner', 'intergeo-maps' ) ?>
					</option>
					<option value="SKYSCRAPER" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'SKYSCRAPER' : false ) ?>>
						<?php esc_html_e( 'Skyscraper', 'intergeo-maps' ) ?>
					</option>
					<option value="WIDE_SKYSCRAPER" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'WIDE_SKYSCRAPER' : false ) ?>>
						<?php esc_html_e( 'Wide Skyscraper', 'intergeo-maps' ) ?>
					</option>
					<option value="VERTICAL_BANNER" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'VERTICAL_BANNER' : false ) ?>>
						<?php esc_html_e( 'Vertical Banner', 'intergeo-maps' ) ?>
					</option>
					<option value="BUTTON" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'BUTTON' : false ) ?>>
						<?php esc_html_e( 'Button', 'intergeo-maps' ) ?>
					</option>
					<option value="SMALL_SQUARE" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'SMALL_SQUARE' : false ) ?>>
						<?php esc_html_e( 'Small Square', 'intergeo-maps' ) ?>
					</option>
					<option value="SQUARE" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'SQUARE' : false ) ?>>
						<?php esc_html_e( 'Square', 'intergeo-maps' ) ?>
					</option>
					<option value="SMALL_RECTANGLE" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'SMALL_RECTANGLE' : false ) ?>>
						<?php esc_html_e( 'Small Rectangle', 'intergeo-maps' ) ?>
					</option>
					<option value="MEDIUM_RECTANGLE" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'MEDIUM_RECTANGLE' : false ) ?>>
						<?php esc_html_e( 'Medium Rectangle', 'intergeo-maps' ) ?>
					</option>
					<option value="LARGE_RECTANGLE" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'LARGE_RECTANGLE' : false ) ?>>
						<?php esc_html_e( 'Large Rectangle', 'intergeo-maps' ) ?>
					</option>
					<option value="SMALL_VERTICAL_LINK_UNIT" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'SMALL_VERTICAL_LINK_UNIT' : false ) ?>>
						<?php esc_html_e( 'Small Vertical Link Unit', 'intergeo-maps' ) ?>
					</option>
					<option value="MEDIUM_VERTICAL_LINK_UNIT" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'MEDIUM_VERTICAL_LINK_UNIT' : false ) ?>>
						<?php esc_html_e( 'Medium Vertical Link Unit', 'intergeo-maps' ) ?>
					</option>
					<option value="LARGE_VERTICAL_LINK_UNIT" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'LARGE_VERTICAL_LINK_UNIT' : false ) ?>>
						<?php esc_html_e( 'Large Vertical Link Unit', 'intergeo-maps' ) ?>
					</option>
					<option value="X_LARGE_VERTICAL_LINK_UNIT" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'X_LARGE_VERTICAL_LINK_UNIT' : false ) ?>>
						<?php esc_html_e( 'Extra Large Vertical Link Unit', 'intergeo-maps' ) ?>
					</option>
					<option value="SMALL_HORIZONTAL_LINK_UNIT" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'SMALL_HORIZONTAL_LINK_UNIT' : false ) ?>>
						<?php esc_html_e( 'Small Horizontal Link Unit', 'intergeo-maps' ) ?>
					</option>
					<option value="LARGE_HORIZONTAL_LINK_UNIT" <?php selected( isset( $json['adsense']['format'] ) ? $json['adsense']['format'] == 'LARGE_HORIZONTAL_LINK_UNIT' : false ) ?>>
						<?php esc_html_e( 'Large Horizontal Link Unit', 'intergeo-maps' ) ?>
					</option>
				</select>
			</td>
			<td class="intergeo_tlbr_cntrl_tbl_clmn">
				<select class="intergeo_tlbr_cntrl_slct" name="adsense_position">
					<option value=""><?php esc_html_e( 'default position', 'intergeo-maps' ) ?></option>
					<option value="TOP_LEFT" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'TOP_LEFT' : false ) ?>>
						<?php esc_html_e( 'Top Left', 'intergeo-maps' ) ?>
					</option>
					<option value="TOP_CENTER" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'TOP_CENTER' : false ) ?>>
						<?php esc_html_e( 'Top Center', 'intergeo-maps' ) ?>
					</option>
					<option value="TOP_RIGHT" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'TOP_RIGHT' : false ) ?>>
						<?php esc_html_e( 'Top Right', 'intergeo-maps' ) ?>
					</option>
					<option value="RIGHT_TOP" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'RIGHT_TOP' : false ) ?>>
						<?php esc_html_e( 'Right Top', 'intergeo-maps' ) ?>
					</option>
					<option value="RIGHT_CENTER" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'RIGHT_CENTER' : false ) ?>>
						<?php esc_html_e( 'Right Center', 'intergeo-maps' ) ?>
					</option>
					<option value="RIGHT_BOTTOM" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'RIGHT_BOTTOM' : false ) ?>>
						<?php esc_html_e( 'Right Bottom', 'intergeo-maps' ) ?>
					</option>
					<option value="BOTTOM_RIGHT" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'BOTTOM_RIGHT' : false ) ?>>
						<?php esc_html_e( 'Bottom Right', 'intergeo-maps' ) ?>
					</option>
					<option value="BOTTOM_CENTER" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'BOTTOM_CENTER' : false ) ?>>
						<?php esc_html_e( 'Bottom Center', 'intergeo-maps' ) ?>
					</option>
					<option value="BOTTOM_LEFT" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'BOTTOM_LEFT' : false ) ?>>
						<?php esc_html_e( 'Bottom Left', 'intergeo-maps' ) ?>
					</option>
					<option value="LEFT_BOTTOM" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'LEFT_BOTTOM' : false ) ?>>
						<?php esc_html_e( 'Left Bottom', 'intergeo-maps' ) ?>
					</option>
					<option value="LEFT_CENTER" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'LEFT_CENTER' : false ) ?>>
						<?php esc_html_e( 'Left Center', 'intergeo-maps' ) ?>
					</option>
					<option value="LEFT_TOP" <?php selected( isset( $json['adsense']['position'] ) ? $json['adsense']['position'] == 'LEFT_TOP' : false ) ?>>
						<?php esc_html_e( 'Left Top', 'intergeo-maps' ) ?>
					</option>
				</select>
			</td>
		</tr>
	</table>                
	</div>
	</li>

	<li class="intergeo_tlbr_ul_li_ul_li">
	<span class="intergeo_tlbr_cntrl_ttl"><?php esc_html_e( 'Styles', 'intergeo-maps' ) ?></span>
	<div class="intergeo_tlbr_cntrl_items">
	<div class="intergeo_tlbr_cntrl_item">
		<b><?php esc_html_e( 'Background color', 'intergeo-maps' ) ?></b>
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<input class="color-picker-hex" type="text" name="adsense_backgroundColor" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'intergeo-maps' ) ?>" value="<?php echo isset( $json['adsense']['backgroundColor'] ) ? esc_attr( $json['adsense']['backgroundColor'] ) : '#c4d4f3' ?>" data-default-color="#c4d4f3">
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<b><?php esc_html_e( 'Border color', 'intergeo-maps' ) ?></b>
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<input class="color-picker-hex" type="text" name="adsense_borderColor" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'intergeo-maps' ) ?>" value="<?php echo isset( $json['adsense']['borderColor'] ) ? esc_attr( $json['adsense']['borderColor'] ) : '#e5ecf9' ?>" data-default-color="#e5ecf9">
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<b><?php esc_html_e( 'Title color', 'intergeo-maps' ) ?></b>
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<input class="color-picker-hex" type="text" name="adsense_titleColor" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'intergeo-maps' ) ?>" value="<?php echo isset( $json['adsense']['titleColor'] ) ? esc_attr( $json['adsense']['titleColor'] ) : '#0000cc' ?>" data-default-color="#0000cc">
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<b><?php esc_html_e( 'Text color', 'intergeo-maps' ) ?></b>
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<input class="color-picker-hex" type="text" name="adsense_textColor" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'intergeo-maps' ) ?>" value="<?php echo isset( $json['adsense']['textColor'] ) ? esc_attr( $json['adsense']['textColor'] ) : '#000000' ?>" data-default-color="#000000">
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<b><?php esc_html_e( 'URL color', 'intergeo-maps' ) ?></b>
	</div>
	<div class="intergeo_tlbr_cntrl_item">
		<input class="color-picker-hex" type="text" name="adsense_urlColor" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'intergeo-maps' ) ?>" value="<?php echo isset( $json['adsense']['urlColor'] ) ? esc_attr( $json['adsense']['urlColor'] ) : '#009900' ?>" data-default-color="#009900">
	</div>
	</div>
	</li>
	<?php }?>
</ul>
