The report show how to use Cube package to report the sale by customers vs quarters in year. The report is useful to see which customers spend most in a particular quarter of year. This would be a great insight for company to plan inventory for next year. The report also have year selection on top to let us only choose those year that we are interested in.

The data pulled from CSV contains customerName, quarter that they ordered and the saleamount. `Cube` processed will turn those data into table in which customerName is grouped on row and quarter is group on column.

Cube can be considered a simple version of Pivot Tables that you see in Excel or any Speadsheet application. The different between Cube and Pivot is the number of dimension they handle. While Pivot can handle more than 2 dimension and support hierachial demension, `Cube` support only 2 dimensions and single level of dimension. Although it sounds simple but according to our observation, 70% cases `Cube` is enough. 

Because of the simplicity, the power of `Cube` process lie on its speed to handle data compared to Pivot.