<html>

<head>
	<title>TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
</head>


<body style = "text-align:center">
	<div class="container" style='z-index:10;position:relative;padding:0px'>
		<?php include("./navigation.php"); ?>

		<script type="text/javascript" src="http://2015.igem.org/Template:TAS_Taipei/js/jssor?action=raw&ctype=text/javascript"></script>
		<script type="text/javascript" src="http://2015.igem.org/Template:TAS_Taipei/js/jssorSlider?action=raw&ctype=text/javascript"></script>

		<br>
		<script>
			jQuery(document).ready(function ($) {
				var _CaptionTransitions = [];
				_CaptionTransitions["L"] = { $Duration: 800, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
				_CaptionTransitions["R"] = { $Duration: 800, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
				_CaptionTransitions["T"] = { $Duration: 800, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
				_CaptionTransitions["B"] = { $Duration: 800, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
				_CaptionTransitions["TL"] = { $Duration: 800, x: 0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
				_CaptionTransitions["TR"] = { $Duration: 800, x: -0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
				_CaptionTransitions["BL"] = { $Duration: 800, x: 0.6, y: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
				_CaptionTransitions["BR"] = { $Duration: 800, x: -0.6, y: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };

				_CaptionTransitions["WAVE|L"] = { $Duration: 1500, x: 0.6, y: 0.3, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Top: 2.5} };
				_CaptionTransitions["MCLIP|B"] = { $Duration: 600, $Clip: 8, $Move: true, $Easing: $JssorEasing$.$EaseOutExpo };
				var options = {
					$AutoPlay: true,
                    $AutoPlayInterval: 6000,
					$SlideDuration: 500,  
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },
                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                }

            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
		</script>
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1080px;
        height: 600px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1080px; height: 600px;
            overflow: hidden;">
            <div><img u="image" src="http://2015.igem.org/wiki/images/0/00/Tas_frontpage_1.png"/></div>
            <div><div u="image" style = "lightgrey;text-align:center"><image src="http://2015.igem.org/wiki/images/d/df/Bg_fig6.gif"/></div>
                <div u="caption" t="L" style="box-shadow: 0 0 10px 0;background-color:orange;padding:20px;position: absolute; top: 30px; left: 30px;">
                    <p style = "color:white;font-size:32px;">
                    INHIBITING GRANZYME B
                    </p>
                    <p style = "color:white;font-size: 20px">
                    Our device produces a GzmB inhibitor
                    </p>
                </div>
                </div>
            <div><div u="image" style = "text-align:center"><image src="http://2015.igem.org/wiki/images/2/20/Exp_prototype.gif"/></div>
                <div u="caption" t="B" style="box-shadow: 0 0 10px 0;background-color:orange;padding:20px;position: absolute; top: 480px; left: 214px;">
                    <p style = "color:white;font-size:32px;">
                    PROTOTYPE
                    </p>
                    <p style = "color:white;font-size: 20px">
                    We designed and built a bandage with a semi-permeable membrane
                    </p>
                </div>
            </div>
            <div><div u="image" style = "text-align:center"><image src="http://2015.igem.org/wiki/images/6/6c/Tas_frontpage_2.jpeg"/></div>
            <div u="caption" t="L" style="box-shadow: 0 0 10px 0;background-color:orange;padding:10px;position: absolute; top: 330px; left: 20px;">
                    <p style = "width:350px; color:white;font-size:22px;">
                    "I appreciate the interdisciplinary aspect of iGEM. Aside from its strong focus on science which I enjoyed, iGEM also incorporates human, design, and technological elements."
                    </p>
                    <p style = "color:white;font-size: 16px">
                    - Joseph Chuang
                    </p>
                </div>
            </div>
        </div>
        
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 12 css */
            /*
            .jssorb12 div           (normal)
            .jssorb12 div:hover     (normal mouseover)
            .jssorb12 .av           (active)
            .jssorb12 .av:hover     (active mouseover)
            .jssorb12 .dn           (mousedown)
            */
            .jssorb12 {
                position: absolute;
            }
            .jssorb12 div, .jssorb12 div:hover, .jssorb12 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url(http://2015.igem.org/wiki/images/9/90/B12.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb12 div { background-position: -7px -7px; }
            .jssorb12 div:hover, .jssorb12 .av:hover { background-position: -37px -7px; }
            .jssorb12 .av { background-position: -67px -7px; }
            .jssorb12 .dn, .jssorb12 .dn:hover { background-position: -97px -7px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb12" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
<br>
<br>

<div class = "card" id = "bodycontainer" style = "overflow:hidden;font-family:Lato; text-align:left;">
	<div class = "col-sm-12">
		<h1 style = "padding:10px;background-color: rgb(33,150,243);color:white">
			ABSTRACT
		</h1>
		<div style = "font-size:20px; line-height:40px">
            <div class = "col-sm-1"></div>
            <div class = "col-sm-10"><br>
			<b>Elevated Granzyme B (GzmB)</b> levels are associated with many chronic inflammatory conditions including vascular, autoimmune and skin diseases. As a serine protease that induces apoptosis in tumor cells, GzmB is an essential part of the immune system. However, high levels of GzmB also result in the <b>random cleavage of extracellular matrix (ECM) proteins</b>, which leads to <b>damaged tissue structure and elasticity</b>. Our project aim is to <b>prevent tissue damage from chronic inflammation</b> by <b>limiting GzmB activity in the ECM</b> without affecting its intracellular functions. We mutated an extracellular protein (ACT) to allow it to bind and inhibit GzmB specifically in the ECM. To deliver this GzmB inhibitor into inflamed sites without bacteria entering the body, we envision two different prototypes: a bandage with a semi-permeable membrane to target localized sites, and a cream containing only the desired protein for general topical use.
			</div>
            <br>
			<div class = "col-sm-12">
				<img class = "col-sm-12" src = "http://2015.igem.org/wiki/images/1/15/Tas_home_1.png">
			</div>
		</div>
	</div>

</div>
</div>

<?php include("./footer.php"); ?>
</body>

<!--?action=raw&ctype=text/javascript-->

</html>
