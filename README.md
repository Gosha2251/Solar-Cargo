# Solar Cargo — Web Projekts

Vienkārša statiska web sistēma konteineru pārvaldībai, izstrādāta PB2 moduļa ietvaros. Projekts demonstrē pamata HTML/CSS lietojumu, failu struktūru, publicēšanu un dokumentācijas izveidi.

---

## 📦 Projekta apraksts

Solar Cargo ir neliela web lapa, kas paredzēta konteineru pārvaldības sistēmas demonstrācijai. Projekts sastāv no:

- galvenās lapas (`index.html`);
- stila faila (`style.css`);
- vienkāršas navigācijas un satura struktūras.

Projekts ir statisks — tas neizmanto JavaScript, datubāzes vai backend.

---

## 🔧 Funkcionalitāte

- Galvenā lapa ar projekta informāciju.
- Vienkāršs HTML/CSS dizains.
- Statiska struktūra.

---

## ▶️ Kā palaist projektu lokāli

1. Lejupielādē projekta mapi.
2. Atver `index.html` failu jebkurā pārlūkprogrammā (Chrome, Edge, Firefox).
3. CSS ielādēsies automātiski no `style.css`.

Nav nepieciešama instalācija, serveris vai papildu konfigurācija.

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

Šie uzlabojumi pārvērstu projektu par pilnvērtīgu web aplikāciju.

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
