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
    0:
        title: 'Üdvözöljük a Brabusznál!'
        image:
            c1.jpg:
                name: c1.jpg
                type: image/jpeg
                size: 896210
                path: c1.jpg
    3:
        image:
            c2.jpg:
                name: c2.jpg
                type: image/jpeg
                size: 218550
                path: c2.jpg
    4:
        image:
            c3.jpg:
                name: c3.jpg
                type: image/jpeg
                size: 743664
                path: c3.jpg
    1:
        image:
            c4.jpg:
                name: c4.jpg
                type: image/jpeg
                size: 590006
                path: c4.jpg
    2:
        image:
            c5.jpg:
                name: c5.jpg
                type: image/jpeg
                size: 959096
                path: c5.jpg
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
