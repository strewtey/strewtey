if($('*[data-hidden]')[0]){
	$('*[data-hidden]').each(function(index, el) {
		if($(el).attr('data-hidden') === "css" || $(el).attr('data-hidden') === "1") $(el).css('display', 'none');
		else $(el).addClass($(el).attr('data-hidden'))
	});
}
if($('*[data-attr-add]')[0]){
	$('*[data-attr-add]').each(function() {
		var sep = ';';
		if($(this).attr('data-sep') && $(this).attr('data-sep') != '')
			sep = $(this).attr('data-sep');
		var ex = $(this).attr('data-attr-add').split(sep);
		for (var i = 0; i < ex.length; i++) {
			$(this).attr(ex[i], '');
		}

	})
}
if($("*[data-decomposite]")[0]){
    $("*[data-decomposite]").each(function(index, el) {
        var tab = $(el).text().split('').reverse(), res = '';
        var t = 0.7;
        for (var i = tab.length - 1; i >= 0; i--){
            var r = $(el).attr('data-decomposite').replace('!!-!!', tab[i]);
            res += r.replace('!!!!', 'animation: opacity-0 ' + t + 's, opacity-0-10 1s ' + t + 's, -translate-x-40 1s ' + t + 's ease-in reverse;');
            t = t + 0.6;
        }
        $(el).html(res);
    });
}
if($('*[data-truncate]')[0]){
	$('*[data-truncate]').each(function(index, el) {
		var str = $(el).text(), limit = parseInt($(el).attr('data-truncate')), end = $(el).attr('data-truncate-end') ? $(el).attr('data-truncate-end') : null, trun = truncate(str, limit, end);
		if(arround = $(el).attr('data-truncate-arround')) trun = arround.replace("$-!-$", trun);
		$(el).html(trun);
	});
}