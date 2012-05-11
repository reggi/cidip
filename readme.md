# CodeIgniter Dip


###Introduction

The idea of a CodeIngiter Dip is to use CodeIgniter functionality outside of the directory, extending the reach of the framework for use in other PHP applications.


###Codebase

The dip consists of two different copies of code from the framework itself.

* index.php	
	* Line ~82 | *replace with* | `$system_path = $_SERVER['DOCUMENT_ROOT'] . "/system` 
	* Line ~99 | *replace with* | `$application_folder = $_SERVER['DOCUMENT_ROOT'] . "/application;`
	* Line ~114 | *replace with* | `$view_folder = $_SERVER['DOCUMENT_ROOT'] . "/view";` *(CI 3.0)*
	* Line ~202 | *comment out* | `require_once BASEPATH.'core/CodeIgniter.php';`
* system/core/CodeIgniter.php
	* Line ~380 | *comment out* | `$OUT->_display();`

These files are merged with the above edits, into one file to create the dip.

**Note**: If you place CodeIgniter inside a directory on your server the paths to system and application (as well as view in CI 3.0) within the *index.php* portion of the dip will need to changed to something like `$system_path = $_SERVER['DOCUMENT_ROOT'] . "/codeigniter/system`.

###Resources

* [Pre CI 2.0 Dip (original)](http://codeigniter.com/wiki/dip_into_CI/)
* [Discussion](http://codeigniter.com/forums/viewthread/194386/)
* [Video Tutorial](http://www.youtube.com/watch?v=KCmLseX1uSQ)
