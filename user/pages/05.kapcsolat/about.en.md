---
markdown:
    extra: true
work:
    title: 'Contact us!'
    description: 'The Brabusz team is willing answer any question in connection with your travels'
hiretitle: 'Please fill the contact form below, and wait for our response!'
forms:
    contact-form:
        fields:
            name:
                label: Name
                placeholder: 'Your name...'
                autocomplete: 'on'
                type: text
                classes: form-control
                validate:
                    required: true
            email:
                label: E-mail
                placeholder: 'Your e-mail address...'
                type: email
                classes: form-control
                validate:
                    required: true
            telephone:
                label: Phone
                placeholder: 'Your phone...'
                type: text
                classes: form-control
                validate:
                    required: true
            message:
                label: Message
                placeholder: 'Enter your message here...'
                type: textarea
                classes: form-control
                validate:
                    required: true
        buttons:
            submit:
                type: submit
                value: Send
                classes: 'btn btn-primary top-bottom-margin-10 animate__animated'
            reset:
                type: reset
                value: Reset
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
            message: 'Thank you for contacting us!'
            display: thankyou
title: Contact
---

##Contact
[center]
<div markdown="1" class="title6">
| | |
|: ----------- |: ----------- |
| **Office:** | 	2523 S??ris??p M??jus 1. sor 23., [+36 33 450 610](tel:+3633450610) |
| **Premises:** | 2529 Annav??lgy hrsz. 1789. |
| **Workshop:** | 2523 S??ris??p F?? ??t 51.|
| **Mailing address:** | 2523 S??ris??p M??jus 1. sor 23.,  [brabusz2012@gmail.com](mailto:brabusz2012@gmail.com) |
| **Stationary aid** | [+36 30 316 9048,   ](tel:+36303169048) [+36 30 339 2925](tel:+36303392925)|
| **Tax number:** | 	27433984-2-11 |
| **Bank account number:** | 	58600434-17065496 |
| **Company registration no.:** | 	11-09-029067 |
| | [www.brabusz.hu](/) |
</div>

[/center]


<div class="maps" style="width: 100%"><iframe class="embed-responsive-item" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=S%C3%A1ris%C3%A1p,%20M%C3%A1jus%201.%20sor%2023,%202523+(Brabusz)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
