var cc=7;
var i, j;
for(i=1; i<=cc; i++){
	for(j=1; j<=i; j++){
		document.write('*');
	}
		document.write('<br>');
}
document.write('<br>');

var cc=7;
var cd=7;
var i, j;
for(i=1; i<=cc; i++){
	for(j=1; j<=cd; j++){
		document.write('*');
	}
		document.write('<br>');
}
document.write('<br>');

var cc=7;
var cd=7;
var i, j;
for(i=1; i<=cc; i++){
	for(j=1; j<=cd; j++){
		if (i == 1 || j == 1 || i == cc || j == cd)
			document.write('*');
		 else 
			document.write('&nbsp&nbsp');
	}
	document.write('<br>');
}

document.write('<br>');
var cc=7;
var i, j;
for(i=1; i<=cc; i++){
	for(j=7; j>=i; j--){
		document.write('*');
	}
		document.write('<br>');
}