var search = document.getElementById('search');
var searchform = document.getElementById('searchform');

search.addEventListener("change", function() {
    searchform.action = "/search/" + search.value;
});

