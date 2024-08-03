Custom Sales Report:-

This module build on magento246
=>php version : 8.2

Download the module:
-> Put code in app/code
-> Run following commands
  1) php bin/magento s:up
  2) php bin/magento s:d:c 
  3) php bin/magento s:s:d -f
  4) php bin/magento c:c
  5) chmod -R 0777 var pub generated

Goto AdminDashboard > Reports > Custom Sales Report

![CustomSalesReport Menu under Reports](https://github.com/user-attachments/assets/7c007c8b-49b8-4b4b-8443-2381bbfbce68)


Click on the (Custom Sale Report) tab,it will show custom sales report grid,
we utilied default magento sales table

![Custom Sales Report Admin Grid](https://github.com/user-attachments/assets/eaa9c89c-fe5d-4899-b753-4163b934e05c)

For Rest Api:- Open postman application use below endpoints. with get method.

Note: baseurl/rest/V1/rest_test/getCustomsalesreport

http://jaya.magento246.com:8012/rest/V1/rest_test/getCustomsalesreport


![RestApi using postman](https://github.com/user-attachments/assets/a9d9024e-2b98-452b-8464-61b439a8d921)




