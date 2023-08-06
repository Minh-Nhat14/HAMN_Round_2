
function settingCallEvent(call1, localVideo, sharescreen, remoteVideo, callButton, answerCallButton, endCallButton, rejectCallButton, chatCallButton,  miccallButton, sharecallButton) {
    call1.on('addremotestream', function (stream) {
        // reset srcObject to work around minor bugs in Chrome and Edge.
        console.log('addremotestream');
        remoteVideo.srcObject = null;
        remoteVideo.srcObject = stream;
    });

    call1.on('addlocalstream', function (stream) {
        // reset srcObject to work around minor bugs in Chrome and Edge.
        console.log('addlocalstream');
        localVideo.srcObject = null;
        localVideo.srcObject = stream;
    });

    

    call1.on('signalingstate', function (state) {
        console.log('signalingstate ', state);

        if (state.code === 6 || state.code === 5)//end call or callee rejected
        {
            callButton.show();
            endCallButton.hide();
            miccallButton.hide();
            sharecallButton.hide();
            chatCallButton.hide();
            rejectCallButton.hide();
            answerCallButton.hide();
            localVideo.srcObject = null;
            remoteVideo.srcObject = null;
            $('#incoming-call-notice').hide();
        }
    });

    call1.on('mediastate', function (state) {
        console.log('mediastate ', state);
    });

    call1.on('info', function (info) {
        console.log('on info:' + JSON.stringify(info));
    });
}


jQuery(function(){

    var localVideo = document.getElementById('localVideo');
    var remoteVideo = document.getElementById('remoteVideo');
    var sharescreen = document.getElementById('sharescreen');
    
    var callButton = $('#callButton');
    var answerCallButton = $('#answerCallButton');
    var rejectCallButton = $('#rejectCallButton');
    var endCallButton = $('#endCallButton');
    var chatCallButton = $('#chatCallButton');
    var miccallButton = $('#miccallButton');
    var sharecallButton = $('#sharecallButton');

    var currentCall = null;

    var client = new StringeeClient();
    this.callClient = client;
    this.callClient.connect(token);
    client.connect(token);

    client.on('connect', function(){
        console.log('+++ connected!');
    });

    client.on('authen', function(res){
        console.log('+++ on authen: ', res);
    });

    client.on('disconnect', function(res){
        console.log('+++ disconnected');
    });

    //MAKE CALL
    callButton.on('click', function(){
        currentCall = new StringeeCall(client, callerId, calleeId, true);

        settingCallEvent(currentCall, localVideo, sharescreen, remoteVideo, callButton, answerCallButton, endCallButton, rejectCallButton, chatCallButton, miccallButton, sharecallButton);
        
        currentCall.makeCall(function(res){
            console.log('+++ call callback: ', res);
            if (res.message === 'SUCCESS')
            {
                document.dispatchEvent(new Event('connect_ok'));
            }
        });
        sharecallButton.show();
        chatCallButton.show();
    });
    
    //RECEIVE CALL
    client.on('incomingcall', function(incomingcall){

        $('#incoming-call-notice').show();
        currentCall = incomingcall;
        settingCallEvent(currentCall, localVideo, sharescreen, remoteVideo, callButton, answerCallButton, endCallButton, rejectCallButton, chatCallButton, miccallButton, sharecallButton);

        callButton.hide();
        answerCallButton.show();
        rejectCallButton.show();
        
    });
    //Event handler for buttons
    answerCallButton.on('click', function(){
        $(this).hide();
        rejectCallButton.hide();
        endCallButton.show();
        miccallButton.show();
        sharecallButton.show();
        chatCallButton.show();
        callButton.hide();
        console.log('current call ', currentCall, typeof currentCall);
        if (currentCall != null)
        {
            currentCall.answer(function(res){
                console.log('+++ answering call: ', res);
            });
        }
        
    });

    rejectCallButton.on('click', function(){
        if (currentCall != null)
        {
            currentCall.reject(function(res){
                console.log('+++ reject call: ', res);
            });
        }

        callButton.show();
        $(this).hide();
        answerCallButton.hide();
        
    });

    endCallButton.on('click', function(){   
        if (currentCall != null)
        {
            currentCall.hangup(function(res){
                console.log('+++ hangup: ', res);
            });
        }

        callButton.show();
        endCallButton.hide();
        chatCallButton.hide();
        miccallButton.hide();
        sharecallButton.hide();
        
    });

   

    //event listener to show and hide the buttons
    document.addEventListener('connect_ok', function(){
        callButton.hide();
        endCallButton.show();
        miccallButton.show();
        settingCallEvent.show();
        chatCallButton.show();  
        sharecallButton.show();
    });


});


