<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Not_By_AI
 */

?>
</div><!-- #page -->
<script>
document.addEventListener('DOMContentLoaded', function() {
document.querySelectorAll('body .wpuf-dashboard-container table.items-table tr td:nth-child(2)').forEach(function(element) {
  element.innerHTML = element.innerHTML.replace(/\|/g, '<span class="d-none">|</span>');
});
document.querySelectorAll('body .wpuf-dashboard-container table.items-table th:first-child').forEach(function(element) {
  element.innerHTML = 'Creator Page';
});
document.querySelectorAll('body .wpuf-dashboard-container table.items-table th:last-child').forEach(function(element) {
  element.innerHTML = 'Edit';
});
document.querySelectorAll('body .wpuf-dashboard-container table.items-table td:last-child').forEach(function(element) {
  if(element.querySelector('svg') === null) {
  	element.innerHTML += '<a class="xs text-decoration-underline opacity-50" href="mailto:help@notbyai.fyi?subject=Edit Request&body=Please include 1) the title of the project you would like to edit, 2) the edits you would like to submit for approval, and 3) your account email.">Send Edit Request</a>';
  }
});
if (!document.body.classList.contains('home')) {
  document.querySelectorAll('.entry-content').forEach(function(element) {
    element.classList.add('px-2', 'px-lg-5', 'mt-3', 'mt-sm-5');
  });
}
var newLi1 = document.createElement("li");
newLi1.className = "wpuf-menu-item instruction";
newLi1.innerHTML = '<a href="https://notbyai.fyi/app/instruction">How To</a>';
var newLi2 = document.createElement("li");
newLi2.className = "wpuf-menu-item download";
newLi2.innerHTML = '<div class="pe-2"><a class="for-business-link rounded-2 mt-4" href="https://notbyai.fyi/Not-By-AI.zip">Download the Badges</a></div>';
var targetUl = document.querySelector(".wpuf-dashboard-navigation ul");
if (targetUl) {
  targetUl.appendChild(newLi1);
  targetUl.appendChild(newLi2);
}
var link = document.querySelector('.wpuf-menu-item.post a[href="https://notbyai.fyi/app/?section=post"]');
if (link) {
  link.textContent = 'Home';
}
document.querySelectorAll('body .wpuf-dashboard-container table.items-table .data-column:nth-child(2) a').forEach(link => {
	if (link.textContent.trim() === 'View') {
    link.textContent = 'Copy Link';
  }
  link.addEventListener('click', function(event) {
    if(link.textContent.trim() === 'Copy Link') {
      event.preventDefault(); // Prevent the link from opening
      var tempInput = document.createElement('input');
      tempInput.style.position = 'absolute'; // Position offscreen (alternative approach)
      tempInput.style.left = '-9999px'; // Ensure it does not cause layout shift
      tempInput.value = link.getAttribute('href'); // Get the href attribute of the clicked link
      document.body.appendChild(tempInput); // Add it to the document
      tempInput.focus(); // Focus on the input
      tempInput.select(); // Select the content
      document.execCommand('copy'); // Copy the content
      document.body.removeChild(tempInput); // Remove the temporary input from the document
      // Change the link text to "Copied!" temporarily
      link.textContent = 'Link Copied!';
      // Set a timeout to revert the text back to "Copy Link" after 2 seconds
      setTimeout(function() {
        link.textContent = 'Copy Link';
      }, 2000);
    }
  });
  if (link.textContent.trim() === 'Preview') {
    link.style.display = 'none';
  }
});
document.querySelectorAll('body .wpuf-dashboard-container table.items-table .data-column:nth-child(2) span').forEach(link => {
	if (link.textContent.trim() === 'Live') {
    link.innerHTML = '<span style="width:8px;height:8px;" class="me-2 rounded-circle bg-success d-inline-block"></span> Live';
  }
  	if (link.textContent.trim() === 'Awaiting Approval') {
    link.innerHTML = '<span style="width:8px;height:8px;" class="me-2 rounded-circle bg-warning d-inline-block"></span> Awaiting Approval';
  }
});
});
</script>
<?php wp_footer(); ?>

</body>
</html>
