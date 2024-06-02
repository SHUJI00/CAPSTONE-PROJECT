window.onload = function() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "test1.php", true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var tableContent = new DOMParser().parseFromString(xhr.responseText, 'text/html').getElementById('tablepending');
      document.getElementById("Content").appendChild(tableContent);
    }
  };
  xhr.send();
};
