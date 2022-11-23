// ===== LOADING =====
let spinner = document.querySelector('.spinner')

const textCoverSpan = document.querySelector('.text-cover span')
const textCoverH1 = document.querySelector('.text-cover h1')
const btnCover = document.querySelector('.btn-cover');

window.addEventListener('load', function(){
    spinner.style.opacity = '0%'
    setTimeout(() => spinner.style.display = 'none', 1000);
    setTimeout(() => textCoverSpan.style.animation = 'coverSubTitle .5s forwards', 300);
    setTimeout(() => textCoverH1.style.animation = 'coverHeadTitle .5s forwards', 500);
    setTimeout(() => btnCover.style.animation = 'coverButton .5s forwards', 700);
})

// ===== PARALLAX IN COVER =====
const coverSubTitle = document.getElementById('coverSubTitle');
const coverHeadTitle = document.getElementById('coverHeadTitle');

const stickyNavbar = document.querySelector('.sticky-navbar');

window.addEventListener('scroll', function () {
    let value = window.scrollY;

    coverSubTitle.style.marginTop = value * 0.6 + 'px'
    // coverHeadTitle.style.marginTop = value * -0.2 + 'px'
    btnCover.style.marginTop = value * 0.5 + 'px'

    if (value > '700') {
        stickyNavbar.style.marginTop = '0px'
    }if (value < '700') {
        stickyNavbar.style.marginTop = '-150px'
    }
    else{
       
    }
});


// =====  NAVBAR SCROLLSPY =====
let section = document.querySelectorAll('section');
let navLink = document.querySelectorAll('.sticky-navbar div div ul li a');
const nav = document.querySelector('.sticky-navbar')
window.onscroll = () => {
    section.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop + 400;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLink.forEach(link => {
                link.classList.remove('active');
                document.querySelector('.sticky-navbar div div ul li a[href*=' + id + ']').classList.add('active');
            })
        };
    });
};

// ===== MINI NAVBAR =====
const shadowMiniNavbar = document.querySelector('.shadow-mini-navbar')
const miniNavbar = document.querySelector('.mini-navbar')

function showMiniNavbar(){
    shadowMiniNavbar.style.display = 'block'
    setTimeout(() => miniNavbar.style.marginTop = '0px', 50);
}
function hideMiniNavbar(){
    miniNavbar.style.marginTop = '-500px'
    setTimeout(() => shadowMiniNavbar.style.display = 'none', 500);
}
shadowMiniNavbar.addEventListener('click', function(){
    miniNavbar.style.marginTop = '-500px'
    setTimeout(() => shadowMiniNavbar.style.display = 'none', 500);
})


// ===== SHOW NAVBAR IN SCROLL UP =====
let lastScrollY = window.scrollY
window.addEventListener('scroll', () => {
    if (lastScrollY < window.scrollY) {
        nav.classList.add('nav-hide')
    } else {
        nav.classList.remove('nav-hide')
    }
    lastScrollY = window.scrollY;
})


// ===== MEMBER ONCLICK & HOVER =====
const member1 = document.getElementById('member1')
const member2 = document.getElementById('member2')
const member3 = document.getElementById('member3')
const member4 = document.getElementById('member4')

const textMember1 = document.getElementById('textMember1')
const textMember2 = document.getElementById('textMember2')
const textMember3 = document.getElementById('textMember3')
const textMember4 = document.getElementById('textMember4')

textMember1.style.display = 'none'
textMember3.style.display = 'none'
textMember4.style.display = 'none'

member1.addEventListener('click', function() {
    textMember1.style.display = 'block'
    textMember2.style.display = 'none'
    textMember3.style.display = 'none'
    textMember4.style.display = 'none'
})
member2.addEventListener('click', function() {
    textMember1.style.display = 'none'
    textMember2.style.display = 'block'
    textMember3.style.display = 'none'
    textMember4.style.display = 'none'
})
member3.addEventListener('click', function() {
    textMember1.style.display = 'none'
    textMember2.style.display = 'none'
    textMember3.style.display = 'block'
    textMember4.style.display = 'none'
})
member4.addEventListener('click', function() {
    textMember1.style.display = 'none'
    textMember2.style.display = 'none'
    textMember3.style.display = 'none'
    textMember4.style.display = 'block'
})

if (screen.width > 770) {
    member1.addEventListener('click', function() {
        member1.style.width = '320px'
        member2.style.width = '150px'
        member3.style.width = '150px'
        member4.style.width = '150px'
    })
    member2.addEventListener('click', function() {
        member1.style.width = '150px'
        member2.style.width = '320px'
        member3.style.width = '150px'
        member4.style.width = '150px'
    })
    member3.addEventListener('click', function() {
        member1.style.width = '150px'
        member2.style.width = '150px'
        member3.style.width = '320px'
        member4.style.width = '150px'
    })
    member4.addEventListener('click', function() {
        member1.style.width = '150px'
        member2.style.width = '150px'
        member3.style.width = '150px'
        member4.style.width = '320px'
    })

    function member1over(){
        member1.style.width = '320px'
        member2.style.width = '150px'
        member3.style.width = '150px'
        member4.style.width = '150px'
        textMember1.style.display = 'block'
        textMember2.style.display = 'none'
        textMember3.style.display = 'none'
        textMember4.style.display = 'none'
    }
    function member2over(){
        member1.style.width = '150px'
        member2.style.width = '320px'
        member3.style.width = '150px'
        member4.style.width = '150px'
        textMember1.style.display = 'none'
        textMember2.style.display = 'block'
        textMember3.style.display = 'none'
        textMember4.style.display = 'none'
    }
    function member3over(){
        member1.style.width = '150px'
        member2.style.width = '150px'
        member3.style.width = '320px'
        member4.style.width = '150px'
        textMember1.style.display = 'none'
        textMember2.style.display = 'none'
        textMember3.style.display = 'block'
        textMember4.style.display = 'none'
    }
    function member4over(){
        member1.style.width = '150px'
        member2.style.width = '150px'
        member3.style.width = '150px'
        member4.style.width = '320px'
        textMember1.style.display = 'none'
        textMember2.style.display = 'none'
        textMember3.style.display = 'none'
        textMember4.style.display = 'block'
    }

} if (screen.width <= 770) {
    member1.style.width = '100%'
    member2.style.width = '100%'
    member3.style.width = '100%'
    member4.style.width = '100%'
    member1.style.height = '150px'
    member2.style.height = '500px'
    member3.style.height = '150px'
    member4.style.height = '150px'

    member1.addEventListener('click', function() {
        member1.style.height = '500px'
        member2.style.height = '150px'
        member3.style.height = '150px'
        member4.style.height = '150px'
    })
    member2.addEventListener('click', function() {
        member1.style.height = '150px'
        member2.style.height = '500px'
        member3.style.height = '150px'
        member4.style.height = '150px'
    })
    member3.addEventListener('click', function() {
        member1.style.height = '150px'
        member2.style.height = '150px'
        member3.style.height = '500px'
        member4.style.height = '150px'
    })
    member4.addEventListener('click', function() {
        member1.style.height = '150px'
        member2.style.height = '150px'
        member3.style.height = '150px'
        member4.style.height = '500px'
    })
    function member1over(){}
    function member2over(){}
    function member3over(){}
    function member4over(){}
};




