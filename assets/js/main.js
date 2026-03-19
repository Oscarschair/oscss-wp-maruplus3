document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const siteNavigation = document.getElementById('site-navigation');

    if (mobileMenuToggle && siteNavigation) {
        mobileMenuToggle.addEventListener('click', () => {
            siteNavigation.classList.toggle('hidden');
            siteNavigation.classList.toggle('mobile-active');
        });
    }

    // Scroll effect for header
    const header = document.getElementById('masthead');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('py-2', 'shadow-md');
            header.classList.remove('py-4', 'shadow-sm');
        } else {
            header.classList.add('py-4', 'shadow-sm');
            header.classList.remove('py-2', 'shadow-md');
        }
    });
});
