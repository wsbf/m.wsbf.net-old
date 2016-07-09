<?php
/** 
 * David A. Cohen II 
 * WSBF Mobile Website
 * Simple, single-page site designed for easy access on mobile devices.
 * Created with jQuery UI
 */
$now_at_dir = getcwd();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
 <meta content="width=device-width,minimum-scale=1" name="viewport">

        <title>
            WSBF
        </title>
        <link type="text/css" rel="stylesheet" href="/_global-assets/jq/jquery.mobile-1.1.0/jquery.mobile-1.1.0.min.css" />        
        <link type="text/css" rel="stylesheet" href="/_global-assets/jq/jquery.mobile-1.1.0/jqm-icon-pack-1.1.1-original.css" />



        
        <link type="text/css" rel="stylesheet" href="my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="/_global-assets/jq/js/jquery-1.7.2.min.js">
        </script>
        <script src="/_global-assets/jq/jquery.mobile-1.1.0/jquery.mobile-1.1.0.min.js">
        </script>

        <script type="text/javascript">
        function refreshDiv(){
            clearTimeout(divTimer);
            $.ajax({
              url: '/_global-assets/onair-xml.php',
              type: 'GET',
              dataType: "xml",
              success: function(xml) {
                showname = $(xml).find('showname').text();
                djname = $(xml).find('djname').text();
                track = $(xml).find('track').text();
                showid = $(xml).find('showid').text();
                listeners = $(xml).find('listeners').text();
            
                if (showname == '') {
                    // no show name; display only DJ name
                    $(".dj_ajax").html( djname );
                }
                else {
                    // display both show and dj names
                    $(".dj_ajax").html( showname + ', with ' + djname );
                }
                if (track != '') {
                    // the "secret phrase" that overrides the track name
                    if (track == 'IAMADUCK'){
                        $(".track_ajax").html( $(xml).find('artist').text()  );
                   }
                    else{
                    // Add track and artist
                        $(".track_ajax").html(track + ', by ' + $(xml).find('artist').text()  );
                    }
                }
            
                divTimer = setTimeout("refreshDiv()", 10000);
        }
            
        });
    }
    $(document).bind('pageinit', function(){
        divTimer = 0;
        refreshDiv();
    });
        </script>

    </head>
    <body>

        <!-- HOME PAGE -->
        <div data-role="page" data-theme="d" id="page1">
            <div data-theme="a" data-role="header" data-position="fixed">
            </div>
            <div data-theme="a" data-role="header" data-position="fixed">
                <div data-theme="a" data-role="header" data-position="fixed">
                </div>
            </div>
            <div data-theme="a" data-role="header">
                <h3>
                    wsbf 88.1
                </h3>
<?php
        if(!empty($_GET['src'])){
            /** If coming m.Clemson or elsewhere, add a "back" button to the homepage **/
            echo  '<a data-role="button" data-inline="true" data-direction="reverse" data-rel="back" data-transition="slide" data-theme="b" data-icon="arrow-l" data-iconpos="left">
                    Back
                </a>
        ';
        }
?>
            </div>
            <div data-role="content">
                <div class="ui-grid-b" style="text-align: center; max-width: 300px">
                    <div class="ui-block-a" style="float: left"><img style="width: 175px; height: 175px" src="/_global-assets/images/wsbflady_250.png" alt="WSBF Lady" /></div>
                    <div class="ui-block-b" style="font-size: 24px; text-align: left; float: right"><strong>wsbf<br />fm<br />clemson</strong></div>
                </div>
                
                <a data-role="button" data-transition="slide" data-theme="a" href="#listen" data-icon="music" data-iconpos="left">
                    Listen Now!
                </a>
                <a data-role="button" data-transition="slide" data-theme="a" href="#schedule" data-icon="grid" data-iconpos="left">
                    Schedule
                </a>
                <a data-role="button" data-rel="dialog" data-theme="a" href="#phone_dialog" data-icon="phone" data-iconpos="left">
                    (864) 656-WSBF
                </a>

                <div>
                    <a href="http://wsbf.net/" data-transition="fade">
                        Main site
                    </a>
                </div>
            </div>
            <div data-theme="a" data-role="footer" style="text-align: center">[now playing]
                   <div data-role="controlgroup" data-mini="true" data-type="horizontal">
                            <a data-role="button" data-icon="person" data-iconpos="left" data-inline="true">
                                <div class="dj_ajax"><img src="/_global-assets/jq/jquery.mobile-1.1.0/images/ajax-loader.gif" alt="Loading" /></div>
                            </a>
                            <a data-role="button" data-icon="music" data-iconpos="left" data-inline="true">
                                <div class="track_ajax"><img src="/_global-assets/jq/jquery.mobile-1.1.0/images/ajax-loader.gif" alt="Loading" /></div>
                            </a>
                            
                        </div>
            </div>
        </div>

        <div data-role="dialog" id="phone_dialog" data-theme='a'>
            <div data-role="header">
                <h3>Place Call?</h3>
            </div>
            <div data-role="content">
                <p>Are you sure you want to exit the app and place a phone call?</p>
                <a data-role="button" href="tel:18646569723" data-icon="phone" data-iconpos="left" data=theme="a">Call WSBF</a>
                <a data-role="button" href="#" data-rel="back" data-theme="a" data-icon='delete' data-iconpos='left'>Cancel</a>
            </div>
        </div>


        <!-- LISTEN NOW -->
        <div data-role="page" id="listen">
            <div data-theme="a" data-role="header" data-position="fixed">
                <h3>
                    wsbf 88.1
                </h3>
                <a data-role="button" data-inline="true" data-direction="reverse" data-rel="back" data-transition="slide" data-theme="b" href="#page1" data-icon="arrow-l" data-iconpos="left">
                    Back
                </a>
            </div>
            <div data-role="content">
                <div>
                <font style="font-size: 24pt">listen now</font>
                <br />right here, or at <b>88.1 fm</b> in Clemson:
                <p style="font-style: italic"><font style="font-weight: bold; color:rgb(255, 23, 15)">WARNING:</font> To avoid cellular data overages, wifi is highly recommended. Stream at your own risk!</p>
            </div>
                <a data-role="button" href="http://stream.wsbf.net:8000/low" data-icon="play" data-iconpos="left">
                    low quality [96kbps]
                </a>
                <a data-role="button" href="http://stream.wsbf.net:8000/high" data-icon="play" data-iconpos="left">
                    high quality [192kbps]
                </a>
                <a data-role="button" href="http://stream.wsbf.net:8000/320.mp3" data-icon="play" data-iconpos="left">
                    really high quality [320kbps]
                </a>
                     
            </div>
            <div data-theme="a" data-role="footer" style="text-align: center">[now playing]
                        <div data-role="controlgroup" data-mini="true" data-type="horizontal">
                            <a data-role="button" data-icon="person" data-iconpos="left" data-inline="true">
                                <div class="dj_ajax"><img src="/_global-assets/jq/jquery.mobile-1.1.0/images/ajax-loader.gif" alt="Loading" /></div>
                            </a>
                            <a data-role="button" data-icon="music" data-iconpos="left" data-inline="true">
                                <div class="track_ajax"><img src="/_global-assets/jq/jquery.mobile-1.1.0/images/ajax-loader.gif" alt="Loading" /></div>
                            </a>
                            
                        </div>
            </div>
        </div>

        <!-- SCHEDULE -->
        <div data-role="page" id="schedule">
            <div data-theme="a" data-role="header" data-position="fixed">
            </div>
            <div data-theme="a" data-role="header" data-position="fixed">
                <a data-role="button" data-direction="reverse" data-rel="back" data-transition="slide" data-theme="b" href="#page1" data-icon="arrow-l" data-iconpos="left">
                    Back
                </a>
                <h3>
                    wsbf 88.1
                </h3>
            </div>
            <div data-role="content">
                <font style="font-size: 24pt">schedule</font>
            <div data-role='collapsible-set'>
                <?php
                // Pull schedule in JSON format
                $json = file_get_contents("http://m.wsbf.net/_global-assets/schedule/schedule_json.php");
                $arr = json_decode($json, true);
                foreach($arr['days'] as $day=>$shows){
                    $dayName =date('l', strtotime($day));
                    $collapsed = date('l') === $dayName ? "false" : "true";
                  echo "<div data-role='collapsible' data-collapsed='".$collapsed."'><h3>".$dayName."</h3><ul>";
                  foreach($shows as $show){
                    $dj_names = array();
                    foreach($show['djs'] as $dj)
                        $dj_names[] = $dj['schedule_alias'];
                    $djs = implode(", ", $dj_names);
                    
                    echo "<li>".date("g:i a", strtotime($show['start_time'])) . " - ";

                    if(!empty($show['show_name']))
                        echo "<i>".$show['show_name']."</i>, with ";

                    echo "<b>".$djs ."</b></li>";

                  }
                  echo "</ul>";


                  echo "</div>";

                }
                // 

                ?>
            <p>
            <a href="http://new.wsbf.net/wizbif/schedule/schedule.php">View Full Schedule</a>
            </p>
            </div>



        </div>
        </div>
        <script>
        </script>
    </body>
</html>
