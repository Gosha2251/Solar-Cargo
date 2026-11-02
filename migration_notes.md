# Migrācijas piezīmes

## Kādi dati tika migrēti?

No PB2 Solar Cargo projekta tika migrēti konteineru dati, kas iepriekš tika glabāti Google Forms un Google Sheets sistēmā.

Migrētie dati:

- Konteinera ID
- Nosaukums
- Svars (kg)
- Statuss
- Laika zīmogs

Piemēra ieraksti:

- SC-745 | Sūķņi | 22000 kg | Ceļā
- SC-636 | Vara kabeļi | 26000 kg | Piegādāts
- SC-889 | Gultņi | 15000 kg | Noliktavā

---

## Kāpēc statiski HTML dati nav pietiekami ilgtermiņā?

Statiski dati ir piemēroti nelieliem projektiem, taču pieaugot datu apjomam kļūst grūtāk:

- pievienot jaunus ierakstus;
- meklēt informāciju;
- filtrēt datus;
- veikt datu analīzi;
- uzturēt sistēmu ilgtermiņā.

Datubāze ļauj centralizēti glabāt datus un izmantot SQL vaicājumus.

---

## Kādi ir iespējamie migrācijas riski?

- Nepareizi datu tipi.
- UTF-8 kodējuma problēmas.
- Dublikāti laukā cargo_code.
- Trūkstoši dati migrācijas laikā.
- Nepareizi statusu nosaukumi.

---

## Kā tika pārbaudīts, ka dati nav pazuduši?

Migrācija tika pārbaudīta ar SQL vaicājumiem:

```sql
SELECT * FROM containers;
```

```sql
SELECT COUNT(*) FROM containers;
```

```sql
SELECT status, COUNT(*) FROM containers GROUP BY status;
```

```sql
SELECT * FROM containers ORDER BY mass_kg DESC;
```

Tika pārbaudīts, ka visi 10 ieraksti ir saglabāti un vaicājumi atgriež korektus rezultātus.

---

## Rollback plāns

Ja migrācija neizdodas:

1. Dzēst datubāzi solar_cargo.
2. Izveidot datubāzi no jauna.
3. Palaist solar_cargo_schema.sql.
4. Palaist solar_cargo_data.sql.
5. Veikt atkārtotu pārbaudi ar SELECT vaicājumiem.

Šāda pieeja ļauj ātri atgriezt sistēmu darba stāvoklī.