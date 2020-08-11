$(document).ready(function(){
    $('.reviews_wrapper').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: $('.prev_btn'),
        nextArrow: $('.next_btn'),
        responsive: [
            {
              breakpoint: 950,
              settings: {
                slidesToShow: 1
              }
            }
          ]
    });
});

let regForm = document.getElementById('request-form'),
    regClose = document.getElementById('request-close'),
    regBtn = document.getElementById('request-btn'),
    callLink = document.getElementById('call-link'),
    mainBtn = document.getElementById('main-btn'),
    ordForm = document.getElementById('order-form'),
    ordBtn = document.getElementById('top'),
    ordClose = document.getElementById('order-close'),
    contBtn = document.getElementById('contact-btn'),
    contRegForm = document.getElementById('contact-request-form'),
    contRegClose = document.getElementById('contact-request-close'),
    contRegBtn = document.getElementById('contact-request-btn'),
    consultRegForm = document.getElementById('consultation-form'),
    consultRegClose = document.getElementById('consultation-close'),
    consultRegBtn = document.getElementById('consultation_request-btn'),
    pageMenu = document.getElementById('page-menu'),
    divTop = document.getElementById('top'),
    divMiddle = document.getElementById('middle'),
    divBottom = document.getElementById('bottom'),
    headTime = document.getElementById('header-time'),
    headCall = document.getElementById('header-call'),

    sinBtn = document.getElementById('single-btn'),
    sinForm = document.getElementById('single-form'),
    sinClose = document.getElementById('single-close'),
    sinOrderBtn = document.getElementById('single-order-btn')
;


document.addEventListener("DOMContentLoaded", function() {
  if (sinBtn != null) {
    sinBtn.addEventListener('click', function () {
      if (sinForm.style.display == 'block') {
        sinForm.style.display = 'none';                                    
      }else {
        sinForm.style.display = 'block';
        sinOrderBtn.addEventListener('click', function (){
          sinForm.style.display = 'none'; 
        });
        sinClose.addEventListener('click', function (){
          sinForm.style.display = 'none'; 
        });
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {
  if (callLink != null) {
    callLink.addEventListener('click', function () {
      if (regForm.style.display == 'block') {
          regForm.style.display = 'none';                                    
      }else {
        regForm.style.display = 'block';
        regBtn.addEventListener('click', function (){
          regForm.style.display = 'none'; 
        });
        regClose.addEventListener('click', function (){
          regForm.style.display = 'none'; 
        });
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {
  if (mainBtn != null) {
    mainBtn.addEventListener('click', function () {
      if (ordForm.style.display == 'block') {
        ordForm.style.display = 'none';                                    
      }else {
        ordForm.style.display = 'block';
        ordBtn.addEventListener('click', function (){
          ordForm.style.display = 'none'; 
        });
        ordClose.addEventListener('click', function (){
          ordForm.style.display = 'none'; 
        });
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {
  if (contBtn != null) {
    contBtn.addEventListener('click', function () {
      if (contRegForm.style.display == 'block') {
        contRegForm.style.display = 'none';                                    
      }else {
        contRegForm.style.display = 'block';
        contRegBtn.addEventListener('click', function (){
          contRegForm.style.display = 'none'; 
        });
        contRegClose.addEventListener('click', function (){
          contRegForm.style.display = 'none'; 
        });
      }
    });
  }
});

// let cosultBtn = document.querySelectorAll('.designer_btn'), index, button;
let cosultBtn = document.querySelectorAll('.designer_btn');

// for (let index = 0; index < cosultBtn.length; index++) {
//   let button = cosultBtn[index];


//     button.addEventListener('click', function (event) {
//       if (consultRegForm.style.display == 'block') {
//         consultRegForm.style.display = 'none';                                    
//       }else {
//         consultRegForm.style.display = 'block';
//         consultRegBtn.addEventListener('click', function (){
//           consultRegForm.style.display = 'none'; 
//         });
//         consultRegClose.addEventListener('click', function (){
//           consultRegForm.style.display = 'none'; 
//         });
//       }
//       event.preventDefault();
//     });

// }

cosultBtn.forEach(item => {
    item.addEventListener('click', function () {
      if (consultRegForm.style.display == 'block') {
        consultRegForm.style.display = 'none';                                    
      }else {
        consultRegForm.style.display = 'block';
        consultRegBtn.addEventListener('click', function (){
          consultRegForm.style.display = 'none'; 
        });
        consultRegClose.addEventListener('click', function (){
          consultRegForm.style.display = 'none'; 
        });
      }
      // event.preventDefault();
    });
});


document.addEventListener("DOMContentLoaded", function() {
  if (hamb != null) {
    hamb.addEventListener('click', function () {
      if (pageMenu.style.display == 'block') {
          pageMenu.style.display = 'none';
          headTime.style.display = 'block';
          headCall.style.display = 'block';
          // head.style.height = '91px';
          divTop.style.transform = 'rotate(0deg)';
          divTop.style.position = 'relative';
          divMiddle.style.transform = 'rotate(0deg)';
          divMiddle.style.position = 'relative';
          divBottom.style.display = 'block';
          divBottom.style.transform = 'rotate(0deg)';
          divBottom.style.position = 'relative';
          // mainSub.style.padding = '74px 0 0 0';
      }else {
          pageMenu.style.display = 'block';
          headTime.style.display = 'none';
          headCall.style.display = 'none';
          // head.style.height = '400px';
          // catMenu.style.display = 'block';
          divTop.style.transform = 'rotate(45deg)';
          divTop.style.position = 'absolute';
          divTop.style.top = '6%';
          divMiddle.style.transform = 'rotate(-45deg)';
          divMiddle.style.position = 'absolute';
          divMiddle.style.top = '6%';
          divBottom.style.display = 'none';
          // mainSub.style.padding = '250px 0 0 0';
          pageMenu.addEventListener('click', function () {
            pageMenu.style.display = 'none';
            headTime.style.display = 'block';
            headCall.style.display = 'block';
            // catMenu.style.display = 'none';
            // head.style.height = '91px';
            divTop.style.transform = 'rotate(0deg)';
            divTop.style.position = 'relative';
            divMiddle.style.transform = 'rotate(0deg)';
            divMiddle.style.position = 'relative';
            divBottom.style.display = 'block';
            divBottom.style.transform = 'rotate(0deg)';
            divBottom.style.position = 'relative';
          });
          // catMenu.addEventListener('click', function () {
          //   pageMenu.style.display = 'none';
          //   catMenu.style.display = 'none';
          //   // head.style.height = '91px';
          //   divTop.style.transform = 'rotate(0deg)';
          //   divTop.style.position = 'relative';
          //   divMiddle.style.transform = 'rotate(0deg)';
          //   divMiddle.style.position = 'relative';
          //   divBottom.style.display = 'block';
          //   divBottom.style.transform = 'rotate(0deg)';
          //   divBottom.style.position = 'relative';
          // });
      }  
    });
  }
});
