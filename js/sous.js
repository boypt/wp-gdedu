function glb_searchTextOnfocus(obj) {
	if (obj.value == '搜索')
		obj.value = '';
	obj.style.color = '#cdcdcd';
}
function glb_searchTextOnBlur(obj) {
	if (obj.value == '') {
		obj.value = '搜索';
		obj.style.color = '#cdcdcd';
	} else {
		obj.style.color = '#cdcdcd';
	}
}// JavaScript Document