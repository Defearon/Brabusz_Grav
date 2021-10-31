---
markdown:
    extra: true
work:
    title: 'Kontaktiere uns!'
    description: 'Das Brabusz-Team beantwortet gerne alle Fragen rund um Ihre Reise'
hiretitle: 'Bitte füllen Sie das untenstehende Kontaktformular aus und warten Sie auf unsere Antwort!'
forms:
    contact-form:
        fields:
            name:
                label: Name
                placeholder: 'Ihre name...'
                autocomplete: 'on'
                type: text
                classes: form-control
                validate:
                    required: true
            email:
                label: E-mail
                placeholder: 'Ihre e-mail...'
                type: email
                classes: form-control
                validate:
                    required: true
            telephone:
                label: Telefonnummer
                placeholder: 'Ihre Telefonnummer...'
                type: text
                classes: form-control
                validate:
                    required: true
            message:
                label: Nachricht
                placeholder: 'Geben Sie hier Ihre Nachricht ein..'
                type: textarea
                classes: form-control
                validate:
                    required: true
        buttons:
            submit:
                type: submit
                value: Senden
                classes: 'btn btn-primary top-bottom-margin-10 animate__animated'
            reset:
                type: reset
                value: Zurücksetzen
                classes: 'btn btn-danger top-bottom-margin-10 animate__animated'
        process:
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
            email:
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
            message: 'Danke, dass Sie uns kontaktiert haben!'
            display: thankyou
title: Kontakt
---

##Contact
[center]
<div markdown="1" class="title6">
| | |
|: ----------- |: ----------- |
| **Büro:** | 	2523 Sárisáp Május 1. sor 23., [+36 33 450 610](tel:+3633450610) |
| **Räumlichkeiten:** | 2529 Annavölgy hrsz. 1789. |
| **Werkstatt:** | 2523 Sárisáp Fő út 51.|
| **Postanschrift:** | 2523 Sárisáp Május 1. sor 23.,  [brabusz2012@gmail.com](mailto:brabusz2012@gmail.com) |
| **Stationäre Hilfe** | [+36 30 316 9048,   ](tel:+36303169048) [+36 30 339 2925](tel:+36303392925)|
| **Steuernummer:** | 	27433984-2-11 |
| **Kontonummer:** | 	58600434-17065496 |
| **Handelsregisternummer:** | 	11-09-029067 |
| | [www.brabusz.hu](/) |
</div>

[/center]


<div class="maps" style="width: 100%"><iframe class="embed-responsive-item" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=S%C3%A1ris%C3%A1p,%20M%C3%A1jus%201.%20sor%2023,%202523+(Brabusz)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
