@extends('Admin/_layout')
@section('content')

    <p>
        <button class="btn btn-primary" ng-click="editClick(0)">Add news</button>
    </p>
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th>TT</th>
                <th>id</th>
                <th>Họ tên</th>
                <th>giới tính</th>
                <th>Ngày sinh</th>
                <th>Quê quán</th>
                <th>Edit</th>
                <th>Xoa</th>
            </tr>
        </thead>
        <tbody >
        <tr dir-paginate = "sp in nhanviens |filter: search| itemsPerPage: pageSize" current-page="currentPage">
            <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
                <td>@{{ sp.id }}</td>
                <td>@{{ sp.ten_nhanvien }}</td>
                <td>@{{ sp.gioitinh }}</td>
                <td>@{{ sp.ngaysinh }}</td>
                <td>@{{ sp.quequan }}</td>

                <td><button class="btn btn-info" ng-click="editClick(sp.id)">Sua</button></td>
                <td><button class="btn btn-danger" ng-click="deleteClickk(sp.id)">xoa</button></td>
            </tr>
        </tbody>
    </table>
    <dir-pagination-controls max-size='5' on-page-change="pageChangeHandler(newPageNumber)"></dir-pagination-controls>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
      Launch
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">@{{modalTitle}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                    <div class="container-fluid">
                    <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">id</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="name" ng-model="nhanvien.id">
                            </div>
                          </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="name" ng-model="nhanvien.ten_nhanvien">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">giới tính</label>
                            <select ng-model="nhanvien.gioitinh" class="form-control">
                                     b4-p
                                    <option value="Nam">Nam</option>
                                    <option value="Nu">Nu</option>
                                </select>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Ngày sinh</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="nhanvien.ngaysinh">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhanvien.email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Quê quán</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhanvien.quequan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Số điện thoại</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhanvien.sdt">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Cấp bậc</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhanvien.capbac">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" ng-click="updateData()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
        });
     

    </script>
   <script src="/Adminjs/nhanvien.js"></script>

@stop