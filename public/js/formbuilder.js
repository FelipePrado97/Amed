
  
  jQuery(function($) {
    var options = {
      i18n: {
        locale: 'pt-BR',
        location: 'formBuilder-languages/pt-BR',
        extension: '.lang',
        override: {
            'pt-BR': {}
        }
      }
    },
    $fbTemplate = $(document.getElementById('fb-editor'));
    $fbTemplate.formBuilder(options);
    

});
