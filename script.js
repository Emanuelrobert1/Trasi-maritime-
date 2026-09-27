fetch('produits.json').then(r=>r.json()).then(data=>{
let html='';data.forEach(p=>{
html+=`<div class="card"><img src="${p.image}" onerror="this.src='https://via.placeholder.com/220x170?text=${p.nom}'"><h3>${p.nom}</h3><p class="prix">${p.prix} DT</p><p>Stock: ${p.stock}</p><a class="btn" href="https://wa.me/21622XXXXXX?text=Bonjour je veux commander ${p.nom} a ${p.prix}DT" target="_blank">Commander WhatsApp</a></div>`;
});
document.getElementById('produits').innerHTML=html;
});
fetch('temoignages.json').then(r=>r.json()).then(data=>{
let h='';data.forEach(t=>{h+=`<p style="border-left:4px solid #25D366;padding-left:10px;margin:12px 0">"${t.message}"<br><b>- ${t.nom} - ${t.ville} - ${t.etoiles}⭐</b></p>`});
document.getElementById('avis').innerHTML=h;
});
