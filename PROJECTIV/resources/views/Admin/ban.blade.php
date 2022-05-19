@extends('Admin/_layout')
@section('content')

    <p>
        <button class="btn btn-primary" ng-click="editClick(0)">Add news</button>
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th>STT</th>
                <!-- <th>id</th>
                <th>id Khách hàng</th> -->
                <th>tên Khách hàng</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <!-- <th>Payment</th> -->
                <th>Thông tin </th>
                <th>ghi chú</th>
                <th>Ngày tạo</th>
               <th>Cập nhật mới nhất</th>
                <th>Sua</th>
                <th>Xoa</th>
            </tr>
        </thead>
        <tbody>
        <tr dir-paginate = "sp in bans |filter: search| itemsPerPage: pageSize" current-page="currentPage">
            <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
                <!-- <td>@{{ sp.id	}}</td> 
                <td>@{{ sp.id_kh	 }}</td>  -->
                <td>@{{ sp.kh_name	 }}</td>
                <td>@{{ sp.date_order	 }}</td>
                <td>@{{ sp.tong_tien|number}}</td>
                <!-- <td>@{{ sp.payment}}</td> -->
                <td>@{{ sp.status	}}</td>
                <td>@{{ sp.note	}}</td>
                <td>@{{ sp.created_at| date:'yyyy-MM-dd' }}</td>
                <td>@{{ sp.updated_at| date:'yyyy-MM-dd' }}</td>
                

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
                    <!-- <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">ID</label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control" id="name" ng-model="ban.id">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">ID Khách hàng</label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control" id="name" ng-model="ban.id_kh">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Tên Khách hàng</label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control" id="name" ng-model="ban.kh_name">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Ngày đặt hàng</label>
                            <div class="col-sm-9">

                                <input type="date" class="form-control" id="name" ng-model="ban.date_order">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Tổng Tiền</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="ban.tong_tien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Thanh toán</label>
                            <div class="col-sm-9">
                               
                                   <label for=""></label>
                                   <select class="form-control"  id="name" ng-model="ban.thanh_toan">
                                     <option>On</option>
                                     <option>OFF</option>
                                   </select>
                             
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Thông tin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="ban.status">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Note</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="ban.note">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Created at</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="ban.status">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Update at</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="name" ng-model="ban.updated_at">
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
   
    <script src="/Adminjs/ban.js">

    </script>
@stop