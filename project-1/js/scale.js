// Function which scales the entire page based on the browser window width
function scalePage() 
{
    const baseWidth = 1024;
    // Calculates the scale ratio based on current window width
    let scale = window.innerWidth / baseWidth;
    // Stops page from zooming past 100%
    scale = Math.min(scale, 1)
    // Applies the scale transformation to the entire page
    document.body.style.transform = 'scale(${scale})';
    // Sets the scaling origin to the top-left corner
    document.body.style.transformOrigin = "top left";
}
// Runs the scaling function when the page finishes loading
window.addEventListener("load", scalePage);
// Recalculates and applies scaling whenever the browser window is resized
window.addEventListener("resize", scalePage);