# Introduction #

Widgets created for the Capuchn administration interface.


## Capuchn Editor ##

The Capuchn editor extends the dijit.Editor to basically include the following features

  * Implement resize
  * Single widget form - providing a single interface for data related to post
  * Integrated save - no bouncing around the DOM to find the correct forms
  * Super simple initialization - a single div element will bring up the whole thing

Basically this can work as a stand-alone widget which may allow for quick _overlay_ style editor when viewing the site.

### Todo ###
  * Publish events - such as save, watch for the 'header' title to be changed
  * Create a button to insert _elements_ into the page, such as a widget


## Image Dialog Plugin ##

The image dialog plugin is intended to provide a simple way to add images from albums into a mag. Currently this has a thumbnail chooser which will insert the thumbnail into the image. Once the image is selected, the diag can be brought up and values edited. This sort of extends the linkdialog included with dojo. There is still some work that needs to be done to get this to function independently, although it seems to be working just fine.

### Todo ###
  * Classes need to be added to the default style
  * Class editing should be tested
  * Adding special code, such as onclick or editing to add a div tag around the whole thing should be considered

## Gallery ##

Re-impliment the current gallery as a self contained widget, this should offer the same functionality as the current but contain all operations in the one widget. Help smooth out code. Additionally this would create a single container to be used in the accordian view and the tab view. Also, this could do double duty as a full page widget for an external gallery widget.

## Mailbox ##

Implemented as a dojo widget this would contain the mailbox view and then also allow simple insertion into other areas. Such as a trimmed down view on the home page.

## Mail Reader ##

Since this has not yet finished this may not be needed. But the mail reader may allow for a simple interface, into reading and replying to a message.

## Feed Store ##

The feed store will extend datastore to keep an single interface for all 'feed' displays. Since feed displays will show more than just rss feeds, and then also allow for different display options, such as a single ticker for all the latest happenings, this will be the best way to contain all.
