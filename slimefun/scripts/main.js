/*==================== SCROLL REVEAL ANIMATION ====================*/
const sr = ScrollReveal({
    distance: '30px',
    duration: 1800,
    reset: false,
});

sr.reveal('.section-title-heading, .card-vote', {
    origin: 'top',
    interval: 200,
})