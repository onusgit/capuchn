# Feed Component #

The feed component will handle the communication between the server and the page, creating a simple way to fetch rss feeds and pass them back to the page individually or as separate entities.

# Details #

## Gather data ##
Gather data from rss feeds and other sources, such as myspace, twitter, etc. Potentially use plugins as codecs. Save the json string to the database to and integrate. Use some site settings to determine when to expire feeds

## Format for display ##
Format feeds in a consistent way so that html is in the correct place if need be etc.

```
{feedName: name, feedtype: type, feedheader: header, items:[item,item]}
```

## Codec ##

Need a way to insert codecs as plugins, but need to define plug ins first.

```
if(is_funcition(codec))
```