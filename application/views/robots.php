<!-- This represents the view. This determines what the user views on the webpage
	
	Author: Alex Zielinski -->
	
<!-- Link CSS -->	
<link rel="stylesheet" type="text/css" href="/assets/css/assembly.css"/>


<!-- Section to display all available robots-->
<h1>Robot Assembly</h1>
<div class="assemblyRobotItems">     
  <table class="table-responsive">
	    <thead>
	        <tr>
	            <th><h2>Robots</h2></th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	        	{assembledHeads}
	            <td>
	            	<span class="robotItems">
						<img src="data/parts/head/{pic}.jpeg" width="200" title="Model: {model} Type: {line}"/></a>
					</span>
				</td>
				{/assembledHeads}
        	</tr>
        	
	        <tr>
	        	{assembledTorsos}
	            <td>
	            	<span class="robotItems">
						<img src="data/parts/torso/{pic}.jpeg" width="200" title="Model: {model} Type: {line}"/></a>
					</span>
				</td>
				{/assembledTorsos}
        	</tr>
	        <tr>
	        	{assembledFeet}
	            <td>
	            	<span class="robotItems">
						<img src="data/parts/feet/{pic}.jpeg" width="200" title="Model: {model} Type: {line}"/></a>
					</span>
				</td>
				{/assembledFeet}
        	</tr>
        	<tr>
        		<td align="center">
	        		<input type="checkbox" name="robotCheck">
        		</td>
        	</tr>
    	</tbody>
	</table>
</div>

<div class="assemblyPartItems">
  	<table class="table-responsive">
	    <thead>
	        <tr>
	            <th><h2>Heads</h2></th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	        {heads}
	            <td>
	            	<span class="headParts">
						<img src="data/parts/head/{pic}.jpeg" width="200" title="Model: {model} Type: {line}"/></a>
						<input type="checkbox" name="head{certificate}">
					</span>
				</td>
			{/heads}
	        </tr>
	    </tbody>
  	</table>
</div>

<div class="assemblyPartItems">
	<table class="table-responsive">
	    <thead>
	        <tr>
	            <th><h2>Bodies</h2></th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	        {torsos}
	            <td>
	            	<span class="bodyParts">
						<img src="data/parts/torso/{pic}.jpeg" width="200" title="Model: {model} Type: {line}"/></a>
						<input type="checkbox" name="torso{certificate}">
					</span>
				</td>
			{/torsos}
	        </tr>
	    </tbody>
  	</table>
</div>

<div class="assemblyPartItems">
  	<table class="table-responsive">
	    <thead>
	        <tr>
	            <th><h2>Feet</h2></th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	        	{feet}
	            <td>
	            	<span class="feetParts">
						<img src="data/parts/feet/{pic}.jpeg" width="200" title="Model: {model} Type: {line}"/></a>
						<input type="checkbox" name="feet{certificate}">
					</span>
				</td>
				{/feet}
	        </tr>
	    </tbody>
  	</table>
</div>

<!-- Defines the two buttons on the webpage -->
<div class="assemblyButtons">
	<button onclick="location.href='assembled'" type="button" class = "btn-lg btn-primary">Assemble It</button>
	<button onclick="location.href='returned'" type="button" class = "btn-lg btn-primary">Return to Head Office</button>
</div>
