function ossn_location($obj){$(document).ready(function(){if(Ossn.LocationAPIKey&&Ossn.LocationAPIKey!=''){if($($obj.container).length&&$($obj.input).length){if(!Ossn.isset($obj.placeholder)){$obj.placeholder=Ossn.Print('enter:location');}
if(!Ossn.isset($obj.hide_input)){$obj.hide_input=true;}
if($obj.hide_input===true){$($obj.input).hide();}
mapboxgl.accessToken=Ossn.LocationAPIKey;const geocoder=new MapboxGeocoder({accessToken:mapboxgl.accessToken,language:Ossn.Config.lang,types:'country,region,place,postcode,locality,neighborhood',placeholder:$obj.placeholder,});geocoder.addTo($obj.container);const results=$($obj.input);geocoder.on('result',(e)=>{results.val(e.result.place_name);});geocoder.on('clear',()=>{results.val("");});}}});}