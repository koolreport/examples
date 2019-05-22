#Introduction

This example shows the Amazing theme for koolreport. By apply the theme, your report will change the look-n-feel for everything.

In order to use the them in a report, you simply declare like below:

```
class MyReport extends \koolreport\KoolReport
{
    use \koolreport\amazing\Theme;
    ...
}
```

The theme will:

1. Change the CSS applied to report such as layouts, buttons
2. Apply new color scheme to charts