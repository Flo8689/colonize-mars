

// const latitude = document.querySelectorAll('.latitude').innerHTML;
// const longitude = document.querySelectorAll('.longitude');

// console.log(latitude)

// const button = document.getElementById('map')

// button.addEventListener('click', () => {

// const dangerZones = document.querySelectorAll('.zone')

// dangerZones.forEach(zone => {

// const zoneId = zone.innerHTML;
    
// });

// })



// const cells = document.querySelectorAll('.zone');


// // listen for the form submission event
// document.querySelector('form').addEventListener('submit', (event) => {
//   event.preventDefault();
  
//   // extract the latitude and longitude values from the form
//   const lat = document.querySelector('#location_lat').value;
//   console.log(lat)
//   const long = document.querySelector('#location_long').value;
  
//   // identify the cell in the grid that corresponds to the latitude and longitude values
//   const cell = cells[(lat - 1) * 4 + (long - 1)];
  
//   // change the background color of the identified cell
//   cell.classList.add('bg-danger');
// });

// console.log('hello')



// const table = document.getElementById("tbl");
// console.log(table);
// const cells = table.getElementsByTagName("td");
// console.log(cells);

// for (let i = 0; i < cells.length; i++) {
//   const cell = cells[i];
//   const lat = parseInt(cell.innerHTML.split(",")[0].trim());
//   const lng = parseInt(cell.innerHTML.split(",")[1].trim());

//   if (!isNaN(lat) && !isNaN(lng)) {
//     const index = (lat - 1) * 4 + (lng - 1);
//     const targetCell = document.getElementById(`cell-${index}`);
//     targetCell.classList.add("bg-primary");
//   }
// }



function updateGrid() {
  // get the table rows
  const rows = document.querySelectorAll("table tbody tr");

  const mineralColors = {
    "Klingon": "green",
    "Chomdu": "orange",
    "Perl": "red",
  };
  
  // loop through the rows and update the corresponding grid cells
  rows.forEach(row => {
    const lat = row.children[2].textContent; // get the latitude value from the table
    const lng = row.children[3].textContent; // get the longitude value from the table
    const mineral = row.children[1].textContent; // get the mineral type from the table
    const cell = document.querySelector(`.zone[data-lat="${lat}"][data-lng="${lng}"]`); // find the corresponding grid cell
    cell.style.backgroundColor = mineralColors[mineral];; // set the background color of the cell
  });
}

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