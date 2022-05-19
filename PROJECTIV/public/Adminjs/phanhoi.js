var app = angular.module('myapp', ['angularUtils.directives.dirPagination']);
app.controller('mycontroller', function($scope, $http) {
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/phanhois"
    }).success(function(response) {
        console.log(response);
        $scope.phanhoi = response;
    });
    $scope.editClick = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Them moi ban tin";
            // $scope.phanhois._token = CSRF_TOKEN;
        } else {

            $http({
                Method: "GET",
                url: "http://127.0.0.1:8000/api/phanhois/" + id
            }).success(function(response) {
                $scope.phanhois = response;
                // $scope.phanhois._token = CSRF_TOKEN;
            });
            $scope.modalTitle = "Sua ban tin";
        }
        $('#modelId').modal('show');
    }
    var api='http://127.0.0.1:8000/api/phanhois/';
    $scope.updateData = function() {
        var m = $scope.id==0?"POST":"PUT";
        var url = $scope.id==0?api:api+$scope.id;
        $http({
            method: "PUT",
            url: "http://127.0.0.1:8000/api/phanhois/" + $scope.id,
            data: $scope.phanhois,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            console.log(response);
            location.reload();
        });
    }
    $scope.deleteClick = function(id) {
        var xacnhan = confirm("Ban co muon xoa that khong?");
        if (xacnhan) {
            alert("Ban vua chon xoa id=" + id);
        } else {
            alert("Ban da huy lenh xoa");
        }

    }
       $scope.currentPage = 1;
    $scope.pageChangeHandler = function(num) {
            $scope.currentPage = num;
        };
    $scope.pageSize = 3;
});