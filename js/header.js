const menuButton = document.getElementById("menuToggle");
const closeMenuButton = document.getElementById("closeSidebar");
const mobileSidebar = document.getElementById("mobileSidebar");

const closeMobileSidebar = () => {
    mobileSidebar.classList.remove("active");
};

menuButton.addEventListener("click", () => {
    mobileSidebar.classList.add("active");
});

closeMenuButton.addEventListener("click", closeMobileSidebar);

// Mobile-only submenu toggles: match the updated mobile nav markup and mob-sub-list class
document.querySelectorAll('.mobile-sidebar .mobile-nav-list .has-mob-sub-nav-list').forEach((li) => {
    const link = li.querySelector('a.submenu-toggle');
    const submenu = li.querySelector('.mob-sub-list');
    if (!link || !submenu) return;

    link.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        const isOpen = li.classList.contains('open');
        // close any other open submenus in the mobile sidebar
        document.querySelectorAll('.mobile-sidebar .mobile-nav-list .has-mob-sub-nav-list.open').forEach((other) => {
            if (other !== li) {
                other.classList.remove('open');
                const otherLink = other.querySelector('a.submenu-toggle');
                if (otherLink) otherLink.setAttribute('aria-expanded', 'false');
            }
        });

        if (isOpen) {
            li.classList.remove('open');
            link.setAttribute('aria-expanded', 'false');
        } else {
            li.classList.add('open');
            link.setAttribute('aria-expanded', 'true');
        }
    });
});
