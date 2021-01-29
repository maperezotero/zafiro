jQuery(document).ready(function($){
	$('#primary-menu').slicknav({
		allowParentLinks: true,
		appendTo: '.site-branding',
		label: '',
	});
});

//add smooth scrolling when clicking any anchor link
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});