
var app = angular.module('myapp',[]);

app.controller('mycontroller', function($scope, $http,$rootScope) {
    var api = 'http://127.0.0.1:8000/api/anh';
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/anh"
    }).success(function(response) {
        $scope.anhs = response;
    });

   
    // const fileUpload = document.querySelector("#fileImage");
    // fileUpload.addEventListener("change", (e) => {
    //     console.log(e.target.files)
    //     const files = e.target.files[0];
    //     console.log(files)
    //     // document.getElementById('Anh').innerHTML = `<img src="/upload/sanpham/`+ files[0].name +`" alt="Ảnh" style="width:100%;height:100%">`;
    //     // for(const file of files) {
    //     //     const {name, type, size, lastModified } = file;
    //     //     // Làm gì đó với các thông tin trên

    //     //     // console.log(file.name);

    //     //     // $scope.anh.anh = file.name;
    //     //     document.getElementById('Anh').innerHTML = `<img src="/upload/sanpham/`+ file.name +`" alt="Ảnh" style="width:100%;height:100%">`;
    //     // };
    // });

    
    $scope.updateData = function() {
        
        const fileUpload = document.getElementById("fileImage");
      
        $scope.anh = {anh: fileUpload.files[0].name}
        $http({
            method: "POST",
            url: 'http://127.0.0.1:8000/api/anh',
            data: $scope.anh,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            console.log(response);
            location.reload();
        });
    }
   
});