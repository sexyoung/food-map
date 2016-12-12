<script type="text/javascript">
  $(document).ready(function() {

    let pIndex = -1;
    let previewPhotos = [];

    $('#applyModal').modal({
      backdrop: 'static'
    });

    $.ajaxSetup({
       beforeSend: function(){
         $(".modal-body .alert")
           .removeClass("hide alert-danger")
           .addClass("alert-warning");
         $("#applyModal input, #applyModal select, #applyModal .btn").prop("disabled", true);
       },
       complete: function(){
         $("#applyModal input, #applyModal select, #applyModal .btn").prop("disabled", false);
       }
    });

    $('input[name=album_url]').on('change', function(event) {

      if(new RegExp(event.target.pattern).test(event.target.value)){
        const album_id =  new URL(
          event.target.value
        ).searchParams.get("album_id");

        $(".modal-body .alert").text("預覽中...")

        $.get('/album-list/'+album_id)
        .done(function(photos){
          $(".modal-body .alert").addClass("hide");
          if(photos.length === 0){
            $(".modal-body .alert")
              .text("此FB相簿沒有相片")
              .removeClass("hide alert-warning")
              .addClass("alert-danger");
            previewPhotos = [];
            return;
          }
          pIndex = -1;
          previewPhotos = photos;

        });
      }

    })


    $('form.apply').on('submit', function(event) {
      event.preventDefault();
      let params = new URL(
        "http://test.com/?"+$(this).serialize()
      ).searchParams;
      let album_id = new URL(
        params.get("album_url")
      ).searchParams.get("album_id");

      $(".modal-body .alert").text("送出申請中...")

      $.post('/apply-for', {
        album_id,
        type:       params.get("type"),
        page_user:  params.get("page_user"),
        page_email: params.get("page_email"),
        _token:     $('meta[name="csrf-token"]').attr('content')
      }, 'json')
      .done(function(xhr){
        $(".modal-body .alert")
          .text("成功送出")
          .removeClass("hide alert-warning")
          .addClass("alert-success");

        setTimeout(function(){
          $('#applyModal').modal('hide');
        }, 2000);
      })
      .fail(function(err){
        let errorMessages = [];
        for(key in err.responseJSON){
          errorMessages.push(err.responseJSON[key][0]);
        }
        $(".modal-body .alert")
          .html("<ul>"+errorMessages.map(function(err){
            return "<li>"+err+"</li>";
          })+"</ul>")
          .removeClass("hide alert-warning")
          .addClass("alert-danger");
      });;

    });

    setInterval(function(){
      if(previewPhotos.length > 0){
        pIndex = ++pIndex % previewPhotos.length;
        $(".preview .img-responsive").css(
          "background-image", "url("+previewPhotos[pIndex]+")"
        );
      }
    }, 3000);
  });
</script>
