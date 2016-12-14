<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Dashboard Template for Bootstrap</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">回食尚大學</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 main">
          <h1 class="page-header"></h1>

          <h2 class="sub-header">申請入學清單</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>學院別</th>
                  <th>粉絲團</th>
                  <th>聯絡人</th>
                  <th>Email</th>
                  <th>地區</th>
                  <th>相簿位置</th>
                  <th>審核</th>
                  <th>建立日期</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pageAlbums as $album)
                  <tr>
                    <td>{{$album->id}}</td>
                    <td>{{$album->type}}</td>
                    <td>{{$album->page_name}}</td>
                    <td>{{$album->page_user}}</td>
                    <td>{{$album->page_email}}</td>
                    <td><a href="http://maps.google.com?q={{$album->location}}" target="_blank">{{$album->location}}</a></td>
                    <td><a href="https://facebook.com/{{$album->album_id}}" target="_blank">打開相簿</a></td>
                    <td>
                      <input type="checkbox" name="" data-id="{{$album->id}}" {{$album->confirmed === 1? "checked": ""}} />
                    </td>
                    <td>{{$album->created_at}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("input:checkbox").on('change', function(event) {
          $.post("/admin-confirm", {
            id: $(this).data("id"),
            confirmed: $(this).prop("checked")? 1 : 0,
            _token:     $('meta[name="csrf-token"]').attr('content')
          },'json');
        })
      });

    </script>
  </body>
</html>
