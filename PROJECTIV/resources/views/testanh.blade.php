<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body ng-app="myapp" ng-controller="mycontroller">
      <table class="table table-bodered table-tripped table-bordered">
          <thead>
              <tr>
                  <th>Anh</th>
                  <td>@{{anh}}</td>

                  <td id="output"></td>
                  <td ng-model="output"></td>



              </tr>
          </thead>
          <tbody>
              <tr ng-repeat="a in anhs">
                  <td><img src="/upload/sanpham/@{{a.anh}}" style="width:50px"></td>
                  <td><button type="button" name="" id="" class="btn btn-primary" ng-click="deleteClick(a.anh)">Xoa</button></td>

              </tr>
        
      </table>
        <div class="form-group">
            <label for="name">Ảnh:</label>
            <div>
                <input type="file" class="form-control" id="fileImage" ng-model="anh.anh">

            </div>
            </br>
            <div style="width:100px;height:100px" id="Anh">
                <img src="/upload/sanpham/@{{anh.anh}}" alt="Ảnh" style="width:100%;height:100%" ng-model="anh.anh">
            </div>
        </div>
      <button type="submit" name="testanh" id="testanh" class="btn btn-primary" btn-lg btn-block id="" ng-click="updateData()">ADD</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/Adminjs/angular.min.js"></script>

    <script src="/Adminjs/anh.js"></script>
</body>
</html>