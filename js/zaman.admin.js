jQuery(document).ready(function($){

    var mediaUploader;
    $("#upload-button").on('click', function(e) {
    e.preventDefault();
    if(mediaUploader){
      mediaUploader.open();
      return;
    }

    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Pick a Website icon',
      button:{
        text: 'choose picture'
      },
      multiple: false
    });

    mediaUploader.on('select', function(){
      attachment = mediaUploader.state().get('selection').first().toJSON();
      $("#icon-picture").val(attachment.url);
    });
    mediaUploader.open();
  });
});
