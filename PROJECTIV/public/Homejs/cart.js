var app = angular.module('myapp', []);
app.controller("mycontroller", function ($scope, $http,$window) {
    $scope.listSP = [];
    /*=================== Thao tác dữ liệu ==================================== */
    $scope.LoadCart = function () {
        $scope.listSP = JSON.parse(localStorage.getItem('cart'));
        console.log($scope.listSP);
    };
    $scope.LoadCart();
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
        return dem;
    }

    $scope.sum = $scope.product_count();     

        $http({
            Method: "GET",
            url: "http://127.0.0.1:8000/api/sanphams/"+'id',
        }).success(function(response) {
            console.log(response);
            $scope.sanphams = response;
        });
   
    $scope.totalprice = function(){
        $scope.total = 0;
        $scope.listSP = JSON.parse(localStorage.getItem('cart'));
        if($scope.listSP==null){
           return  $scope.total = 0;
        }
        else{
            for(var i=0; i<$scope.listSP.length;i++){
                $scope.total+=$scope.listSP[i].quantity*$scope.listSP[i].unit_price;
            }
        }
        return  $scope.total;
    }
 
    $scope.totalprice ();
    $scope.remove = function (item) {
        var index = $scope.listSP.indexOf(item);
      if(confirm("Bạn có muốn xóa sản phẩm này khỏi giỏ hàng ?")){
        $scope.listSP.splice(index, 1);
        alert("Xóa thành công")
      }
      else{
          return false;
      }
        localStorage.setItem('cart', JSON.stringify($scope.listSP));
       
    },
    $scope.Tang = function (item) {
        var index = $scope.listSP.indexOf(item);
        if (index >= 0) {
            $scope.listSP[index].quantity += 1;
        }
        localStorage.setItem('cart', JSON.stringify($scope.listSP));
    }

    $scope.Giam = function (item) {
        var index = $scope.listSP.indexOf(item);
        if (index >= 0 && $scope.listSP[index].quantity >= 2) {
            $scope.listSP[index].quantity -= 1;
        }
        localStorage.setItem('cart', JSON.stringify($scope.listSP));
    }
    $scope.removeSP = function () {
        localStorage.removeItem('cart')
    }
    $scope.reloadcart = function () {
        location.reload();
    }
   
    $scope.getdate = function () {
        var d = new Date();
        d = new Date(d.getTime() - 3000000);
        var date_format_str = d.getFullYear().toString()+"-"+((d.getMonth()+1).toString().length==2?(d.getMonth()+1).toString():"0"+(d.getMonth()+1).toString())+"-"+(d.getDate().toString().length==2?d.getDate().toString():"0"+d.getDate().toString())+" "+(d.getHours().toString().length==2?d.getHours().toString():"0"+d.getHours().toString())+":"+((parseInt(d.getMinutes()/5)*5).toString().length==2?(parseInt(d.getMinutes()/5)*5).toString():"0"+(parseInt(d.getMinutes()/5)*5).toString())+":00";
        console.log(date_format_str);
        return date_format_str;
    }
    $scope.infomation = function(){
        $scope.info = " ";
        $scope.listSP = JSON.parse(localStorage.getItem('cart'));
        if($scope.listSP==null){
           return  $scope.info = " ";
        }
        else{
            for(var i=0; i<$scope.listSP.length;i++){
                $scope.info+=$scope.listSP[i].name+":"+$scope.listSP[i].quantity+";";
            }
        }
        return  $scope.info;
    }
    $scope.updateData = function() {
        let r = Math.floor(Math.random() * 1001);;
        $scope.ban ={
            id_kh : r,
            kh_name :$scope.ban.kh_name,
            tong_tien : $scope.totalprice (),
            date_order : $scope.getdate(),
            payment : "on",
            status :  $scope.infomation(),
            note : $scope.ban.note,
        }
        $http({
            method: "POST",
            url: 'http://127.0.0.1:8000/api/billbans',
            data: $scope.ban,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            $scope.removeSP();
            location.reload();
        });
    }



});