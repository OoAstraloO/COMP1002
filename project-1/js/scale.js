function scalePage() 
{
    const baseWidth = 1920;
    let scale = window.innerWidth / baseWidth;
    // Stops page from zooming past 100%
    scale = Math.min(scale, 1)

    document.body.style.transform = 'scale(${scale})';
    document.body.style.transformOrigin = "top left";
}

window.addEventListener("load", scalePage);
window.addEventListener("resize", scalePage);