This example show how to create JOIN query using `QueryBuilder`.

```
DB::table("orders")
->join("orderdetails",'orders.orderNumber','=','orderdetails.orderNumber')
->join("products",'orderdetails.productCode','=','products.productCode')
->join("customers",'orders.customerNumber','=','customers.customerNumber')
->select(
    'orders.orderNumber',
    'customers.customerName',
    'products.productName',
    'orderdetails.quantityOrdered',
    'orderdetails.priceEach',
    'orders.orderDate'
)
```