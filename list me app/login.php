<?php include_once "shared/header.php"; ?>

<div id="main">

	<noscript>This site doesn't work without JavaScript</noscript>
	
	<!-- IF LOGGED IN -->
	
		<!-- Content here -->
		
	<!-- IF LOGGED OUT -->
	
		<!--Alternate content here -->
		
</div>

<?php include_once "shared/sidebar.php"; ?>

<?php include_once "shared/footer.php"; ?>

<ul id="list">
	<li class="colorRed">
		<span>Walk the dog</span>
		<div class="draggertab tab"></div>
		<div class="colortab tab"></div>
		<div class="deletetab tab"></div>
		<div class="donetab tab"></div>
	</li>
	
	<li class="colorBlue">
		<span>Pick up laundry</span>
		<div class="draggertab tab"></div>
		<div class="colortab tab"></div>
		<div class="deletetab tab"></div>
		<div class="donetab tab"></div>
	</li>
	
	<li class="colorGreen">
		<span>Milk</span>
		<div class="draggertab tab"></div>
		<div class="colortab tab"></div>
		<div class="deletetab tab"></div>
		<div class="donetab tab"></div>
	</li>
</ul>

<form action="" id="add-new">
	
	<div>
		<input type="text" id="new-list-item-text" />
		<input type="submit" id="add-new-submit" value="Add" class="button" />
		
	</div>

</form>

<div id="share-area">
	<p>Public list URL: <a href="#">URL GOES HERE</a>
	<small>(Nobody but you will be able to edit this list)</small></p>
</div>