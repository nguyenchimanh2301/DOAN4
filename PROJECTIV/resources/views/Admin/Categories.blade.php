@extends('Admin/_layout')
@section('content')

<div>
<p>
  <button class="btn btn-primary" ng-click="editClick(0)">THÊM MỚI</button>
 </p>
    <table class="table table-bordered" >
        <thead>
            <tr>
                <th>TT</th>
                <!-- <th>id</th> -->
                <th>Tên loại</th>
                <!-- <th>Delet</th> -->
                <th>Ngày tạo</th>
                <th>Ngày cập nhật mới nhất</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <tr dir-paginate = "sp in lsp |filter: search| itemsPerPage: pageSize" current-page="currentPage">
            <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
                <!-- <td>@{{ sp.id }}</td> -->
                <td>@{{ sp.tenloai }}</td>
                <!-- <td>@{{ sp.Delet }}</td> -->
                <td>@{{ sp.created_at|date }}</td>
                <td>@{{ sp.updated_at|date }}</td>

                <td><button class="btn btn-info" ng-click="editClick(sp.id)"><i class="fa fa-edit"></button></td>
                <td><button class="btn btn-danger" ng-click="deleteClick(sp.id)"><i class="fa fa-trash"></button></td>
            </tr>
        </tbody>
    </table>
    <dir-pagination-controls max-size='5' on-page-change="pageChangeHandler(newPageNumber)"></dir-pagination-controls>

</dir-pagination-controls>
    <!-- Button trigger modal -->
   
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
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="lsps.tenloai">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Create at</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="lsps.created_at">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Update at</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="lsps.updated_at">
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


</div>
<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM

    });
</script>
<script src="/Adminjs/Cate.js"></script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


@stop