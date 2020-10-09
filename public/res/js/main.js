function nav_display() 
{
    const nav_ul = document.getElementById('nav_ul');
    const links = document.getElementById('links');
    nav_ul.classList.toggle('nav_slide_in');
    links.classList.toggle('nav_slide_in');
}
const scroll = document.getElementById('scroll_top');
function scroll_top() 
{
    window.scrollTo(
        {
            top:0

        });
}
window.addEventListener('scroll', () => 
{

    scroll.classList.toggle('scroll_active', window.scrollY > 180);
});