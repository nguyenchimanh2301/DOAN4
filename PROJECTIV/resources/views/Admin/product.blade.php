@extends('Admin/_layout')
@section('content')

    <p>
        <button class="btn btn-primary" ng-click="editClick(0)">THÊM MỚI</button>
    </p>
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th>TT</th>
                <th>Tên sản phẩm</th>
                <!-- <th>Id Loai sp</th>
                <th>Id nha cung cap</th> -->
                <!-- <th>Mota</th> -->
                <th>Gía</th>
                <th>Số lượng</th></th>
                <th>Ảnh</th>
                <th>Đơn vị tính</th>
                <th>Nsx</th>
                <th>HSD</th>
                <th>Edit</th>
                <th>Xoa</th>
            </tr>
        </thead>
        <tbody >
            <tr dir-paginate="sp in sanphams |filter: search|orderBy:'-created_at'| itemsPerPage: pageSize" current-page="currentPage">
                <td>@{{ $index+1+(currentPage-1)*pageSize }}</td>
                <td>@{{ sp.name }}</td>
                <!-- <td>@{{ sp.id_loai_sp }}</td>
                <td>@{{ sp.id_ncc }}</td> -->
                <!-- <td>@{{ sp.mota_sp }}</td> -->
                <td>@{{ sp.unit_price|number }}</td>
                <td>@{{ sp.so_luong }}</td>
                <td><img src="/upload/sanpham/@{{ sp.image }}" class="img-fluid" style="width:120px;height:100px"></td>
                <td>@{{ sp.don_vi_tinh }}</td>
                <td>@{{ sp.created_at | date:'yyyy-MM-dd' }}</td>
                <td>@{{ sp.updated_at| date:'yyyy-MM-dd'}}</td>
                <td><button class="btn btn-info " ng-click="editClick(sp.id)"><i class="fa fa-edit"></button></td>
                <td><button class="btn btn-danger" ng-click="deleteClickk(sp.id)"><i class="fa fa-trash"></button></td>
            </tr>
           
        </tbody>
       
    </table>
    <dir-pagination-controls max-size='5'id="abuttonv" on-page-change="pageChangeHandler(newPageNumber)"></dir-pagination-controls>
    <!-- Button trigger modal -->

</dir-pagination-controls>
  

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
                            <label for="name" class="col-sm-3 col-form-label">Tên Sản Phẩm</label>
                            <div class="col-sm-9">

                              <input type="text" class="form-control" id="name" ng-model="sanpham.name">
                            </div>
                          </div>
                       
                         <div class="form-group">
                           <label for="lsp">Loại SP</label>
                           <select class="form-control" name="" id="lsp" ng-model="sanpham.id_loai_sp">
                             <option ng-repeat="lsp in lsp" value="@{{lsp.id}}">@{{lsp.tenloai}}</option>
                           </select>
                         </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Id Nhà cung cấp</label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control"ng-model="sanpham.id_ncc">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Mô tả</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="ckeditor1" ng-model="sanpham.mota_sp">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Gía</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="sanpham.unit_price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Số lượng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="sanpham.so_luong">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Ảnh</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="fileImage" ng-model="sanpham.image">
                                <div style="width:100px;height:100px" id="Anh">
                                <img src="/upload/sanpham/@{{sanpham.image}}" alt="Ảnh" style="width:100%;height:100%" ng-model="sanpham.image">
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Đơn vị tính</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="sanpham.don_vi_tinh">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Ngày sản xuất</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="sanpham.created_at">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Hạn sử dụng</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="sanpham.updated_at">
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
    <script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
        });
        
     CKEDITOR.replace('ckeditor1');
        
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="/Adminjs/sanphamcontroller.js">
       
    </script>


@stop