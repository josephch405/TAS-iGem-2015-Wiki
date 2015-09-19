<html>

<head>
	<title>Parts - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>
	<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>


<body  data-spy="scroll" data-target="#category_navbar" style = "text-align:center">

	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>
		<br>
		<div id='bodycontainer' class='row card'>
			<div class="col-sm-1" style='padding-left:8px;'>
				<div id="category_navbar">
					<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:168px;margin-left:0' >
					</ul>
				</div>
			</div>

			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-12">
						<h1 id = "parts">Parts</h1>
						<h2>Parts Submitted</h2>
						<img style = "width:800px;float:left" src = 'http://2015.igem.org/wiki/images/a/af/BigBadPic.png'>

						<style>
							td, th, table{
								border:2px solid black;
							}
							td, th{
								padding:4px;
								font-size:16px;
							}
						</style>

						<table>
							<tr>
								<th style = "width:200px">
									Part Number
								</th>
								<th>
									Details
								</th>
							</tr>
							
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610101'>BBa_K1610101</a>
								</td>
								<td>pTempSens + RBS
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610102'>BBa_K1610102</a>
								</td>
								<td>pTempSens + RBS + GFP + Term (GFP as TempSens reporter)
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610103'>BBa_K1610103</a>
								</td>
								<td>pTempSens + RBS + ACT + Term
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610104'>BBa_K1610104</a>
								</td>
								<td>pTempSens + RBS + ACT 3m + Term
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610105'>BBa_K1610105</a>
								</td>
								<td>pTempSens + RBS + yebF + ACT 3m + Term (Final construct)
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td></td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610200'>BBa_K1610200</a>
								</td>
								<td>ACT (no internal P sites)
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610201'>BBa_K1610201</a>
								</td>
								<td>ACT 3m (three mutated amino acids)
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610202'>BBa_K1610202</a>
								</td>
								<td>ACT + Term
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610203'>BBa_K1610203</a>
								</td>
								<td>ACT 3m + Term
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td></td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610300'>BBa_K1610300</a>
								</td>
								<td>Motor protein YebF
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610302'>BBa_K1610302</a>
								</td>
								<td>J23100 + RBS + YebF + GFP + Term (Constitutively active GFP reporter)
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td></td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610401'>BBa_K1610401</a>
								</td>
								<td>pDapA + RBS
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610403'>BBa_K1610403</a>
								</td>
								<td>T4 Endolysin + Term
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610404'>BBa_K1610404</a>
								</td>
								<td>pDapA + RBS + GFP + Term (Reporter for pDapA)
								</td>
							</tr>
							<tr>
								<td><a href = 'http://parts.igem.org/Part:BBa_K1610405'>BBa_K1610405</a>
								</td>
								<td>pDapA + RBS + T4 Endo + Term (Final safety device)
								</td>
							</tr>

						</table>
						<style>
							#tabble li{
								padding-top:20px;
							}
						</style>
						<div style = "font-size:20px"><br>
							Each submitted part has been properly documented on the registry - click on the part number in the table above. Specifically, in regards to judging requirements <u><b>(click links to see full documentation)</b></u>:<br> 
							<ul id = "tabble">
								<li><a href = 'http://parts.igem.org/Part:BBa_K1610202'><b>BBa_K1610202</b> (link)</a> is submitted as the new standard biobrick part. This part comprises of ACT and a terminator, and was made in order for us to create the main device.  <b>(Silver requirement)</b></li>
								<li>We documented the charecterization of an existing part, <a href = 'http://parts.igem.org/Part:BBa_K608351:Experience'><b>BBa_K608351</b> (link)</a>. Particularly, we documented the activation temperatures and times of the TempSens promoter. <b>(Silver requirement)</b></li>
								<li>We experimentally validated our new device, <a href = 'http://parts.igem.org/Part:BBa_K1610105'><b>BBa_K1610105</b> (link)</a>. <b>(gold requirement)</b></li>
							</ul>
						</div>

					</div>
				</div>

				<span style="display:block; height: 50px;"></span>
			</div>

		</div>
	</div>
	<?php include("./footer.php"); ?>
</body>

</html>