// LIGHT THEME COLOR VARIABLES
var lightBase = '#bdbdbd';
var lightBackground = '#FFFFFF';
var lightShadow = 'rgba(18, 18, 18, .3)';
var lightPrimary = '#6200EE';
var lightPrimaryDark = '#3700B3';
var lightSecondary = '#03DAC6';
var lightSecondaryDark = '#018786';
var lightErrorColor = '#B00020';
// DARK THEME COLOR VARIABLES
var darkBase = '#1d1d1d';
var darkBackground = '#121212';
var darkShadow = 'rgba(255, 255, 255, .1)'
var darkPrimary = '#BB86FC';
var darkPrimaryDark = '#3700B3';
var darkSecondary = '#03DAC6';
var darkErrorColor = '#CF6679';

// GLOBAL VARIABLES
var darkModeSwitch = document.querySelector('#darkModeSwitch');
var darkModetoggleIsOn = false;

// CHANGES LIGHT THEME COLORS TO DARK THEME COLROS
function turnOnDarkModeColors() {
	if (darkModetoggleIsOn === true) {
		document.body.style.transition = 'color 1s, background-color 1s';
		document.documentElement.style.setProperty('--light-theme-base', darkBase);
		document.documentElement.style.setProperty('--light-theme-background', darkBackground);
		document.documentElement.style.setProperty('--light-theme-primary', darkPrimary);
		document.documentElement.style.setProperty('--light-theme-primary-dark', darkPrimaryDark);
		document.documentElement.style.setProperty('--light-theme-secondary', darkSecondary);
		document.documentElement.style.setProperty('--light-theme-secondary-dark', darkSecondary);
		document.body.style.color = lightBackground;
	} else {
		document.body.style.transition = 'color 1s, background-color 1s';
		document.documentElement.style.setProperty('--light-theme-base', lightBase);
		document.documentElement.style.setProperty('--light-theme-background', lightBackground);
		document.documentElement.style.setProperty('--light-theme-primary', lightPrimary);
		document.documentElement.style.setProperty('--light-theme-primary-dark', lightPrimaryDark);
		document.documentElement.style.setProperty('--light-theme-secondary', lightSecondary);
		document.documentElement.style.setProperty('--light-theme-secondary-dark', lightSecondaryDark);
		document.body.style.color = 'black';
	}
}

// DARK MODE TOGGLE FUNCTIONALITY
darkModeSwitch.addEventListener('click', function () {
	if (darkModetoggleIsOn === false) {
		darkModeSwitch.style.justifyContent = 'flex-end';
		darkModetoggleIsOn = true;
	} else {
		darkModeSwitch.style.justifyContent = 'flex-start';
		darkModetoggleIsOn = false;
	}
	turnOnDarkModeColors();
	return darkModetoggleIsOn;
});
