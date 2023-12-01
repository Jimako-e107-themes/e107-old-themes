<?php
 
 /* coloured portfolio - {ELEMENTS: mode=portfolio&template=portfolio} */
$WEBTICKER_TEMPLATE['default']['caption'] =  '<div class="ticker-wrapper"> 
<div class="ticker-title"><i class="fa fa-bullhorn"></i><span>&nbsp;BREAKING NEWS</span></div>';
$WEBTICKER_TEMPLATE['default']['start'] =  $WEBTICKER_TEMPLATE['default']['caption'].'	
<div class="tickercontainer">
			    <div class="mask">
			        <ul id="{WEBTICKER_ID}" class="newsticker">
			            <li class="ticker-spacer"></li>';
$WEBTICKER_TEMPLATE['default']['item'] 	=  '<li>{NEWS_TITLE: link=1}</li>';
$WEBTICKER_TEMPLATE['default']['end'] 	=  '
        </ul>
			</div>
	</div> 	
</div>
'; 


							/*
	<!-- news ticker -->
	<div class="container-fluid ticker">
		<div class="container">
       {WEBTICKER}
		</div>
	</div>  */
  

$WEBTICKER_TEMPLATE['openmind']['caption'] =  '
<div class="container-fluid ticker">
		<div class="container">
<div class="ticker-wrapper">
<div class="ticker-title"><i class="fa fa-bullhorn"></i><span>&nbsp;BREAKING NEWS</span></div>';
$WEBTICKER_TEMPLATE['openmind']['start'] =  $WEBTICKER_TEMPLATE['openmind']['caption'].'	
<div class="tickercontainer">
			    <div class="mask">
			        <ul id="{WEBTICKER_ID}" class="newsticker">
			            <li class="ticker-spacer"></li>';
$WEBTICKER_TEMPLATE['openmind']['item'] 	=  '<li>{NEWS_TITLE: link=1}</li>';
$WEBTICKER_TEMPLATE['openmind']['end'] 	=  '
        </ul>
				<span class="tickeroverlay-left">&nbsp;</span>
        <span class="tickeroverlay-right">&nbsp;</span>
			</div>
	  	</div> 	
		</div>
	</div> 	
</div>						
'; 

?>