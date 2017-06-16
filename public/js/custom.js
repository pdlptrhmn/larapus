$(document).ready(function () {
	//confirm delete
	$(document.body).on('submit', '.js-confirm', function() {
		var $el = $(this)
		var text = $el.data('confirm') ? $el.data('confirm') : 'Anda yakin Melakukan tindakan Ini?'
		var c =confirm(text);
		return c;

	});
});