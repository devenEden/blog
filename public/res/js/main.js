const scroll = document.getElementById('scroll_top');
const nav_anchor = document.getElementsByClassName('nav_anchor');
const links = document.getElementsByClassName('link_img_div');
function toggle_links(array,condition) 
{
    for (let i = 0; i < array.length; i++) 
    {
        if (condition == 'none') 
        {
            array[i].style.display = 'block';
        }
        else if (condition == 'block') 
        {
            array[i].style.display = 'none';
        } 
        
    }
}
function open_nav() 
{
  document.getElementById('nav_ul').style.width = '50%';
  document.getElementById('links').style.width = '50%';
  document.getElementById('hamburger').style.display = 'none'; 
  document.getElementById('close_nav').style.display = 'block';
  toggle_links(nav_anchor,'none');
  toggle_links(links,'none');
}
function close_nav() 
{
    document.getElementById('links').style.width = '0%'; 
    document.getElementById('nav_ul').style.width = '0%';
    document.getElementById('hamburger').style.display = 'block';
    document.getElementById('close_nav').style.display = 'none';
    toggle_links(nav_anchor,'block');
    toggle_links(links,'block');
}
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