<?php
		mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '1', 'Apple_6', '23', '200') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '1')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '2', 'Apple_6s', '7', '300') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '2')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '3', 'Apple_7', '34', '400') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '3')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '4', 'Apple_7s', '21', '500') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '4')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '5', 'Apple_8', '53', '600') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '5')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '6', 'Apple_se', '21', '700') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '6')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '7', 'Apple_x', '22', '800') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '7')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '8', 'samsung_s4', '6', '250') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '8')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '9', 'samsung_s5', '9', '350') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '9')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '10', 'samsung_s6', '34', '450') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '10')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '11', 'samsung_s7', '15', '550') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '11')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '12', 'samsung_s8', '224', '650') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '12')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '13', 'samsung_s9', '19', '750') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '13')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '14', 'samsung_s10', '70', '850') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '14')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '15', 'huawei_honor_6a', '26', '220') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '15')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '16', 'huawei_honor_6c', '20', '320') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '16')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '17', 'huawei_honor_6X', '111', '420') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '17')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '18', 'huawei_honor_7X', '32', '520') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '18')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '19', 'huawei_honor_8', '123', '620') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '19')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '20', 'huawei_nova_2i', '999999', '720') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '20')LIMIT 1");

mysqli_query($conn, "INSERT INTO product (id, name, count, price)
SELECT * FROM (SELECT '21', 'huawei_p9', '7', '820') AS 
tmp WHERE NOT EXISTS (SELECT id FROM product WHERE id = '21')LIMIT 1");

	//mysqli_close($conn);
?>	