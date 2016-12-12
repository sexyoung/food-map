<script type="text/javascript">
  $(document).ready(function() {

    $('#applyModal').modal({
      backdrop: 'static'
    });

    $.ajaxSetup({
       beforeSend: function(){
         $(".modal-body .alert")
           .text("送出申請中...")
           .removeClass("hide alert-danger")
           .addClass("alert-warning");
         $("#applyModal input, #applyModal select, #applyModal .btn").prop("disabled", true);
       }
    });


    $('form.apply').on('submit', function(event) {
      event.preventDefault();
      let params = new URL(
        "http://test.com/?"+$(this).serialize()
      ).searchParams;
      let album_id = new URL(
        params.get("album_url")
      ).searchParams.get("album_id");

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
      })
      .always(function(){
        $("#applyModal input, #applyModal select, #applyModal .btn").prop("disabled", false);
      });

    });

  });
</script>
