let btnToggle = document.getElementById('toggler-sidebar');
btnToggle.addEventListener('click', function(e) {
    console.log('click');
    
    let sidebar = document.querySelector('.floating-sidebar');

    if(!sidebar.classList.contains('active')) {
        sidebar.style.width = "175px";
        sidebar.style.padding = "20px";
        sidebar.classList.add('active');
        btnToggle.style.marginLeft = "175px";
        btnToggle.classList.add('active');
    }else{
        sidebar.style.width = "0px";
        sidebar.style.padding = "0px";
        sidebar.classList.remove('active');
        btnToggle.style.marginLeft = "0";
        btnToggle.classList.add('active');
    }
});
