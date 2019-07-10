# Codeigniter-Boilerplate
Starter/Boilerplate with Coderigniter 3 and AdminLTE 3 

## About This Project
###### Name: Codeigniter Boilerplate
###### version: 1.0.0
###### Author: vishwajeet kumar
###### Description: This codeignitor Boilerplate is configured with the basic settings and configuration that almost every codeignitor project will require. AdminLTE 3 Theme is Integrated for admin panel.

## Minimum Requirement
	1. Apache server with mod_rewrite enabled.

## Configuration and settings that has been implimented in this Boilerplate

	1. Application and system Directory Renamed.
    2. Removed index.php from url.
    3. Basic session setting.
    4. Assest folder for css, js and image in root folder same where application and system folder exist.
    5. In index.php file ENVIRONMENT (development / deployment) are configrued for localhost and deployment.  If $_SERVER('HTTP_HOST') returns localhost ENVIRONMENT set to development and set to production if it is not,
    	and with help of this set errorr eporting ON in development server and OFF in production. CLI Request has been taken care. Reference - https://stackoverflow.com/questions/20002917/codeigniter-environment-setting
	6. created development folder in config folder, to add different config for diff envioment such as database 			credentials.
	9.  Default controller configured.
	10. URI Routing (created route for page and admin panel)
	11. AdminLTE 3 theme configured
	12. (admin) created a layout view file in layout folder 
		- included header and footer in layout file and page content with the help of variable.
		- add css and js with helper function
	13. admin controller for verfication - ( MY_Controller )

## Best Practices to follow while working further

	1. code comments (documention)
	2. configure database creatential for development
	2. (frontend) create a layout view file in layout folder 
		- include header and footer in layout file and page content with the help of variable.
		- add css and js with helper function
	3. (frontend) 404 design according to theme  
	4. (admin) 404 design according to theme    
    5. Relocate the Application and system Directory outside public_html folder while hosting
    6. Use alternate PHP Syntax for View Files
    7. Use XSS Filtering
	8. Use CSRF protection
	9. Validate input data
	10. Escape all data before database insertion
	11. No whitespace can precede the opening PHP tag or follow the closing PHP tag. 
	12. use Auto-loading for model helper and library
	13. Create db Migration
	14. db migration with restriction to termianl only
	15. create form with form helper
	16. write from validation rule in form_validation config file in config folder
	17. create index function in all controller
	18. create constructor and call parent constructor
	19. use prevent direct access code
	20. create MY_CONTROLLER to write some function that need all controller such as user validation.
	21. Change and check ENVIRONMENT while deploying
	22. configure database creatential for production