<script>
  
function naranjabit_windowload() {
  setTimeout(function () {
    var loader = document.getElementById("naranjabit_loaderpage");
    //loader.setAttribute("class", "naranjabit_hide");
    naranjabit_affect_template_with_class("naranjabit_show");
    var btn = nb_getByID('primary-toogle-button')
    
  }, 0000);
  nb_
}
window.onload = naranjabit_windowload;
/********************* */

function naranjabit_primary_menu(){
  
}

function naranjabit_affect_template_with_class(className) {
  var head = nb_getByID("masthead");
  var primary = nb_getByID("primary");
  var secondary = nb_getByID("secondary");
  var colophon = nb_getByID("colophon");
  var comments = nb_getByID("comments");

  nb_addClass(head, className);
  nb_addClass(primary, className);
  nb_addClass(secondary, className);
  nb_addClass(colophon, className);
  nb_addClass(comments, className);
}

/************ myJquery ***************/

function nb_getByID(id) {
  return document.getElementById(id);
}

function nb_elementHasClassList(element) {
  return element && element.classList;
}
function elementHasClass(element, className) {
  return (
    nb_elementHasClassList(element) && element.classList.contains(className)
  );
}
function elementHasntClass(element, className) {
  return (
    nb_elementHasClassList(element) && !element.classList.contains(className)
  );
}

function nb_removeClass(element, className) {
  if (elementHasClass(element, className)) {
    element.classList.remove(className);
  }
}

function nb_addClass(element, className) {
  if (elementHasntClass(element, className)) {
    element.classList.add(className);
  }
}

function nb_removeElement(element) {
  if (element) {
    element.parentNode.removeChild(element);
  }
}

</script>