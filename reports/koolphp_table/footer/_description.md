The footer of KoolPHP Table can show the summarized number like sum, average, count etc.

To turn on this feature you set

```
"showFooter"=>true
```

To show aggregation value for a column you set "footer" property to the method you want to calculate for example `"sum"`,`"count"`, `"avg"`, `"min"` or `"max"`

```
"footer"=>"sum"
```

To customize the footer text, you use  `"footerText"`:

```
"footerText" =>"<b>Total</b>: @value"
```