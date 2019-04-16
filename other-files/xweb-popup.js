
var newWin = null;

function closeWin(){
	if (newWin != null){
		if(!newWin.closed)
			newWin.close();
	}
}

function xPopUp(url, options, width, height, dim, top, left){
	
	closeWin();
	
	if (dim == "percent") 
	{	
		width = (width * screen.availWidth)/100;
		height = (height * screen.availHeight)/100;
	}
	
	if (top == "center")
	{
		top = (screen.availHeight-height)/2;
	}
	
	if (left == "center")
	{
		left =(screen.availWidth - width)/2;
	}
	
	
	
	
	options+= ",width="+width+",height="+height+", left="+left+", top="+top 
	
	newWin = window.open(url, 'newWin', options);
	if (newWin){
	newWin.focus();
	}
}

