/*

Website made by GeoDash Software 2020
Licensed under an AGPL v3 GNU license

If you want to clone the website,
go to the GitHub repo (link in the footer).
But remember the terms in the license
and respect them when modifying/distributing
the copy.

*/



const themeMap = {
    dark: "light",
    light: "dark",
};
  
const theme = localStorage.getItem('theme')
|| (tmp = Object.keys(themeMap)[0],
    localStorage.setItem('theme', tmp),
    tmp);
const bodyClass = document.body.classList;
bodyClass.add(theme);

function toggleTheme() {
const current = localStorage.getItem('theme');
const next = themeMap[current];

bodyClass.replace(current, next);
localStorage.setItem('theme', next);
}

document.getElementById('themeButton').onclick = toggleTheme;