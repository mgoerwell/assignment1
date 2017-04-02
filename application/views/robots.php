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
	        	{robots}
	            <td>
	            	<span class="robotItems">
						<img src="data/bots/{pic}" width="200" title="Model: {model_ID} Type: {type}"/></a>
						<input type="checkbox" name="robotCheck">
					</span>
				</td>
				{/robots}
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
						<img src="data/parts/{pic}.jpeg" width="200" title="Model: {model_ID} Type: {type}"/></a>
						<input type="checkbox" name="partCheck">
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
						<img src="data/parts/{pic}.jpeg" width="200" title="Model: {model_ID} Type: {type}"/></a>
						<input type="checkbox" name="partCheck">
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
						<img src="data/parts/{pic}.jpeg" width="200" title="Model: {model_ID} Type: {type}"/></a>
						<input type="checkbox" name="partCheck">
					</span>
				</td>
				{/feet}
	        </tr>
	    </tbody>
  	</table>
</div>

<!-- Defines the two buttons on the webpage -->
<div class="assemblyButtons">
	<input type="submit" class="btn btn-primary btn-lg" value="Build It">
	<a href="#" class="btn btn-primary btn-lg" role="button">Return to Head Office</a>
</div>
