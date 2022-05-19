@extends('Admin/_layout')
@section('content')
    <p>
        <button class="btn btn-primary" ng-click="editClick(0)">Add news</button>
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TT</th>
                <th>id </th>
                <th>ten NhaCC</th>
                <th>dia chi</th>
                <th>email</th>
                <th>sdt</th>
                <th>Delet</th>
                <th>Created at</th>
                <th>updated_at</th>
                <th>edit</th>
                <th>Xoa</th>
            </tr>
        </thead>
        <tbody>
        <tr dir-paginate = "sp in nhaccs |filter: search| itemsPerPage: pageSize" current-page="currentPage">
            <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
                <td>@{{ sp.id }}</td>
                <td>@{{ sp.ten_ncc }}</td>
                <td>@{{ sp.diachi_ncc }}</td>
                <td>@{{ sp.email }}</td>
                <td>@{{ sp.sdt }}</td>
                <td>@{{ sp.Delet }}</td>
                <td>@{{ sp.created_at }}</td>
                <td>@{{ sp.updated_at }}</td>

                <td><button class="btn btn-info" ng-click="editClick(sp.id)">Sua</button></td>
                <td><button class="btn btn-danger" ng-click="deleteClick(sp.id)">xoa</button></td>
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
                            <label for="name" class="col-sm-3 col-form-label">Id</label>
                            <div class="col-sm-9">

                              <input type="text" class="form-control" id="name" ng-model="nhacc.id">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Tên Nhà cung cấp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhacc.ten_ncc">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Địa chỉ cung cấp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhacc.diachi_ncc">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhacc.email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Số điện thoại</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhacc.sdt">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Delet</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="nhacc.Delet">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Create at</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="nhacc.created_at">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Update at</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="nhacc.updated_at">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/Adminjs/nhacc.js"></script>
@stop