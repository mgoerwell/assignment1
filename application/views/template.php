<!--
Author: Aing Ragunathan and Matt Gorewell

This is a general template for the Raspberry Robot factory website.
Based off lab 4 Routes template
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- input the page title content here -->
		<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
	</head>
	<body>
        <div id="container">
			<div class="navbar" role = "navigation">
                <div class="navbar-inner">
            	<!--input the menubar information-->
				{menubar}
				</div>
            </div>           
            <div id="content">
            	<!--input the content information-->
                {content}
            </div>
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. 
				{ci_version}</p>
        </div>
	</body>
</html>