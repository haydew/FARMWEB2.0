<?php $farmid = $_GET["farmid"]; 
$conn = pg_connect("host=localhost dbname=postgis user=postgres password=lara1000" );
if (!$conn) {
  echo "An Database error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT * FROM public.farmidinfo WHERE farmid = '$farmid' ");
if (!$result) {
  echo "An Database error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
 $farmnameA= "$row[0]";
 $farmaddressA= "$row[1]";
 
 
}
$result2 = pg_query($conn, "SELECT * FROM public.farmweb_prop_bounds WHERE farmid = '$farmid' ");
if (!$result2) {
  echo "An Database error occurred.\n";
  exit;
}
while ($rowA = pg_fetch_row($result2)) {
 $roundA= "$rowA[2]";
 $farmareaA= round($roundA, 2);  

 
}

$result3 = pg_query($conn, "SELECT farmparcelpfi FROM public.farmpfi WHERE farmid = '$farmid' ");
if (!$result3) {
  echo "An Database error occurred.\n";
  exit;
}
while ($rowB = pg_fetch_assoc($result3)) {
 $parcelA= "$rowB[farmparcelpfi]";
 //echo $rowB["farmparcelpfi"];
 
}



?>


 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/onoff.js"></script>
<script type="text/javascript" src="../js/measure.js"></script>
<script type="text/javascript" src="../js/showhidejquery.js"></script>
<script type="text/javascript" src="../js/soilmap.js"></script>
<script type="text/javascript" src="../js/boundrymap.js"></script>
<script type="text/javascript" src="../js/showdate.js"></script>
<script type="text/javascript" src="../js/getweatherjson.js"></script>
<script type="text/javascript" src="../js/expand.js"></script>
<script type="text/javascript" src="../js/zonemap.js"></script>
<script type="text/javascript" src="../js/tableselect.js"></script>
<script type="text/javascript" src="../js/redrawfpmap4.js"></script>

<script src="http://openlayers.org/dev/OpenLayers.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>          
<script src="//ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools-yui-compressed.js"></script>
<script type="text/javascript" src="http://www.chaucery.com/fun/weatherChart/highcharts.js"></script>
<!--<script type="text/javascript" src="http://lctest.land.vic.gov.au/vicmapapi/js/vicmapapi.js"></script>-->
<script type="text/javascript" src="http://116.240.195.134/vicmapapi/js/vicmapapi.js"></script>
<!--<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>-->
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css" />


 <script>
 function loadnmtp(){
 //$("#wfnr").load("proxy.php?url=http://sistat01:8079/FARMWEB/VERSION2/php/Nutrient_Topic2_1.html");
 $("#frame").attr("src", "proxy.php?url=http://sistat01:8079/FARMWEB/VERSION2/php/Nutrient_Topic2_1.html");
 }
 
 
 
 

  
 $(function() {
    $( "#tablewrap" ).draggable();
  });

    
 
 
 
 
 
   $(function() {
    $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        Continue: function() {
          $( this ).dialog( "close" );
        },
		Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
 
 
 
 
   $(function() {
    $( "button:first" ).button({
      icons: {
        primary: "ui-icon-refresh"
      }
    }).next().button({
      icons: {
        primary: "ui-icon-print"
      }
    }).next().button({
      icons: {
        primary: "ui-icon-arrow-4-diag"
      }
    }).next().button({
      icons: {
        primary: "ui-icon-circle-plus"
      }
	  }).next().button({
      icons: {
        primary: "ui-icon-circle-close"
      }
	  }).next().button({
      icons: {
        primary: "ui-icon-disk"
      }
	  }).next().button({
      icons: {
        primary: "ui-icon-pencil"
      }
    });
  });
 
 
 
  $(function() {
    $( document ).tooltip();
  });
 
 
  $(function() {
    $( "#accordiona" ).accordion();
  });
  </script>
  
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  
  
  <script type="text/javascript">
function toggle() {

	var el = document.getElementById("wrapper");

	if ( el.style.display != 'none' ) {

		el.style.display = 'none';

	}

	else {

		el.style.display = '';

	}

}


function GetSelectedItem()
    {
        var selectmenu = document.getElementById("selzone").value
		var paddockvalues =document.getElementById("zonesel").innerHTML
		zones(paddockvalues, selectmenu);
		featuredidlist=[];
		refreshStrategy.refresh();
    }
	
function cleardiv()
{
document.getElementById("zonesel").innerHTML="";
}


function cleararray()
{
var layer = map.getLayersByName("My Farm Paddocks")[0];	
layer.refresh({force:true});
}
  </script>
   
 
  
<script type="text/javascript">
function PrintElem(elem)
    {
        Popup($(elem).html());
    }
  </script>
  
 
<script type="text/javascript">
 
$(document).ready(function(){
 
        $(".slidingDiv").hide();
        $(".show_hide").show();
 
    $('.show_hide').click(function(){
    $(".slidingDiv").slideToggle();
    });
 
});

  $(function() {
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      icons: icons,
	  collapsible: false,
	  heightStyle: "content"
    });
    $( "#toggle" ).button().click(function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
  });

 
</script>

  
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  
  <script type="text/javascript">
  var farmid;
  farmid='<?php echo $_GET["farmid"]; ?>';
	  
function zones(paddocks, zone)
{


$.ajax({
        type: "POST",
        url: "http://sistat01/FARMWEB/FARMWEB2.0_DEMO_PADDZONES_PG.asp?farmid="+farmid+"&paddocks="+ paddocks +"&zone="+ zone, 
        data: "{'farmid':'"+ farmid +"','paddocks':'"+ paddocks +"', 'zone':'"+ zone +"'}", 
        contentType: "application/json;charset=utf-8",
        dataType: "html",
        success: function(returnval){
            //alert("updated");
            document.getElementById('zonesel').innerHTML = returnval;
			//refreshmap();
			//cleardiv();
			featuredidlist.length=0;
            }
       });
	   }


function cma()
{


$.ajax({
        type: "POST",
        url: "http://sistat01/FARMWEB/CMA.asp?farmid="+farmid, 
        data: "{'farmid':'"+ farmid +"'}", 
        contentType: "application/json;charset=utf-8",
        dataType: "html",
        success: function(returnval){
            //alert(data.d);
            document.getElementById('cma').innerHTML = returnval;
            
        }
       });
	   }
	   
	   function weatherDistricts()
{


$.ajax({
        type: "POST",
        url: "http://sistat01/FARMWEB/weatherDistricts.asp?farmid="+farmid, 
        data: "{'farmid':'"+ farmid +"'}", 
        contentType: "application/json;charset=utf-8",
        dataType: "html",
        success: function(returnval){
            //alert(data.d);
            document.getElementById('weather').innerHTML = returnval;
            
        }
       });
	   }

	   
	   function irri()
{


$.ajax({
        type: "POST",
        url: "http://sistat01/FARMWEB/irrigation_district.asp?farmid="+farmid, 
        data: "{'farmid':'"+ farmid +"'}", 
        contentType: "application/json;charset=utf-8",
        dataType: "html",
        success: function(returnval){
            //alert(data.d);
            document.getElementById('irri').innerHTML = returnval;
            
        }
       });
	   }
	   
	   
	   
	   function parish()
{


$.ajax({
        type: "POST",
        url: "http://sistat01/FARMWEB/parish.asp?farmid="+farmid, 
        data: "{'farmid':'"+ farmid +"'}", 
        contentType: "application/json;charset=utf-8",
        dataType: "html",
        success: function(returnval){
            //alert(data.d);
            document.getElementById('parish').innerHTML = returnval;
            
        }
       });
	   }
	   
function refreshlayer(){
var layerD = map.getLayersByName("My Farm Paddocks")[0];	
layerD.redraw(true);
layerD.refresh({force: true});
}	   
	   

	   
function bomWeather()
{
$.ajax({
        type: "POST",
        url: "farmweather.php?farmid="+farmid, 
        data: "{'farmid':'"+ farmid +"'}", 
        contentType: "application/json;charset=utf-8",
        dataType: "html",
        success: function(returnval){
            var wmo=returnval;

   
	$.getJSON('proxy.php?url=http://www.bom.gov.au/fwo/IDV60801/IDV60801.'+wmo+'.json',function(json){
		var options = {
			chart: {
				renderTo: 'obs1',
				zoomType: 'xy'
			},
			title: {
				text: json.observations.header[0].name
			},
			subtitle: {
				text: json.observations.header[0].refresh_message
			},
			xAxis: {
				type: 'datetime',
				dateTimeLabelFormats: {
					hour: '%a %l:%M %P'
				},
				gridLineColor: '#808080',
				gridLineWidth: 1,
				gridLineDashStyle: 'Dot',
				tickColor: '#000000'
			},
			yAxis: [{ // Primary yAxis
				alternateGridColor: '#eeeeee',
				labels: {
					formatter: function() {
						return this.value +'°C';
					},
					style: {
						color: '#993366'
					}
				},
				title: {
					text: 'Temperature',
					style: {
						color: '#009933'
					}
				}
			}, { // Secondary yAxis
				alternateGridColor: '#eeeeee',
				title: {
					text: 'Rainfall',
					style: {
						color: '#4572A7'
					}
				},
				labels: {
					formatter: function() {
						return this.value +' mm';
					},
					style: {
						color: '#4572A7'
					}
				},
				opposite: true
			}, { // Tertiary yAxis
				alternateGridColor: '#eeeeee',
				title: {
					text: 'Relative Humidity',
					style: {
						color: '#BBBB45'
					}
				},
				labels: {
					formatter: function() {
						return this.value +' %';
					},
					style: {
						color: '#BBBB45'
					}
				},
				//min: 0,
				//max: 100,
				opposite: true
			},{ // forth yAxis
				alternateGridColor: '#eeeeee',
				title: {
					text: 'Wind Gust KMH',
					style: {
						color: '#FF0000'
					}
				},
				labels: {
					formatter: function() {
						return this.value +' kmh';
					},
					style: {
						color: '#FF0000'
					}
				},
				opposite: true
			} ],
			tooltip: {
				formatter: function() {
					var pointValue = '<b>'+ this.y + 
						(this.series.name == 'Temperature' ? '°C</b>' : 
						(this.series.name == 'Cumulative Rainfall from 9am' ? ' mm</b>' :
						'%</b>'));
					return '' 
						+ Highcharts.dateFormat('%l:%M%P: ', this.x) 
						+ pointValue
						+ Highcharts.dateFormat('<br/>%a %e %b %Y', this.x);
				}
			},
			legend: {
				layout: 'vertical',
				align: 'left',
				x: 80,
				verticalAlign: 'top',
				y: 60,
				floating: true,
				backgroundColor: '#FFFFFF'
			},
			plotOptions: {
				series: {
					events: {
						//Fix for Highcharts oddity
						//By default, hiding a series hides the axis but not the title
						hide: function(event) {
							this.yAxis.axisTitle.hide();
						},
						show: function(event) {
							this.yAxis.axisTitle.show();
						}
					}
				}
			},
			series: [{
				name: 'Temperature',
				color: '#009933',
				type: 'area',
				fillOpacity: 0.9,
				marker: {
				   enabled: false
				},
				data: []
			}, {
				name: 'Cumulative Rainfall from 9am',
				color: '#4572A7',
				type: 'area',
				fillOpacity: 0.3,
				marker: {
				   enabled: false
				},
				yAxis: 1,
				data: []		
			}, {
				name: 'Relative Humidity',
				color: '#BBBB45',
				type: 'spline',
				fillOpacity: 0.5,
				marker: {
				   enabled: false
				},
				yAxis: 2,
				visible: false,
				events: {
					hide: function(event) {
						//Workaround for bug in Highcharts?
						//axis with extremes set does not hide automatically
						this.yAxis.setExtremes(null,null);
						this.yAxis.axisTitle.hide();
					},
					show: function(event) {
						this.yAxis.setExtremes(0,100);
						this.yAxis.axisTitle.show();
					}
				},
				data: []
				
						
			},
			{
				name: 'Wind Gust',
				color: '#FF0000',
				type: 'spline',
				fillOpacity: 0.5,
				marker: {
				   enabled: false
				},
				yAxis: 3,
				visible: false,
				events: {
					hide: function(event) {
						//Workaround for bug in Highcharts?
						//axis with extremes set does not hide automatically
						this.yAxis.setExtremes(null,null);
						this.yAxis.axisTitle.hide();
					},
					show: function(event) {
						this.yAxis.setExtremes(0,100);
						this.yAxis.axisTitle.show();
					}
				},
				data: []
				
						
			}
			
			
			
			
			
			 ]
		};

        allData = json.observations.data;
		var strDate;
		var thisDate;
		var temp = new Array();
		var humidity = new Array();
		var rain = new Array();
		var gust = new Array();
		for (var i=0;i<allData.length;i++){
			strDate = allData[i].local_date_time_full;
			thisDate = Date.UTC(strDate.slice(0,4),parseInt(strDate.slice(4,6),10)-1,strDate.slice(6,8),strDate.slice(8,10),strDate.slice(10,12));
			temp.push(new Array(thisDate,allData[i].air_temp));
			humidity.push(new Array(thisDate,allData[i].rel_hum));
			gust.push(new Array(thisDate,allData[i].gust_kmh));
			rainValue = parseFloat(allData[i].rain_trace);
			rain.push(new Array(thisDate, isNaN(rainValue) ? null : rainValue));
		}
		options.series[0].data = temp;
		options.series[1].data = rain;
		options.series[2].data = humidity;
		options.series[3].data = gust;

		$('#loading').hide();
		$('#links').show();
		var chart = new Highcharts.Chart(options);
		chart.yAxis[2].axisTitle.hide();
					   


});

            
            
        }
       });

}
	   
	   
	   function soiltypes()
{


$.ajax({
        type: "GET",
        url: "http://sistat01/FARMWEB/soilarea.asp?farmid="+farmid, 
        data: "{'farmid':'"+ farmid +"'}", 
        contentType: "application/json;charset=utf-8",
        dataType: "html",
        success: function(returnval){
            //alert(data.d);
            document.getElementById('soiltypes').innerHTML = returnval;
            
        }
       });
	   }

////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////
function modifybounds()
{


$.ajax({
        type: "GET",
        url: "http://sistat01/FARMWEB/soilarea.asp?farmid="+farmid, 
        data: "{'farmid':'"+ farmid +"'}", 
        contentType: "application/json;charset=utf-8",
        dataType: "html",
        success: function(returnval){
            //alert(data.d);
            document.getElementById('soiltypes').innerHTML = returnval;
            
        }
       });
	   }
	   
	   
function updatepadds(){
var a=$('#paddocks').serialize();

$("#waiting").ajaxStop(function () {
            $(this).hide();
        });

$.ajax({
    type:'post',
    url:'farmpaddocks.php',
    data:a,
	beforeSend:function(result){
      $("#waiting").show();
    },
    success:function(result){
      refreshlayer();
	  $("#tablewrap").load('table.php?farmid='+farmid);
	  
    },
	complete:function(result){
	$("#waiting").hide(); 
	}
	
})
};	   

///////////////////////////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////////////////////////
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link href="../css/farmweb-theme/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />
<link href="../css/farmweb-theme/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Open+Sans+Condensed:300,700" rel="stylesheet" />
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href="../css/lr.css" rel="stylesheet" type="text/css">



<script type="text/javascript">
///////////////////////////////////////////////////////////////////////////////////////////////

var farmdidJS = farmid;
var map, control, map2, map4, layer4;
var getExtent;

var farmpaddocks;

OpenLayers.ProxyHost = "../cgi-bin/proxy.cgi?url=";


var DeleteFeature = OpenLayers.Class(OpenLayers.Control, {
    initialize: function(layer, options) {
        OpenLayers.Control.prototype.initialize.apply(this, [options]);
        this.layer = layer;
        this.handler = new OpenLayers.Handler.Feature(
            this, layer, {click: this.clickFeature}
        );
    },
    clickFeature: function(feature) {
        // if feature doesn't have a fid, destroy it
		 var x;
		var r=confirm("Are you sure you want to Delete a Farm Paddock ");
		if (r==true)
  {
        if(feature.fid == undefined) {
            this.layer.destroyFeatures([feature]);
			
        } else {
            feature.state = OpenLayers.State.DELETE;
            this.layer.events.triggerEvent("afterfeaturemodified", 
                                           {feature: feature});
            feature.renderIntent = "select";
            this.layer.drawFeature(feature);
			saveStrategy.save();
        }
    }},
    setMap: function(map) {
        this.handler.setMap(map);
        OpenLayers.Control.prototype.setMap.apply(this, arguments);
    },
    CLASS_NAME: "OpenLayers.Control.DeleteFeature"
	
});



					

/////////////////////////////////////////////////////////////////////////////////////////////////
      function init()
     { 
	 	var options = {
				projection : new OpenLayers.Projection("EPSG:3111")
				
			};
			 //set up a save strategy
		var saveStrategy = new OpenLayers.Strategy.Save();
		refreshStrategy = new OpenLayers.Strategy.Refresh();
	 	
         // "map" corresponds to the id of the div hosting the map 
         map = new OpenLayers.Vicmap.Map("map", options);
		 //map2 = new OpenLayers.Vicmap.Map("map2", options);
		 
		  var hybrid = map.getLayersByName("HYBRID");	

 			if (hybrid.length > 0)
		{
			map.setBaseLayer(hybrid[0]);
			
		}
		 
		 
		  var renderer = OpenLayers.Util.getParameters(window.location.href).renderer;
            renderer = (renderer) ? [renderer] : OpenLayers.Layer.Vector.prototype.renderers;
			
		
		


		 
		 
		 var vluis = new OpenLayers.Layer.WMS("PARCEL_MP",
            "http://sistat01:8080/geoserver/FARMWEB/wms", 
            {'layers': 'FARMWEB:parcel_mp2012_PG', transparent: true, singletile: 'image/jpeg'},
            {isBaseLayer: false, visibility: false }
       		);
			
			var cma100 = new OpenLayers.Layer.WMS("CMA",
            "http://sistat01:8080/geoserver/FARMWEB/wms", 
            {'layers': 'FARMWEB:cma100', transparent: true, singletile: 'image/jpeg'},
            {isBaseLayer: false, visibility: false }
       		);
		
			
		 var property = new OpenLayers.Layer.WMS("Your Property Boundry",
            "http://sistat01:8080/geoserver/FARMWEB/wms", 
            {'layers': 'FARMWEB:farmweb_prop_bounds ', transparent: true, singletile: 'image/jpeg',CQL_FILTER:'farmid='+farmdidJS},
            {isBaseLayer: false, visibility: true }
       		);
			
			var gmwchannels = new OpenLayers.Layer.WMS("IRRIGATION",
            "http://sistat01:8080/geoserver/FARMWEB/wms", 
            {'layers': 'FARMWEB:irrigation_chan', transparent: true, singletile: 'image/jpeg'},
            {isBaseLayer: false, visibility: false}
       		);
			
			var sirsoils = new OpenLayers.Layer.WMS("SIRSOILS",
            "http://sistat01:8080/geoserver/FARMWEB/wms", 
            {'layers': 'FARMWEB:SIR_SOILS', transparent: true, singletile: 'image/jpeg'},
            {isBaseLayer: false, visibility: false}
       		);
			
			

			stylemap_paddocks = new OpenLayers.StyleMap({
        		"default":{
				label: "${paddock_name}",
				labelOutlineColor: "black",
			    labelOutlineWidth: 3,
				strokeColor:"#00BFFF",
				strokeOpacity: 4,
				fontColor: "white",
				fontSize: "8",
        		fillOpacity: 0.1,
				fillColor:"#00FF00",
				pointRadius: 6
				
       			}
			});

			// prepare to style the data
    		styleMap = new OpenLayers.StyleMap({
        	strokeColor: "red",
        	strokeWidth: 2,
        	strokeOpacity: 1.0,
        	fillOpacity: 0.0
			
    		});
			
			//wfs-t editable overlay
			var wfs_layer = new OpenLayers.Layer.Vector("My Property Bounds", {
			strategies: [new OpenLayers.Strategy.Fixed(),saveStrategy, refreshStrategy],
			
			protocol: new OpenLayers.Protocol.WFS({
			version: "1.1.0",
			
			url: "http://sistat01:8080/geoserver/wfs",
			featureNS :  "http://www.opengeospatial.net/FARMWEB",
			visibile: "false",			
			featureType: "farmweb_prop_bounds",
			// geometry column name
			geometryName: "GEOM",
			srsName: "EPSG:3111",
			schema: "http://sistat01:8080/geoserver/wfs/DescribeFeatureType?version=1.1.0&;typename=FARMWEB:farmweb_prop_bounds",
			
			filter: new OpenLayers.Filter.Logical({
                    type: OpenLayers.Filter.Logical.OR,
                    filters: [
                        new OpenLayers.Filter.Comparison({
                            type: OpenLayers.Filter.Comparison.EQUAL_TO,
                            property: "farmid",
                            value: farmdidJS
                        })
						]
						})
			}),
			styleMap: styleMap
			});
			
			//end of wfs
			var farmpaddocks = new OpenLayers.Layer.Vector("My Farm Paddocks", {
			strategies: [new OpenLayers.Strategy.Fixed(),saveStrategy, refreshStrategy],
			protocol: new OpenLayers.Protocol.WFS({
				version: "1.1.0",
				url: "http://sistat01:8080/geoserver/wfs",
				featureNS :  "http://www.opengeospatial.net/FARMWEB",			
				featureType: "farmpaddocks",
			// geometry column name
				geometryName: "the_geom",
				fields: [{ }],
				srsName: "EPSG:3111",
				
			
				schema: "http://sistat01:8080/geoserver/wfs/DescribeFeatureType?version=1.1.0&;typename=FARMWEB:farmpaddocks",
			filter: new OpenLayers.Filter.Logical({
                    type: OpenLayers.Filter.Logical.OR,
                    filters: [
                        new OpenLayers.Filter.Comparison({
                            type: OpenLayers.Filter.Comparison.EQUAL_TO,
                            property: "farmid",
                            value: farmdidJS
                        })
						]
						})
			
			
			}),
			styleMap: stylemap_paddocks
			});
			
			//end of wfs

			map.addLayers([vluis, gmwchannels,wfs_layer,farmpaddocks]);

			var selectA = new OpenLayers.Control.SelectFeature([farmpaddocks]);
			var selectBound =new OpenLayers.Control.SelectFeature([wfs_layer]);
			
			
			
			
			
			
			function boundselect() {
			alert("clicked");
			
			}
			
			function setAttributes (feature) {
        		feature.state = OpenLayers.State.INSERT;
        		feature.attributes.farmid = farmdidJS;
        		
}
			function myTimer()
			{
				setTimeout(function(){location.reload();},1000);
			}
			
			
			

			// event shows current values on selection
	
			farmpaddocks.events.on({
    		featureselected: function(e) {
        	var feature = e.feature;
        	var area = feature.geometry.getArea()/10000;
        	var id = feature.attributes.key;
			var gid =feature.fid;
			var cleangid = gid.substring(gid.indexOf('.')+1)
			var pname = feature.attributes.paddock_name;
			var pcomments = feature.attributes.comments;
        	var parea = area.toFixed(2);
			var ptype = feature.attributes.paddock_type;
			var farmId = feature.attributes.farmid;
			var dateA = feature.attributes.creation_d;
			
			show();
			$('#paddinfo').click(); //opens accordian at edit div
			//$("#accordion").accordion("activate", $("#h3-Paddock Information"));
        	document.getElementById("parea").value = parea;
			document.getElementById("pname").value = pname;
			document.getElementById("pcomments").value = pcomments;
			document.getElementById("ptype").value = ptype;
			document.getElementById("pgid").value = cleangid;
			if (document.getElementById("paddocktd").innerHTML==cleangid)
			{
			document.getElementById("paddocktd").style.backgroundColor="#f3f3f3";
			}
			;
			
    	}
	});
///////////////////////////////////////////////////////////////////////////////////
			//loads soil map and passes farm id accross AND ZOOMS TO FARM
			showmap(farmid);
	         
				wfs_layer.events.register('loadend', farmpaddocks, function(evt)
{
				map.zoomToExtent(wfs_layer.getDataExtent())
			
}
);
			
////////////////////////////////////////////////////////////////////////////////			
			function show(){      
        		document.getElementById('paddockinfo').style.visibility="visible";
}
			function hide(){
        		document.getElementById('paddockinfo').innerHTML="Your Paddock has been saved!!";
				document.getElementById('paddockinfo').style.visibility="hidden";
}
////////////////////////////////////////////////////////////////////////////////////////
			var snap = new OpenLayers.Control.Snapping({
                layer: farmpaddocks,
                targets: [wfs_layer, farmpaddocks],
                greedy: false
           });
////////////////////////////////////////////////////////////////////////////////////////		   
		   
		   
                //map.addControl(splitA);
				 //splitA.activate();
            
			
			
			//Toolbar:
	//var Tool_container = document.getElementById("Tools");
	
	
	
	
    var panel = new OpenLayers.Control.Panel(
    {'displayClass': 'customEditingToolbar',
	allowDepress: true
    });
	
	var reloadpage = new OpenLayers.Control.Button({
    displayClass: "olControlRefreshMap", 
	title: "Reload Map",
	trigger: function() 
	{
	location.reload();
	}
	});
	
	
	
	var printmap = new OpenLayers.Control.Button({
    displayClass: "olControlPrintMap", 
	title: "Print Map",
	trigger: function Popup(data) 
    {
        var mywindow = window.open('map', 'map', 'height=400,width=600');
        mywindow.document.write('<html><head><title>tabs-1</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }
	});
	
	
    var navigate = new OpenLayers.Control.Navigation({
    title: "Pan Map"
    });

    var draw = new OpenLayers.Control.DrawFeature(
    farmpaddocks,
	OpenLayers.Handler.Polygon,
    {
	autoActivate: true,
	handlerOptions: {holeModifier: "altKey"   },
    title: "Draw Feature",
    displayClass: "olControlDrawFeaturePolygon",
    
	featureAdded: setAttributes

    }
	
    );
	
	
	
	//draw.events.register('featureadded', draw, show);
	snap.activate();
	
	// run show form function here

		
	var del = new DeleteFeature(farmpaddocks, {title: "Delete Feature"});

    var edit = new OpenLayers.Control.ModifyFeature(farmpaddocks, {
    title: "Modify My Paddock Boundries",
    displayClass: "olControlModifyFeature"
    });
	edit.events.register('click', edit);

    var save = new OpenLayers.Control.Button({
    title: "Save Changes",
    trigger: function() {
    if(edit.feature) {
    edit.selectControl.unselectAll();
    }
    saveStrategy.save();
		
	
	{//refreshStrategy.refresh();
	farmpaddocks.redraw();
	}
	
	alert("Farm Paddock Saved for farmid "+farmdidJS);
	//myTimer();
	
    },
    displayClass: "olControlSaveFeatures"
	
    });

	panel.addControls([save, navigate, del, edit,  draw, reloadpage, printmap]);
	panel.defaultControl = navigate;
	reloadpage.activate()
	map.addControl(panel); 
	map.addControl(selectA);
	//map.addControl(reloadpage); 
	//map.addControl(new OpenLayers.Control.LayerSwitcher());
	//map.addControl();	
	selectA.activate();
	//reloadpage.activate();
	//map.addControl(selectBound);
	
	
}

</script>
</head>

<body onLoad="init(); showmapbound(farmdidJS); showmapzone(farmdidJS);">
<div align="right">logout | <a href="login.php">Login</a> | My Profile</div>
<div id="logo" class="container">
	<h1><span class="icon icon-lock icon-size"></span><a href="#">FARMWEB <span>2.0</span></a></h1>
	<p>DEPARTMENT OF <a href="http://www.freecsstemplates.org"></a>ENVIRONMENT AND PRIMARY INDUSTRIES </p>
</div>
<div id="wrapper" class="container"> 
  <div id="menu" class="container">
		<ul>
		
		</ul>
  </div>
  
		<div id="tabs">
  <ul>
    <li><a href="#myproperty">My Property</a></li>
	<li><a href="#myadmin">My Administration</a></li>
    <li><a href="#myassociations">My Associations</a></li>
    <li><a href="#mysoils">My Soils</a></li>
	<li><a href="#mydairy">My Dairy</a></li>
	<li><a href="#myirrigation">My Irrigation</a></li>
	<li><a href="#myweather" onClick="bomWeather()">My Weather</a></li>
  </ul>
  <div id="myproperty">
  
 
    <p>
	<table width="100%" border="0" >
  
  
  <tr>
    <td width="1" rowspan="7">&nbsp;</td>
    <td height="292"colspan="4"><div class="CSSTableGenerator" id="map" style="height:500px; width:100%; "></div>
      
      <div class="CSSTableGenerator" id="tablewrap"  overflow:auto;"><?php  
$db = pg_connect("host=localhost dbname=postgis user=postgres password=lara1000" ); 
$resultD = pg_query($db,"SELECT * FROM public.farmpaddocks WHERE farmid = '$farmid' ORDER BY gid ASC");  
echo "<table>";  


echo "<tr>";
echo "<td>PaddockId</span></td>";
echo "<td>Paddock Name</td>";
echo "<td> Area(ha)</td>";
echo "<td>Paddock edit Date</td>";
echo "<td>Paddock Type</td>";
echo "<td>Comments</td>";
echo "</tr>"; 
while($rowD=pg_fetch_assoc($resultD))  
{ 
echo "<tr>";  
echo "<td>" . $rowD['gid'] . "</td>";  
echo "<td>" . $rowD['paddock_name'] . "</td>";  
echo "<td>" . $rowD['area'] . "</td>"; 
echo "<td>" . $rowD['creation_d'] . "</td>";  
echo "<td>" . $rowD['paddock_type'] . "</td>";  
echo "<td>" . $rowD['comments'] . "</td>"; 
echo "</tr>";  
}  
echo "</table>";  
?>  

      </div></td>
    <td width="230" align="left" valign="top"><p align="center" class="style13">
    <div id="accordion">
  <h3>Farm Information </h3>
  <div id="farminfo">
    <table width="100%" border="0" class="table-33">
      <tr>
        <td bgcolor="#F0F0F0"><span class="style12">FARMID:</span></td>
        <td bgcolor="#F0F0F0"><span class="style10"><?php echo $_GET["farmid"]; ?></span></td>
      </tr>
      <tr>
        <td bgcolor="#F0F0F0"><span class="style12">FARM NAME: </span></td>
        <td bgcolor="#F0F0F0"><span class="style10"><?php echo $farmnameA?></span></td>
      </tr>
      <tr>
        <td bgcolor="#F0F0F0"><span class="style10"><strong>FARM ADDRESS:</strong></span></td>
        <td bgcolor="#F0F0F0"><span class="style10"><?php echo $farmaddressA?></span></td>
      </tr>
      <tr>
        <td bgcolor="#F0F0F0"><strong>area(ha)</strong></td>
        <td bgcolor="#F0F0F0"><span class="style10"><?php echo $farmareaA?></span></td>
      </tr>
    </table>
    <table border="0" align="left" class="table-34">
      <tr>
        <td bgcolor="#F0F0F0"><span class="style10"><strong>Farm Parcel PFI's </strong></span></td>
      </tr>
      
      <tr>
        <td bgcolor="#F0F0F0"><span class="style10"><?php echo $rowB["farmparcelpfi"]?></span></td>
      </tr>
      
    </table>
  </div>
  <h3 id="paddinfo">Paddock Information </h3>
  <div>
    <div class="table-35">
      <div id="waiting" style="display:none"><img src="../images/ajaxLoader.gif" /></div>	
      <div id="paddockinfo" style="visibility:hidden">
          <label><strong>Paddock Detail Entry Form: </strong><br>
          </label>
          <form id="paddocks" name="form1" method="get" action="farmpaddocks.php">
            <label>
            <input type="hidden" name="pgid" id="pgid" value=""  >
            <br>
            <span class="style10">FarmId:
              <input name="pfarmid" type="text" id="pfarmid" value="<?php echo $farmid ?>" readonly="true" >
            </span>
            <span class="style10"><br>
              Paddock Name:
              <input type="text" name="pname" id="pname" title="Please enter the Name of your padock....can be anything!!!">
            </span></label>
            <span class="style10">
            <label><br>
            </label>
            <label>Paddock Type:
              <select name="ptype" id="ptype">
              <option>Select Paddock Type...</option>
              <option value="Annual Pasture">Annual Pasture</option>
              <option value="Bull Paddock">Bull Paddock</option>
              <option value="Calving paddocks">Calving paddocks</option>
              <option value="Calf Rearing Area">Calf Rearing Area</option>
              <option value="Dairy">Dairy</option>
              <option value="Effluent Paddocks">Effluent Paddocks</option>
              <option value="Feedpad">FeedPad</option>
              <option value="Lucerne">Lucerne</option>
              <option value="Other Crops">Other Crops</option>
              <option value="Permanent Pasture">Permanent Pasture</option>
              <option value="Springer Paddock">Springer Paddocks</option>
              <option value="Sumer Crops">Summer Crops</option>
            </select>
            <br>
            
              Paddock Comments:
              <input name="pcomments" id="pcomments" type="text">
              <br>
              Area(hectares):
              <input type="textarea" name="parea" id="parea" readonly="true">
            </label>
            </span>
            <p class="style10">
              <label></label>
            </p>
            <p> <span class="style10">
              <label></label>
              </span>
                <label>
                <input name="Submit" type="button"  value="Save Paddock" onClick="updatepadds();">
                </label>
            </p>
          </form>
        <label></label>
      </div>
      <label></label>
    </div>
    </div>
 
  <h3>Map Legend </h3>
  <div>
  
    <p><canvas id="myCanvas" width="10" height="10" style="border:4px solid #FF0000;">
Your browser does not support the HTML5 canvas tag.
</canvas> My Farm Boundry</p><canvas id="myCanvas" width="10" height="10" style="border:4px solid #00BFFF;">
Your browser does not support the HTML5 canvas tag.
</canvas> My Farm Paddocks    </div>
	<h3>Map Styles </h3>
  <div>
    <p>Farm Paddocks Layer Opacity: 
    <div id="slider-id" style="width:50px"><div class="ui-slider-handle"></div></div>
</p>      </td>
    </tr>
  
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td width="630" colspan="3">&nbsp;</td>
    <td width="161"><div id="location"><strong>
      <label></label>
    </strong></div></td>
    <td><strong>
      <label></label>
    </strong>
      <label></label></td>
  </tr>
  <tr>
    <td colspan="5"></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
</table>



<div id="docs">
</div>
	</p>
  </div>
  <div id="myassociations">
    <p>Based on your Geographic location.    </p>
    <p><strong>Catchment Management Authority</strong>: <a href="#" onClick="cma();">show</a>      </p>
    <pre><div id="body"></div></pre>
    <div class="table-3" id="cma"></div>
    <p><strong>Irrigation District</strong>:<a href="#" onClick="irri();">show</a><br>
    </p>
    <div class="table-3" id="irri"></div>
    <p> <strong>Fire District</strong>:      show<br>
    </p>
    <div class="table-3" id="fire"></div>
    <p><strong>Weather District</strong>:      <a href="#" onClick="weatherDistricts();">show</a>    </p>
    <div class="table-3" id="weather"></div>
    <p><strong>Parish</strong>:      <a href="#" onClick="parish();">show</a><br>
    </p>
    <div class="table-3" id="parish"></div>
    <p>&nbsp;</p>
  </div>
  <div id="mysoils">
  
    <div class="CSSTableGenerator" id="map2" style="height:500px; width:660px; "></div>
	<div align="left">Adjust Soils Opacity</div>
	<div id="slider" style="width:660px"><div class="ui-slider-handle"></div>
    <p><div class="CSSTableGenerator" id="soiltypes" style="width:660px" ><?php 
$farmid= $_GET["farmid"];
$db = pg_connect("host=localhost dbname=postgis user=postgres password=lara1000" ); 
$resultD = pg_query($db,"SELECT round(cast((SUM(ST_Area(ST_Intersection(farmweb_prop_bounds.\"GEOM\", \"SIR_SOILS\".the_geom)))/10000 )as numeric),2) AS HECTARES, \"SIR_SOILS\".desc,\"SIR_SOILS\".group_ FROM public.\"SIR_SOILS\", public.farmweb_prop_bounds WHERE ST_Intersects(farmweb_prop_bounds.\"GEOM\", \"SIR_SOILS\".the_geom) AND farmweb_prop_bounds.farmid = '".$farmid."' GROUP BY \"SIR_SOILS\".group_, \"SIR_SOILS\".desc ORDER BY HECTARES DESC;"); 

if (pg_num_rows($resultD)==0){
echo "Your property does not intersect the soils data...<br>";
echo "We are working on increasing the coverage of the Victrorian soil data";
} else { 


echo "<table>";  


echo "<tr>";
echo "<td align='center' width='98' ><span class='style12'>Area (ha)</span></td>";
echo "<td align='center' width='165' ><span class='style12'>Soil Description</span></td>";
echo "<td align='center' width='112' ><span class='style12'>Soil Group</span></td>";

echo "</tr>"; 
$total = 0;
while($rowD=pg_fetch_assoc($resultD))  
{ 

echo "<tr >"; 

echo "<td align='center' width='200' bgcolor='#EDEBEC'><span class='style10'>" . $rowD['hectares'] . "</span></td>";  
echo "<td align='center' width='200' bgcolor='#EDEBEC'><span class='style10'>" . $rowD['desc'] . "</span></td>";  
echo "<td align='center' width='200' bgcolor='#EDEBEC'><span class='style10'>" . $rowD['group_'] . "</span></td>"; 


echo "</tr>";  
}  
echo "</table>"; 

} 
?></div>

    <p>&nbsp;</p>
	</div>  
    	</div>  
    
 
  
  
  
  
 <div id="mydairy">
    <p>
      Create a whole Farm Nutrient Report:
        <input type="submit" name="Submit2" value="Create" id="wfr" onClick="loadnmtp()" />
</p>
    <p>Create an In Farm Nutrient Report:
      <input type="submit" name="Submit22" value="Create" onClick="loadnmtp()"/>
    </p>
    <p>&nbsp;</p>
    
	<iframe id="frame" src="" width="100%" height="100%" frameborder="0">
   </iframe>
	
 </div> 
 
 
 
 
  <div id="myirrigation">
    <p>
      Create a whole Farm Irrigation Schedule::
        <input type="submit" name="Submit2" value="Create" />
    </p>
    </div>
	
	
	<div id="myweather">
     <div class="CSSTableGenerator" id="obs1"></div>
	 <div class="CSSTableGenerator" id="guage"></div>

	</div>
</div>
</div>
<div id="copyright">
	<p>Copyright (c) 2013 DEPARTMENT OF ENVIRONMENT AND PRIMARY INDUSTRIES. All rights reserved. | DEVELOPED BY THE FARMWEB TEAM 2013 <a href="http://www.depi.vic.gov.au//" rel="nofollow"></a>.</p>
</div>
</body>
</html>
