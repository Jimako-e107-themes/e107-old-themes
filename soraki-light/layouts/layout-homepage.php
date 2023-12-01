<?php 

//{SETSTYLE=homeintro}   
$LAYOUT['homepage'] =   
    $elements_lite['header_01'].
    $elements_lite['imageparallax'].
    '{---}'.
    $elements_lite['description'].
    $elements_lite['features1']. 
   '{SETSTYLE=section}
    {MENU=11}
    {SETSTYLE=default}'.
    $elements_lite['features2'].
    $elements_lite['pricing_plans']. 
    $elements_lite['testimonials']. '
 <div class="section">  {XURL_ICONS} </div>'; 