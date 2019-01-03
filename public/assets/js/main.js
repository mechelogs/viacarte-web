$(document).ready(function () {
	$('.pick-datetime').datepicker({
      language: 'en'
  });

  // First register any plugins
  $.fn.filepond.registerPlugin(FilePondPluginImagePreview);

  // Turn input element into a pond
  $('.filepond').filepond();

  // Set allowMultiple property to true
  $('.filepond').filepond('allowMultiple', true);

  // Listen for addfile event
  $('.filepond').on('FilePond:addfile', function(e) {
      console.log('file added event', e);
  });

   // Manually add a file using the addfile method
  $('.my-pond').first().filepond('addFile', 'index.html').then(function(file){
    console.log('file added', file);
  });
});