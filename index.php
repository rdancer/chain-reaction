<!DOCTYPE html>
<head>
  <title>Chain Reaction</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script>
    $(document).ready(function () {
      $(".reaction").html('<video class="reactionVideo" src="assets/Falcon_Kick.low_quality.mp4"></video>');



      /* Start playing the videos in sync */

      function startPlayingReactionVideos()
      {
	// TODO load and buffer first
	var allVideos = document.getElementsByClassName('reactionVideo');
	for (var i = 0; i < allVideos.length; i++) {
	  var thisVideo = allVideos[i];  
	  thisVideo.play();
	}
      }

      $('#contentVideo').bind('play', function (e) {
	  var video = document.getElementById('contentVideo');

	  startPlayingReactionVideos();
      });


      

    });
  </script>
	     
</head>
<body>
  <table id="videoMatrix">
    <!--tr>
      <td class="reaction">1.1
      <td class="reaction">1.2
      <td class="reaction">1.3
      <td class="reaction">1.4
      <td class="reaction">1.5
      <td class="reaction">1.6
      <td class="reaction">1.7
    </tr-->
    <tr>
<!--      <td class="reaction">2.1 -->
      <td class="reaction">2.2
      <td class="reaction">2.3
      <td class="reaction">2.4
      <td class="reaction">2.5
      <td class="reaction">2.6
<!--      <td class="reaction">2.7 -->
    </tr>
    <tr>
<!--      <td class="reaction">3.1 -->
      <td class="reaction">3.2
      <td class="content" colspan="3" rowspan="3">
	<video id="contentVideo" class="span12 video content cool-background row' + rowNumber + ' cell' + cellNumber + ' "" controls="controls">
	  <source src="assets/Falcon_Kick.mp4" type="video/mp4" />
	</video>
      <!--td>3.4
      <td class="reaction">3.5 -->
      <td class="reaction">3.6
<!--      <td class="reaction">3.7 -->
    </tr>
    <tr>
<!--      <td class="reaction">4.1 -->
      <td class="reaction">4.2
      <!--td>4.3
      <td class="reaction">4.4
      <td class="reaction">4.5 -->
      <td class="reaction">4.6
<!--      <td class="reaction">4.7 -->
    </tr>
    <tr>
<!--      <td class="reaction">5.1 -->
      <td class="reaction">5.2
      <!--td>5.3
      <td class="reaction">5.4
      <td class="reaction">5.5 -->
      <td class="reaction">5.6
<!--      <td class="reaction">5.7 -->
    </tr>
    <tr>
<!--      <td class="reaction">6.1 -->
      <td class="reaction">6.2
      <td class="reaction">6.3
      <td class="reaction">6.4
      <td class="reaction">6.5
      <td class="reaction">6.6
<!--      <td class="reaction">6.7 -->
    </tr>
    <!--tr>
      <td class="reaction">7.1
      <td class="reaction">7.2
      <td class="reaction">7.3
      <td class="reaction">7.4
      <td class="reaction">7.5
      <td class="reaction">7.6
      <td class="reaction">7.7
    </tr-->
  </table id="videoMatrix">
</body>
