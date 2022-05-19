
var app = angular.module('myapp', []);

app.controller('mycontroller', function($scope, $http,$window) {
    var api ='http://127.0.0.1:8000/api/sanphams/';

    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/Lsp"
    }).success(function(response) {
        console.log(response);
        $scope.lsp = response;
    });
    $http({
        Method: "GET",
        url: api,
    }).success(function(response) {
        $scope.sanphams = response;
    });
    $scope.addToCart = function(sp) {
        let item = {};
        item.id = sp.id;
        item.name = sp.name;
        item.mota_sp = sp.mota_sp;
        item.picture = sp.picture;
        item.unit_price = sp.unit_price;
        item.image = sp.image;
        item.quantity = 1;
        var list;
        if (localStorage.getItem('cart') == null) {
            list = [item];
        } else {
            list = JSON.parse(localStorage.getItem('cart')) || [];
            let ok = true;
            for (let x of list) {
                if (x.id == item.id) {
                    x.quantity += 1;
                    ok = false;
                    break;
                }
            }
            if (ok) {
                list.push(item);
            }
        }
        localStorage.setItem('cart', JSON.stringify(list));
        alert("Đã thêm giở hàng thành công");
        $scope.product_count();
    }
    $scope.listSP = [];
    /*=================== Thao tác dữ liệu ==================================== */
   

    $scope.product_count = function(){
        var dem = 0;
        $scope.listSP = JSON.parse(localStorage.getItem('cart'));
        if($scope.listSP==null){
           return dem = 0;
        }
        else{
            for(var i=0; i<$scope.listSP.length;i++){
                dem++;
            }
        }
        $scope.sum = dem;     
    }
    $scope.product_count();

    $scope.currentPage = 1;
    $scope.pageChangeHandler = function(num) {
            $scope.currentPage = num;
        };
    $scope.pageSize = 10;


   

});