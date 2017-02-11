# Change Log
All notable changes to this project will be documented in this file.

Formatting Requirements:
1) Newest first
2) First and last initial, followed by what was changed or added
ex: JF: added robot images to the assets folder

## [Unreleased]
### Added
- JF: Added a welcome view and controller
- AR: added history view and controller
- AZ: Added Controller Robot.php, view robots.php, CSS doc assembly.css, and bots folder with pictures to the /data folder
- MG: added handling for parts subpages (routing is currently limited to part a1 as demo)
- MG: added parts model, parts view, and parts controller
- AR: added history model
- AZ: Added a Robots.php model in the models folder. Contains each robot model ID, the part ID's that make up each robot as well as the robots type. Closes #13
- AR: added template for views, added _menubar and brand logo
- MG: added robot part images inside the new data folder in public
- JF: created change log


### Changed
- JF: Updated the config file to remove the 404 'about page' link
- AR: updated css and history view
- AR: update history model, took cost out of assembled transactions
- AR: added comments to menubar and template views
- AZ: edited routes.php to route to assembly page. Added comments to Robots.php
- MG: Parts controller updated to handle subpages, test routing done, comments added
- MG: Updated css to improve parts view, updated model in prep for next issue.
- AR: update history model to include all types in every sub array
- MG: Updated template to provide some code cleanup.
- JF: Updated logo
- AR: changed base controler (config), MY_Controller, added Welcome constructor and base view template
- AR: moved MG's last change log add up. We are using a newest first order.

