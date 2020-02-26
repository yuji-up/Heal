function myFunction() {
    
    var submit,filter, ul, li, a, i, txtValue;
    submit = document.getElementById("submit");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myList");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
//search onclick
function openSearch() {

    document.getElementById("myOverlay").style.display = "block";
    
}
  
function closeSearch() {

    document.getElementById("myOverlay").style.display = "none";

}