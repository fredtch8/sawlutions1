
window.onscroll = function (e) {  
    // alert('hey')
    const paragraphs = document.querySelectorAll('.animate');
        const viewHeight = window.innerHeight - 100;
        let allInViewport = true;

        paragraphs.forEach(paragraph => {
            const distanceFromTop = paragraph.getBoundingClientRect().top;

            if (distanceFromTop < viewHeight) {
            paragraph.classList.add('active');
            } else {
            paragraph.classList.remove('active');
            allInViewport = false;
            }
        });

        if (allInViewport) {
            window.removeEventListener('scroll', animateParagraphs);
        }
    } 

function openmenu(){
    if(document.getElementById('mob').style.display == 'none'){
        document.getElementById('mob').style.animationName = 'nav';
        document.getElementById('mob').style.display = 'block';
        document.getElementById('body').style.overflow = 'hidden';
        
    }else{
        document.getElementById('mob').style.animationName = 'fred';
        document.getElementById('mob').style.display = 'none';
        document.getElementById('body').style.overflow = 'scroll';
    }
}

function blured(){
    x = document.getElementsByClassName('bll').length;
    for (i = 0; i < x; i++) {
        document.getElementsByClassName('bll')[i].style.transition = "all 0.3s ease-in-out" ; 
    }
    
}


/*additional (i think no need)*/
const paragraphs = document.querySelectorAll('.animate');

function animateParagraphs() {
    const viewHeight = window.innerHeight - 100;
    let allInViewport = true;

    paragraphs.forEach(paragraph => {
        const distanceFromTop = paragraph.getBoundingClientRect().top;

        if (distanceFromTop < viewHeight) {
        paragraph.classList.add('active');
        } else {
        paragraph.classList.remove('active');
        allInViewport = false;
        }
    });

    if (allInViewport) {
        window.removeEventListener('scroll', animateParagraphs);
    }
}

animateParagraphs();

window.addEventListener('scroll', animateParagraphs);

