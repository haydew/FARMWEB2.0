function expandMap()
{
$(function(){
    $("map2").hover(
        function(){
           $(this).animate({width: '400px'});
        },
        function(){
            $(this).animate({width: '80%'});
        }
    );                             
});
}
function showmap(valueA) {
			var farmdidJS= valueA;
			
           	var map2 = new OpenLayers.Vicmap.Map('map2');
			
			// prepare to style the data
    		styleMap2 = new OpenLayers.StyleMap({
        	strokeColor: "#FF0000",
        	strokeWidth: 4,
        	fillOpacity: 0.0
			
    		});
			
			
			//Add groundwater bores layer
			
			
       
			
			
			var wfs_layer2 = new OpenLayers.Layer.Vector("My Property Bounds", {
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
			}),
			styleMap: styleMap2
			});
			
			
			
			
			
			

			var sirsoils2 = new OpenLayers.Layer.WMS("SIRSOILS",
            "http://sistat01:8080/geoserver/FARMWEB/wms", 
            {'layers': 'FARMWEB:SIR_SOILS', transparent: true, singletile: 'image/jpeg'},
            {isBaseLayer: false, visibility: true}
       		);
			
			var mg_wms_bores = new OpenLayers.Layer.WMS("Bores",
            "http://maps.ubspatial.com.au/groundwater/wms?service=WMS", 
            {'layers': 'groundwater_bores,other_bores', transparent: true, singletile: 'image/jpeg'},
            {isBaseLayer: false, visibility: false, opacity: 0.6}
       		);
			
			var mg_wms_salinity = new OpenLayers.Layer.WMS("Salinity",
            "http://maps.ubspatial.com.au/salinity/wms?service=WMS", 
            {'layers': 'salinity_polygons', transparent: true, singletile: 'image/jpeg'},
            {isBaseLayer: false, visibility: false, opacity: 0.6}
       		);
			
		
			

			map2.addLayers([sirsoils2, mg_wms_bores, mg_wms_salinity,wfs_layer2]);
			
			wfs_layer2.events.register('loadend', wfs_layer2, function(evt)
			{
				map2.zoomToExtent(wfs_layer2.getDataExtent())
			
			}
			);
			
			info = new OpenLayers.Control.WMSGetFeatureInfo({ 
        url: 'http://maps.ubspatial.com.au/salinity/wms?service=WMS', 
        title: 'Identify features by clicking', 
        queryVisible: true, 
        eventListeners: { 
                getfeatureinfo: function(event) { 
                map2.addPopup(new OpenLayers.Popup.FramedCloud( 
                                "chicken", 
                                map2.getLonLatFromPixel(event.xy), 
                                null, 
                                event.text, 
                                null, 
                                true 
                        )); 
                } 
        } 
}); 
			map2.addControl(info);
info.activate();
			
			
$("#slider").slider({
    value: 100,
    slide: function(e, ui) {
        sirsoils2.setOpacity(ui.value / 100);
    }
});
}
