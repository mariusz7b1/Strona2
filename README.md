# Strona2 – przeglądarka zdjęć (strona testowa)

- PHP, bez bazy danych i bez Composera.
- Zdjęcia: wrzuć pliki .jpg/.jpeg/.png/.gif/.webp do folderu `images/` – pojawią się automatycznie (sortowane po nazwie).
- Strony: `?page=home`, `?page=zdjecia`, `?page=kontakt`.
- Wdrożenie: push na `main` → GitHub Actions `.github/workflows/main_mariusztest(s2).yml` → Azure App Service `mariusztest`.
