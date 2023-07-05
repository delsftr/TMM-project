
<?php

echo '<script>const 
btncard=[{id:1,name:"Social media"},
{id:2,name:"Photography"},
{id:3,name:"Video production"},
{id:4,name:"Web design"},];

const categories=[...new Set(btncard.map(e=>e)),];
document.querySelector(".list-group").innerHTML=categories.map((e,t)=>{var{name:i,id:o}=e;
return`<li class=\'list-group-item text py-4 p ${0===t?"active-menu":""}\' style=\'cursor: pointer;\' onclick=\'filteritem(this, ${o})\'>${i}</li>`}).join("");const itm=[{id:1,image:"' . base_url('assets/img/photography.jpg') . '",text:"Social media has become a crucial component of modern business. With the help of TRICOM, you can effectively and economically engage with customers, create brand recognition, and boost sales.",button:"/social-media"},{id:2,image:"' . base_url('assets/img/photography.jpg') . '",text:"Photography has become a crucial component of modern business. With the help of TRICOM, you can effectively and economically engage with customers, create brand recognition, and boost sales.",button:"/photography"},{id:3,image:"' . base_url('assets/img/photography.jpg') . '",text:"Video production has become a crucial component of modern business. With the help of TRICOM, you can effectively and economically engage with customers, create brand recognition, and boost sales.",button:"/video-production"},{id:4,image:"' . base_url('assets/img/photography.jpg') . '",text:"Web design has become a crucial component of modern business. With the help of TRICOM, you can effectively and economically engage with customers, create brand recognition, and boost sales.",button:"/web-design"},],

details=[...new Set(itm.map(e=>e)),],filteritem=(e,t)=>{let i=details.filter(function(e){if(e.id==t)return e.id});if(e){let o=document.querySelectorAll(".list-group-item");
    o.forEach(function(e){e.classList.remove("active-menu")}),e.classList.add("active-menu")}displayItem(i)},displayItem=e=>{document.getElementById("itm").innerHTML=e.map(e=>{var{image:t,text:i,button:o}=e;return`

<div class="row r-services" id="products" style="height:100%;"><div class="col-md-4"><img src="${t}" class="img-fluid" style="height:100%;" alt="...">
</div><div class="col-md-8 my-auto"><div class="card-body cb-services text fw-light">
<div class="card-text">${i}</div>
<br>
<a href="${o}" class="btn btn-primary btn-text text-white rounded-5 border-0">Learn More</a>
</div>
</div>
</div>`}).join("")};filteritem(null,1);</script>';
