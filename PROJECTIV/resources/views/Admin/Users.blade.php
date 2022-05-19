@extends('Admin/_layout')
@section('content')

<p>
    <button class="btn btn-primary" ng-click="editClick(0)">Add news</button>
</p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th> id </th>
            <th>users_name </th>
            <th>full_name </th>
            <th>email </th>
            <th>password </th>
            <th>phone </th>
            <th>address </th>
            <th>image </th>
            <th>Delet</th>
            <th>updated_at </th>
            <th>remember_token </th>
            <th>created_at </th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>
    </thead>
    <tbody>
        <tr dir-paginate="sp in users |filter: search| itemsPerPage: pageSize" current-page="currentPage">
            <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
            <td>@{{ sp.id }}</td>
            <td>@{{ sp.users_name	}}</td>
            <td>@{{ sp.full_name	 }}</td>
            <td>@{{ sp.email	}}</td>
            <td>@{{ sp.password	 }}</td>
            <td>@{{ sp.phone	}}</td>
            <td>@{{ sp.address	 }}</td>
            <td>@{{sp.image}}</td>
            <td>@{{ sp.Delet }}</td>
            <td>@{{ sp.updated_at	}}</td>
            <td>@{{ sp.remember_token	 }}</td>
            <td>@{{ sp.created_at	}}</td>


            <td><img src="//@{{ sp.image }}" alt=""></td>
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
                        <label for="name" class="col-sm-3 col-form-label">ID</label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" id="name" ng-model="user.id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">userName</label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" id="name" ng-model="user.users_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Full name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" ng-model="user.full_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Mail</label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" id="name" ng-model="user.email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label"> password</label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" id="name" ng-model="user.password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">phone</label>
                        <div class="col-sm-9">
                            <input type="tex" class="form-control" id="name" ng-model="user.phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">address</label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" id="name" ng-model="user.address">
                        </div>
                    </div>
                   

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Ảnh</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="name" ng-model="user.image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Delet</label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" id="name" ng-model="user.Delet">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">UpdatedAt</label>
                        <div class="col-sm-9">

                            <input type="date" class="form-control" id="name" ng-model="user.updated_at">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">remember_token</label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" id="name" ng-model="user.remember_token">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">created_at</label>
                        <div class="col-sm-9">

                            <input type="date" class="form-control" id="name" ng-model="user.created_at">
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

<script src="/Adminjs/user.js"></script>
@stop