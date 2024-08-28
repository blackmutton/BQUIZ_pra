// JavaScript Document
function lo(th,url)
{
	$.ajax(url,{cache:false,success: function(x){$(th).html(x)}})
}
function clean(){
	$("input[type='text'],input[type='password']").val("")
	$("input[type='checkbox']").prop("checked",false)
}