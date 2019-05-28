SELECT
	e.employee_id,
	e.first_name
FROM employees AS e
LEFT JOIN employees_projects AS p
ON e.employee_id = p.employee_id
WHERE p.employee_id IS null
ORDER BY e.employee_id desc
LIMIT 3;