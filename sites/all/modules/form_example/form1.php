<html>
<body>
<form action="form1_post.php" method="post">

Name: <input type="text" name="name"><br>

Select an option:

<ul id="new_supply_customer_request_types">
				    <li>
                        <input type="radio" id="new_acquisition" name="customer_request" value="new_acquisition">
                        <label for="new_acquisition">New Acquisition</label>
                    </li>
                
                    <li>
                        <input type="radio" id="dual_fuel_upgrade_add_electric" name="customer_request" value="dual_fuel_upgrade_add_electric">
                        <label for="dual_fuel_upgrade_add_electric">Dual Fuel Upgrade - Add Electricity</label>
                    </li>
                
                    <li>
                        <input type="radio" id="dual_fuel_upgrade_add_gas" name="customer_request" value="dual_fuel_upgrade_add_gas">
                        <label for="dual_fuel_upgrade_add_gas">Dual Fuel Upgrade - Add Gas</label>
                    </li>
</ul>


 <input type="submit" value="Submit">
 
 </form>
 
</body>



</html>