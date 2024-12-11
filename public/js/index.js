const navLinks = {
    '/homepage': 'home',
    '/about': 'about',
    '/programs': 'programs',
    '/admissions': 'ad',
    '/linkages': 'linkages',
    '/contact': 'contact',
    '/newstudent' : 'ad',
    '/oldstudent' : 'ad'
};

const path = window.location.pathname;
const activeId = navLinks[path];

if (activeId) {
    const activeLink = document.getElementById(activeId);
    if (activeLink) {
        activeLink.style.color = 'white';
        activeLink.style.backgroundColor = '#69b800';
        activeLink.style.borderRadius = '3px';
    }
}