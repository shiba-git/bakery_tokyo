document.addEventListener('DOMContentLoaded', function() {

  // mobalie sideNav
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {
    edge: 'right'
  });


  $('#recommend > .col > .recommend-item > figure').matchHeight();
  $('.col > .choosePanFromImage-item > figure').matchHeight();
  $('.col > .searchStoreBox-item > .searchStoreBox-itemWrap').matchHeight();
  $('.card-image').matchHeight();

  //pan create edit
  $("input[type='file']").on('change',function(){
     var file = $(this).prop('files')[0];
     $(".filename").html(file.name);
  });
  //edit 
  $('select#permit').formSelect();
   $('select#storeid').formSelect();
   $('select#genreid').formSelect();
  // delete
  $(".deletebtn").on("submit", function(){
    return confirm("本当に削除してよろしいでしょうか？");
  });

  // type
  $("#toggle-line").on("click", function() {
    $("#type-line").slideToggle();
  });
  $("#toggle-insta").on("click", function() {
    $("#type-insta").slideToggle();
  });
  
  // // location locationInformation
  var location = document.getElementById('locationBtn');
  // // location click Event
  location.addEventListener("click", function(){
  
    if(navigator.geolocation){
          // 現在地を取得
      navigator.geolocation.getCurrentPosition(
        function(position){
          var lat = position.coords.latitude;
          console.log(lat);
          var lng = position.coords.longitude;
          var location = {lat: parseFloat(lat), lng: parseFloat(lng)};
          var uri =  "/search/location/?page=1&lat=" + lat + "&lng=" + lng;
          window.location.href = uri;
        },
        // 取得失敗した場合
        function(error) {
          switch(error.code) {
            case 1: //PERMISSION_DENIED
              alert("位置情報の利用が許可されていません");
              break;
            case 2: //POSITION_UNAVAILABLE
              alert("現在位置が取得できませんでした");
              break;
            case 3: //TIMEOUT
              alert("タイムアウトになりました");
              break;
            default:
              alert("その他のエラー(エラーコード:"+error.code+")");
              break;
          }
        }
      ); // navigator.geolocation.getCurrentPosition
    }else{
      // Geolocation APIに対応していない
      alert("この端末では位置情報が取得できません");
    };
  }); //click Event
});
