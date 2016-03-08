# Introduction #

The plug in architecture as planned is based on the concept of applications in an operating system. When you install an application in windows, you get the possibility of a few things:

  * Stand alone app - think widgets, like a calculator (does not use data storage and does not handle anything the os might throw at it)
  * Configurable app - This is probably the catagory most applications fall under, they do not really rely on the OS nor does the OS rely on them but they require data storage specific to the user. So one user can configure the app and that configuration would  be stored in a home dir. All other users would configure the app indipendently.
  * File type handling - think more complicated apps like, paint. This might have a hook somewhere in the OS that says 'when a user tries to open a bmp, use me' but still is mostly stand alone.
  * Event handling - augments what happens when a user does something, like hits play on the keyboard or clicks a mailto link. Things like media player or office maybe, this will tie into many points in the operating system and may augment the normal functioning.
  * Device handling - applications that convert an iso file into a drive letter, or a tv tuner driver.

# Details #

## Stand Alone Apps and Configurable apps ##

Basically the only difference is that there is no configuration on the users end for the stand alone apps and things like clocks and calculators and possibly reporting tools (most recent posts, etc)

Configurable apps will be applications/widgets in the way that iGoogle and netvibes have widgets. These will have a single code base for many different view, so given some values (such as feed url) the display can change significantly. The configuration should not be expected to store a significant amount of data and will be stored as a json string in a database.

### CapuchnWidget ###
The CapuchnWidget is going to be defined as a widget that has html and javascript code, that may or may not be run in an iframe. Each widget will have a set of defined variables that may have defaults that can and should be overridden. The calling page/inserting html will be responsible for initilizing variables. When a widget is displayed, the displayer will need to set variables:
```
<div dojoType="capuchn.CapuchnWidget" widgetName="RSSReader" widgetUrl="widgets/RSSReader" feedUrl="http://www.google.com/feed" display="5">
```

or

```
<div dojoType="capuchn.CapuchnWidget" widgetName="RSSReader" widgetUrl="widgets/RSSReader/456">
```

The 456 in the url above would point to the id for a configuration of this particular rss reader.

**check CapuchnWidget for more information**


## File Type Handling ##

Expanding on my earlier description of file handling, since we will not be using files (well, kind of, but in a totally different way) the database is a better analogy to files. Since files often store data for a particular application but can be used by many (think of .png files, can be edited by photoshop or viewed in a photo viewer). A database table will function for our plugins in much the same way as a file. A plug in can have more than one table and should provide methods for reading these tables if needed. (essentially providing the same services normal models do)

  * Create database table(s)
  * Provide/overload model methods to read and write entries
  * _maybe_ Registration of plugin to table and methods for external table managment
  * _optional_ Create table api for extention by other plugins


## Event handling ##

Event handling allows a plugin to augment the system to modify or completely change the way the system does things. Each controller will have a before exectution call to the plugin manager which will determine if any plugins should be called. If so, the associated plugin function will be run and then can either exit or return. If it exits this will block the original function from being run, and should re-impliment these services.

  * Register on a callback list for what events should be directed toward this plugin.
  * Return or Exit on event calls
  * Will have access to normal controller data (form data, etc)

# Plugin Interface #

Each plugin must have some functions...
  * install - to be called when the plugin is first installed, this should create tables and insert any information into the db as well as register events
  * constructor - optional
  * configure - will be called when configuring the plugin, this may just display info or offer a form to configure the plugin.
  * _other functions_ - the meat of the plugin
  * models - if tables are used, models should be defined

