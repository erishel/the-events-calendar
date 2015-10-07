<?php
// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

require 'header.php';
?>
<div id="modern-tribe-info">
	<h1><?php esc_html_e( 'Instructions', 'the-events-calendar' ); ?></h1>
	<p>
		<?php printf( esc_html__( 'To import events, first select a %sDefault Import Event Status%s below to assign to your imported events.', 'the-events-calendar' ), '<strong>', '</strong>' ); ?>
	</p>
	<p>
		<?php esc_html_e( 'Once your setting is saved, move to the applicable Import tab to select import specific criteria.', 'the-events-calendar' ); ?>
	</p>
	<?php
	/**
	 * Hook to this action to print More information on the Instructions Box
	 */
	do_action( 'tribe_import_general_infobox' ); ?>
</div>

<div class="tribe-settings-form">
	<form method="POST">
		<div class="tribe-settings-form-wrap">
			<?php
			/**
			 * Hook to this action to print More fields on the Importer Settings page
			 */
			do_action( 'tribe_import_general_settings' ); ?>
			<?php wp_nonce_field( 'tribe-import-general-settings', 'tribe-import-general-settings' ); ?>
			<p>
				<input type="submit" name="tribe-events-importexport-general-settings-submit" class="button-primary" value="<?php esc_attr_e( 'Save Settings', 'the-events-calendar' ); ?>"/>
			</p>
		</div>
	</form>
</div>

<?php
require 'footer.php';