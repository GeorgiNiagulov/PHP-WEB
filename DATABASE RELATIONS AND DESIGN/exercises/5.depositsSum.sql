SELECT
	deposit_group,
	SUM(deposit_amount) AS total_sum
FROM	
	wizzard_deposits
GROUP by
	deposit_group
ORDER BY
	total_sum ASC;