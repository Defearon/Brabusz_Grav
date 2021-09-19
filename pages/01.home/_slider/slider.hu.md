---
markdown:
    extra: true
carousel:
    items: 1
    margin: 25
    loop: true
    autoplay: true
    autoplayTimeout: 4000
    smartSpeed: '1500'
    autoplayHoverPause: true
    nav: true
    cropZoomWidth: 1500
    cropZoomHeight: 500
images:
    -
        title: 'Üdvözöljük a Brabusznál!'
        image:
            c1.jpg:
                name: c1.jpg
                type: image/jpeg
                size: 896210
                path: c1.jpg
    -
        image:
            c2.jpg:
                name: c2.jpg
                type: image/jpeg
                size: 218550
                path: c2.jpg
    -
        image:
            'Képernyőfotó 2021-09-10 - 19.23.45.jpg':
                name: 'Képernyőfotó 2021-09-10 - 19.23.45.jpg'
                type: image/jpeg
                size: 2208155
                path: 'Képernyőfotó 2021-09-10 - 19.23.45.jpg'
media_order: 'c1.jpg,c2.jpg,IMG_2149 másolat.JPG'
---

<!--
[owl-carousel items=1 margin=10 loop=true autoplay=true autoplayTimeout=4000 smartSpeed=1500 autoplayHoverPause=true nav=true]
<div id="carousel" class="carousel-container" markdown=1>
  ![](c1.jpg?cropZoom=1500,500)
  <div class="carousel-textblock">
  <h1>Üdvözöljük a Brabusznál!</h1>
  </div>
</div>

<div class="carousel-container" markdown=1>
  ![](c2.jpg?cropZoom=1500,500)

</div>

<div class="carousel-container" markdown=1>
  ![](c3.jpg?cropZoom=1500,500)

</div>

<div class="carousel-container" markdown=1>
  ![](c4.jpg?cropZoom=1500,500)

</div>

<div class="carousel-container" markdown=1>
  ![](c5.jpg?cropZoom=1500,500)

</div>

[/owl-carousel]

[owl-carousel items=1 margin=10 ]
<div class="mycarousel" style="background-image: url({{ page.media['picture1.jpg'].url }});">
  <div class="carousel-textbox">
    <h2>This is panel 1</h2>
    <p>foo</p>
  </div>
</div>
<div class="mycarousel" style="background: url({{ page.media['picture2.jpg'].url }});">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>
[/owl-carousel]
-->
