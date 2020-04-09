document.addEventListener('DOMContentLoaded', function() {

  // mobalie sideNav
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {
    edge: 'right'
  });

  $('#recommend > .col > .recommend-item > figure').matchHeight();
  $('.col > .choosePanFromImage-item > figure').matchHeight();
  $('.card-image').matchHeight();
  // // location Information
  // var location = document.getElementById('locationInformation');
  // // location click Event
  // location.addEventListener("click", function(){
  //
  //   if (!navigator.geolocation) {
  //     // Geolocation APIに対応していない
  //     alert("この端末では位置情報が取得できません");
  //   }
  //
  //     // 現在地を取得
  //     navigator.geolocation.getCurrentPosition(
  //       function(position){
  //         var lat = position.coords.latitude;
  //         var lng = position.coords.longitude;
  //         var location = {lat: parseFloat(lat), lng: parseFloat(lng)};
  //         var geocoder = new google.maps.Geocoder();
  //         geocoder.geocode({'latLng': location}, function(results, status) {
  //           if (status === 'OK') {
  //             document.getElementById("search").innerHTML = JSON.stringify(results, null , "  ");
  //             console.log(results);
  //           } else {
  //             window.alert('Geocoder failed due to: ' + status);
  //           }
  //         });
  //       },
  //       // 取得失敗した場合
  //       function(error) {
  //         switch(error.code) {
  //           case 1: //PERMISSION_DENIED
  //             alert("位置情報の利用が許可されていません");
  //             break;
  //           case 2: //POSITION_UNAVAILABLE
  //             alert("現在位置が取得できませんでした");
  //             break;
  //           case 3: //TIMEOUT
  //             alert("タイムアウトになりました");
  //             break;
  //           default:
  //             alert("その他のエラー(エラーコード:"+error.code+")");
  //             break;
  //         }
  //       }
  //     ); // navigator.geolocation.getCurrentPosition
  // }); //click Event
});
