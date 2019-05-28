SELECT
	e.employee_id,
	e.job_title,
	e.address_id,
	a.address_text
from employees AS e
JOIN addresses AS a
ON e.address_id = a.address_id
ORDER BY e.address_id asc
LIMIT 5;