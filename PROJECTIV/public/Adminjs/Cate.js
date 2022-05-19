var app = angular.module('myapp', ['angularUtils.directives.dirPagination']);

app.controller('mycontroller', function($scope, $http) {
    var api ='http://127.0.0.1:8000/api/Lsp/';
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/Lsp"
    }).success(function(response) {
        console.log(response);
        $scope.lsp = response;
    });
    $scope.load=()=>{
        $http({
            Method: "GET",
            url: "http://127.0.0.1:8000/api/Lsp"
        }).success(function(response) {
            console.log(response);
            $scope.lsp = response;
        });
    }
    $scope.editClick = function(id) {
       
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Them moi ban tin";
            // $scope.sanpham._token = CSRF_TOKEN;
            if($scope.lsps){
                delete $scope.lsps;
            }
        } else {

            $http({
                Method: "GET",
                url: "http://127.0.0.1:8000/api/Lsp/" + id
            }).success(function(response) {
                $scope.lsps = response;
                // $scope.sanpham._token = CSRF_TOKEN;
            });
            $scope.modalTitle = "Sua ban tin";
        }
        $('#modelId').modal('show');
      
    }
    $scope.updateData = function() {
        var m = $scope.id == 0?"POST":"PUT";
        var urll = $scope.id == 0?api:api+$scope.id;
        $http({
            method: m,
            url: urll,
            data: $scope.lsps,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            console.log(response);
            $scope.load();
        $('#modelId').modal('hide');

        });
    }
    $scope.deleteClick = function(id) {
        var xacnhan = confirm("Ban co muon xoa that khong?");
        if (xacnhan) {
        $http({
            method: "DELETE",
            url: "http://127.0.0.1:8000/api/Lsp/" +id,
            data: $scope.lsps,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            console.log(response);
            $scope.load();
        $('#modelId').modal('hide');

        }); 
        alert("Ban vua chon xoa id=" + id);
    } else {
        alert("Ban da huy lenh xoa");
    }
    }
    $scope.currentPage = 1;
    $scope.pageChangeHandler = function(num) {
            $scope.currentPage = num;
        };
    $scope.pageSize = 10;
});