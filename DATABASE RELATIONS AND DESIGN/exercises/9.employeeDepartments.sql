SELECT
	e.employee_id,
	e.first_name,
	e.salary,
	d.name as department_name
from employees AS e
JOIN departments AS d
ON e.department_id = d.department_id
WHERE e.salary > 15000
ORDER BY d.department_id desc
LIMIT 5;