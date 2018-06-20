$(document).ready(function(){
      $(".sortable").sortable();
      $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      ClassicEditor
        .create(document.querySelector('#editor1'))
        .then(function (editor) {
          // The editor instance
        })
        .catch(function (error) {
          console.error(error)
        })
  
      // bootstrap WYSIHTML5 - text editor
  
      $('.textarea').wysihtml5({
        toolbar: { fa: true }
      })
    });

    $(".remove-btn").click(function(){
      
        var $data_url = $(this).data("url");
        
        swal({
            title: 'Emin misiniz?',
            text: "Bu işlemi geri alamayacaksınız!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, Sil!',
            cancelButtonText:   'Hayır'
        }).then((result) => {
            if (result.value) {
                window.location.href =  $data_url;
            }
        });
    });

    $(".isActive").change(function(){
      
      var $data = $(this).prop("checked");
      
      var $data_url = $(this).data("url");
      if(typeof $data !== "undefined" && typeof $data_url !== "undefined"){
        $.post($data_url, {data : $data}, function(response){
          swal({
            position: 'top-end',
            type: 'Başarılı',
            title: 'Kayıt başarıyla pasif edildi.',
            showConfirmButton: false,
            timer: 1500
          })
        });
      }
    });

    

    $(".sortable").on("sortupdate", function(event, ui){
      var $data = $(this).sortable("serialize");
      var $data_url = $(this).data("url");

      $.post($data_url, {data : $data}, function(response){
        swal({
          position: 'top-end',
          type: 'Başarılı',
          title: 'Kayıt başarıyla YER DEĞİŞTİRDİ.',
          showConfirmButton: false,
          timer: 1500
        })
      });
    });
});