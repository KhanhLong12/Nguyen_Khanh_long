var n = prompt('Input n =');
var giaithua=1;
var i;
var S=0;
for(i=1; i<=n; i++){
	giaithua*=i;
	S+=i/giaithua;
}
alert(S);