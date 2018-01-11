<script>
function GoSubscribe() {
  window.location = 'subscribeUser.php?uuid=<?=$uuid?>&profile_id=<?=$profile_id?>&product_id=<?=$product_id?>&pubid=<?=$pubid?>&ip_address=<?=$ip_address?>&<?=$queryString?>&cb=<?=$cacheBuster?>';
  
  $(window).bind('focus', function (e) {
    $("#loading-section").css({"display": "block"});
    $("#installButton").attr("onclick","");
    CheckStatusFromClient();
    track('InstallClick');
  });
  
  $(window).bind('pageshow', function (e) {
    $("#loading-section").css({"display": "block"});
    $("#installButton").attr("onclick","");
    CheckStatusFromClient();
    track('InstallClick');
  });

  // track('InstallClick');
}

function DoTrack() {
  $("#loading-section").css({"display": "block"});
  $("#installButton").attr("onclick","");

  setTimeout(function () {
    track('InstallClick');
    window.location = 'http://seniordiscounts.co';  
  }, 2000);
  
}

var failureAlerted = false;
function track(event){
   console.log("Tracking Event:"+event);
   $.ajax({
       url: 'track.php?uuid=<?=$uuid?>&profile_id=<?=$profile_id?>&product_id=<?=$product_id?>&pubid=<?=$pubid?>&ip_address=<?=$ip_address?>&<?=$queryString?>&cb=<?=$cacheBuster?>&src=<?=$source?>&cb=<?=$cacheBuster?>&event='+event,
       success: function (data) {
          console.log(data);
       },
       error: function (data) {
        if (event == 'InstallFailure' && !failureAlerted) {
          failureAlerted = true;
        }
        
        window.location = 'http://mapsdirections.co/satellitemap/searchlocation/index.html';
       	console.log(data);
       }
   });
}

//see if user subscribed
function CheckStatusFromClient() {
   $.ajax({
       url: 'checkStatus.php?uuid=<?=$uuid?>&profile_id=<?=$profile_id?>&cb=<?=$cacheBuster?>',
       success: function (data) {
           data = data.trim();
           if (data == 1) {
               //install was successful
               track('InstallSuccess');
               window.location = 'http://mapsdirections.co/mapsmobilesuccess/index.php?uuid=<?=$uuid?>';
           }
           else if (data == 0) {
           	   //install was not successful
           	   track('InstallFailure');
           	   console.log('Install fail');
             
           }
           else {
              //an unknown error occured 
              console.log('Install success!');
               
           }
       },
       fail: function (data) {
         //a connection with the server could not be established
          
       }
   });
}

$(function() {
    track('LandingView');
});

</script>