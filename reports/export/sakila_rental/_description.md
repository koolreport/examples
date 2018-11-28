Exporting is one of the most used feature in reporting. The `Export` package of KoolReport helps to export any report with charts and tables into PDF and other image formats such as PNG, JPG, BMP and more.

In above example, when user click to Export button, browser will call the export.php. The report will run and produce the PDF report.

As you may notice the export using another view called `SakilaRentalPdf.view.php` to generate PDF. We seperate the pdf-generated view with the for-browser view to be easier to manage. The view for PDF can have extra settings to control pdf margin or pdf header and footer.

More information of the Export package you can find it [here](https://www.koolreport.com/packages/export).