# Solar Cargo — Web Projekts

## Aktuālais projektā

### Izmaiņas
Projektā ir modernizēta datu glabāšanas sistēma, izmantojot MariaDB datubāzi, kas nodrošina centralizētu datu glabāšanu un efektīvāku informācijas apstrādi.

**PB2 versijā:** sistēma izmantoja HTML, CSS, Google Forms un Google Sheets datu glabāšanai. Lietotāji varēja ievadīt konteineru informāciju formā, bet dati tika glabāti ārpus projekta datubāzes.

**Pizīme:**
*Pašlaik Web lapa nav savienota ar datubāzi, taču viss nepieciešamais sagatavots, lai turpmāk to savienot.*

### Kas mainījās salīdzinājumā ar PB2?

PB2 versijā:

- dati tika glabāti Google Forms un Google Sheets;
- nebija SQL datubāzes;
- nebija iespējams izmantot SQL vaicājumus datu analīzei;
- datu pārvaldība bija ierobežota.

PB3 versijā:

- dati tiek glabāti MariaDB datubāzē;
- izveidota tabula `containers`;
- iespējams izmantot SELECT vaicājumus;
- iespējams filtrēt, kārtot un analizēt datus.

---

## 📦 Projekta apraksts

Solar Cargo ir neliela web lapa, kas paredzēta konteineru pārvaldības sistēmas demonstrācijai. Projekts sastāv no:

- galvenās lapas (`index.html`);
- stila faila (`style.css`);
- vienkāršas navigācijas un satura struktūras.

---

### 🔧 Funkcionalitāte

- Galvenā lapa ar projekta informāciju.
- Vienkāršs HTML/CSS dizains.
- Statiska struktūra.

---

###  ▶️ Kā palaist projektu lokāli

1. Lejupielādē projekta mapi.
2. Atver `index.html` failu jebkurā pārlūkprogrammā (Chrome, Edge, Firefox).
3. CSS ielādēsies automātiski no `style.css`.

Nav nepieciešama instalācija, serveris vai papildu konfigurācija.

---

## Datu glabāšana

### Datubāzes struktūra

**Datubāze:**

```sql
solar_cargo
```

**Tabula:**

```sql
containers
```

**Lauki:**

- id
- cargo_code
- cargo_name
- mass_kg
- status
- created_at

---

### Kā izveidot datubāzi?

1. Izpildīt failu `solar_cargo_schema.sql`
2. Izpildīt failu `solar_cargo_data.sql`
3. Izpildīt failu `solar_cargo_queries.sql`

---

### Kā pārbaudīt migrāciju?

Migrācija tika pārbaudīta ar šādiem vaicājumiem:

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

---

### Zināmie riski

- nepareizs datu tips;
- nepareizs UTF-8 kodējums;
- dublikāti laukā cargo_code;
- tukši obligātie lauki;
- kļūdaini statusu nosaukumi.

---

### Rollback plāns

Ja migrācija neizdodas:

1. Dzēst datubāzi solar_cargo.
2. Izveidot datubāzi no jauna.
3. Atkārtoti palaist:
   - solar_cargo_schema.sql
   - solar_cargo_data.sql
4. Pārbaudīt datus ar SELECT vaicājumiem.

---

## 🌐 Publicēšana

Projekts ir publicēts, izmantojot **GitHub Pages**.

### Publicēšanas soļi:

1. Izveidoju GitHub repozitoriju.
2. Augšupielādēju failus (`index.html`, `style.css`).
3. DevTools → Settings → Pages → Source: `main` → `/root`.
4. GitHub Pages automātiski izveidoja publisku URL.

### Publiskais URL:
https://gosha2251.github.io/Solar-Cargo/

---

## 🏠 Hostinga izvēles secinājumi

### elatvia.net
**Plusi:**
- vienkārša failu augšupielāde;
- piemērots mācību projektiem.

**Mīnusi:**
- novecojis interfeiss;
- neintuitīvs;
- lapa neielādējās, pat ja faili bija pareizi ievietoti.

### GitHub Pages
**Plusi:**
- moderns, stabils, ātrs;
- publicēšana automātiska;
- ļoti ērts iesācējiem un profesionāļiem;
- lapa strādāja uzreiz bez problēmām.

**Mīnusi:**
- tikai statiskas lapas (nav backend).

### Secinājums
GitHub Pages ir labākais risinājums šim projektam — stabils, moderns un viegli lietojams. elatvia.net ir izmantojams tikai mācību vajadzībām.

---

## 🚀 Projekta uzlabošanas idejas

Nākotnē projektu varētu paplašināt:

- uzlabot CSS dizainu;
- pievienot JavaScript interaktivitāti;
- izveidot backend (Flask / Node.js);
- pievienot datubāzi (SQLite / MySQL);
- izveidot konteineru sarakstu un datu saglabāšanu.

---

## 🔄 Datu plūsma

Solar Cargo izmanto vienkāršu datu plūsmu:

1. Lietotājs aizpilda konteinera formu.
2. Forma nosūta datus uz Google Sheets, izmantojot Web App URL.
3. Google Sheets saglabā ievadītos datus tabulā.
4. Projekta lapā iframe parāda aktuālo datu tabulu.

Šī plūsma ļauj simulēt backend darbību bez servera.

---

## 👤 Autors

Deniss Cvetkovs  
Grupa: 73346  
