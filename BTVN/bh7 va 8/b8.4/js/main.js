var N = prompt('Input N =');
var M = prompt('Input M =');
var K = prompt('Input K =');
var i;
var S=0;
for(i=N; i<=M; i++){
	if(i%K==0)
		S+=+i;
}
	alert(S);