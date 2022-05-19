@extends('Admin/_layout')
@section('content')

    <p>
        <button class="btn btn-primary" ng-click="editClick(0)">Add news</button>
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th>STT</th>
                <th>id slide</th>
                <th>link</th>
                <!-- <th>ảnh</th> -->
                <th>Sua</th>
                <th>Xoa</th>
            </tr>
        </thead>
        <tbody>
        <tr dir-paginate = "sp in slide |filter: search| itemsPerPage: pageSize" current-page="currentPage">
            <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
                <td>@{{ sp.id_slide }}</td> 
                <td>@{{ sp.link}}</td>

                <!-- <td><img src="//@{{ sp.image }}" alt=""></td> -->
                <td><button class="btn btn-info" ng-click="editClick(sp.id_slide)">Sua</button></td>
                <td><button class="btn btn-danger" ng-click="deleteClick(sp.id_slide)">xoa</button></td>
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

                                <input type="text" class="form-control" id="name" ng-model="slides.id_slide">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Đường dẫn</label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control" id="name" ng-model="slides.link">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Ảnh</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="photos" name="photos" ng-model="slides.image">
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
    
    <script src="/Adminjs/slide.js">

    </script>
@stop