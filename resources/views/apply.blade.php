<div class="modal fade" id="applyModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal apply" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">申請入學</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">選擇學系</label>
            <div class="col-sm-10">
              <select class="form-control" name="type">
                @foreach ($colleges as $college)
                  <optgroup label="{{$college['name']}}">
                    @foreach ($college['departments'] as $key => $department)
                      <option value="{{$key}}">{{$department['name']}}系</option>
                    @endforeach
                  </optgroup>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="inputAlbum" class="col-sm-2 control-label">相簿網址</label>
            <div class="col-sm-10">
              <input type="text" name="album_url" class="form-control" id="inputAlbum" placeholder="請填寫 FB粉絲團相簿網址">
            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">申請單位</label>
            <div class="col-sm-10">
              <input type="text" name="page_user" class="form-control" id="inputName" placeholder="請填寫 店名/聯絡人">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="page_email" class="form-control" id="inputEmail" placeholder="your@email.com">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
          <button type="submit" class="btn btn-primary">送出申請</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
