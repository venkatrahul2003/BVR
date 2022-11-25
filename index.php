<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phonenumber = $_POST['phonenumber'];

	$q=array();

	$c=array();
	
	$i=array();

	$sub=array();
	$total=0;

	if($_POST['masaladosa']!=NULL){
		array_push($q,$_POST['masaladosa']);
		array_push($i,"MasalaDosa");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['masaladosa']));
	}
	if($_POST['poori']!=NULL){
		array_push($q,$_POST['poori']);
		array_push($i,"Poori");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['poori']));
	}
	if($_POST['bisibelebath']!=NULL){
		array_push($q,$_POST['bisibelebath']);
		array_push($i,"BisibeleBath");
		array_push($c,"40");
		array_push($sub,40*intval($_POST['bisibelebath']));
	}
	if($_POST['parata']!=NULL){
		array_push($q,$_POST['parata']);
		array_push($i,"Parata");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['parata']));
	}
	if($_POST['setdosa']!=NULL){
		array_push($q,$_POST['setdosa']);
		array_push($i,"SetDosa");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['setdosa']));
	}
	if($_POST['gulabjamun']!=NULL){
		array_push($q,$_POST['gulabjamun']);
		array_push($i,"Gulab Jamun");
		array_push($c,"15");
		array_push($sub,15*intval($_POST['gulabjamun']));
	}
	if($_POST['fullmeals']!=NULL){
		array_push($q,$_POST['fullmeals']);
		array_push($i,"FullMeals");
		array_push($c,"60");
		array_push($sub,60*intval($_POST['fullmeals']));
	}
	if($_POST['idlysambar']!=NULL){
		array_push($q,$_POST['idlysambar']);
		array_push($i,"IdlySambar");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['idlysambar']));
	}








	if($_POST['mangojuice']!=NULL){
		array_push($q,$_POST['mangojuice']);
		array_push($i,"Mango Juice");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['mangojuice']));
	}
	if($_POST['applejuice']!=NULL){
		array_push($q,$_POST['applejuice']);
		array_push($i,"Apple Juice");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['applejuice']));
	}
	if($_POST['bananajuice']!=NULL){
		array_push($q,$_POST['bananajuice']);
		array_push($i,"Banana Juice");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['bananajuice']));
	}
	if($_POST['pineapplejuice']!=NULL){
		array_push($q,$_POST['pineapplejuice']);
		array_push($i,"Pineapple Juice");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['pineapplejuice']));
	}
	if($_POST['papayajuice']!=NULL){
		array_push($q,$_POST['papayajuice']);
		array_push($i,"Papaya Juice");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['papayajuice']));
	}
	if($_POST['cheekujuice']!=NULL){
		array_push($q,$_POST['cheekujuice']);
		array_push($i,"Cheeku Juice");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['cheekujuice']));
	}
	if($_POST['orangejuice']!=NULL){
		array_push($q,$_POST['orangejuice']);
		array_push($i,"Orange Juice");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['orangejuice']));
	}
	if($_POST['strawberryjuice']!=NULL){
		array_push($q,$_POST['strawberryjuice']);
		array_push($i,"Strawberry Juice");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['strawberryjuice']));
	}









	if($_POST['PavBhaji']!=NULL){
		array_push($q,$_POST['PavBhaji']);
		array_push($i,"Pav Bhaji");
		array_push($c,"40");
		array_push($sub,40*intval($_POST['PavBhaji']));
	}
	if($_POST['CholeBatura']!=NULL){
		array_push($q,$_POST['CholeBatura']);
		array_push($i,"CholeBatura");
		array_push($c,"40");
		array_push($sub,40*intval($_POST['CholeBatura']));
	}
	if($_POST['PannerManchurian']!=NULL){
		array_push($q,$_POST['PannerManchurian']);
		array_push($i,"Panner Manchurian");
		array_push($c,"50");
		array_push($sub,50*intval($_POST['PannerManchurian']));
	}
	if($_POST['GobiManchurian']!=NULL){
		array_push($q,$_POST['GobiManchurian']);
		array_push($i,"Gobi Manchurian");
		array_push($c,"50");
		array_push($sub,50*intval($_POST['GobiManchurian']));
	}
	if($_POST['FriedRice']!=NULL){
		array_push($q,$_POST['Fried Rice']);
		array_push($i,"FriedRice");
		array_push($c,"50");
		array_push($sub,50*intval($_POST['FriedRice']));
	}
	if($_POST['Noodles']!=NULL){
		array_push($q,$_POST['Noodles']);
		array_push($i,"Noodles");
		array_push($c,"50");
		array_push($sub,50*intval($_POST['Noodles']));
	}
	if($_POST['RoomaliRoti']!=NULL){
		array_push($q,$_POST['RoomaliRoti']);
		array_push($i,"RoomaliRoti");
		array_push($c,"40");
		array_push($sub,40*intval($_POST['RoomaliRoti']));
	}
	if($_POST['BabycornManchurian']!=NULL){
		array_push($q,$_POST['BabycornManchurian']);
		array_push($i,"BabycornManchurian");
		array_push($c,"50");
		array_push($sub,50*intval($_POST['BabycornManchurian']));
	}








	if($_POST['Sandwich']!=NULL){
		array_push($q,$_POST['Sandwich']);
		array_push($i,"Sandwich");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['Sandwich']));
	}
	if($_POST['AlooTikki']!=NULL){
		array_push($q,$_POST['AlooTikki']);
		array_push($i,"AlooTikki");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['AlooTikki']));
	}
	if($_POST['PannerPuff']!=NULL){
		array_push($q,$_POST['PannerPuff']);
		array_push($i,"PannerPuff");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['PannerPuff']));
	}
	if($_POST['IceCream']!=NULL){
		array_push($q,$_POST['IceCream']);
		array_push($i,"IceCream");
		array_push($c,"10");
		array_push($sub,10*intval($_POST['IceCream']));
	}
	if($_POST['Samosa']!=NULL){
		array_push($q,$_POST['Samosa']);
		array_push($i,"Samosa");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['Samosa']));
	}
	if($_POST['SoftDrinks']!=NULL){
		array_push($q,$_POST['SoftDrinks']);
		array_push($i,"SoftDrinks");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['SoftDrinks']));
	}
	if($_POST['VegPuff']!=NULL){
		array_push($q,$_POST['VegPuff']);
		array_push($i,"VegPuff");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['VegPuff']));
	}
	if($_POST['PlaneCake']!=NULL){
		array_push($q,$_POST['PlaneCake']);
		array_push($i,"PlaneCake");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['PlaneCake']));
	}





	if($_POST['VegBurger']!=NULL){
		array_push($q,$_POST['VegBurger']);
		array_push($i,"VegBurger");
		array_push($c,"40");
		array_push($sub,40*intval($_POST['VegBurger']));
	}
	if($_POST['ChocolateTart']!=NULL){
		array_push($q,$_POST['ChocolateTart']);
		array_push($i,"ChocolateTart");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['ChocolateTart']));
	}
	if($_POST['Pizza']!=NULL){
		array_push($q,$_POST['Pizza']);
		array_push($i,"Pizza");
		array_push($c,"50");
		array_push($sub,50*intval($_POST['Pizza']));
	}
	if($_POST['VegHotdog']!=NULL){
		array_push($q,$_POST['VegHotdog']);
		array_push($i,"VegHotdog");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['VegHotdog']));
	}
	if($_POST['CheeseRoll']!=NULL){
		array_push($q,$_POST['CheeseRoll']);
		array_push($i,"CheeseRoll");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['CheeseRoll']));
	}
	if($_POST['FrenchFries']!=NULL){
		array_push($q,$_POST['FrenchFries']);
		array_push($i,"FrenchFries");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['FrenchFries']));
	}
	if($_POST['Cake']!=NULL){
		array_push($q,$_POST['Cake']);
		array_push($i,"Cake");
		array_push($c,"20");
		array_push($sub,20*intval($_POST['Cake']));
	}
	if($_POST['PanneerRoll']!=NULL){
		array_push($q,$_POST['PanneerRoll']);
		array_push($i,"PanneerRoll");
		array_push($c,"30");
		array_push($sub,30*intval($_POST['PanneerRoll']));
	}















	$n=sizeof($i);

	$conn = new mysqli('localhost','root','','canteen');

	$fi=array_pop($i);
	$n-=1;
	$co=array_pop($c);
	$qn=array_pop($q);
	$s=array_pop($sub);
	$total +=$s;
	$stmt = $conn->prepare("insert into orders(name, phonenumber, fooditems, quantity, cost, subtotal) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssi", $name, $phonenumber, $fi, $qn, $co, $s);
	$execval = $stmt->execute();
	$stmt->close();

	for ($j=0; $j<$n; $j++) {
		$name="";
		$phonenumber="";
		$fi=array_pop($i);
		$co=array_pop($c);
		$qn=array_pop($q);
		$s=array_pop($sub);
		$total +=$s;
		$stmt = $conn->prepare("insert into orders(name, phonenumber, fooditems, quantity, cost, subtotal) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $phonenumber, $fi, $qn, $co, $s);
		$execval = $stmt->execute();
		$stmt->close();
	}
	$fi=$qn=$co=$phonenumber="---";
	$name="Total";
	$stmt = $conn->prepare("insert into orders(name, phonenumber, fooditems, quantity, cost, subtotal) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssi", $name, $phonenumber, $fi, $qn, $co, $total);
	$execval = $stmt->execute();
	$stmt->close();
	echo "Order placed successfully...";
	
	$conn->close();
}
?>