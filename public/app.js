function updateGrid() {
  // get the table rows
  const rows = document.querySelectorAll("table tbody tr");

  const mapDangerToColor = (danger) => {
    const minDanger = 1;
    const maxDanger = 10;
    const colorStep = Math.round(255 / (maxDanger - minDanger)); // calculate the color step
    const colorValue = 255 - (danger - minDanger) * colorStep; // calculate the color value
    return `rgb(${colorValue}, 0, 0)`; // create a gradient of red
  };

  // loop through the rows and update the corresponding grid cells
  rows.forEach(row => {
    const lat = row.children[2].textContent; // get the latitude value from the table
    const lng = row.children[3].textContent; // get the longitude value from the table
    const danger = row.children[4].textContent; // get the danger level from the table
    const cell = document.querySelector(`.zone[data-lat="${lat}"][data-lng="${lng}"]`); // find the corresponding grid cell
    cell.style.backgroundColor = mapDangerToColor(danger); // set the background color of the cell based on the danger level
  });

}
