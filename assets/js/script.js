function loadNavComponent() {
	document.addEventListener('DOMContentLoaded', function() {
		var menuDiv = document.getElementById('menu');
		menuDiv.innerHTML = `
    	    <nav>
              <ul class="menu-box-mobile">
                <li>
                  <a class="menu-item_link" href="index.html">Home </a>
                </li>

                <li>
                  <a class="menu-item_link" href="feedback.html" target="_blank">Contact </a>
                </li>

                <li>
                  <a class="menu-item_link" href="games.html" target="_blank">All games </a>
                </li>

                <li>
                    <a class="menu-item_link" href="top-game.html" target="_blank">Top game</a>
                </li>

                <li>
                  <a class="menu-item_link" href="about-us.html" target="_blank">About Us </a>
                </li>
              </ul>
            </nav>
    `;
		var navmenuDiv = document.getElementById('nav-menu');
		navmenuDiv.innerHTML = `
            <nav>
              <ul class="menu-list hover-eff" id="myClass">
                <li class="menu-item container--3e7rn--element">
                  <a class="link-menu" href="index.html" target="_blank">Home </a>
                </li>

                <li class="menu-item">
                  <a class="link-menu" href="feedback.html" target="_blank">Contact </a>
                </li>

                <li class="menu-item">
                  <a class="link-menu" href="games.html" target="_blank">All games </a>
                </li>
                <li class="menu-item">
                    <a class="link-menu" href="top-game.html" target="_blank">Top game </a>
                </li>
                <li class="menu-item">
                  <a class="link-menu" href="about-us.html" target="_blank">About Us </a>
                </li>
              </ul>
            </nav>
    `;
		var footerDiv = document.getElementById('footer-menu');
		footerDiv.innerHTML = `
		    <div class="footer-menu">
              <a class="shhy7" href="confidentiality.html" target="_blank">Privacy policy</a>
              <a class="shhy7" href="termsOfUse.html" target="_blank">Terms & Conditions</a>
              <a class="shhy7" href="financial-disclaimer.html" target="_blank">Disclaimer</a>
              <a class="shhy7" href="code-of-conduct.html" target="_blank">Community rules</a>
            </div>
    `;
	});
}
loadNavComponent();

window.addEventListener("load", function () {
	alignBlocks();
});

function alignBlocks() {
	var container = document.querySelector(".testimonial");
	var blocks = document.querySelectorAll(".card-text ");
	var maxHeight = 0;

	blocks.forEach(function (block) {
		maxHeight = Math.max(maxHeight, block.offsetHeight);
	});

	blocks.forEach(function (block) {
		block.style.height = maxHeight + "px";
	});
}
