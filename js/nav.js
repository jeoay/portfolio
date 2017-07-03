function mobileNav() {
    var screenWidth = screen.width;
    var welcome = document.getElementById('welcome');
    var story = document.getElementById('story');
    var projects = document.getElementById('projects');
    var contact = document.getElementById('contact');

    if (screenWidth <= 600){
        welcome.innerHTML = '<button class="btn btn-block mobileNav">Welcome</button>';
        story.innerHTML = '<button class="btn btn-block mobileNav">Story</button>';
        projects.innerHTML = '<button class="btn btn-block mobileNav">Projects</button>';
        contact.innerHTML = '<button class="btn btn-block mobileNav">Projects</button>';

    }
}

mobileNav();