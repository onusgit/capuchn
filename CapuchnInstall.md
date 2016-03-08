# Introduction #

Since there is no installation file, capuchn needs to be installed by hand.

# Details #

  1. Upload the files into a folder on your webserver,
  1. If this installation is going to be run from a subdirectory, you will need to edit the "app/config/core.php" file. this has a BASE variable that must include your subdirectory path so, http://someurl/capuchn/ then set BASE to be "/capuchn/" and make sure to include the trailing slash. If a subdomain or domain, just leave this alone
  1. Edit the "app/config/database.php" to the correct database information. This should be self explanitory, lookup cakephp if you have trouble (this is just a default cakephp database config file, nothing else special)
  1. make sure that "app/webroot/img/pictures/" folder is writable by the webserver so that you can upload pictures
  1. install the sql file that is in the root of the tgz file into your database, this should create all the tables you need. If you cannot do this, dont f with this, wait for an installer to come around, this is so alpha it makes your mother cry.
  1. Edit the users in your database directly to edit your login info... yeah, this isnt even close to done.
  1. Read up on cakephp and dojo if you want to do any development
  1. Have fun!???!!
  1. Profit?

~Scott