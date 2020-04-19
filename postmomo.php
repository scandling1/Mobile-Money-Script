<!--
  Written by: Emmanuel Scandling
  Email: denkkicks@gmail.com
  Last Updated: March 20, 2020.
 -->
<!DOCTYPE html>
<html>  
<head>
 <title> Pay subscription </title>
 <script>
function myFunction() {
  var x = document.getElementById("dontRefresh");
      n = document.getElementById('network').options;
	  o = document.getElementById('network').selectedIndex;
  if (n[o].text === "MTN") {
    alert("Please click OK and \n 1. Dial *170# \n 2. Select option 6) Wallet \n 3. Select 3) My Approvals \n  4. Enter Mobile Money PIN \n  5. Select the transaction from the list \n  6. Confirm the transaction");
     x.innerHTML = "Please Dont Refresh This Page <br /> 1. Dial *170# <br /> 2. Select option 6) Wallet <br /> 3. Select 3) My Approvals <br />  4. Enter Mobile Money PIN <br />  5. Select the transaction from the list <br />  6. Confirm the transaction";
 }
  else if (n[o].text === "AirtelTigo") {
    alert("We are waiting for you \n Please click OK and wait for Authorization and Enter Pin to confirm payment");
	x.innerHTML = "Please Dont Refresh This Page <br /> Please click OK and wait for Authorization and Enter Pin to confirm payment";
  }
  else {
    alert("transaction failed");
  }
}
</script>
 </head>
<body>
    <center><div id="dontRefresh" center=""></div></center>

         <form action="mprocess.php" method="POST" enctype="multipart/form-data"> 	
				<br />		
		<label> Operator Type <span>*</span></label>
		    <select class="" name="operator" id="network" required="">
	               <option> </option>	
		       <option>MTN</option>
		       <option>AirtelTigo</option>
		    </select>
				<br />	<br />
	        <label>Subscription Amount <span>*</span></label> 
		    <select class="" name="amount"  required="">
		      <option> </option>	
		      <option> 1 </option>
		      <option> 2 </option>
		    </select>
				<br /> <br /> 	 	
				
		 <label>Your Wallet Number <span>*</span></label> 
				
		 <input type="text"  name="user_number" id="user_number" required="">
				 
				<br />	
		 <input type="submit" onclick="myFunction()" id="submit" value="Pay">	
	   </form>
				
</body>

</html>
