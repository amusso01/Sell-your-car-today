// $(function () {
//   $('.map-button').on('click', function (e) {
//       //if ($(window).width() > 768) {
//           e.preventDefault();

//           $('.modal-title').html($(this).data('modaltitle'));

//           $('.maps-model-body').html(
//               $('<iframe>', {
//                   src: $(this).data('gmap'),
//                   id: 'gmapIframe',
//                   frameborder: 0,
//                   style: 'border:0;',
//                   loading: "lazy",
//                   allowfullscreen: '',
//                   scrolling: 'no',
//                   width: '100%',
//                   height: '488',
//                   'aria-hidden': 'true',
//                   tabindex: '0',
//                   marginheight: 0,
//                   marginwidth: 0
//               }));

//           $('#mapsModal').modal('toggle');
//       //}
//   });
// });

export default function gmap() {
    const mapBtn = document.querySelectorAll('.gmapBtn')

    mapBtn.forEach(el =>{
        el.addEventListener('click', openModal)
    })

}

function openModal(e){
    e.preventDefault();
    
    // Selector
    const mapmodal = document.getElementById('mapsModal')
    const oldModalTitle = document.querySelector('.modal-title')
    const htmlElement = document.querySelector("html");
    const btnClose = document.querySelector(".close");
    const gmapIframe = document.getElementById('gmapIframe')

    let iframeSrc = this.dataset.gmap
    let newModaTitle = this.dataset.modaltitle

    // Change modal title
    oldModalTitle.innerHTML = newModaTitle


    // Change iframe
    gmapIframe.setAttribute('src', iframeSrc)
    gmapIframe.setAttribute('id', 'gmapIframe')
    gmapIframe.setAttribute('frameborder', 0)
    gmapIframe.setAttribute('style', 'border:0;')
    gmapIframe.setAttribute('loading', 'lazy')
    gmapIframe.setAttribute('allowfullscreen', '')
    gmapIframe.setAttribute('scrolling', 'no')
    gmapIframe.setAttribute('width', '100%')
    gmapIframe.setAttribute('height', '488')
    gmapIframe.setAttribute('referrerpolicy', 'no-referrer-when-downgrade')

    // openmodal
    mapmodal.classList.add('s-open')
    htmlElement.classList.add("noscroll");

    // closemodal
    btnClose.addEventListener('click', ()=>{
        mapmodal.classList.remove('s-open')
        htmlElement.classList.remove("noscroll");
    })
}
