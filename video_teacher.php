<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - VideoCall App UI</title>
  <link rel="stylesheet" href="/assets/css/videocall.css">
  <script src="https://kit.fontawesome.com/eef555952d.js" crossorigin="anonymous"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet"> 
<div class="app-container">
   <button class="mode-switch">
       <svg class="sun" fill="none" stroke="#fbb046" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-sun" viewBox="0 0 24 24"><defs/><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
  <svg class="moon" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-moon" viewBox="0 0 24 24"><defs/><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
     </button>
   
   <div class="app-main">
     <div class="video-call-wrapper">
       
       <div class="video-participant">
         <!-- <div class="participant-actions">
           <button class="btn-mute"></button>
          <button class="btn-camera"></button>
         </div> -->
         <div id="video-container">
          <div id="video-teacher">
            
            <video id="localVideo" autoplay muted></video>
          </div>
          <div id="video-user">
            <video id="remoteVideo" autoplay></video>
            <!-- <a href="#" class="name-tag">Tina Cate</a> -->
          </div>
          
        </div>
       </div>
     </div>
     <div class="video-call-actions ">
      <button id="callButton" class="video-action-button"   ><i class="fa-solid fa-phone" style="color: #58c2aa; font-size: 18px;"></i></button>
      <button id="miccallButton" class="video-action-button hidden-first" ><i class="fa-solid fa-microphone-slash" style="color: #58c2aa; font-size: 18px;"></i></button>
      <button id="sharecallButton" class="video-action-button hidden-first" ><i class="fa-solid fa-up-right-from-square" style="color: #58c2aa; font-size: 18px;"></i></button>
      <button id="answerCallButton" class="video-action-button hidden-first"><i class="fa-solid fa-phone-volume" style="color: #58c2aa; font-size: 18px;"></i></button>
      <button id="rejectCallButton" class="video-action-button hidden-first"><i class="fa-solid fa-phone-slash" style="color: #ff1f38; font-size: 18px;"></i></button>
      <button id="chatCallButton" class="video-action-button hidden-first" onclick="starchat()"><i class="fa-solid fa-comment" style="color:  #58c2aa; font-size: 18px;"></i></i></button>
      <button id="endCallButton" class="video-action-button endcall hidden-first">Leave</button>
    </div>
   </div>
  <div class="right-side" id="chat_hide">
    <div class="chat-container" >
      <div class="chat-header">
        <button class="chat-header-button" onclick="hidechat()">
          <i class="fa-solid fa-x"></i>
      </button>
      </div>
      <div class="chat-typing-area-wrapper">
        
      </div>
    </div><div class="chat-typing-area">
          <input type="text" placeholder="Type your meesage..." class="chat-input">
          <button class="send-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send" viewBox="0 0 24 24">
              <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
            </svg>
          </button>
        </div>
  </div>
  <button class="expand-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
    </button>
</div>
<!-- partial -->
<script src="js/lib/jquery.js"></script>
<script src="js/lib/socket.io-2.2.0.js"></script>
<script src="js/StringeeSDK-1.5.10.js"></script>

<script>
   var token = 'eyJjdHkiOiJzdHJpbmdlZS1hcGk7dj0xIiwidHlwIjoiSldUIiwiYWxnIjoiSFMyNTYifQ.eyJqdGkiOiJTSy4wLndJUUdKVVE4VUhiTzNTQWhaMmlPTm5aQUQ4empsZ0dDLTE2OTExNTQ4MjgiLCJpc3MiOiJTSy4wLndJUUdKVVE4VUhiTzNTQWhaMmlPTm5aQUQ4empsZ0dDIiwiZXhwIjoxNjkzNzQ2ODI4LCJ1c2VySWQiOiJ0ZWFjaGVyIn0.H51KOnBzKepAmeAixDCxJyYCLa1_iCXBgic6AgTETrw';
        var callerId = 'teacher';
        var calleeId = 'student';
</script>

<script src="./js/sharescreen.js"></script>
<script src="./js/code.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="./script.js"></script>
  <script>
     document.getElementById('chat_hide').style.display = 'none';
    function starchat (){
      document.getElementById('chat_hide').style.display = 'block';
    }
    function hidechat (){
      document.getElementById('chat_hide').style.display = 'none';
    }
  </script>
</body>
</html>
