<?php require_once('couch/cms.php'); ?>
<cms:template title='Booking' />
<?php
	include 'assets/framework/header.php';
?>
		<section id="charges">
			<p>Information on charges!</p>
			<p>lights media -ware semiotics spook saturation point otaku human vehicle vinyl tanto San Francisco smart- -space augmented reality alcohol range-rover towards sub-orbital crypto- film numinous corporation convenience store engine j-pop sentient dolphin face forwards modem dome drone tank-traps into shoes monofilament network rifle geodesic boat math- free-market stimulate paranoid narrative weathered skyscraper marketing knife refrigerator disposable bridge cyber- physical katana beef noodles decay order-flow RAF Legba tiger-team wonton soup market rebar tower post- kanji office sensory assassin papier-mache Kowloon</p>
		</section>

		<section id="booking">
			<form id="bookingForm">
				<fieldset id="org">
					<label class="label" for="organisation">Group/Organisation</label><input class="input" type="text" name="organisation" id="organisation" placeholder="organisation" />
					<label class="label" for="district">District</label><input class="input" type="text" name="district" id="district" placeholder="district" />
					<label class="label" for="county">County</label><input class="input" type="text" name="county" id="county" placeholder="county" />
					<label class="label" for="section">Section(eg Cubs)</label><input class="input" type="text" name="section" id="section" placeholder="section" />
				</fieldset>

				<fieldset id="arrival">
					<ul>
						<li>Type of visit:</li>
						<li><input type="checkbox" name="day" id="day" /><label for="day">Day Visitor</label></li>
						<li><input type="checkbox" name="camp" id="camp" /><label for="camp">Camping</label></li>
					</ul>
						<label class="label" for="adate">Date of Arrival</label><input class="input" type="date" name="adate" id="adate" placeholder="date"/>
						<label class="label" for="ddate">Date of Departure</label><input class="input" type="date" name="ddate" id="ddate" placeholder="date"/>
				</fieldset>

				<fieldset id="sites">
				<p>⃰Use of building by non-residents will incur an additional charge (see pricing information above)</p>
				<p>Which facilities do you require the use of?</p>
					<ul>
						<li><input type="checkbox" name="lpad" id="lpad"/><label for="lpad">Lawrence Paddock</label></li>
						<li><input type="checkbox" name="pfield" id="pfield" /><label for="pfield">Phillimore Field</label></li>
						<li><input type="checkbox" name="nfield" id="nfield" /><label for="nfield">North Field</label></li>
						<li><input type="checkbox" name="lyonsl" id="lyonsl" /><label for="lyonsl">Lyons Lodge</label></li>
						<li><input type="checkbox" name="pinec" id="pinec" /><label for="pinec">Pine Cabin and Field</label></li>
						<li><input type="checkbox" name="bunka" id="bunka" /><label for="bunka">Bunk House A</label></li>
						<li><input type="checkbox" name="bunkb" id="bunkb" /><label for="bunkb">Bunk House B</label></li>
					</ul>
				</fieldset>

				<fieldset id="ldetails">
					<label class="label" for="name">Leader Name</label><input class="input" type="text" name="name" id="name" placeholder="Name"/>
					<label class="label" for="houseNo">Number</label><input class="input" type="text" name="houseNo" id="houseNo" placeholder="House Number"/>
					<label class="label" for="address1">Address One</label><input class="input" type="text" name="address1" id="address1" placeholder="Address"/>
					<label class="label" for="address2">Address Two</label><input class="input" type="text" name="address2" id="address2" placeholder="Address"/>
					<label class="label" for="address3">Address Three</label><input class="input" type="text" name="address3" id="address3" placeholder="Address"/>
					<label class="label" for="postCode">Post Code</label><input class="input" type="text" name="postCode" id="postCode" placeholder="postCode"/>
					<label class="label" for="pnumber">Phone Number</label><input class="input" type="text" name="pnumber" id="pnumber" placeholder="pnumber"/>
					<label class="label" for="email">Email</label><input type="text" class="input" name="email" id="email" placeholder="email"/>
				</fieldset>

				<fieldset id="TOS">
					<p>I have read the site rules covering Solent Scout Training Centre (see web pages) and will ensure that all members
					of my group observe them.</p>
					<ul>
						<li><input type="checkbox" name="TOS" id="TOS"/><label for="TOS">I agree to these terms</label></li>
					</ul>
					<button name="subButton" action="submit">Submit</button>
				</fieldset>				
			</form>
		</section>
<?php
	include 'assets/framework/footer.php';
?>
<?php COUCH::invoke(); ?>
