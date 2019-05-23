// Deletes a variable when its trigger is clicked.
jQuery('#custom-global-variables-table-definitions .delete').on('click', function() {

	jQuery(this).parent().parent().fadeTo(500, 0, function() {

		jQuery(this).remove();
	});

	return false;
});