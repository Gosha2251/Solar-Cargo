USE solar_cargo;

SELECT * FROM containers;

SELECT cargo_code, cargo_name, status
FROM containers
WHERE status = 'Ceļā';

SELECT cargo_code, mass_kg
FROM containers
WHERE mass_kg > 10000;

SELECT status, COUNT(*) AS konteineru_skaits
FROM containers
GROUP BY status;

SELECT DISTINCT status
FROM containers;

SELECT * FROM containers
ORDER BY mass_kg DESC;