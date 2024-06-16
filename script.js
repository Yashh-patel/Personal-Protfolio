let elems = document.querySelectorAll('.elem');
// console.log(elems);

// elems.forEach(function(elem){
//     elem.addEventListener('mouseleave',function(dets){
//         gsap.to(elem.querySelector('img'),{
//             opacity : 0,

//         })
//     })
//     elem.addEventListener('mousemove',function(dets){
//         console.log(dets.x)
//         gsap.to(elem.querySelector('img'),{
//             opacity :1,
//             ease : Power1,
//             top: dets.y,
//             left: dets.x
//         })   
//     })
   
// })

let tl = gsap.timeline();

tl.from('.logo,nav h2 , nav button',{
    y : -40,
    opacity : 0,
    duration : 1,
    stagger : 0.2

})
tl.from('.dev div , .contact',{
    x : -40,
    opacity : 0,
    stagger : 0.1,
    duration : 0.8
})
tl.from('.about',{
    opacity : 0,
    duration : 0.5
})
tl.from('.footers p',{
    y :30,
    opacity : 0,
    yoyo : true,
    repeat : -4
})

// gsap.from('.projects div ,.elem',{
//     x:-40,
//     opacity : 0,
//     stagger : 0.4,
//     scrollTrigger : {
//         scroller : 'body',
//         trigger : 'section',
//         // markers : true,
//         scrub : 4,
//         end : "top 40%"
//     }
// })
// gsap.from('.skillsHead div,.development div img',{
//     x:-40,
//     opacity : 0,
//     stagger : 0.4,
//     scrollTrigger : {
//         scroller : 'body',
//         trigger : '#skills',
//         // markers : true,
//         scrub : 4,
//         end : "top 30%"
//     }
// })
// gsap.from('aside h5, aside p',{
//     x:-40,
//     opacity : 0,
//     stagger : 0.4,
//     scrollTrigger : {
//         scroller : 'body',
//         trigger : 'aside',
//         // markers : true,
//         scrub : 4,
//         end : "top 60%"
//     }
// })
// gsap.from('#contact h6 ,#contact p',{
//     x:-40,
//     opacity : 0,
//     scale:0,
//     stagger : 0.4,
//     scrollTrigger : {
//         scroller : 'body',
//         trigger : '#contact',
//         // markers : true,
//         scrub : 4,
//         end : "top 30%"
//     }
// })