

var ordertime_price= new Array();
	//ordertime_price["None"]=0;
	ordertime_price["2hours"]=14;
	ordertime_price["3hours"]= 13;
	ordertime_price["4hours"]= 12;
	ordertime_price["5hours"]=11.5;
	ordertime_price["5_7"]=11;
	ordertime_price["7_9"]=10.5;
	ordertime_price["10hours"]=10;
	ordertime_price["11_15"]=9;
	ordertime_price["1day"]=8;
	ordertime_price["2days"]=7;
	ordertime_price["3days"]=7;
	ordertime_price["4days"]=7;
	ordertime_price["5days"]=7;
	ordertime_price["6days"]=7;
	ordertime_price["1wk"]=7;
	ordertime_price["2wks"]=7;
	ordertime_price["others"]=7;


	function getPrice(){
		var timePrice =0;
		var theFrom =document.forms["form"];
		var selectedTime =theFrom.elements["ordertime"];
		timePrice =ordertime_price[selectedTime.value];
		return timePrice;
	}
	function getPages() {
		var numberPage =document.getElementById('npage').value;
	
		if(numberPage => 0){
			return numberPage;

			

		}else{
			throw("enter a valid number of pages" );
		}
	

	}

	//calculate total price .
	function calculateTotal() {
		var Amount =getPrice() *getPages();
		//display cost.
		var obj =document.getElementById('totalPrice');
		obj.style.display='block';
		obj.innerHTML =" Cost of the paper: \t $"+ Amount;
	}
	function hideTotal()
{
    var obj = document.getElementById('totalPrice');
    obj.style.display='block';
}


