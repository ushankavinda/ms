var myApp = angular.module('myApp', []);

myApp.controller('MyController', ['$scope', '$http', function($scope, $http) {
  $http.get('searchResult').success(function(data) {
    $scope.searchData = data;
  });
}]);

//myApp.controller('MyController', function MyController($scope) {
//    $('document').ready(function() {
//        //$('#search').focus(function (){
//            $.ajax({
//                url : "searchResult",
//                type:'GET',
//                dataType:'json',
//                //cache:false,
//                success:function(data){
//                    if(data['success']) {
//                        $scope.searchData = data;
//                        $(data.records).each(function(i,item){
//                        console.log(item);
//                        });
//                    }
//                }
//            });
//        //});  
//    });
//});



