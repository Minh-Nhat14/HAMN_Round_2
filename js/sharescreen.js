    const videoElem = document.getElementById("sharescreen");
      const startElem = document.getElementById("sharecallButton");
      const videoteacher = document.getElementById("video-teacher");
      const videouser = document.getElementById("video-user");
      const localVideosTeacher = videoteacher.querySelectorAll("#localVideo");
const localVideosUser = videouser.querySelectorAll("#localVideo");
      // Options for getDisplayMedia()
      var displayMediaOptions = {
          video: {
              cursor: "always",
              height: 1000,
              width: 1200
          },
          audio: false
      };
      // Set event listeners for the start and stop buttons
      startElem.addEventListener("click", function (evt) {
        // for (let video of localVideosUser) {
        //     video.style.display = 'inline-block';
        //   }
          
        //   for (let video of localVideosTeacher) {
        //     video.style.display = 'none';
        //   }
        console.log(videoElem);
          startCapture();
      }, false);
      // Start the screen capture
      async function startCapture() {
          try {
              videoElem.srcObject = await navigator.mediaDevices.getDisplayMedia(displayMediaOptions);
              dumpOptionsInfo();
          } catch (err) {
              // Handle error
              console.error("Error: " + err);
          }
      }
      // Stop the stream
      function stopCapture(evt) {
          let tracks = videoElem.srcObject.getTracks();
          tracks.forEach(track => track.stop());
          videoElem.srcObject = null;
      }
      // Dump the available media track capabilities to the console
      function dumpOptionsInfo() {
          const videoTrack = videoElem.srcObject.getVideoTracks()[0];
          console.info("Track settings:");
          console.info(JSON.stringify(videoTrack.getSettings(), null, 2));
          console.info("Track constraints:");
          console.info(JSON.stringify(videoTrack.getConstraints(), null, 2));
}