<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Example code to create a simple player using jPlayer 2.1.0 -->
        
        <!-- Skins are defined in CSS. Uncomment the following CSS reference and comment out the one below it to switch skins -->
        
		<link href="/_global-assets/jq/jplayer/skin/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/_global-assets/jq/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="/_global-assets/jq/jplayer/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="./stream_jplayer.js"></script>
        
    </head>
    <body>
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        
        <div id="jp_container_1" class="jp-audio">
            <div class="jp-type-single">
                <div class="jp-gui jp-interface">
                    <ul class="jp-controls">
                        
                        <!-- comment out any of the following <li>s to remove these buttons -->
                        
                        <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                        <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                        <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                        <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                    </ul>
                    
                    <!-- you can comment out any of the following <div>s too -->
                    

                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                    <div class="jp-current-time"></div>

                </div>
                <div class="jp-title">
                    <ul>
                        <li>WSBF</li>
                    </ul>
                </div>
                <div class="jp-no-solution">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>
        
        
    </body>​