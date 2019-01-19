var wuUtil = {
	getParams: function(name, url) {
    var u = arguments[1] || window.location.search.replace("&amp;", "&"),
        reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"),
        result = u.substr(u.indexOf("\?") + 1).match(reg);
    return result != null ? result[2] : "";
	}
}