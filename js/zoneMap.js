

function myTimerb()
			{
				setTimeout(function(){location.reload();},1000);
			}

function clear() {
  document.getElementById('zonesel').innerHTML ="hello";
  }
function refreshmap()
    {
      var mLayers = map.layers;

for(var a = 0; a < mLayers.length; a++ ){
    alert(mLayers[a].name)
}; 
	  //var layer = map.getLayersByName("My Farm Paddocks")[0];
	  //alert(layer.length);
//layer.refresh({force:true});
    }
			
var fids = [];	
var selectF;
var layer4;
var map4;
var farmpaddock4;
var featuredidlist = [];

function showmapzone(valueb) {
			var farmdidJS= valueb;
			
           	var map4 = new OpenLayers.Vicmap.Map('map4');

			

			var zone1 = new OpenLayers.Rule(
   			 		{
        			filter: new OpenLayers.Filter.Comparison(
            		{
               	 	type: OpenLayers.Filter.Comparison.EQUAL_TO,
               		 property: "zone",
                		value: "zone1",
            		}),
        			symbolizer: {pointRadius: 10, fillColor: "green", fillOpacity: 0.5, strokeColor: "green", label: "${zone}",labelOutlineColor: "black",labelOutlineWidth: 3, fontColor: "white",
				fontSize: "8"}
    				});
			
		var zone2 = new OpenLayers.Rule(
   					 {
        			filter: new OpenLayers.Filter.Comparison(
           			 {
               		 type: OpenLayers.Filter.Comparison.EQUAL_TO,
                		property: "zone",
                	value: "zone2",
           			 }),
        			symbolizer: {pointRadius: 10, fillColor: "blue", fillOpacity: 0.5, strokeColor: "blue", label: "${zone}",labelOutlineColor: "black",labelOutlineWidth: 3, fontColor: "white",
				fontSize: "8"}
    				});
		
		var zone3 = new OpenLayers.Rule(
   			 		{
        			filter: new OpenLayers.Filter.Comparison(
            		{
               	 	type: OpenLayers.Filter.Comparison.EQUAL_TO,
               		 property: "zone",
                		value: "zone3",
            		}),
        			symbolizer: {pointRadius: 10, fillColor: "red", fillOpacity: 0.5, strokeColor: "red", label: "${zone}",labelOutlineColor: "black",labelOutlineWidth: 3, fontColor: "white",
				fontSize: "8"}
    				});
		
		var zone4 = new OpenLayers.Rule(
   			 		{
        			filter: new OpenLayers.Filter.Comparison(
            		{
               	 	type: OpenLayers.Filter.Comparison.EQUAL_TO,
               		 property: "zone",
                		value: "zone4",
            		}),
        			symbolizer: {pointRadius: 10, fillColor: "orange", fillOpacity: 0.5, strokeColor: "orange", label: "${zone}",labelOutlineColor: "black",labelOutlineWidth: 3, fontColor: "white",
				fontSize: "8"}
    				});
		var zone5 = new OpenLayers.Rule(
   			 		{
        			filter: new OpenLayers.Filter.Comparison(
            		{
               	 	type: OpenLayers.Filter.Comparison.EQUAL_TO,
               		 property: "zone",
                		value: "zone5",
            		}),
        			symbolizer: {pointRadius: 10, fillColor: "cyan", fillOpacity: 0.5, strokeColor: "cyan", label: "${zone}",labelOutlineColor: "black",labelOutlineWidth: 3, fontColor: "white",
				fontSize: "8"}
    				});
		
		var zone6 = new OpenLayers.Rule(
   			 		{
        			filter: new OpenLayers.Filter.Comparison(
            		{
               	 	type: OpenLayers.Filter.Comparison.EQUAL_TO,
               		 property: "zone",
                		value: "zone6",
            		}),
        			symbolizer: {pointRadius: 10, fillColor: "brown", fillOpacity: 0.5, strokeColor: "brown", label: "${zone}",labelOutlineColor: "black",labelOutlineWidth: 3, fontColor: "white",
				fontSize: "8"}
    				});
		
		var zoneund = new OpenLayers.Rule(
   			 		{
        			filter: new OpenLayers.Filter.Comparison(
            		{
               	 	type: OpenLayers.Filter.Comparison.EQUAL_TO,
               		 property: "zone",
                		value: undefined,
            		}),
        			symbolizer: {pointRadius: 10, fillColor: "white", fillOpacity: 0.5, strokeColor: "red", label: "${paddock_name}"+" Not Zoned ",labelOutlineColor: "black",labelOutlineWidth: 3, fontColor: "white",
				fontSize: "8"}
    				});
		var elseRule = new OpenLayers.Rule({
    	elseFilter: true
		});



		var style = new OpenLayers.Style(
    	OpenLayers.Feature.Vector.style.default,
    	{rules: [zone1, zone2, zone3, zone4, zone5, zone6, zoneund]});

		var styleMap = new OpenLayers.StyleMap({
    	'default': style,
    	'select': {fillColor: "#66ccff",strokeColor: "#3399ff"}
		});
			
			
			//style.addRules([zone1, zone2, zone3, zone4, zone5, zone6]);
			
			
			
			

			
			var farmpaddocks4 = new OpenLayers.Layer.Vector("My Farm Paddocks", {
			strategies: [new OpenLayers.Strategy.Fixed()],
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
			styleMap: styleMap
			});
			
			
			
			
			var farmbounds4 = new OpenLayers.Layer.Vector("My Property Bounds", {
			strategies: [new OpenLayers.Strategy.Fixed()],
			
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
			})
			});
			
			
			//var selectA = new OpenLayers.Control.SelectFeature([farmbounds]);
			

			map4.addLayers([farmpaddocks4, farmbounds4]);

			var selectF = new OpenLayers.Control.SelectFeature([farmpaddocks4],
			{clickout: true, toggle: false,
                    multiple: false, hover: false,
                    toggleKey: "ctrlKey", // ctrl key removes from selection
                    multipleKey: "shiftKey" }// shift key adds to selection}
			);
			map4.addControl(selectF);
			selectF.activate();

			
			//var featuredidlist=[];
			farmpaddocks4.events.on({
    		featureselected: function(e) {
			
        	var feature = e.feature;
			//selectF.addFeatures([e.feature]);
        	//var area = feature.geometry.getArea()/10000;
        	//var id = feature.attributes.key;
			var gid =feature.fid;
			var cleangid = gid.substring(gid.indexOf('.')+1)
			var pname = feature.attributes.paddock_name;
			var zonesname =feature.attributes.zone;
			
					
			fids.push(e.feature.fid);
			var fid = new String(([e.feature.fid]));
			
    			//for (var i=0; i<fids.length; i++){
        			//var fid = fids[i];
       				//var feature = selectF.getFeatureByFid(fid);
        		var fidsel = cleangid;
					//var SPI = feature.attributes.PARCEL_SPI;
				featuredidlist.push(fidsel);	
				//}
				document.getElementById('zonesel').innerHTML =featuredidlist;
				var paddocks = document.getElementById('zonesel').innerHTML;

		
			// popup = new OpenLayers.Popup.FramedCloud("chicken", 
//                                     feature.geometry.getBounds().getCenterLonLat(),
//                                     null,
//                                     "<div class='table-3'style='font-size:.8em'><br>Paddock Name: " + pname +"<br>Current Zone:" +zonesname+"<br><br><select name='select' size='1'><option>select zone.....</option><option value='zone1'>zone1</option><option value='zone2'>zone2</option><option value='zone3'>zone3</option><option value='zone4'>zone4</option><option value='zone5'>zone5</option><option value='zone6'>zone6</option></select><input name='zonebtn' type='submit' id='zonebtn' value='set'><br></div>",null, true);
//			 feature.popup = popup;
//            map4.addPopup(popup);
			
				}
	});
			
			
			farmpaddocks4.events.on({
    		featureunselected: function(e) {
				//featuredidlist=[];
				var feature = e.feature;
			//selectF.addFeatures([e.feature]);
        	//var area = feature.geometry.getArea()/10000;
        	//var id = feature.attributes.key;
			var gid =feature.fid;
                var fid = e.feature.fid;
               var feature = e.feature;
			//selectF.addFeatures([e.feature]);
        	//var area = feature.geometry.getArea()/10000;
        	//var id = feature.attributes.key;
			var gid =feature.fid;
			var cleangid = gid.substring(gid.indexOf('.')+1)
			var pname = feature.attributes.paddock_name;
			var zonesname =feature.attributes.zone;
			//farmpaddocks4.refresh({force:true});
			
					
			fids.push(e.feature.fid);
			var fid = new String(([e.feature.fid]));
			//var featuredidlist = [];
    			//for (var i=0; i<fids.length; i++){
        			//var fid = fids[i];
       				//var feature = selectF.getFeatureByFid(fid);
        		var fidsel = cleangid;
					//var SPI = feature.attributes.PARCEL_SPI;
				featuredidlist.push(fidsel);	
				//}
				document.getElementById('zonesel').innerHTML =featuredidlist;
				var paddocks = document.getElementById('zonesel').innerHTML;

			}
                //select.removeFeatures([e.feature]);
             });
            
			
			
			
			
			var panel3 = new OpenLayers.Control.Panel(
			{'displayClass': 'customEditingToolbar',
			allowDepress: true
			});
			
			
		
			

			

			
			
			farmbounds4.events.register('loadend', farmbounds4, function(evt)
			{
				map4.zoomToExtent(farmbounds4.getDataExtent())
			
			}
			);
			
			
			
}


		 
		 
	 
