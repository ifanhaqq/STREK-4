function tableSearch() {
    // Declare variables
    var input, filter, i, txtValue, tbody, tr, td;
    input = document.getElementById('searchTabungan');
    filter = input.value.toUpperCase();
    tbody = document.getElementById('tbody');
    tr = tbody.getElementsByTagName('tr');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByClassName("nama")[0];
        txtValue = td.textContent || td.innerText;
        console.log(txtValue.toUpperCase());
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}