<!-- This represents the view. This determines what the user views on the webpage
	
	Author: Alex Zielinski -->
	
<!-- Link CSS -->	
<link rel="stylesheet" type="text/css" href="/assets/css/assembly.css"/>

<!-- Section to display all available robots-->
<h1>Robots</h1>
<div class="assemblyRobotItems">
	{robots}
		<span class="robotItems">
			<img src="data/bots/{pic}" width="200" title="Model: {model_ID}
Type: {type}"/></a>
		<input type="checkbox" name="robotCheck">
		</span>
	{/robots}
</div>

<!-- Section to display all available robot parts-->
<h1>Parts</h1>
<div class="assemblyPartItems">
	{parts}
        <span class="partItems">
			<img src="/data/parts/{pic}" width="200" title="Model: {model}
Line: {line}"/></a>
	<input type="checkbox" name="partCheck">
	</span>
    {/parts}
</div>

<!-- Defines the two buttons on the webpage -->
<div class="assemblyButtons">
	<button type="button">Return to head office</button>
	<button type="button">Build it</button>
</div>