let offcanvas = document.getElementById('offcanvasNavbar');
let toggler = document.getElementById('offcanvasToggler');

offcanvas.addEventListener('show.bs.offcanvas', function (){
    toggler.className = 'navMenuMobile__close';
})

offcanvas.addEventListener('hide.bs.offcanvas', function (){
    toggler.className = 'navMenuMobile__toggler';
})