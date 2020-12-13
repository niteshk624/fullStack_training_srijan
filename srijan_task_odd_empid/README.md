INTRODUCTION
------------

This module is for assigment given as part of drupal full stack training session.


INSTALLATION
------------

Install as any other module.


USAGE
-----

* This module provides a config form to add id value.
* To open the setting form navigate to Admin -> Configuration -> System -> Srijan Task Settings 
or visit (/admin/config/srijan_task/setting) on the browser.
* Enter any id(number) in the field and click on "Save configuration" button.
* Now Navigate to Structure -> Block Layout 
* Click on "Place block" next to any defined region in current default theme.
* Now search for "Srijan task block" and place the block.
* Now you can see the config field value in that block
* This block will be visible only to the user having "administrator" role.
* Also this module add a static js script tag to the head section of html with 
value srijan-config-id: id, here id is the config value entered.


 
