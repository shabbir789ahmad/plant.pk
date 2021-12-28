/* Mustache.JS - https://github.com/janl/mustache.js/
 * Copyright (c) 2009 Chris Wanstrath (Ruby)
 * Copyright (c) 2010-2014 Jan Lehnardt (JavaScript)
 * Used under The MIT License.
 */
(function(global,factory){if(typeof exports==="object"&&exports){factory(exports)}else if(typeof define==="function"&&define.amd){define(["exports"],factory)}else{factory(global.Mustache={})}})(this,function(mustache){var Object_toString=Object.prototype.toString;var isArray=Array.isArray||function(object){return Object_toString.call(object)==="[object Array]"};function isFunction(object){return typeof object==="function"}function escapeRegExp(string){return string.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&")}var RegExp_test=RegExp.prototype.test;function testRegExp(re,string){return RegExp_test.call(re,string)}var nonSpaceRe=/\S/;function isWhitespace(string){return!testRegExp(nonSpaceRe,string)}var entityMap={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;","/":"&#x2F;"};function escapeHtml(string){return String(string).replace(/[&<>"'\/]/g,function(s){return entityMap[s]})}var whiteRe=/\s*/;var spaceRe=/\s+/;var equalsRe=/\s*=/;var curlyRe=/\s*\}/;var tagRe=/#|\^|\/|>|\{|&|=|!/;function parseTemplate(template,tags){if(!template)return[];var sections=[];var tokens=[];var spaces=[];var hasTag=false;var nonSpace=false;function stripSpace(){if(hasTag&&!nonSpace){while(spaces.length)delete tokens[spaces.pop()]}else{spaces=[]}hasTag=false;nonSpace=false}var openingTagRe,closingTagRe,closingCurlyRe;function compileTags(tags){if(typeof tags==="string")tags=tags.split(spaceRe,2);if(!isArray(tags)||tags.length!==2)throw new Error("Invalid tags: "+tags);openingTagRe=new RegExp(escapeRegExp(tags[0])+"\\s*");closingTagRe=new RegExp("\\s*"+escapeRegExp(tags[1]));closingCurlyRe=new RegExp("\\s*"+escapeRegExp("}"+tags[1]))}compileTags(tags||mustache.tags);var scanner=new Scanner(template);var start,type,value,chr,token,openSection;while(!scanner.eos()){start=scanner.pos;value=scanner.scanUntil(openingTagRe);if(value){for(var i=0,valueLength=value.length;i<valueLength;++i){chr=value.charAt(i);if(isWhitespace(chr)){spaces.push(tokens.length)}else{nonSpace=true}tokens.push(["text",chr,start,start+1]);start+=1;if(chr==="\n")stripSpace()}}if(!scanner.scan(openingTagRe))break;hasTag=true;type=scanner.scan(tagRe)||"name";scanner.scan(whiteRe);if(type==="="){value=scanner.scanUntil(equalsRe);scanner.scan(equalsRe);scanner.scanUntil(closingTagRe)}else if(type==="{"){value=scanner.scanUntil(closingCurlyRe);scanner.scan(curlyRe);scanner.scanUntil(closingTagRe);type="&"}else{value=scanner.scanUntil(closingTagRe)}if(!scanner.scan(closingTagRe))throw new Error("Unclosed tag at "+scanner.pos);token=[type,value,start,scanner.pos];tokens.push(token);if(type==="#"||type==="^"){sections.push(token)}else if(type==="/"){openSection=sections.pop();if(!openSection)throw new Error('Unopened section "'+value+'" at '+start);if(openSection[1]!==value)throw new Error('Unclosed section "'+openSection[1]+'" at '+start)}else if(type==="name"||type==="{"||type==="&"){nonSpace=true}else if(type==="="){compileTags(value)}}openSection=sections.pop();if(openSection)throw new Error('Unclosed section "'+openSection[1]+'" at '+scanner.pos);return nestTokens(squashTokens(tokens))}function squashTokens(tokens){var squashedTokens=[];var token,lastToken;for(var i=0,numTokens=tokens.length;i<numTokens;++i){token=tokens[i];if(token){if(token[0]==="text"&&lastToken&&lastToken[0]==="text"){lastToken[1]+=token[1];lastToken[3]=token[3]}else{squashedTokens.push(token);lastToken=token}}}return squashedTokens}function nestTokens(tokens){var nestedTokens=[];var collector=nestedTokens;var sections=[];var token,section;for(var i=0,numTokens=tokens.length;i<numTokens;++i){token=tokens[i];switch(token[0]){case"#":case"^":collector.push(token);sections.push(token);collector=token[4]=[];break;case"/":section=sections.pop();section[5]=token[2];collector=sections.length>0?sections[sections.length-1][4]:nestedTokens;break;default:collector.push(token)}}return nestedTokens}function Scanner(string){this.string=string;this.tail=string;this.pos=0}Scanner.prototype.eos=function(){return this.tail===""};Scanner.prototype.scan=function(re){var match=this.tail.match(re);if(!match||match.index!==0)return"";var string=match[0];this.tail=this.tail.substring(string.length);this.pos+=string.length;return string};Scanner.prototype.scanUntil=function(re){var index=this.tail.search(re),match;switch(index){case-1:match=this.tail;this.tail="";break;case 0:match="";break;default:match=this.tail.substring(0,index);this.tail=this.tail.substring(index)}this.pos+=match.length;return match};function Context(view,parentContext){this.view=view;this.cache={".":this.view};this.parent=parentContext}Context.prototype.push=function(view){return new Context(view,this)};Context.prototype.lookup=function(name){var cache=this.cache;var value;if(name in cache){value=cache[name]}else{var context=this,names,index,lookupHit=false;while(context){if(name.indexOf(".")>0){value=context.view;names=name.split(".");index=0;while(value!=null&&index<names.length){if(index===names.length-1&&value!=null)lookupHit=typeof value==="object"&&value.hasOwnProperty(names[index]);value=value[names[index++]]}}else if(context.view!=null&&typeof context.view==="object"){value=context.view[name];lookupHit=context.view.hasOwnProperty(name)}if(lookupHit)break;context=context.parent}cache[name]=value}if(isFunction(value))value=value.call(this.view);return value};function Writer(){this.cache={}}Writer.prototype.clearCache=function(){this.cache={}};Writer.prototype.parse=function(template,tags){var cache=this.cache;var tokens=cache[template];if(tokens==null)tokens=cache[template]=parseTemplate(template,tags);return tokens};Writer.prototype.render=function(template,view,partials){var tokens=this.parse(template);var context=view instanceof Context?view:new Context(view);return this.renderTokens(tokens,context,partials,template)};Writer.prototype.renderTokens=function(tokens,context,partials,originalTemplate){var buffer="";var token,symbol,value;for(var i=0,numTokens=tokens.length;i<numTokens;++i){value=undefined;token=tokens[i];symbol=token[0];if(symbol==="#")value=this._renderSection(token,context,partials,originalTemplate);else if(symbol==="^")value=this._renderInverted(token,context,partials,originalTemplate);else if(symbol===">")value=this._renderPartial(token,context,partials,originalTemplate);else if(symbol==="&")value=this._unescapedValue(token,context);else if(symbol==="name")value=this._escapedValue(token,context);else if(symbol==="text")value=this._rawValue(token);if(value!==undefined)buffer+=value}return buffer};Writer.prototype._renderSection=function(token,context,partials,originalTemplate){var self=this;var buffer="";var value=context.lookup(token[1]);function subRender(template){return self.render(template,context,partials)}if(!value)return;if(isArray(value)){for(var j=0,valueLength=value.length;j<valueLength;++j){buffer+=this.renderTokens(token[4],context.push(value[j]),partials,originalTemplate)}}else if(typeof value==="object"||typeof value==="string"||typeof value==="number"){buffer+=this.renderTokens(token[4],context.push(value),partials,originalTemplate)}else if(isFunction(value)){if(typeof originalTemplate!=="string")throw new Error("Cannot use higher-order sections without the original template");value=value.call(context.view,originalTemplate.slice(token[3],token[5]),subRender);if(value!=null)buffer+=value}else{buffer+=this.renderTokens(token[4],context,partials,originalTemplate)}return buffer};Writer.prototype._renderInverted=function(token,context,partials,originalTemplate){var value=context.lookup(token[1]);if(!value||isArray(value)&&value.length===0)return this.renderTokens(token[4],context,partials,originalTemplate)};Writer.prototype._renderPartial=function(token,context,partials){if(!partials)return;var value=isFunction(partials)?partials(token[1]):partials[token[1]];if(value!=null)return this.renderTokens(this.parse(value),context,partials,value)};Writer.prototype._unescapedValue=function(token,context){var value=context.lookup(token[1]);if(value!=null)return value};Writer.prototype._escapedValue=function(token,context){var value=context.lookup(token[1]);if(value!=null)return mustache.escape(value)};Writer.prototype._rawValue=function(token){return token[1]};mustache.name="mustache.js";mustache.version="2.0.0";mustache.tags=["{{","}}"];var defaultWriter=new Writer;mustache.clearCache=function(){return defaultWriter.clearCache()};mustache.parse=function(template,tags){return defaultWriter.parse(template,tags)};mustache.render=function(template,view,partials){return defaultWriter.render(template,view,partials)};mustache.to_html=function(template,view,partials,send){var result=mustache.render(template,view,partials);if(isFunction(send)){send(result)}else{return result}};mustache.escape=escapeHtml;mustache.Scanner=Scanner;mustache.Context=Context;mustache.Writer=Writer});

function lp_StoreLocator($locator, $initial_locations)
{
	var root = this;
	this.locator = $locator;
	this.map = $locator.find('.map-canvas');
	this.initial_locations = $initial_locations;
	
	var $_gp_map;
	var $_gp_markers = [];
	var $_gp_info_windows = [];

	this.gp_initMap = function()
	{
		var originLatLng = new google.maps.LatLng($_gp_map_center.lat, $_gp_map_center.lng);
		var zoom = $_gp_map_locations.length > 0 ? 10 : 6;
		var mapOptions = {
			zoom: zoom,
			center: originLatLng
		};
		
		// todo: make this take a map ID as a param so it can support more than one map
		$_gp_map = new google.maps.Map(document.getElementById(this.map.attr('id')), mapOptions);

		$_gp_markers.push(
			new google.maps.Marker({
				position: originLatLng,
				map: $_gp_map,
				title: 'You Are Here',
				icon: this.gp_blue_star_icon()
			})
		);
		
		if ( this.locator.hasClass('compact') ) {
			root.gp_initCompactStoreLocator( this.locator );			
		}		
	};

	this.gp_addLocationMarkers = function($_gp_map_locations)
	{
		// abort if no locations to add
		if ( typeof($_gp_map_locations) == 'undefined' || $_gp_map_locations.length == 0 ) {
			return;
		}
		
		
		var i, me, myPoint, contentString;
		var markerBounds = new google.maps.LatLngBounds();
		var originLatLng = new google.maps.LatLng($_gp_map_center.lat, $_gp_map_center.lng);
		markerBounds.extend(originLatLng);
		var my_new_info_windows = [];
		var my_new_markers = [];
		var labelIndex = 1;
		
		for (i in $_gp_map_locations)
		{
			me = $_gp_map_locations[i];
			myPoint = new google.maps.LatLng(me.lat, me.lng);

			// render the location data into the info window (Mustache) template
			if (typeof($_gp_map_info_window_template) !== 'undefined' && typeof('Mustache') !== 'undefined') {
				var contentString = Mustache.render($_gp_map_info_window_template, me);
			} else {
				// fallback to old, hardcoded template
				contentString = 
				'<div id="content" class="store_locator_info_window">'+
					'<div id="siteNotice"></div>' +
					'<h1 id="firstHeading" class="firstHeading">' + me.title + '</h1>'+
					'<div id="bodyContent">' +
						'<p class="addr">' + me.address + '</p>';
				
				if (typeof(me.phone) !== 'undefined') {
					contentString += '<p class="phone" style="margin-bottom: 4px"><strong>Phone:</strong> ' + me.phone + '</p>';
				}
				if (typeof(me.fax) !== 'undefined') {
					contentString += '<p class="fax" style="margin-bottom: 4px"><strong>Fax:</strong> ' + me.fax + '</p>';
				}
				if (typeof(me.email) !== 'undefined') {
					contentString += '<p class="email" style="margin-bottom: 4px"><strong>Email:</strong> <a href="mailto:' + me.email + '">' + me.email + '</p>';
				}
				
				contentString +=
					'</div>' +
				'</div>';
			}
			
			// create a new Google Maps Marker object
			my_new_markers[i] = new google.maps.Marker({
				position: myPoint,
				map: $_gp_map,
				title: me.title,
				html: contentString,
				loc_id: me.ID,
				label: labelIndex++ + ''
			});
					
			// create an info window to match
			my_new_info_windows[i] = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 450
			});
			
			// setup click listener on the marker, so that when its clicked we can
			// show the info window and highlight  the corresponding list item
			google.maps.event.addListener(my_new_markers[i], 'click', function() {
			
				// open the info window for this marker
				my_new_info_windows[i].setContent(this.html);
				my_new_info_windows[i].open($_gp_map,this);
				
				// set current_item class on the list item which matches this marker
				location_selector = 'li[id=location_item_' + this.loc_id + ']';
				location_li = root.locator.find(location_selector);				
				location_li.parents('.left_col:first')
								   .find('.current_item')
								   .removeClass('current_item');							   
				location_li.addClass('current_item');
				
				/* Scroll the list item matching this marker into view
				 * we try to only do this once, to avoid jerkiness
				 * scrolling can be disabled by setting this.noScroll to false 
				 * before calling this function
				*/
				var needsScroll = !( location_li.hasClass('current_item') );
				if ( needsScroll ) {
					if ( !this.noScroll ) {				
						jQuery('.left_col', root.locator)[0].scrollTop = 0;
						jQuery('.left_col', root.locator)[0].scrollTop = location_li.position().top - 10;
					} else {
						this.noScroll = false; // reset it for next time
					}
				}
			});

			// save a reference to these markers and info windows so they can be cleared later
			$_gp_markers[me.ID] = my_new_markers[i];
			$_gp_info_windows[me.ID] = my_new_info_windows[i];
			
			// make sure the map contains all the markers
			markerBounds.extend(myPoint);
		}
		
		// recenter and zoom the map to show all markers
		if ($_gp_map_locations.length > 0) {
			$_gp_map.fitBounds(markerBounds);
			$_gp_map.setCenter(markerBounds.getCenter()); 
		}
		
	}

	this.gp_clear_all_markers = function() {
	  for (var i in $_gp_markers) {
		$_gp_markers[i].setMap(null);
	  }
	  $_gp_markers.length = 0;
	  $_gp_info_windows.length = 0;
	};

	this.gp_set_map_center = function ( lat, lng ) {
		originLatLng = new google.maps.LatLng(lat, lng);
		$_gp_map_center.lat = lat;
		$_gp_map_center.lng = lng;
		$_gp_map.setCenter( originLatLng );	
	};

	// blue star with white outline icon path for Google Maps
	this.gp_blue_star_icon = function () {	
		return {
				  path: 'M 125,5 155,90 245,90 175,145 200,230 125,180 50,230 75,145 5,90 95,90 z',
				  fillColor: 'dodgerblue',
				  fillOpacity: 0.8,
				  scale: .15,
				  strokeColor: 'white',
				  strokeWeight: 2
		};
	};

	this.gp_initCompactStoreLocator = function ( locator )
	{
		
		var get_search_params = function () {
			var params = {};
			params.action = 'locations_pro_ajax_search';
			params.query = locator.find('.store_locator_query input').val().trim();
			
			var radius_select = locator.find('.store_locator_radius select');
			if ( radius_select.length > 0 ) {
				params.radius = radius_select.val();	
			}

			var category_select = locator.find('.store_locator_category select');
			if ( category_select.length > 0 ) {
				params.category = category_select.val();	
			}
			
			// TODO: handle paging
			return params;
		}
		
		/* 
		 * Makes sure the left column is visible
		 * Note: Triggers Google Maps resize event
		 */
		var show_left_column = function () {
			locator.addClass('show_results');
			google.maps.event.trigger($_gp_map, 'resize');
			
			// force list of locations to scroll back to the top
			var left_col = locator.find('.left_col');
			left_col[0].scrollTop = 0;
		}
		
		var handle_search_result_clicks = function () {
			var my_id = jQuery(this).attr('id').replace('location_item_', '');
			var marker = $_gp_markers[my_id];
			marker.noScroll = true;
			google.maps.event.trigger(marker, 'click');
		};

		var ajax_success = function (response) {
			
			show_left_column();
			
			// change the list HTML on the left
			var left_col = locator.find('.left_col')
			if ( response.result_count && response.list_html ) {
				var new_html = response.message_html + response.list_html;
				left_col.html(new_html);			
				
			} else {
				left_col.html(response.message_html);
			}
			
			// remove markers from previous searches
			root.gp_clear_all_markers();

			// add Circle icon to indicate the search origin
			if ( response.origin.lat && response.origin.lng  ) {
				root.gp_set_map_center(response.origin.lat, response.origin.lng);			
				var your_location = 'Your Location: ' + get_search_params().query;

				$_gp_markers.push(
					new google.maps.Marker({
						position: originLatLng,
						map: $_gp_map,
						title: your_location,
						icon: root.gp_blue_star_icon()
					})
				);
			}
			
			// add markers for the search results
			root.gp_addLocationMarkers(response.markers);
		};
		
		var focus_search_box = function () {
			locator.find('.store_locator_query input').trigger('focus');
		};
		
		var ajax_submit = function () {
			
			// gather search params
			var params = get_search_params();
			
			if (params.query.length == 0) {
				focus_search_box();
				return false;
			}
			
			jQuery.post(
				locations_pro_store_locator_settings.ajax_url,
				params,
				ajax_success,
				'json'
			);
			return false;
		};
		
		var add_extra_classes = function () {
			var width = locator.width();
			if (width < 500) {
				locator.removeClass('medium')
					   .removeClass('large')
					   .addClass('small');
			}
			else if (width < 1000) {
				locator.removeClass('small')
					   .removeClass('large')
					   .addClass('medium');

			}
			else {
				locator.removeClass('small')
					   .removeClass('medium')
					   .addClass('large');
			}
			
			var wrapper = locator.find('.store_locator_wrapper');
			var old_height = wrapper.height();
			//wrapper.height(old_height + 240);			
		};
		
		var wait_for_final_event = (function () {
		  var timers = {};
		  return function (callback, ms, uniqueId) {
			if (!uniqueId) {
			  uniqueId = "Don't call this twice without a uniqueId";
			}
			if (timers[uniqueId]) {
			  clearTimeout (timers[uniqueId]);
			}
			timers[uniqueId] = setTimeout(callback, ms);
		  };
		})();
		
		jQuery(window).resize(function () {
			wait_for_final_event(function(){
			  add_extra_classes();
			}, 50, "store_locator_resize_hook");
		});
			
		var frm = locator.find('form');
		frm.on('submit', ajax_submit);
		locator.on('click', '.locations_search_results li', handle_search_result_clicks);
		add_extra_classes();	
	};


	this.gp_initCompactStoreLocators = function() {
		
		// init compact store locators
		var locators = jQuery('.store_locator.compact');
		if ( locators.length > 0 ) {
			locators.each( function () {
				root.gp_initCompactStoreLocator( jQuery(this) );
			});
		}
	};

} // end lp_StoreLocator class


jQuery(function ()
{
	// look for a map data that needs to be drawn
	if(typeof($_gp_map_locations) != 'undefined') {		
	
		var locators = jQuery('.store_locator');
		locators.each(function() {	
			var locator = jQuery(this);
			var SL = new lp_StoreLocator(locator, $_gp_map_locations);
			
			// initialize the map and add initial locations
			SL.gp_initMap();
			SL.gp_addLocationMarkers($_gp_map_locations);
		});
	}	
});