By default DataTables is loaded with these plugins: "AutoFill", "ColReorder", "RowGroup", "Select". You could override this with `defaultPlugins` property.

```
DataTables::create(array(
    ...
    "defaultPlugins"=>array() // make DataTables load no plugins initially

```

In addition to default plugins, you could set DataTables to load the following plugins:
 "Buttons", "FixedColumns", "FixedHeader", "KeyTable", "Responsive", "RowReorder", "Scroller", "SearchPanes" with the `plugins` property.

```
DataTables::create(array(
    ...
    "plugins"=>array("Buttons", "FixedColumns", "FixedHeader", "KeyTable", "Responsive", "RowReorder", "Scroller", "SearchPanes")
));

```