<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8"/>
<head>
    <title>Houston MetroRail</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.subwayMap-0.5.1.js"></script>
    <!--[if lt IE 9]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->        
    <style type="text/css">
    body
    {
        font-family: Verdana;
        font-size: 8pt;
    }

    /* The main DIV for the map */
    .subway-map
    {
        margin: 0;
        background-color: white;
        margin: 100px;
    }

    /* Text labels */
    .text
    {
        text-decoration: none;
        color: black;
    }

    #legend
    {
        float: left;
        width: 250px;
        height:400px;
    }

    #legend div
    {
        height: 25px;
    }

    #legend span
    {
        margin: 5px 5px 5px 0;
    }
    .subway-map span
    {
        margin: 5px 5px 5px 0;
    }
    </style>
</head>
<body>
    <div class="subway-map" data-columns="40" data-rows="40" data-cellSize="40" data-legendId="legend" data-textClass="text" data-gridNumbers="true" data-grid="false" data-lineWidth="8">
                
        <ul data-color="#FF0000" data-label="North Line" >
            <li data-coords="6,2" data-marker="interchange" data-labelPos="E"><a href="">Burnett TC</a></li>
            <li data-coords="7,5" data-marker="interchange" data-labelPos="W"><a href="">Casa de Amigos</a></li>  
            <li data-coords="8,6" data-dir="E"></li> 
            <li data-coords="8,7" data-marker="interchange" data-labelPos="E"><a href="http://uhd.edu/">UH-Downtown</a></li>
            <li data-coords="8,8" data-marker="interchange" data-labelPos="E"><a href="">Preston</a></li> 
            <li data-coords="8,9" data-marker="interchange" data-labelPos="N"><a href="">Central Station</a></li>
            <li data-coords="8,10" data-marker="interchange" data-labelPos="W"><a href="">Main Street Station</a></li>
            <li data-coords="8,11" data-marker="interchange" data-labelPos="E"><a href="">Bell</a></li>
            <li data-coords="8,12" data-marker="interchange" data-labelPos="E"><a href="">Downtown Transit Center</a></li>
            <li data-coords="8,13" data-marker="interchange" data-labelPos="E"><a href="">McGowen</a></li>
            <li data-coords="8,14" data-marker="interchange" data-labelPos="E"><a href="">Ensemble/HCC</a></li> 
            <li data-coords="8,15" data-marker="interchange" data-labelPos="E"><a href="">Wheeler</a></li> 
            <li data-coords="8,16" data-marker="interchange" data-labelPos="E"><a href="">Museum District</a></li> 
            <li data-coords="8,17" data-marker="interchange" data-labelPos="E"><a href="">Hermann Park / \n Rice University</a></li> 
            <li data-coords="8,18" data-marker="interchange" data-labelPos="E"><a href="">Memorial Hermann / Zoo</a></li> 
            <li data-coords="8,19" data-marker="interchange" data-labelPos="E"><a href="">Dryden / TMC</a></li> 
            <li data-coords="8,20" data-marker="interchange" data-labelPos="E"><a href="">TMC Transit Center</a></li> 
            <li data-coords="8,21" data-marker="interchange" data-labelPos="E"><a href="">Smith Lands</a></li>  
            <li data-coords="8,22" data-marker="interchange" data-labelPos="E"><a href="">Reliant Park</a></li>  
            <li data-coords="8,23" data-marker="interchange" data-labelPos="E"><a href="">Fannin South</a></li>  
        </ul>
        
        <ul data-color="#8467D7" data-label="Southeast Line" >
            <li data-coords="4,9" data-marker="interchange" data-labelPos="S"><a href="">Theater District</a></li>
            <li data-coords="8,9" data-marker="interchange" data-markerInfo="h10"></li>
            <li data-coords="10,9" data-marker="interchange" data-labelPos="S"><a href="">Convention District</a></li>
            <li data-coords="13,9" data-marker="interchange" data-labelPos="N"><a href="">EaDo/Stadium</a></li> 
            <li data-coords="14,10" data-dir="S"></li>
            <li data-coords="14,11"></li> 
            <li data-coords="14,12" data-marker="interchange" data-labelPos="E"><a href="">Leeland</a></li>
            <li data-coords="14,14" data-marker="interchange" data-labelPos="E"><a href="">Elgin</a></li>
            <li data-coords="14,16" data-marker="interchange" data-labelPos="E"><a href="">UH/TSU</a></li>
            <li data-coords="14,17"></li>
            <li data-coords="16,17" data-marker="interchange" data-labelPos="E"><a href="">University Oaks</a></li>
            <li data-coords="18,19" data-marker="interchange" data-labelPos="E"><a href="">Macgregor Park</a></li>
        </ul>
        
        <ul data-color="#8BA870" data-label="East End Line" >
            <li data-coords="13,9"></li>
            <li data-coords="15,9" data-marker="interchange" data-labelPos="S"><a href="">Coffee Plant</a></li> 
            <li data-coords="17,9" data-marker="interchange" data-labelPos="N"><a href="">Eastwood</a></li> 
            <li data-coords="19,9" data-marker="interchange" data-labelPos="S"><a href="">Howard Hughes</a></li> 
            <li data-coords="21,9" data-marker="interchange" data-labelPos="N"><a href="">Cesar Chavez</a></li>
            <li data-coords="23,9" data-marker="interchange" data-labelPos="E"><a href="">Magnolia Park</a></li> 
        </ul>
        
        <!--
        <ul data-color="#8467D7" data-label="Southeast / Purple Line">          
            <li data-coords="2,2" data-marker="interchange"><a href="http://uhd.edu/">UH-Downtown</a></li>  
            <li data-coords="4,2"><a href="http://jqueryui.com/demos/autocomplete/">Preston</a></li>  
            <li data-coords="5,3" data-dir="E"></li>  
            <li data-coords="5,7" data-marker="@station" data-labelPos="W"><a href="http://jqueryui.com/demos/slider/">Slider</a></li>  
            <li data-coords="6,4" data-dir="S" data-marker="interchange" data-markerInfo="h5"><a href="http://jqueryui.com/demos/datepicker/">Date\npicker</a></li>  
            <li data-coords="7,4"></li>  
            <li data-coords="7.15,8" data-marker="@station" data-labelPos="E"><a href="http://jqueryui.com/demos/dialog/">Dialog</a></li>  
            <li data-coords="8,3" data-dir="E"></li>  
            <li data-coords="8,2"></li>  
            <li data-coords="9,1" data-dir="N"></li>  
            <li data-coords="10,2" data-dir="E" data-marker="interchange" data-labelPos="E"><a href="http://jqueryui.com/demos/button/">Button</a></li>  
            <li data-coords="10,5"></li>  
            <li data-coords="9,6" data-dir="S" data-marker="station"><a href="http://jqueryui.com/demos/progressbar/">Progress\nbar</a></li>  
            <li data-coords="6,9"></li>  
            <li data-coords="5,8" data-dir="W"></li>  
            <li data-coords="5,7"></li>  
            <li data-coords="4,6" data-dir="N"></li>  
            <li data-coords="2,6"><a href="http://jqueryui.com/demos/tabs/">Tabs</a></li>  
        </ul>
        -->
        

    </div>
    <div id="legend"></div>
    

    <script type="text/javascript">
    $(document).ready(function(){
        $(".subway-map").subwayMap({ debug: true });
    });
    </script>
</body>
</html>
