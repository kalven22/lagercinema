function gsearch() {
    var q=document.getElementById('q').value;
    // q+='site:lagercinema.com';
    window.open('http://www.google.com/search?q='+encodeURIComponent(q));

}


