<style>
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #000;
	}

	li {
		float: left;
	}

	li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover {
		background-color: #000;
	}
</style>


<ul class="nav">
    {menudata}	
    <li><a href="{link}">{name}</a></li>
    {/menudata} 
	
</ul>
