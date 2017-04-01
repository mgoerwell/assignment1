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
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>   
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css"/>           
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
            <footer class="navbar-fixed-bottom">
	            <div class="Container text-center">
					<p class="text-muted">Page rendered in <strong>{elapsed_time}</strong> seconds. {ci_version}</p>
				</div>
			</footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script src="/assets/js/tableSort.js"></script>
	</body>
</html>