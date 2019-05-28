SELECT
	category_id,
	ROUND(AVG(price), 2) AS Average_Price,
	MIN(price) AS Cheapest_Product,
	MAX(price) AS Most_Expensive_Product
FROM
	products
GROUP BY
	category_id ASC;