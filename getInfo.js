$(document).ready(function(){
	$('#loginSubmit').click(function(event){
		event.preventDefault();
		var x = $('#email').val();
		var y = $('#pwd').val();

		readTextFile('database.txt', x, y);
	});
});

function readTextFile(file, x, y) {
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function (){
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
            	var format = x + ':' + y;
                var allText = rawFile.responseText;
                if(allText.match(format)) {
                	console.log('success');
                	$('#login').submit();
                } else {
                	console.log('error');
                }
            }
        }
    }
    rawFile.send(null);
}