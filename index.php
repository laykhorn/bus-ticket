<?php

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>FUOYE Transports</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<script type="text/javascript" src="js/script.js"></script> 
    </head>
    <body>    
        <form action="process.php" class="register" method="POST">
		<center><a><img alt="FUOYE" src="fuoye_logo.jpg"/></a>
            <h1>FUOYE BUS Ticket Reservation</h1></center>
			<fieldset class="row1">
                <legend>Travel Information</legend>
				<p>
                    <label>BUS Type/Name* 
                    </label>
                    <input name="bus" type="text" required="required"/>
                    <label>Date of journey *
                    </label>
                    <select class="date" name="day">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="month">
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>					
					<label>Bus Type * 
                    </label>
                    <select name="type">
                        <option value="luxurious">Luxurious
                        </option>
                        <option value="private">Private
                        </option>
						<option value="bus">Public Bus
                        </option>
						<option value="minibus">Mini Bus
                        </option>				
						<option value="car">Car
                        </option>
					</select>
					
                </p>
                <p>
					<label>Boarding From*
                    </label>
                    <input name="from" required="required" type="text"/>
					<label>To *
                    </label>
					<input name="to" required="required" type="text"/>
					<label>Via (Route) *
                    </label>
					<select name="root">
                        <option value="1">Ado
                        </option>
                        <option value="2">Ifaki
                        </option>
                        <option value="3">Ikerre
                        </option>
                    </select>
                </p>
                <p>
                    <label>Phone No *
                    </label>
                    <input name="mob" required="required" type="text"/>
                    <label>Confirm Phone*
                    </label>
                    <input name="mob" required="required" type="text"/>
                    <label >(You will receive 
                    </label><label >the ticket number in this )
                    </label>
                </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
				<legend>Passenger Details - Click "Add Passenger" to book multiple.</legend>
				<p> 
					<input type="button" value="Add Passenger" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"  /> 
					<p>(All actions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
						<td>
							<label>Full Name</label>
							<input type="text" required="required" name="BX_NAME[]">
						 </td>
						 <td>
							<label for="BX_age">Age</label>
							<input type="text" required="required" class="small"  name="BX_age[]">
					     </td>
						 <td>
							<label for="BX_gender">Gender</label>
							<select id="BX_gender" name="BX_gender" required="required">
								<option>....</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						 </td>
						 <td>
							<label for="BX_birth">Preferred Seat</label>
							<select id="BX_birth" name="BX_birth" required="required">
								<option>....</option>
								<option>Front</option>
								<option>Window</option>
								<option>Back</option>
								<option>Middle</option>
								<option>No Choice</option>
							</select>
						 </td>
							</p>
                    </tr>
                    </tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>
				<p>The identification details are required during journey. Passengers booked on the ticket should have any of the identity cards ( Student Identity Card / Department Association Card / Health Center Card / Library Card/ NUESA ID card - with photograph) during the journey in original. </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row4">
                <legend>Agreement</legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive personalized offers by your Service</label>
                </p>
				
				<div class="clear"></div>
            </fieldset>
			<input class="submit" type="submit" value="Confirm Ticket &raquo;" />
			
			<div class="clear"></div>
        </form>
		
    </body>
	
</html>





