---
markdown:
    extra: true
work:
    title: 'Keressen bizalommal!'
    description: 'A Brabusz csapata szívesen válaszol, bármilyen kérdésre, észrevételre, ami az utazással kapcsolatos'
hiretitle: 'Kérem töltse ki az alábbi űrlapot és várjon türelmesen kollégánk visszajelzésére.'
forms:
    contact-form:
        fields:
            name:
                label: Név
                placeholder: 'Az Ön neve...'
                autocomplete: 'on'
                type: text
                classes: form-control
                validate:
                    required: true
            email:
                label: E-mail
                placeholder: 'Az Ön e-mail címe...'
                type: email
                classes: form-control
                validate:
                    required: true
            telephone:
                label: Telefonszám
                placeholder: 'Az Ön telefonszáma...'
                type: text
                classes: form-control
                validate:
                    required: true
            message:
                label: Üzenet
                placeholder: 'Gépelje be üzenetét...'
                type: textarea
                classes: form-control
                validate:
                    required: true
        buttons:
            submit:
                type: submit
                value: Küldés
                classes: 'btn btn-primary top-bottom-margin-10'
            reset:
                type: reset
                value: Töröl
                classes: 'btn btn-danger top-bottom-margin-10'
        process:
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
            email:
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
            message: 'Köszönjük levelét!'
            display: thankyou
title: Kapcsolat
---

##Kapcsolat
[center]
<div markdown="1" class="title6">
| | |
|: ----------- |: ----------- |
| **Iroda:** | 	2523 Sárisáp Május 1. sor 23., [+36 33 450 610](tel:+3633450610) |
| **Telephely:** | 2529 Annavölgy hrsz. 1789. |
| **Műhely:** | 2523 Sárisáp Fő út 51.|
| **Levelezési cím:** | 2523 Sárisáp Május 1. sor 23.,  [brabusz2012@gmail.com](mailto:brabusz2012@gmail.com) |
| **Állandó ügyelet:** | [+36 30 316 9048,   ](tel:+36303169048) [+36 30 339 2925](tel:+36303392925)|
| **Adószám:** | 	27433984-2-11 |
| **Bankszámlaszám:** | 	58600434-17065496 |
| **Cégjegyzék szám:** | 	11-09-029067 |
| | [www.brabusz.hu](/) |
</div>
[/center]



<div class="maps" style="width: 100%"><iframe class="embed-responsive-item" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=S%C3%A1ris%C3%A1p,%20M%C3%A1jus%201.%20sor%2023,%202523+(Brabusz)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
