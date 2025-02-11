const grid = document.getElementById('grid');
// Create the grid items
for (let i = 0; i < 60; i++) {
    const gridItem = document.createElement('div');
    gridItem.classList.add('w-full', 'aspect-square', 'bg-white', 'border', 'border-gray-300', 'hover:bg-gray-200');
    grid.appendChild(gridItem);
}
const gridItems = Array.from(grid.children);
setInterval(() => {
    // First, reset all grid items to white
    gridItems.forEach(item => {
        item.classList.remove('bg-gray-200');  // Remove the gray background
        item.classList.add('bg-white');        // Set them back to white
    });
    // Randomly select some grid items to turn gray
    const count = Math.floor(Math.random() * gridItems.length);
    const indices = [...Array(gridItems.length).keys()].sort(() => Math.random() - 0.5).slice(0, Math.min(count, 30));
    // Apply the gray color to randomly selected grid items
    indices.forEach(idx => {
        gridItems[idx].classList.remove('bg-white');  // Remove the white background
        gridItems[idx].classList.add('bg-gray-200');  // Apply the gray background
    });
}, 1000);
