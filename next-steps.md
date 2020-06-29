# Next steps

Helaas liep ik tijdens de challenge tegen behoorlijk wat problemen aan met mijn dev environment. Deze problemen oplossen kostte veel tijd waardoor ik behoorlijk achter ben geraakt. 
Om een normale opdracht zo goed mogelijk na te bootsen zal ik daarom hieronder beschrijven wat verder nog gebeuren had moeten worden.

- In de controller de form input verwerken. Aangezien dates hun eigen tabel hebben, zouden deze midels een firstOrNew kunnen worden toegevoegd. Voor locaties zou iets soortgelijks moeten gebeuren , maar dan op basis van een combinatie van postcode en huisnummer.
Op die manier kan ofwel een nieuw date element worden gebouwd met de ingevulde locatie, of een bestaand date element kunnen worden geupdate.

- Voor test doeleinden is laravelcollective/html gebruikt voor het opbouwen van het formulier. Dit werkt, maar Vue zou hier beter zijn om bijvoorbeeld de mogelijkheid te bieden meerdere data en locaties toe te voegen.
