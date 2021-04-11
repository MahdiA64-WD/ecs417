
function myFunction() {
    window.confirm ("Are you sure you want to clear what you've written?");
    document.getElementById("myForm").reset();
  }

function validateForm() {

      if (document.getElementById("Title").value === '' && document.getElementById("blogtext").value === '') {
        document.getElementById("Title").setAttribute("style", "box-shadow: 0 0 10px red;");
        document.getElementById("blogtext").setAttribute("style", "box-shadow: 0 0 10px red;");
        event.preventDefault();
      }else {
        window.alert("you must submit");
      }
}
