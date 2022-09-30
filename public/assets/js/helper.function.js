function function_exists(function_name) {
	var exist = true;
	try { exist = is_function(eval(function_name)); } catch(e) { exist = false; }
	return exist;
}
function theme() {
	return window.matchMedia ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? "dark" : (window.matchMedia('(prefers-color-scheme: light)').matches ? "light" : false)) : false;
}
function themeAlready() {
	$res = false;
	if(el = $('html[data-theme]')[0]) $res = ($(el).attr('data-theme') == "auto") ? theme() : ($(el).attr('data-theme') == "" ? false : $(el).attr('data-theme'));
	return $res;
}
function url_replace($route) {
	window.history.replaceState({}, null, $route);
}
function url_push($route) {
	window.history.pushState({}, null, $route);
}
var history = {
	back(){
		return window.history.back();
	},
	forward(){
		return window.history.forward();
	}
}
function theme_change(theme) {
	var hm = document.querySelector('html[data-theme]');
	if(theme){
		hm.setAttribute('data-theme', theme);
		return theme;
	}
	else{
		if(themeAlready() == 'dark') { 
			hm.setAttribute('data-theme', 'light');
			return 'light';
		}
		else { 
			hm.setAttribute('data-theme', 'dark');
			return 'dark';
		}
	}
	return false;
}
function echas(argument) { return argument.replace(/'/g, '"'); }
function emailVerif(arg){ return (/^([a-z0-9_-]+)@([a-z0-9_-]+)\.([a-z]+)$/.test(arg)) ? true : false; }
function nextChar(c, g) { return String.fromCharCode(c.charCodeAt(0) + g); }
function truncate(str, limit, endStr, responsiveLimit) {
	var res = '', end = (endStr) && endStr != null ? endStr : '...';
	if(!limit || str.length <= limit) return str;
	res = str.slice(0, limit, str) + end;
	return res;
}
function trim(str) {
	var result = str;
	if(is_string(str)) result = str.trim();
	return result;
}
function link(location){ window.location.href = location; }
function random(max, min){ return Math.floor(Math.random() * ((max + 1) - min) + min) }
function rgbaRandom(opacity){ return 'rgba(' + random(255, 0) + ',' + random(255, 0) + ',' + random(255, 0) + ',' + (opacity === null ? 1 : opacity) + ')'; }
function screenH(obj) { return typeof obj == "object" ? window.screen.height - obj.offsetHeight : window.screen.height; }
function screenW(obj) { return typeof obj == "object" ? window.screen.width - obj.offsetWidth : window.screen.width; }
function is_string(arg){
	return (typeof arg) == 'string' ? true : false;
}
function is_number(arg){
	return (typeof arg) == 'number' ? true : false;
}
function is_boolean(arg){
	return (typeof arg) == 'boolean' ? true : false;
}
function is_function(arg){
	return (typeof arg) == 'function' ? true : false;
}
function is_object(arg){
	return arg instanceof Object && !is_array(arg);
}
function is_array(arg){
	return Array.isArray(arg);
}
function is_undefined(arg){
	return arg === undefined;
}
function is_null(arg){
	return arg === null;
}
function empty(arg){
	return is_null(arg) || (is_array(arg) && arg.length == 0) || (is_object(arg) && object_count(arg) == 0) || (is_string(arg) && trim(arg).length == 0) ? true : false;
}
function object_count(object){
	return is_object(object) ? Object.keys(object).length : null;
}
function class_name(object) {
	return is_object(object) ? object.constructor.name : false;
}
function class_name_(object) {
	return is_object(object) ? (object.name ? object.name : object.constructor.name ) : false;
}
function route_get(path, datas) {
	var res = null;
	if(typeof datas == 'object'){
		var g = path;
		for(var key in datas){
			g += (App.getConfig('request').get_string == null ? '?' : '&') + key + '=' + datas[key];
		}
		res = g;
	}
	return res;
}
function class_exists(class_) {
	var exist = true;
	try { var e = eval(class_); exist = is_object(e) && is_function(e); } catch(e) { exist = false; }
	return exist;
}
function method_exists(class_, method_name){
	var exist = true;
	if(is_string(class_))
		try { var e = eval(class_ + '.' + method_name); exist = is_function(e); } catch(e) { exist = false; }
	else if(is_object(class_) || is_function(class_))
		try { exist = eval('class_.' + method_name) !== undefined; } catch(e) { exist = false; }
	else exist = false;
	return exist;
}
function is_callable(expression) {
	var callable = true;
	try { var e = eval(expression);callable = e !== undefined && (is_object(e) || is_function(e)); } catch(e) { callable = false; }
	return callable;
}
function instance_of(val, type) {
	var res = true;
	try{ res = eval('val instanceof ' + (is_function(type) ? 'type' : (
					is_object(type) && (class_name(type) !== 'Function' || type == 'Function' || type == Function) 
					? class_name(type) 
					: type
				)
			)
		);
	}
	catch(e){ res = false; }
	return res;
}
function load_js_file(url, on_head) {
	url = is_string(url) ? [url] : (is_array(url) ? url : []);
	var res = false, nber_added = 0;
	if(!empty(url)){
		var tag = [], el, v;
		for(var key in url){
			if(is_string(url[key])){
				v = url[key]
				el = document.createElement('script');
				el.src = v;
				tag.push(el);
				nber_added++;
			}
		}
		if(!empty(tag) && on_head === true){
			for(var key in tag) document.head.appendChild(tag[key]);
			res = true;
		}
		else if(!empty(tag) && (on_head === false || is_undefined(on_head) || is_null(on_head))){ // on body
			for(var key in tag) document.body.appendChild(tag[key]);
			res = true;
		}
		else if(!empty(tag) && is_string(on_head)){ // on own element
			if(ell = document.querySelector(on_head)){
				for(var key in tag) ell.appendChild(tag);
				res = true;
			}
		}
	}
}
function getHtml(str) {
	var res = document.createElement('div');
	res.innerHTML = str;
	// var res = new DOMParser().parseFromString(str, "text/xml");

	// var tg = getHtml('<header class="home"><span class="txt">Mon ti text</span></header>');
	// console.log($(tg).children('.txt')[0])
	return res.firstChild;
}
function fact_url(aa){
	var sep = aa.split('?'), domain = sep.shift(), get_string = sep.join('?'), get_sep = get_string.split('&');
	var gg = {};
	for(var k in get_sep){
		// var val = get_sep[k], sepp = val.split('='), itm = {key : sepp[0], val : (sepp[1] ? sepp[1] : null)};
		// if(gg[itm.key]){
		// 	if(is_array(gg[itm.key])) gg[itm.key].push(itm.val)
		// 	else gg[itm.key] = [gg[itm.key], itm.val]
		// }
		// else gg[itm.key] = itm.val
		get_sep[k] = get_sep[k].split('=');
	}
	return {domain : domain, get : (empty(sep) ? null : get_sep)};
}
function get_exsit(url) {
	var sep = url.split('?'), dm = sep.shift();
	return !empty(sep);
}
function str_replace(search_element, replace_with_this, str){
	var res = false;
	search_element = is_string(search_element) || (is_object(search_element) && search_element.constructor.name == 'RegExp') ? [search_element] : (is_array(search_element) && !empty(search_element) ? search_element : null);
	replace_with_this = is_string(replace_with_this) ? [replace_with_this] : (is_array(replace_with_this) && !empty(replace_with_this) ? replace_with_this : null);
	if(is_array(search_element) && is_string(str) && !empty(str) && is_array(replace_with_this)){
		res = str;
		for(var key in search_element){
			var value = search_element[key];
			if((is_string(value) || is_number(value) || (is_object(value) && value.constructor.name == 'RegExp')) && ((replace_with_this[key] && is_string(replace_with_this[key])) || (replace_with_this[0] && is_string(replace_with_this[0])))){
				value = is_number(value) ? new String(value) : value;
				res = res.replace(eval('(function(){ return ' + (is_object(value) ? value : '/' + value + '/g' ) + '; })()'), (replace_with_this[key] ? replace_with_this[key] : replace_with_this[0]))
			}
			else { res = false; break; }
		}
	}
	return res;
	// console.log(str_replace([/yy/, 'ao'], ['oo', 'll', 'hh'], 'l--yy--ao'))
}
function apos(str, tagU, change) {
	return change === false || is_undefined(change) || is_null(change)
		? str_replace("'", (tagU === false || is_undefined(tagU) || is_null(tagU) ? '&apos;' : (tagU === true || empty(trim(tagU)) ? '%27' : trim(tagU))), str)
		: str_replace((tagU === false || is_undefined(tagU) || is_null(tagU) ? '&apos;' : (tagU === true || empty(trim(tagU)) ? '%27' : trim(tagU))), "'", str);
		// console.log(apos('loreMMMMMMMm', 'MMM', true))
}